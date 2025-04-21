<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $payment->payment_id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .invoice-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #007BFF;
            text-align: center;
        }
        .invoice-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .invoice-header .company-info,
        .invoice-header .invoice-id {
            width: 48%;
        }
        .invoice-header p {
            margin: 0;
        }
        .invoice-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-details th, .invoice-details td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .invoice-details th {
            background-color: #007BFF;
            color: #fff;
        }
        .invoice-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
        .btn-download {
            display: inline-block;
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-download:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h1>Invoice</h1>
        <div class="invoice-header">
            <div class="company-info">
                <p><strong>Company:</strong> Your Company Name</p>
                <p><strong>Email:</strong> yourcompany@example.com</p>
            </div>
            <div class="invoice-id">
                <p><strong>Payment ID:</strong> {{ $payment->payment_id }}</p>
                <p><strong>Date:</strong> {{ $payment->created_at->format('Y-m-d') }}</p>
            </div>
        </div>
        <div class="invoice-details">
            <h2>Payment Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment->transaction->items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format($item->price, 2) }}</td>
                        <td>{{ number_format($item->price * $item->quantity, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h3>Total Amount: {{ number_format($payment->total, 2) }}</h3>
            <h3>Status: {{ ucfirst($payment->payment_status) }}</h3>
        </div>
        <div class="text-center">
            <a href="{{ route('payments.downloadInvoice', $payment->id) }}" class="btn-download">Download PDF</a>
        </div>
        <div class="invoice-footer">
            <p>Thank you for your business!</p>
        </div>
    </div>
</body>
</html>