<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .btn-daftar {
            transition: background-color 0.3s ease;
        }

        .btn-daftar:hover {
            background-color: #38a169;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-green-400 to-green-600">
    <div class="flex min-h-screen">
        <div class="w-full md:w-1/2 flex items-center justify-center p-6">
            <div class="w-full max-w-md shadow-md rounded-lg p-8 bg-white">
                <a href="{{ route('landing-page') }}" class="text-sm text-gray-600">&larr; Kembali ke beranda</a>

                <div class="flex justify-center mb-6">
                    <img src="{{ asset('assets/img/logo/logogroceria.png') }}" alt="Logo Groceria" class="h-10">
                </div>

                <h2 class="text-3xl font-bold text-gray-800 mt-4">{{ __('Daftar') }}</h2>
                <p class="text-gray-600 mt-1">Masukan data-data Anda untuk mendaftar akun!</p>

                <form method="POST" action="{{ route('register') }}" class="mt-8">
                    @csrf

                    <div class="mb-4">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Lengkap<span
                                class="text-red-500">*</span></label>
                        <input id="first_name" type="text" name="first_name" placeholder="Nama Lengkap Anda"
                            value="{{ old('first_name') }}" required autofocus
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-4">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Nama Lengkap<span
                                class="text-red-500">*</span></label>
                        <input id="last_name" type="text" name="last_name" placeholder="Nama Lengkap Anda"
                            value="{{ old('last_name') }}" required autofocus
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap<span
                                class="text-red-500">*</span></label>
                        <input id="name" type="text" name="name" placeholder="Nama Lengkap Anda"
                            value="{{ old('name') }}" required autofocus
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                    </div>


                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email<span
                                class="text-red-500">*</span></label>
                        <input id="email" type="email" name="email" placeholder="Email Anda"
                            value="{{ old('email') }}" required
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-6" x-data="{ show: false }">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Kata Sandi<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input :type="show ? 'text' : 'password'" id="password" name="password"
                                placeholder="Kata Sandi Anda" required
                                class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <button type="button" @click="show = !show"
                                class="absolute inset-y-0 right-3 flex items-center text-gray-500 focus:outline-none">
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.993 9.993 0 012.205-3.233M15 12a3 3 0 00-3-3m0 0a3 3 0 00-3 3m3-3v0m0 6a3 3 0 003-3m-3 3a3 3 0 01-3-3m6.364 6.364l-12-12" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-6" x-data="{ show: false }">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                            Konfirmasi Kata Sandi<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input :type="show ? 'text' : 'password'" id="password_confirmation"
                                name="password_confirmation" placeholder="Konfirmasi Kata Sandi Anda" required
                                class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <button type="button" @click="show = !show"
                                class="absolute inset-y-0 right-3 flex items-center text-gray-500 focus:outline-none">
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.993 9.993 0 012.205-3.233M15 12a3 3 0 00-3-3m0 0a3 3 0 00-3 3m3-3v0m0 6a3 3 0 003-3m-3 3a3 3 0 01-3-3m6.364 6.364l-12-12" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-4">
                        <label for="shipping_addresses[0][no_telp]" class="block text-sm font-medium text-gray-700">Nomor Handphone<span
                                class="text-red-500">*</span></label>
                        <input id="shipping_addresses[0][no_telp]" type="text" name="shipping_addresses[0][no_telp]" placeholder="Tulis nomor handphone Anda"
                            value="{{ old('shipping_addresses[0][no_telp]') }}" required autofocus
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('shipping_addresses[0][no_telp]')" class="mt-2 text-red-500" />
                    </div>

                    {{-- Kota --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kota<span class="text-red-500">*</span></label>
                        <select id="citySelect" name="shipping_addresses[0][city_id]" required
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-3 text-sm text-gray-800 shadow-sm focus:ring focus:ring-green-500 focus:outline-none">
                            <option disabled selected value="">Pilih Kota</option>
                            @foreach($city as $cities)
                                <option value="{{ $cities->id }}">
                                    {{ $cities->name ?? 'Tidak ada kota' }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('shipping_addresses.0.city_id')" class="mt-2 text-red-500" />
                    </div>

                    {{-- Kecamatan --}}
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Kecamatan<span class="text-red-500">*</span></label>
                        <select id="districtSelect" name="shipping_addresses[0][district_id]" required
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-3 text-sm text-gray-800 shadow-sm focus:ring focus:ring-green-500 focus:outline-none">
                          <option disabled selected value="">Pilih Kecamatan</option>
                        </select>
                        <x-input-error :messages="$errors->get('shipping_addresses.0.district_id')" class="mt-2 text-red-500" />
                    </div>

                    {{-- desa --}}
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Desa<span class="text-red-500">*</span></label>
                        <select name="shipping_addresses[0][village_id]" id="villageSelect" required class="h-11 w-full rounded-md border border-gray-300 bg-white px-3 text-sm text-gray-800 shadow-sm focus:ring focus:ring-green-500 focus:outline-none">
                            <option disabled selected value="">Pilih Kelurahan/Desa</option>
                        </select>
                        <x-input-error :messages="$errors->get('shipping_addresses.0.district_id')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-4">
                        <label for="shipping_addresses[0][address]" class="block text-sm font-medium text-gray-700">Nama Lengkap<span
                                class="text-red-500">*</span></label>
                        <input id="shipping_addresses[0][address]" type="text" name="shipping_addresses[0][address]" placeholder="Alamat lengkap Anda"
                            value="{{ old('shipping_addresses[0][address]') }}" required autofocus
                            class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('shipping_addresses[0][address]')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-3 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 btn-daftar">
                            Daftar
                        </button>
                    </div>

                    <div class="mt-4 text-center text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ url('/login') }}" class="text-blue-500 hover:underline">
                            Login di sini
                        </a>.
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden md:flex w-1/2 relative bg-white">
            <img src="{{ asset('assets/img/logo/login-side.jpg') }}" alt="Gambar Hiasan Login"
                class="object-cover w-full h-full">
        </div>
    </div>
</body>


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



</html>