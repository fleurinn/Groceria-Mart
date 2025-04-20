@extends('admin.layouts.admin-layouts')

@section('page_title', 'List Profile Pengguna | Groceria')
@section('content')


@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
</script>
@endif
<!-- MAIN CONTENT -->
<div class="content">
        <div class="mb-9">
          <div class="row g-2 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Pengguna</h2>
            </div>
          </div>
          <div id="products" data-list='{"valueNames":["product","price","category  ","tags","vendor","time"],"page":10,"pagination":true}'>
          <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                  <div style="display: flex; align-items: center; gap: 10px;">
                  <div class="search-box">
                      <form class="position-relative" method="GET" action="{{ route('profile-pengguna.index') }}">
                          <input 
                              class="form-control search-input search" 
                              type="search" 
                              name="search" 
                              placeholder="Search pengguna" 
                              aria-label="Search" 
                              value="{{ request('search') }}" 
                          />
                          <span class="fas fa-search search-box-icon"></span>
                      </form>
                  </div>
                  <button type="button"
                          style="font-family: 'Arial', sans-serif; font-size: 14px; padding: 5px 10px; color: #333; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 6px;"
                          onclick="window.location='{{ route('profile-pengguna.index') }}'">
                      <i class="fas fa-arrows-rotate" style="margin-right: 5px;"></i>
                  </button>
                  </div>
                  
                  <div class="flex flex-wrap items-center gap-1">
                      <button class="btn btn-primary rounded-1" onclick="window.location='{{ route('profile-pengguna.create') }}'">
                          <span class="fas fa-plus me-2"></span>Tambah
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
              <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                <table class="table table-sm fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">NAMA PENGGUNA</th>
                      <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">E-MAIL</th>
                      <th class="sort align-middle text-center" scope="col" data-sort="total-spent" style="width:15%">NO. HANDPHONE</th>
                      <th class="sort align-middle text-center" scope="col" data-sort="total-orders" style="width:15%">POSISI</th>
                      <th class="sort align-middle text-center" scope="col" data-sort="last-seen" style="width:20%;">ALAMAT</th>
                      <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:5%;">AKSI</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="customers-table-body">
                  @forelse ( $users as $user)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-body-emphasis" href="customer-details.html">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="{{ asset('storage/profile_images/' . $user->image) }}" alt="" /></div>
                          <p class="mb-0 ms-3 text-body-emphasis fw-bold">{{ $user->first_name }} {{ $user->last_name }}</p>
                          </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">{{ $user->email }}</a></td>
                      <td class=" align-middle white-space-nowrap fw-bold text-center ps-3 text-body-emphasis">
                          {{ $user->shippingAddress->no_telp ?? 'Data kosong.' }}
                      </td>
                      <td class="align-middle pr-3 white-space-nowrap fw-semibold text-center text-body-highlight">{{ $user->role->name }}</td>
                      <td class="last-seen align-middle white-space-nowrap text-body-tertiary text-center">
                      {{ $user->shippingAddress->city->name ?? 'Data kosong.' }},
                      {{ $user->shippingAddress->district->name ?? '' }},
                      {{ $user->shippingAddress->village->name ?? '' }},
                      {{ $user->shippingAddress->address ?? '' }}
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2">
                            <a class="dropdown-item" href="{{ route('profile-pengguna.edit', $user->id) }}">Edit</a>
                            <div class="dropdown-divider"></div>
                            <!-- Tombol di dalam dropdown -->
                            <form id="delete-form-{{ $user->id }}" action="{{ route('profile-pengguna.destroy', $user->id) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="dropdown-item text-danger" onclick="deleteRecord({{ $user->id }})">Remove</button>
                            </form>                  
                          </div>
                        </div>
                      </td>
                    </tr>
                    @empty
                      <tr>
                          <td colspan="7" class="text-center">Tidak ada data pengguna ditemukan.</td>
                      </tr>
                  @endforelse
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
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

@endsection