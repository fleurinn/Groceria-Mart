<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>  
</head>
<body>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Bagian Kiri (Form Login) -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-6 bg-white shadow-md">
            <div class="w-full max-w-md">
                <a href="{{ route('landing-page') }}" class="text-sm text-gray-500">&larr; Kembali ke beranda</a>
                
                <h2 class="text-3xl font-bold text-gray-800 mt-4">{{ __('Masuk') }}</h2>
                <p class="text-gray-500">Masukan e-mail and kata sandi untuk masuk!</p>


                <!-- Garis pemisah -->
                <div class="flex items-center my-6">
                    <hr class="flex-grow border-gray-300">
                    <hr class="flex-grow border-gray-300">
                </div>

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email<span class="text-red-500">*</span></label>
                        <input id="email" type="email" name="email" placeholder="info@gmail.com" value="{{ old('email') }}" required autofocus class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4" x-data="{ show: false }">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input 
                                :type="show ? 'text' : 'password'" 
                                id="password" 
                                placeholder="Masukan kata sandi" 
                                name="password" 
                                required 
                                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
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
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>


                    <!-- Remember Me & Forgot Password -->
                    <div class="flex justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                                Lupa kata sandi?
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg shadow-md">
                            Masuk
                        </button>
                    </div>

                    <div class="mt-4 text-center text-sm text-gray-600">
                        Belum punya akun? 
                        <a href="{{ url('/register') }}" class="text-blue-600 hover:underline">
                            Register di sini
                        </a>.
                    </div>
                </form>
            </div>
        </div>

        <!-- Bagian Kanan (Gambar) -->
        <div class="hidden md:flex w-1/2 bg-indigo-900 text-white items-center justify-center">
            <div class="text-center">
                <img src="{{ asset('images/logo.svg') }}" class="w-12 h-12 mx-auto mb-4" alt="Logo">
                <h2 class="text-2xl font-bold">TailAdmin</h2>
                <p class="text-gray-300">Free and Open-Source Tailwind CSS Admin Dashboard Template</p>
            </div>
        </div>
    </div>
</body>
</html>