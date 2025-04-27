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

@section('page_title', 'Profile Pengguna | Groceria')
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

@php
  $shippingAddress = $user->shippingAddresses ? $user->shippingAddresses->first() : null;
@endphp

@endif
<div class="content">
  <div class="mb-9">
    <div class="row align-items-center justify-content-between g-3 mb-4">
      <div class="col-auto">
        <h2 class="mb-0">Detail Pengguna</h2>
      </div>
      <div class="col-auto">
        <div class="row g-3">
          <div class="col-auto">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn btn-phoenix-danger"><span class="fa-solid fa-trash-can me-2"></span>Logout</button>
            </form>
          </div>
          <div class="col-auto">
            <a href="{{ route('profile-pengguna.edit', $user->id) }}" class="btn btn-phoenix-secondary">
              <span class="fas fa-key me-2"></span>Edit Profile
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-12 col-xxl-4">
        <div class="row g-3 h-100">
          <div class="col-12 col-md-7 col-xxl-12">
            <div class="card h-100 h-xxl-auto">
              <div class="card-body d-flex flex-column justify-content-between pb-3">
                <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                  <div class="col-12 col-sm-auto mb-sm-2">
                    <div class="avatar avatar-5xl">
                      <img class="rounded-circle"
                        src="{{ $user->image ? asset('storage/profile_images/' . $user->image) : asset('assets/img/team/default.png') }}"
                        alt="{{ $user->name }}" />
                    </div>
                  </div>
                  <div class="col-12 col-sm-auto flex-1">
                    <h3>{{ $user->name }}</h3>
                  </div>
                </div>
                <div class="d-flex flex-row justify-content-between gap-5 border-top border-dashed pt-4 align-items-start">
                    <div>
                        <h6>Email</h6>
                        <p class="fs-7 text-body-secondary mb-0">{{ $user->email }}</p>
                    </div>
                    <div>
                        <h6>No. Handphone</h6>
                        <p class="fs-7 text-body-secondary mb-0">{{ $user->shippingAddress->no_telp ?? '-'}}</p>
                    </div>
                    <div>
                        <h6>Posisi</h6>
                        <p class="fs-7 text-body-secondary mb-0">{{ $user->role->name ?? '-' }}</p>
                    </div>
                    </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5 col-xxl-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h3 class="me-1">Default Address</h3>
                </div>
                <h5 class="text-body-secondary">Nama Depan</h5>
                <p class="text-body-secondary">{{ $user->first_name }}</p>

                <div class="mb-3">
                  <h5 class="text-body-secondary">Nama Belakang</h5>
                  <p class="text-body-secondary">{{ $user->last_name     }}</p>
                </div>

                <h5 class="text-body-secondary">Alamat Lengkap</h5>
                <p class="text-body-secondary">
                    {{ $user->shippingAddress->city->name ?? 'Data kosong.' }},
                    {{ $user->shippingAddress->district->name ?? '' }} <br />
                    {{ $user->shippingAddress->village->name ?? '' }},
                    {{ $user->shippingAddress->address ?? '' }}
                  </p>
              </div>
            </div>
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
                performAction('/dashboard/products/bulk-delete', ids);
                localStorage.setItem('bulkActionSuccess', 'delete');
                location.reload();
            }
        });
    }
</script>

<!-- checkbox -->
<script>
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
