<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', 'Groceria | Shop & Happy')</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('head')
</head>

<body class="w-full h-full relative font-Poppins font-normal overflow-x-hidden">

    <!-- Loader -->
    <div id="gi-overlay" class=" w-full h-full fixed top-0 right-0 left-0 bottom-0 bg-[#fff] z-[99] flex items-center justify-center overflow-hidden">
        <div class="loader"></div>
    </div>

    @include('landing.partials.header')
    <main class="bg-transparent">
        @yield('content')
    </main>
    @include('landing.partials.footer')


    <!-- scripts start from here -->

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/countdownTimer.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/infiniteslidev2.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nouislider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/demo-1.js') }}"></script>

    <!-- @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif -->

</body>

</html>
