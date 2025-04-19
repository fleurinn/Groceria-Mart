@extends('landing.layouts.app')

@section('page_title', 'Profile User | Groceria')
@section('content')

<!-- Register section -->
<section class="gi-register py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Profile Edit<span></span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Silahkan lengkapi Profile Anda</p>
            </div>
            <div class="flex flex-wrap w-full">
                <div class="gi-register-wrapper max-w-[934px] my-[0] mx-auto px-[12px]">
                    <div class="gi-register-container border-[1px] border-solid border-[#eee] p-[30px] text-left bg-[#fff] rounded-[5px] max-[575px]:p-[15px]">
                        <div class="gi-register-form">
                        <form class="mb-9" action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-row flex-wrap mx-[-15px]">
                            <div class="w-full flex justify-center items-center gap-6 mb-[30px]">
                                <!-- Foto Profil -->
                                <div class="w-[120px] h-[120px] rounded-full overflow-hidden border-[3px] border-[#eee]">
                                    @if($user->image)
                                        <img src="{{ asset('storage/profile_images/' . $user->image) }}" alt="Profile Photo" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm">No Image</div>
                                    @endif
                                </div>

                                <!-- Form Upload -->
                                <div>
                                    <label for="image" class="block text-sm font-medium text-gray-700">Upload Foto Profil</label>
                                    <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full">
                                </div>
                            </div>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Depan*</label>
                                    <input type="text" name="first_name" placeholder="Masukan nama depan" value="{{ old('first_name', $user->first_name) }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Belakang*</label>
                                    <input type="text" name="last_name" placeholder="Masukan nama belakang" value="{{ old('last_name', $user->last_name) }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Lengkap*</label>
                                    <input type="text" name="name" placeholder="Masukan nama lengkap anda" value="{{ old('name', $user->name) }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Email*</label>
                                    <input type="email" name="email" placeholder="Masukan email anda..." value="{{ old('email', $user->email) }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap w-full px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nomor Handphone*</label>
                                    <input type="text" name="shipping_addresses[0][no_telp]" placeholder="Masukan nomor telepon anda" value="{{ old('no_telp', $shippingAddresses->no_telp ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kota*</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="shipping_addresses[0][city_id]" id="citySelect" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                        <option disabled selected value="">Pilih Kota</option>
                                        @foreach($city as $cities) <!-- Pastikan menggunakan $cities -->
                                            <option value="{{ $cities->id }}">{{ $cities->name ?? 'Tidak ada kota' }}</option>
                                        @endforeach
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kota*</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="shipping_addresses[0][district_id]" id="districtSelect" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                        <option disabled selected value="">Pilih Kecamatan</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kota*</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="shipping_addresses[0][village_id]" id="villageSelect" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                        <option disabled selected value="">Pilih Desa</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Alamat*</label>
                                    <input type="text" name="shipping_addresses[0][address]" placeholder="Masukan alamat lengkap anda" value="{{ old('address', $shippingAddresses->no_telp ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-btn flex flex-row justify-end w-full px-[15px] max-[767px]:flex-col">
                                    <form action="{{ route('profile.edit', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="gi-btn-1 py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] max-[767px]:mt-[15px] hover:bg-[#5caf90]">
                                            Edit Profile
                                        </button>
                                    </form>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sample section End -->
<script>
  $(document).ready(function () {
    $('#citySelect').on('change', function () {
      var cityId = $(this).val();

      // Cek jika tidak ada ID kota
      if (!cityId) {
        $('#districtSelect').html('<option disabled selected value="">Pilih Kecamatan</option>');
        return;
      }

      // Sementara tampilkan loading
      $('#districtSelect').html('<option disabled selected value="">Loading...</option>');

      // AJAX request
      $.ajax({
        url: '{{ route("profile.get-districts", ":id") }}'.replace(':id', cityId),
        type: 'GET',
        dataType: 'json',
        success: function (data) {
          $('#districtSelect').empty().append('<option disabled selected value="">Pilih Kecamatan</option>');

          // Loop dan masukkan data ke dropdown
          data.forEach(function (district) {
            $('#districtSelect').append(
              $('<option>', {
                value: district.id,
                text: district.name
              })
            );
          });
        },
        error: function (xhr, status, error) {
          console.error('Terjadi kesalahan saat mengambil data kecamatan:', error);
          $('#districtSelect').html('<option disabled selected value="">Gagal memuat data</option>');
        }
      });
    });
  });
</script>
<script>
  $(document).ready(function () {
    $('#districtSelect').on('change', function () {
      const districtId = $(this).val();

      // Jika tidak ada ID kecamatan
      if (!districtId) {
        $('#villageSelect').html('<option disabled selected value="">Pilih Desa</option>');
        return;
      }

      // Tampilkan loading sementara
      $('#villageSelect').html('<option disabled selected value="">Loading...</option>');

      // AJAX ambil data desa
      $.ajax({
        url: '{{ route("profile.get-villages", ":id") }}'.replace(':id', districtId),
        type: 'GET',
        dataType: 'json',
        success: function (data) {
          $('#villageSelect').empty().append('<option disabled selected value="">Pilih Desa</option>');

          data.forEach(function (village) {
            $('#villageSelect').append(
              $('<option>', {
                value: village.id,
                text: village.name
              })
            );
          });
        },
        error: function (xhr, status, error) {
          console.error('Gagal memuat desa:', error);
          $('#villageSelect').html('<option disabled selected value="">Gagal memuat data</option>');
        }
      });
    });
  });
</script>

@endsection