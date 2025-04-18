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
                            <div class="flex flex-row flex-wrap mx-[-15px]">
                            @php
                                $user = Auth::user();
                            @endphp
                                <div class="w-full flex justify-center mb-[30px]">
                                    <div class="w-[120px] h-[120px] rounded-full overflow-hidden border-[3px] border-[#eee]">
                                        <img src="{{ asset('storage/profile_images/' . $user->image) }}" alt="Profile Photo" class="w-full h-full object-cover">
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
                                    <input type="text" name="no_telp" placeholder="Masukan nomor telepon anda" value="{{ old('no_telp', $shippingAddresses->no_telp ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kota*</label>
                                    <input type="text" name="city_id" placeholder="Masukan kota anda" value="{{ old('city_id', $shippingAddresses->city_id ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kota*</label>
                                    <input type="text" name="district_id" placeholder="Masukan Kecamatan anda" value="{{ old('district_id', $shippingAddresses->district_id ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Desa*</label>
                                    <input type="text" name="village_id" placeholder="Masukan desa anda" value="{{ old('village_id', $shippingAddresses->village_id ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Alamat*</label>
                                    <input type="text" name="address" placeholder="Masukan alamat lengkap anda" value="{{ old('address', $shippingAddresses->no_telp ?? '') }}" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-btn flex flex-row justify-end w-full px-[15px] max-[767px]:flex-col">
                                    <a href="{{ route('profile.edit', $product->id) }}" class="gi-btn-1 py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] max-[767px]:mt-[15px] hover:bg-[#5caf90]">
                                        Edit Profile
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sample section End -->

@endsection