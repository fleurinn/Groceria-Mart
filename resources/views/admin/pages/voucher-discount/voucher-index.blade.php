@extends('admin.layouts.admin-layouts')

@section('page_title', 'Voucher Diskon | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif


  <div class="mb-9">
    <div class="row g-3 mb-4">
      <div class="col-auto">
        <h2 class="mb-0">Voucher Diskon</h2>
      </div>
    </div>
    <div id="vouchers" data-list='{"valueNames":["image","title","description","category_product_id","status"],"page":10,"pagination":true}'>
      <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div class="search-box">
              <form class="position-relative" method="GET" action="{{ route('discount-vouchers.index') }}">
                <input 
                  class="form-control search-input search" 
                  type="search" 
                  name="search" 
                  placeholder="Search Voucher Diskon" 
                  aria-label="Search" 
                  value="{{ request('search') }}" 
                />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <button type="button"
              style="font-family: 'Arial', sans-serif; font-size: 14px; padding: 5px 10px; color: #333; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 6px;"
              onclick="window.location='{{ route('discount-vouchers.index') }}'">
              <i class="fas fa-arrows-rotate" style="margin-right: 5px;"></i>
            </button>
          </div>
          
          <div class="flex flex-wrap items-center gap-1">
            <button class="btn btn-success rounded-1">
              <span class="fas fa-arrow-right-from-bracket me-2"></span>Publish
            </button>
            <button class="btn btn-warning rounded-1">
              <span class="fas fa-arrow-right-to-bracket me-2"></span>Draft
            </button>
            <button class="btn btn-danger rounded-1">
              <span class="fas fa-trash me-2"></span>Delete
            </button>
            <button class="btn btn-primary rounded-1" data-bs-toggle="modal" data-bs-target="#createvoucherModal">
              <span class="fas fa-plus me-2"></span>Add
            </button>
            <button class="btn btn-link text-body px-2" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="fas fa-ellipsis-v"></span> 
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
        <div class="table-responsive scrollbar mx-n1 px-1">
          <table class="table fs-9 mb-0">
            <thead>
              <tr>
                <th class="white-space-nowrap fs-9 align-middle ps-0 text-start" style="max-width:20px; width:18px;">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" id="selectAll" type="checkbox" data-bulk-select='{"body":"voucher-table-body"}' />
                  </div>
                </th>
                <th class="align-middle ps-2 text-center">GAMBAR</th>
                <th class="align-middle ps-2 text-center">JUDUL</th>
                <th class="align-middle ps-2 text-center">DESKRIPSI</th>
                <th class="align-middle ps-2 text-center">KATEGORI</th>
                <th class="align-middle ps-2 text-center">STATUS</th>
                <th class="align-middle ps-2 text-center">AKSI</th>
              </tr>
            </thead>
            <tbody class="list" id="voucher-table-body">
            @forelse ($vouchers as $voucher)
              <tr class="position-static">
                <td class="fs-9 align-middle">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" value="{{ $voucher->id }}"></div>
                </td>
                <td class="align-middle white-space-nowrap py-0">
                  <a class="d-block border border-translucent rounded-2">
                    <img src="{{ asset('storage/vouchers/' . $voucher->image) }}" alt="" width="53" /></a>
                </td>
                <td class="align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0">
                    {{ Str::limit($voucher->title, 80) }}
                  </a>
                </td>
                <td class="category align-middle text-center white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                    {{ Str::limit($voucher->description, 80) }}
                </td>
                <td class="category align-middle text-center white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                {{ $voucher->categoryproduct->name ?? '-' }}
                </td>
                <td class="align-middle text-center">
                  <span class="btn btn-outline-{{ $voucher->status == 'Publish' ? 'success' : 'warning' }} rounded-1">
                    {{ ucfirst($voucher->status) }}
                  </span>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                      <span class="fas fa-ellipsis-h fs-10"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                      <a class="dropdown-item" >View</a>
                      <a class="dropdown-item">
                        Edit
                      </a>
                      <div class="dropdown-divider"></div>
                      <form action="{{ route('discount-vouchers.destroy', $voucher->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Voucher Diskon ini?');">Remove</button>
                      </form>                   
                    </div>
                  </div>
                </td>
              </tr>
              @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data Voucher Diskon ditemukan.</td>
                </tr>
            @endforelse
            </tbody>
          </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
          <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body">
                  Menampilkan {{ $vouchers->firstItem() }} - {{ $vouchers->lastItem() }} dari {{ $vouchers->total() }} data
              </p>
          </div>

          <div class="col-auto d-flex">
              <!-- Tombol Prev -->
              <a class="page-link {{ $vouchers->onFirstPage() ? 'disabled' : '' }}" 
                href="{{ $vouchers->previousPageUrl() }}" 
                aria-label="Previous">
                  <span class="fas fa-chevron-left"></span>
              </a>

              <!-- Pagination Number -->
              <ul class="mb-0 pagination">
                  @for ($i = 1; $i <= $vouchers->lastPage(); $i++)
                      <li class="page-item {{ $vouchers->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $vouchers->url($i) }}">{{ $i }}</a>
                      </li>
                  @endfor
              </ul>

              <!-- Tombol Next -->
              <a class="page-link {{ $vouchers->hasMorePages() ? '' : 'disabled' }}" 
                href="{{ $vouchers->nextPageUrl() }}" 
                aria-label="Next">
                  <span class="fas fa-chevron-right"></span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        });
    }, 3000); // 3 detik
</script>

<script>
  // Menghandle checkbox
  document.getElementById('selectAll').onclick = function() {
    const checkboxes = document.querySelectorAll('.form-check-input');
    checkboxes.forEach((checkbox) => {
      checkbox.checked = this.checked;
    });
  };
  function getSelectedServices() {
    return Array.from(document.querySelectorAll('.form-check-input:checked')).map(cb => cb.value);
  }
  function performAction(url, ids) {
    // Kirim request AJAX ke server
    fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ ids: ids })
    }).then(response => {
      if (response.ok) {
        location.reload(); // Refresh klien setelah berhasil
      } else {
        alert('Terjadi kesalahan. Silakan coba lagi.');
      }
    });
  }
</script>

@endsection