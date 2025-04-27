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

@section('page_title', 'Profile Edit | Groceria')
@section('content')

      <div class="content">
      <form method="POST" action="{{ route('profile-pengguna.update', $user->id) }}" enctype="multipart/form-data" class="mb-9">
      @csrf
      @method('PUT')
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Edit Profile</h2>
              <h5 class="text-body-tertiary fw-semibold">Form Edit Profile</h5>
            </div>
            <div class="col-auto">
            <a href="{{ route('profile-pengguna.show', auth()->user()->id) }}" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0">Batal</a>
            <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Simpan</button></div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">Nama Depan</h4>
              <input value="{{ old('first_name', $user->first_name) }}" class="form-control mb-5" name="first_name" type="text" placeholder="Tulis nama depan di sini..." />
            </div>
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">Name Belakang</h4>
              <input value="{{ old('last_name', $user->last_name) }}" class="form-control mb-5" name="last_name" type="text" placeholder="TUlis nama belakang di sini..." />
            </div>
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">Nama Lengkap</h4>
              <input value="{{ old('name', $user->name) }}" class="form-control mb-5" name="name" type="text" placeholder="Tulis nama lengkap di sini..." />
            </div>
          </div>

          <div class="row g-5">
            <div class="col-12 col-xl-4">
              <h4 class="mb-3">E-mail</h4>
              <input  value="{{ old('email', $user->email) }}"  class="form-control mb-5" name="email" type="text" placeholder="contoh@gmail.com" />
            </div>
            <div class="col-12 col-xl-4">
            <h4 class="mb-3">Foto Profile</h4>
              <input type="file" name="image" class="form-control mb-5" />
              @if($user->image)
                <div class="mb-2">
                    <label>Link gambar saat ini:</label>
                    <input type="text" class="form-control" readonly value="{{ asset($user->image) }}">
                    <small><a href="{{ asset($user->image) }}" target="_blank">Lihat Gambar</a></small>
                </div>
            @endif
            </div>
            <div class="col-12 col-xl-4">
                <h4 class="mb-3">No. Handphone</h4>
                <input value="{{ old('shipping_addresses.0.no_telp', $user->shippingAddress->no_telp ?? '') }}" class="form-control mb-5" name="shipping_addresses[0][no_telp]" type="text" placeholder="tulis nomor handphone di sini..." />
            </div>
          </div>

          <div class="row g-5">
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
                            @foreach($city as $cities)
                                <option value="{{ $cities->id }}" 
                                    {{ old('shipping_addresses.0.city_id', $user->shippingAddress->city_id ?? '') == $cities->id ? 'selected' : '' }}>
                                    {{ $cities->name }}
                                </option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="content-kecamatan" role="tabpanel" aria-labelledby="tab-kecamatan">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Isi Nama Kecamatan</h5>
                        <select name="shipping_addresses[0][district_id]" id="districtSelect" class="form-select mb-5" required>
                          <option disabled selected value="">Pilih Kecamatan</option>
                          @foreach($district as $d)
                              <option value="{{ $d->id }}" 
                                  {{ old('shipping_addresses.0.district_id', $user->shippingAddress->district_id ?? '') == $d->id ? 'selected' : '' }}>
                                  {{ $d->name }}
                              </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="content-desa" role="tabpanel" aria-labelledby="tab-desa">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Isi Nama Desa</h5>
                        <select name="shipping_addresses[0][village_id]" id="villageSelect" class="form-select mb-5" required>
                          <option disabled selected value="">Pilih Desa</option>
                          @foreach($villages as $v)
                              <option value="{{ $v->id }}" 
                                  {{ old('shipping_addresses.0.village_id', $user->shippingAddress->village_id ?? '') == $v->id ? 'selected' : '' }}>
                                  {{ $v->name }}
                              </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="content-detail" role="tabpanel" aria-labelledby="tab-detail">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Detail Alamat Lengkap</h5>
                        <textarea class="form-control" name="shipping_addresses[0][address]" rows="4" required>{{ old('shipping_addresses.0.address', $user->shippingAddress->address ?? '') }}</textarea>
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