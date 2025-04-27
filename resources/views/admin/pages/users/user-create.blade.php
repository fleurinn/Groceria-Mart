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

@section('page_title', 'Profile Create | Groceria')
@section('content')

      <div class="content">
      <form method="POST" action="{{ route('profile-pengguna.store') }}" enctype="multipart/form-data" class="mb-9">
        @csrf
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Tambah Pengguna</h2>
              <h5 class="text-body-tertiary fw-semibold">Form Pendaftaran Pengguna</h5>
            </div>
            <div class="col-auto">
            <a href="{{ route('profile-pengguna.index') }}" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0">Cancel</a>
            <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button></div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">Nama Depan</h4>
              <input class="form-control mb-5" name="first_name" type="text" placeholder="Tulis name depan di sini..." />
            </div>
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">Nama Belakang</h4>
              <input class="form-control mb-5" name="last_name" type="text" placeholder="Tulis name belakang di sini..." />
            </div>
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">Nama Lengkap</h4>
              <input class="form-control mb-5" name="name" type="text" placeholder="Tulis name lengkap di sini..." />
            </div>
          </div>

          <div class="row g-5">
            <div class="col-12 col-xl-3">
              <h4 class="mb-3">E-mail</h4>
              <input class="form-control mb-5" name="email" type="text" placeholder="Tulis e-mail di sini..." />
            </div>
            <div class="col-12 col-xl-3">
              <h4 class="mb-3">Kata Sandi</h4>
              <input class="form-control mb-5" name="password" type="password" placeholder="Minimal 6 karakter " />
            </div>
            <div class="col-12 col-xl-3">
              <h4 class="mb-3">Posisi</h4>
              <select name="role_id" class="form-select mb-5" required>
                <option disabled selected value="">Pilih Posisi</option>
                @foreach($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-12 col-xl-3">
                <h4 class="mb-3">No. Handphone</h4>
                <input class="form-control mb-5" name="shipping_addresses[0][no_telp]" type="text" placeholder="Tulis nomor handphone aktif di sini..." />
            </div>
          </div>

          <div class="row g-5">
            <div class="col-12 col-xl-4">
            <h4 class="mb-3">Foto Profile</h4>
            <input type="file" name="image" class="form-control mb-5" />
            </div>
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Info Tambahan</h4>
              <div class="row g-0 border-top border-bottom">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active"
                      id="tab-kota" data-bs-toggle="tab" data-bs-target="#content-kota" role="tab" aria-controls="content-kota" aria-selected="true">
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="map-pin"></span>
                      <span class="d-none d-sm-inline">Kota</span>
                    </a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                      id="tab-kecamatan" data-bs-toggle="tab" data-bs-target="#content-kecamatan" role="tab" aria-controls="content-kecamatan" aria-selected="false">
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="map"></span>
                      <span class="d-none d-sm-inline">Kecamatan</span>
                    </a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                      id="tab-desa" data-bs-toggle="tab" data-bs-target="#content-desa" role="tab" aria-controls="content-desa" aria-selected="false">
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="map-pin"></span>
                      <span class="d-none d-sm-inline">Desa</span>
                    </a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                      id="tab-detail" data-bs-toggle="tab" data-bs-target="#content-detail" role="tab" aria-controls="content-detail" aria-selected="false">
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="edit"></span>
                      <span class="d-none d-sm-inline">Detail Alamat</span>
                    </a>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active h-100" id="content-kota" role="tabpanel" aria-labelledby="tab-kota">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Isi Nama Kota</h5>
                        <select name="shipping_addresses[0][city_id]" id="citySelect" class="form-select mb-5" required>
                            <option disabled selected value="">Pilih Kota</option>
                            @foreach($city as $cities) <!-- Pastikan menggunakan $cities -->
                                <option value="{{ $cities->id }}">{{ $cities->name ?? 'Tidak ada kota' }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="content-kecamatan" role="tabpanel" aria-labelledby="tab-kecamatan">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Isi Nama Kecamatan</h5>
                        <select name="shipping_addresses[0][district_id]" id="districtSelect" class="form-select mb-5" required>
                          <option disabled selected value="">Pilih Kecamatan</option>
                        </select>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="content-desa" role="tabpanel" aria-labelledby="tab-desa">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Isi Nama Desa</h5>
                        <select name="shipping_addresses[0][village_id]" id="villageSelect" class="form-select mb-5" required>
                          <option disabled selected value="">Pilih Desa</option>
                        </select>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="content-detail" role="tabpanel" aria-labelledby="tab-detail">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Detail Alamat Lengkap</h5>
                        <textarea class="form-control" placeholder="Contoh: 19920 (Kode Pos), Jl. Cinangneng RT 05/RW 06  (Detail Alamat)" name="shipping_addresses[0][address]" rows="4" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#citySelect').on('change', function () {
    var cityId = $(this).val();
    $('#districtSelect').html('<option disabled selected>Loading...</option>');

    $.ajax({
      url: '/dashboard/profile-pengguna/create/get-districts/' + cityId,
      type: 'GET',
      success: function (data) {
        $('#districtSelect').empty().append('<option disabled selected value="">Pilih Kecamatan</option>');
        data.forEach(function (district) {
          $('#districtSelect').append('<option value="' + district.id + '">' + district.name + '</option>');
        });
      }
    });
  });
</script>
<script>
  $(document).ready(function () {
    $('#districtSelect').on('change', function () {
      const districtId = $(this).val();
      $('#villageSelect').html('<option disabled selected value="">Loading...</option>');

      $.ajax({
        url: '/dashboard/profile-pengguna/create/get-villages/' + districtId,
        type: 'GET',
        success: function (data) {
          $('#villageSelect').empty().append('<option disabled selected value="">Pilih Desa</option>');
          data.forEach(function (village) {
            $('#villageSelect').append('<option value="' + village.id + '">' + village.name + '</option>');
          });
        },
        error: function () {
          $('#villageSelect').html('<option disabled selected>Error loading desa</option>');
        }
      });
    });
  });
</script>

@endsection