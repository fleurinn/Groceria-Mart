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
                
                <h2 class="text-3xl font-bold text-gray-800 mt-4">{{ __('Daftar') }}</h2>
                <p class="text-gray-500">Masukan data - data anda untuk daftar akun!</p>


                <!-- Garis pemisah -->
                <div class="flex items-center my-6">
                    <hr class="flex-grow border-gray-300">
                    <hr class="flex-grow border-gray-300">
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-700">Nama Lengkap<span class="text-red-500">*</span></label>
                        <input id="name" type="text" placeholder="Tulis Nama lengkap di sini..." name="name" :value="old('name')" required autocomplete="name" class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    </div>
                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">E-Mail<span class="text-red-500">*</span></label>
                        <input id="email" type="email" placeholder="info@gmail.com" name="email" :value="old('email')" required autocomplete="username" class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-700" :value="old('name')">Nama Lengkap<span class="text-red-500">*</span></label>
                        <input id="password" type="password" placeholder="Minimal 6 huruf atau angka" name="password"  required autocomplete="new-password" class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-700" :value="old('Confirm Password')">Nama Lengkap<span class="text-red-500">*</span></label>
                        <input id="password_confirmation" type="password" placeholder="Minimal 6 huruf atau angka" name="password_confirmation"  required autocomplete="new-password" class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <!-- Submit -->
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg shadow-md">
                            Daftar
                        </button>
                    </div>
                    <div class="mt-4 text-center text-sm text-gray-600">
                        Sudah punya akun? 
                        <a href="{{ url('/login') }}" class="text-blue-600 hover:underline">
                            Login di sini
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





