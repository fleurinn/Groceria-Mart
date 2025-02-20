<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Bagian Kiri (Form Login) -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-6 bg-white shadow-md">
            <div class="w-full max-w-md">
                <a href="#" class="text-sm text-gray-500">&larr; Back to home</a>
                
                <h2 class="text-3xl font-bold text-gray-800 mt-4">{{ __('Sign In') }}</h2>
                <p class="text-gray-500">Enter your email and password to sign in!</p>

                <!-- Login dengan Google & X -->
                <div class="flex space-x-3 mt-6">
                    <button class="flex items-center w-1/2 bg-white border border-gray-300 rounded-lg p-2 shadow-sm hover:bg-gray-100">
                        <img src="{{ asset('images/google-icon.svg') }}" class="w-5 h-5 mr-2" alt="Google">
                        <span>Sign in with Google</span>
                    </button>
                    <button class="flex items-center w-1/2 bg-white border border-gray-300 rounded-lg p-2 shadow-sm hover:bg-gray-100">
                        <img src="{{ asset('images/x-icon.svg') }}" class="w-5 h-5 mr-2" alt="X">
                        <span>Sign in with X</span>
                    </button>
                </div>

                <!-- Garis pemisah -->
                <div class="flex items-center my-6">
                    <hr class="flex-grow border-gray-300">
                    <span class="px-3 text-gray-500">Or</span>
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
                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input id="password" placeholder="Enter your password" type="password" name="password" required class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                            <button type="button" class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                                👁️ 
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mt-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                            <span class="ms-2 text-sm text-gray-600">Keep me logged in</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg shadow-md">
                            Sign In
                        </button>
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