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

@section('page_title', 'Pesan Layanan | Groceria')
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
        <h2 class="mb-0">Pesan Layanan</h2>
      </div>
    </div>
    <div id="services" data-list='{"valueNames":["fullname", "email", "phone", "message"],"page":10,"pagination":true}'>
      <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div class="search-box">
              <form class="position-relative" method="GET" action="{{ route('services.index') }}">
                <input 
                  class="form-control search-input search" 
                  type="search" 
                  name="search" 
                  placeholder="Search Pesan Layanan" 
                  aria-label="Search" 
                  value="{{ request('search') }}" 
                />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <button type="button"
              style="font-family: 'Arial', sans-serif; font-size: 14px; padding: 5px 10px; color: #333; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 6px;"
              onclick="window.location='{{ route('services.index') }}'">
              <i class="fas fa-arrows-rotate" style="margin-right: 5px;"></i>
            </button>
          </div>
          
          <div class="flex flex-wrap items-center gap-1">
          <button id="deleteButton" class="btn btn-danger rounded-1">
                    <span class="fas fa-trash me-2"></span>Delete
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
                    <input class="form-check-input" id="selectAll" type="checkbox" data-bulk-select='{"body":"service-table-body"}' />
                  </div>
                </th>
                <th class="align-middle ps-2 text-center">NAMA LENGKAP</th>
                <th class="align-middle ps-2 text-center">EMAIL</th>
                <th class="align-middle ps-2 text-center">NO. HANDPHONE</th>
                <th class="align-middle ps-2 text-center">PESAN</th>
                <th class="align-middle ps-2 text-center">AKSI</th>
              </tr>
            </thead>
            <tbody class="list" id="service-table-body">
            @forelse ($services as $service)
              <tr class="position-static">
                <td class="fs-9 align-middle">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" value="{{ $service->id }}"></div>
                </td>
                <td class="align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0">
                    {{ Str::limit($service->fullname, 80) }}
                  </a>
                </td>
                <td class="category align-middle text-center white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                {{ $service->email}}
                </td>
                <td class="category align-middle text-center white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                {{ $service->phone}}
                </td>
                <td class="category align-middle text-center white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                {{ Str::limit($service->message, 100) }}
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                      <span class="fas fa-ellipsis-h fs-10"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                      <a href="{{ route('services.show', $service->id) }}"class="dropdown-item" >View</a>
                      <div class="dropdown-divider"></div>
                      <form id="delete-form-{{ $service->id }}" action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="dropdown-item text-danger" onclick="deleteRecord({{ $service->id }})">Remove</button>
                      </form>                     
                    </div>
                  </div>
                </td>
              </tr>
              @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data Pesan Layanan ditemukan.</td>
                </tr>
            @endforelse
            </tbody>
          </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
          <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body">
                  Menampilkan {{ $services->firstItem() }} - {{ $services->lastItem() }} dari {{ $services->total() }} data
              </p>
          </div>

          <div class="col-auto d-flex">
              <!-- Tombol Prev -->
              <a class="page-link {{ $services->onFirstPage() ? 'disabled' : '' }}" 
                href="{{ $services->previousPageUrl() }}" 
                aria-label="Previous">
                  <span class="fas fa-chevron-left"></span>
              </a>

              <!-- Pagination Number -->
              <ul class="mb-0 pagination">
                  @for ($i = 1; $i <= $services->lastPage(); $i++)
                      <li class="page-item {{ $services->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $services->url($i) }}">{{ $i }}</a>
                      </li>
                  @endfor
              </ul>

              <!-- Tombol Next -->
              <a class="page-link {{ $services->hasMorePages() ? '' : 'disabled' }}" 
                href="{{ $services->nextPageUrl() }}" 
                aria-label="Next">
                  <span class="fas fa-chevron-right"></span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- alert delete -->
<script>
    function deleteRecord(productId) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Anda tidak akan dapat mengembalikannya!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form DELETE
                document.getElementById('delete-form-' + productId).submit();
            }
        });
    }
</script>
<script>
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        });
    }, 3000); // 3 detik
</script>


<!-- alert checkbox delete -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("deleteButton").addEventListener("click", function () {
            deleteSelectedRecords();
        });

        // Tampilkan alert sukses setelah reload
        const successType = localStorage.getItem('bulkActionSuccess');
        if (successType) {
            let messages = {
                delete: { title: 'Dihapus!', text: 'Data berhasil dihapus.', icon: 'success' },
                publish: { title: 'Dipublish!', text: 'Data berhasil dipublish.', icon: 'success' },
                draft: { title: 'Didraft!', text: 'Data berhasil didraft.', icon: 'success' }
            };
            Swal.fire({
                title: messages[successType].title,
                text: messages[successType].text,
                icon: messages[successType].icon,
                confirmButtonText: 'OK'
            });
            localStorage.removeItem('bulkActionSuccess');
        }
    });

    function deleteSelectedRecords() {
        let ids = getSelectedServices();
        if (ids.length === 0) {
            Swal.fire({
                title: 'Pilih data terlebih dahulu!',
                text: 'Silakan pilih klien untuk dihapus.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data yang dipilih akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                performAction('/dashboard/slider/bulk-delete', ids);
                localStorage.setItem('bulkActionSuccess', 'delete');
                location.reload();
            }
        });
    }
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