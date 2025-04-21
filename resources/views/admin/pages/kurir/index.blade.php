@extends('admin.layouts.admin-layouts')

@section('page_title', 'Payments | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Riwayat Pembayaran</h2>
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
                        <th class="align-middle ps-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr>
                        <td class="align-middle ps-4">{{ $payment->payment_id }}</td>
                        <td class="align-middle ps-4">{{ $payment->user->name }}</td>
                        <td class="align-middle ps-4">{{ number_format($payment->total, 2) }}</td>
                        <td class="align-middle ps-4">{{ ucfirst($payment->status_pengiriman) }}</td>
                        <td class="align-middle ps-4">{{ $payment->created_at->format('Y-m-d H:i') }}</td>
                        <td class="align-middle ps-4">
                            <!-- Tombol trigger modal -->
                            @if($payment->status_pengiriman === 'dalam perjalanan')
                            <button class="btn btn-success rounded-1" data-bs-toggle="modal" data-bs-target="#updateStatusModal{{ $payment->id }}">
                                Update Status
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<!-- Modal Update Status -->
<div class="modal fade" id="updateStatusModal{{ $payment->id }}" tabindex="-1" aria-labelledby="updateStatusLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('payments.updateStatus', $payment->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateStatusLabel">Update Status Pengiriman</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="status_pengiriman" class="form-label">Status Pengiriman</label>
            <select name="status_pengiriman" class="form-select" required>
              <option value="selesai">Selesai</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="status_image" class="form-label">Upload Bukti Pengiriman</label>
            <input type="file" name="status_image" class="form-control" accept="status_image/*">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection