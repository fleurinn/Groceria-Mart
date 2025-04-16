<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Cart; // Import Cart Model
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class PaymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function index()
    {
        $payments = Payment::with(['user', 'transaction'])->latest()->get();
        $totalTransactions = Payment::count();
        $totalBalance = Payment::sum('amount');
        $yearlyBalance = Payment::whereYear('payment_date', date('Y'))->sum('amount');
        $monthlyBalance = Payment::whereYear('payment_date', date('Y'))->whereMonth('payment_date', date('m'))->sum('amount');
        $weeklyBalance = Payment::whereBetween('payment_date', [now()->startOfWeek(), now()->endOfWeek()])->sum('amount');
        return view('admin.payments.index', compact(
            'payments',
            'totalTransactions',
            'totalBalance',
            'yearlyBalance',
            'monthlyBalance',
            'weeklyBalance'
        ));
    }

    public function create()
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.create', compact('users', 'transactions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,confirmed,unpaid',
            'payment_date' => 'nullable|date',
            'amount' => 'required|numeric|min:0',
        ]);

        $paymentId = 'PAY-' . strtoupper(uniqid());
        Payment::create([
            'payment_id' => $paymentId,
            'user_id' => $request->user_id,
            'transaction_id' => $request->transaction_id,
            'payment_status' => $request->payment_status,
            'payment_date' => $request->payment_date,
            'amount' => $request->amount,
        ]);
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function edit(Payment $payment)
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.edit', compact('payment', 'users', 'transactions'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,confirmed,unpaid',
            'payment_date' => 'nullable|date',
            'amount' => 'required|numeric|min:0',
        ]);
        $payment->update($request->all());
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil dihapus.');
    }

    public function show(Payment $payment)
    {
        return view('admin.payments.show', compact('payment'));
    }

    public function downloadInvoice(Payment $payment)
    {
        $pdf = Pdf::loadView('admin.payments.invoice', compact('payment'));
        return $pdf->download('invoice-' . $payment->payment_id . '.pdf');
    }

    public function createMidtransTransaction(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'gross_amount' => 'required|numeric|min:1',
            'items' => 'required|array',
            'items.*.id' => 'required|string',
            'items.*.price' => 'required|numeric|min:1',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.name' => 'required|string',
            'customer_details' => 'required|array',
            'customer_details.first_name' => 'required|string',
            'customer_details.last_name' => 'nullable|string',
            'customer_details.email' => 'required|email',
            'customer_details.phone' => 'nullable|string',
            'cart_ids' => 'required|array', // Tambahkan ini
            'shipping_cost' => 'required|numeric',
        ]);

        $transaction = Transaction::findOrFail($request->transaction_id);
        $user = User::findOrFail($request->user_id);

         $carts = Cart::where('user_id', $request->user_id)
            ->whereIn('id', $request->cart_ids)
            ->with('product')
            ->get();

        // Calculate total from cart, discount included.
        $totalCartPrice = 0;
        foreach ($carts as $cart) {
            $totalCartPrice += ($cart->product->price * ((100 - $cart->product->discount) / 100)) * $cart->quantity;
        }

        $grossAmount = $totalCartPrice + $request->shipping_cost;

        $items = [];
        foreach ($carts as $cart) {
            $items[] = [
                'id' => $cart->product->id,
                'price' =>  ($cart->product->price * ((100 - $cart->product->discount) / 100)),
                'quantity' => $cart->quantity,
                'name' => $cart->product->name,
            ];
        }


        $params = [
            'transaction_details' => [
                'order_id' => $transaction->order_id,
                'gross_amount' => $grossAmount, // Use the calculated amount
            ],
            'item_details' => $items, // Use items from cart
            'customer_details' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $user->phone_number ?? '',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            Payment::where('transaction_id', $transaction->order_id)->update(['snap_token' => $snapToken]);

            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function midtransCallback(Request $request)
    {
        $notif = new Notification();

        $transactionStatus = $notif->transaction_status;
        $fraudStatus = $notif->fraud_status;
        $orderId = $notif->order_id;

        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash('sha512', $orderId . $notif->status_code . $transactionStatus . $serverKey);

        if ($hashed == $notif->signature_key) {
            if ($transactionStatus == 'capture') {
                if ($fraudStatus == 'challenge') {
                    $this->updateTransactionStatus($orderId, 'challenge');
                } else if ($fraudStatus == 'accept') {
                    $this->updateTransactionStatus($orderId, 'success');
                }
            } else if ($transactionStatus == 'settlement') {
                $this->updateTransactionStatus($orderId, 'success');
            } else if ($transactionStatus == 'pending') {
                $this->updateTransactionStatus($orderId, 'pending');
            } else if ($transactionStatus == 'deny') {
                $this->updateTransactionStatus($orderId, 'failed');
            } else if ($transactionStatus == 'expire') {
                $this->updateTransactionStatus($orderId, 'failed');
            } else if ($transactionStatus == 'cancel') {
                $this->updateTransactionStatus($orderId, 'failed');
            }

            return response()->json(['message' => 'Callback processed'], 200);
        } else {
            return response()->json(['error' => 'Invalid signature'], 400);
        }
    }

    protected function updateTransactionStatus($orderId, $status)
    {
        Payment::where('transaction_id', $orderId)->update(['payment_status' => $status]);

        if ($status === 'success') {
             $payment = Payment::where('transaction_id', $orderId)->first();
             Cart::where('user_id', $payment->user_id)->delete();
        }
    }
}