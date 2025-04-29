@extends('landing.layouts.app')

@section('page_title', 'Profile User | Groceria')
@section('content')

<!-- Register section -->
<section class="gi-register py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Profile<span></span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Silahkan lengkapi Profile Anda</p>
            </div>
            <div class="flex flex-wrap w-full">
                <div class="gi-register-wrapper max-w-[934px] my-[0] mx-auto px-[12px]">
                    <div class="gi-register-container border-[1px] border-solid border-[#eee] p-[30px] text-left bg-[#fff] rounded-[5px] max-[575px]:p-[15px]">
                        <div class="gi-register-form">  
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-row flex-wrap mx-[-15px]">
                                @csrf
                                @method('PUT')
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Depan*</label>
                                    <input value="{{ old('first_name', $user->first_name) }}" id="first_name" type="text" name="first_name" placeholder="Masukan nama depan" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Belakang*</label>
                                    <input value="{{ old('last_name', $user->last_name) }}" id="last_name" type="text" name="last_name" placeholder="Masukan nama belakang" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Lengkap*</label>
                                    <input value="{{ old('name', $user->name) }}" id="name" type="text" name="name" placeholder="Masukan nama lengkap" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Email*</label>
                                    <input value="{{ old('email', $user->email) }}" type="email" name="email" placeholder="Masukan email anda..." class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap w-full px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nomor Handphone*</label>
                                    <input value="{{ old('shipping_addresses.0.no_telp', $user->shippingAddress->no_telp ?? '') }}" 
                                        type="text" 
                                        name="shipping_addresses[0][no_telp]" 
                                        placeholder="Masukan nomor handphone anda" 
                                        class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" 
                                        required>
                                </span>
                                    {{-- Kota --}}
                                    <div class="w-full md:w-1/2 px-[15px]">
                                        <label class="block mb-[9px] text-[#4b5966] text-[15px] font-medium">Kota*</label>
                                        <span class="block w-full h-[50px] mb-[30px] relative rounded-[5px] border border-[#eee] text-[14px]">
                                            <select name="shipping_addresses[0][city_id]" id="citySelect" class="w-full h-full px-[10px] text-[#777] font-light cursor-pointer rounded-[5px]">
                                                <option disabled selected>Pilih Kota</option>
                                                @foreach($city as $cities)
                                                    <option value="{{ $cities->id }}" 
                                                        {{ old('shipping_addresses.0.city_id', $user->shippingAddress->city_id ?? '') == $cities->id ? 'selected' : '' }}>
                                                        {{ $cities->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </span>
                                    </div>

                                    {{-- Kecamatan --}}
                                    <div class="w-full md:w-1/2 px-[15px]">
                                        <label class="block mb-[9px] text-[#4b5966] text-[15px] font-medium">Kecamatan*</label>
                                        <span class="block w-full h-[50px] mb-[30px] relative rounded-[5px] border border-[#eee] text-[14px]">
                                            <select name="shipping_addresses[0][district_id]" id="districtSelect" class="w-full h-full px-[10px] text-[#777] font-light cursor-pointer rounded-[5px]">
                                                <option disabled selected>Pilih Kecamatan</option>
                                                @foreach($district as $d)
                                                    <option value="{{ $d->id }}" 
                                                        {{ old('shipping_addresses.0.district_id', $user->shippingAddress->district_id ?? '') == $d->id ? 'selected' : '' }}>
                                                        {{ $d->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </span>
                                    </div>

                                    {{-- Desa --}}
                                    <div class="w-full md:w-1/2 px-[15px]">
                                        <label class="block mb-[9px] text-[#4b5966] text-[15px] font-medium">Desa*</label>
                                        <span class="block w-full h-[50px] mb-[30px] relative rounded-[5px] border border-[#eee] text-[14px]">
                                            <select name="shipping_addresses[0][village_id]" id="villageSelect" class="w-full h-full px-[10px] text-[#777] font-light cursor-pointer rounded-[5px]">
                                                <option disabled selected>Pilih Desa</option>
                                                @foreach($villages as $v)
                                                    <option value="{{ $v->id }}" 
                                                        {{ old('shipping_addresses.0.village_id', $user->shippingAddress->village_id ?? '') == $v->id ? 'selected' : '' }}>
                                                        {{ $v->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </span>
                                    </div>

                                    {{-- Alamat --}}
                                    <div class="w-full md:w-1/2 px-[15px]">
                                        <label class="block mb-[9px] text-[#4b5966] text-[15px] font-medium">Alamat*</label>
                                        <input type="text" name="shipping_addresses[0][address]" value="{{ old('shipping_addresses.0.address', $user->shippingAddress->address ?? '') }}" class="w-full h-[50px] mb-[30px] px-[10px] rounded-[5px] border border-[#eee] text-[14px] text-[#777] font-light">
                                    </div>

                                <span class="gi-register-wrap gi-register-btn flex flex-row justify-end w-full px-[15px] max-[767px]:flex-col">
                                    <button type="submit" class="gi-btn-1 py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] max-[767px]:mt-[15px] hover:bg-[#5caf90]">
                                        Simpan Perubahan
                                    </button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const firstNameInput = document.getElementById('first_name');
        const lastNameInput = document.getElementById('last_name');
        const fullNameInput = document.getElementById('name');

        function updateFullName() {
            const firstName = firstNameInput.value.trim();
            const lastName = lastNameInput.value.trim();
            fullNameInput.value = `${firstName} ${lastName}`.trim();
        }

        firstNameInput.addEventListener('input', updateFullName);
        lastNameInput.addEventListener('input', updateFullName);
    });
</script>
<!-- Sample section End -->
<script>
document.getElementById('citySelect').addEventListener('change', function () {
    let cityId = this.value;
    let districtSelect = document.getElementById('districtSelect');
    districtSelect.innerHTML = '<option value="">Loading...</option>';

    fetch(`/api/districts/${cityId}`) // pastikan endpoint ini ada di route kamu
        .then(response => response.json())
        .then(data => {
            let options = '<option disabled selected value="">Pilih Kecamatan</option>';
            data.forEach(district => {
                options += `<option value="${district.id}">${district.name}</option>`;
            });
            districtSelect.innerHTML = options;
        })
        .catch(error => {
            console.error('Error fetching districts:', error);
            districtSelect.innerHTML = '<option value="">Gagal memuat kecamatan</option>';
        });
});

// Kalau mau lanjut sampai desa, kamu bisa tambahkan logic seperti ini juga:
document.getElementById('districtSelect').addEventListener('change', function () {
    let districtId = this.value;
    let villageSelect = document.getElementById('villageSelect'); // pastikan ID ini ada di form kamu
    if (!villageSelect) return;

    villageSelect.innerHTML = '<option value="">Loading...</option>';

    fetch(`/api/villages/${districtId}`)
        .then(response => response.json())
        .then(data => {
            let options = '<option disabled selected value="">Pilih Desa</option>';
            data.forEach(village => {
                options += `<option value="${village.id}">${village.name}</option>`;
            });
            villageSelect.innerHTML = options;
        })
        .catch(error => {
            console.error('Error fetching villages:', error);
            villageSelect.innerHTML = '<option value="">Gagal memuat desa</option>';
        });
});
</script>
@endsection