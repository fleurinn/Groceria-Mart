<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\DiscountVoucher;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource (optional for admin).
     */
    public function index()
    {
        $checkouts = Checkout::with(['user', 'shippingAddress', 'discountVoucher'])->get();
        return view('checkouts.index', compact('checkouts'));
    }

    /**
     * Show the form for creating a new checkout.
     */
    public function create()
    {
        $discounts = DiscountVoucher::all();
        $addresses = Auth::user()->shippingAddresses; // asumsi relasi user->shippingAddresses
        return view('checkouts.create', compact('discounts', 'addresses'));
    }

    /**
     * Store a newly created checkout in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'discount_voucher_id' => 'nullable|exists:discount_vouchers,id',
            'shipping_address_id' => 'required|exists:shipping_addresses,id',
            'payment_method' => 'required|string',
            'total_price' => 'required|numeric',
        ]);

        $checkout = Checkout::create([
            'order_id' => 'ORD-' . strtoupper(Str::random(8)),
            'tracking_number' => 'TRK-' . strtoupper(Str::random(10)),
            'user_id' => Auth::id(),
            'discount_voucher_id' => $request->discount_voucher_id,
            'shipping_address_id' => $request->shipping_address_id,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
            'status_pembayaran' => 'menunggu',
            'status_pengiriman' => 'pending',
        ]);

        // Tambahkan proses pembayaran atau redirect ke Midtrans/Snap jika perlu
        return redirect()->route('checkouts.show', $checkout->id)
                         ->with('success', 'Checkout berhasil dibuat.');
    }

    /**
     * Display the specified checkout.
     */
    public function show($id)
    {
        $checkout = Checkout::with(['user', 'shippingAddress', 'discountVoucher'])->findOrFail($id);
        return view('checkouts.show', compact('checkout'));
    }

<<<<<<< HEAD
    

    // Bulk delete
    public function bulkDelete(Request $request)
    {
    $ids = $request->input('ids');

    if (empty($ids)) {
        return response()->json([
            'success' => false,
            'message' => 'Tidak ada data checkout yang dipilih.'
        ], 400);
    }

    try {
        Checkout::whereIn('id', $ids)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data checkout berhasil dihapus.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Terjadi kesalahan saat menghapus data checkout.'
        ], 500);
=======
    /**
     * Show the form for editing the specified checkout.
     */
    public function edit($id)
    {
        $checkout = Checkout::findOrFail($id);
        $discounts = DiscountVoucher::all();
        return view('checkouts.edit', compact('checkout', 'discounts'));
    }

    /**
     * Update the specified checkout in storage.
     */
    public function update(Request $request, $id)
    {
        $checkout = Checkout::findOrFail($id);

        $request->validate([
            'status_pembayaran' => 'required|in:menunggu,konfirmasi,belum dibayar,paid',
            'status_pengiriman' => 'required|in:pending,processing,shipped,delivered,cancelled',
        ]);

        $checkout->update($request->only([
            'status_pembayaran',
            'status_pengiriman',
            'payment_date',
            'snap_token',
        ]));

        return redirect()->route('checkouts.index')
                         ->with('success', 'Checkout berhasil diperbarui.');
    }

    /**
     * Remove the specified checkout from storage.
     */
    public function destroy($id)
    {
        $checkout = Checkout::findOrFail($id);
        $checkout->delete();

        return redirect()->route('checkouts.index')
                         ->with('success', 'Checkout berhasil dihapus.');
>>>>>>> 8f62adab55f540d2b00e536fa2cdcd97eb2db0db
    }
    }

}
