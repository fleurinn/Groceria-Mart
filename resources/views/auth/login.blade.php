<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .btn-masuk {
            transition: background-color 0.3s ease;
        }
        .btn-masuk:hover {
            background-color: #38a169; /* Darker shade of green */
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

                <h2 class="text-3xl font-bold text-gray-800 mt-4">{{ __('Masuk') }}</h2>
                <p class="text-gray-600 mt-1">Masukan e-mail dan kata sandi untuk masuk!</p>

                <form method="POST" action="{{ route('login') }}" class="mt-8">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email<span class="text-red-500">*</span></label>
                        <input id="email" type="email" name="email" placeholder="Email Anda" value="{{ old('email') }}" required autofocus class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                    </div>

                    <div class="mb-6" x-data="{ show: false }">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Kata Sandi<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input
                                :type="show ? 'text' : 'password'"
                                id="password"
                                placeholder="Kata Sandi Anda"
                                name="password"
                                required
                                class="h-11 w-full rounded-md border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >
                            <button
                                type="button"
                                @click="show = !show"
                                class="absolute inset-y-0 right-3 flex items-center text-gray-500 focus:outline-none"
                            >
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.993 9.993 0 012.205-3.233M15 12a3 3 0 00-3-3m0 0a3 3 0 00-3 3m3-3v0m0 6a3 3 0 003-3m-3 3a3 3 0 01-3-3m6.364 6.364l-12-12" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                    </div>

                    <div class="flex justify-end mb-4">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                                Lupa kata sandi?
                            </a>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-3 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 btn-masuk">
                            Masuk
                        </button>
                    </div>

                    <div class="mt-4 text-center text-sm text-gray-600">
                        Belum punya akun?
                        <a href="{{ url('/register') }}" class="text-blue-500 hover:underline">
                            Daftar di sini
                        </a>.
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden md:flex w-1/2 relative bg-white">
            <img src="{{ asset('assets/img/logo/login-side.jpg') }}" alt="Gambar Hiasan Login" class="object-cover w-full h-full">
        </div>
    </div>
</body>
</html>