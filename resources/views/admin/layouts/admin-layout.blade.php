<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    
    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.png') }}" sizes="32x32">

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/gicons.css') }}">

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.css') }}">

    <!-- Tailwindcss -->
    <script src="assets/js/plugins/tailwindcss3.4.1"></script>

    <!-- Main Style -->
    <link rel="stylesheet" id="main_style" href="{{ asset('assets/css/demo-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}">
    @yield('head')
</head>
<body x-data="{ darkMode: false }" :class="{ 'dark bg-gray-900': darkMode === true }">

    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
    <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>
    ===== Preloader End =====

    <!-- Header -->
    @include('admin.partials.header')
    
    <!-- Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <div class="flex h-screen overflow-hidden">
        <div class="flex-1">
            @yield('content')
        </div>
    </div>




    <!-- Script CDN -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script defer src="bundle.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9136afa8df409cbc","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"67f7a278e3374824ae6dd92295d38f77","b":1}' crossorigin="anonymous"></script>

    <!-- javascript Start -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
