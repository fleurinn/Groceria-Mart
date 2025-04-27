@php
    if (auth()->user()->role_id == 1) {
        $layout = 'admin.layouts.admin-layouts';
    } elseif (auth()->user()->role_id == 2) {
        $layout = 'admin.layouts.seller-layouts';
    } elseif (auth()->user()->role_id == 4) {
        $layout = 'admin.layouts.courier-layouts';
    } else {
        $layout = 'admin.layouts.default-layouts'; // fallback
    }
@endphp

@extends($layout)
@section('page_title', 'Payments | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Riwayat Pesanan</h2>
            </div>
        </div>
        <div class="table-responsive scrollbar mx-n1 px-1">
            <table class="table fs-9 mb-0">
                <thead>
                    <tr>
                        <th class="align-middle ps-4">Payment ID</th>
                        <th class="align-middle ps-4">User </th>
                        <th class="align-middle ps-4">Total</th>
                        <th class="align-middle ps-4">Status</th>
                        <th class="align-middle ps-4">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr>
                        <td class="align-middle ps-4">{{ $payment->payment_id }}</td>
                        <td class="align-middle ps-4">{{ $payment->user->name }}</td>
                        <td class="price align-middle text-center white-space-nowrap fw-bold text-body-tertiary ps-4">
                            Rp {{ number_format($payment->total, 2) }}
                        </td>
                        <td class="align-middle ps-4">{{ ucfirst($payment->payment_status) }}</td>
                        <td class="align-middle ps-4">{{ $payment->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection