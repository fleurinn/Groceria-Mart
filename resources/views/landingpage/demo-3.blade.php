<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2025 01:58:35 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Grabit - Multipurpose eCommerce Tailwind CSS Template.</title>
    <meta name="keywords" content="tailwindcss, ecommerce, farming, food market, grocery market, grocery shop, grocery store, grocery supper market, multi vendor, organic food, supermarket, supermarket grocery">
    <meta name="description" content="Multipurpose eCommerce Tailwind CSS Template">
    <meta name="author" content="Maraviya Infotech">

    <!-- site Favicon -->
    <link rel="icon" href="assets/img/favicon/favicon.png" sizes="32x32">

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/gicons.css">

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.css">

    <!-- Tailwindcss -->
    <script src="assets/js/plugins/tailwindcss3.4.1"></script>

    <!-- Main Style -->
    <link rel="stylesheet" id="main_style" href="assets/css/demo-3.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="w-full h-full relative font-Poppins font-normal overflow-x-hidden home-3">

    <!-- Loader -->
    <div id="gi-overlay"
        class="w-full h-full fixed top-0 right-0 left-0 bottom-0 bg-[#fff] z-[99] flex items-center justify-center overflow-hidden">
        <div class="loader"></div>
    </div>

    <!-- Header start  -->
    <header class="gi-header bg-[#fff] z-[14] max-[991px]:z-[16] relative">
        <!-- Header Top Start -->
        <div class="header-top py-[10px] text-[#777] bg-[#f8f8fb] max-[767px]:hidden">
            <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <!-- Header Top social Start -->
                    <div class="grow-[1] shrink-[0] basis-[0%] min-[992px]:block max-[767px]:hidden">
                        <div class="header-top-social">
                            <ul class="mb-[0] p-[0] flex">
                                <li class="list-inline-item transition-all duration-[0.3s] ease-in-out flex text-[13px] mr-[15px]">
                                    <a href="javascript:void(0)" class="mx-[5px] text-center flex items-center justify-center text-[15px]">
                                        <i class="fi fi-rr-phone-call transition-all duration-[0.3s] ease-in-out text-[#777]"></i>
                                    </a>
                                    +91 987 654 3210
                                </li>
                                <li class="list-inline-item transition-all duration-[0.3s] ease-in-out flex text-[13px]">
                                    <a href="javascript:void(0)" class="mx-[5px] text-center flex items-center justify-center text-[15px]">
                                        <i class="fi fi-brands-whatsapp transition-all duration-[0.3s] ease-in-out text-[#777]"></i>
                                    </a>
                                    +91 987 654 3210
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="grow-[1] shrink-[0] basis-[0%] text-center max-[1199px]:hidden">
                        <div class="header-top-message text-[13px]">
                            World's Fastest Online Shopping Destination
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="grow-[1] shrink-[0] basis-[0%]">
                        <div class="header-top-right-inner flex justify-end">
                            <a class="gi-help pl-[20px] text-[13px] text-[#777] tracking-[0.7px] font-normal hover:text-[#5caf90]" href="faq.html">Help?</a>
                            <a class="gi-help pl-[20px] text-[13px] text-[#777] tracking-[0.7px] font-normal hover:text-[#5caf90]" href="track-order.html">Track Order?</a>
                            <!-- Language Start -->
                            <div class="header-top-lan-curr header-top-lan dropdown pl-[20px] flex flex-wrap relative">
                                <button type="button"
                                    class="dropdown-toggle text-[13px] flex items-center p-[0] transition-all duration-[0.3s] ease delay-0 text-[#777] border-[0] tracking-[0.7px]">English
                                    <i class="fi-rr-angle-small-down text-[14px] ml-[5px] text-[#777] transition-all duration-[0.3s] ease delay-0 flex"></i>
                                </button>
                                <ul class="hidden dropdown-menu absolute top-[32px] left-[auto] right-[0] min-w-[130px] truncate px-[10px] bg-[#fff] z-[1] border-[1px] border-solid border-[#eee]">
                                    <li class="active border-b-[1px] border-solid border-[#eee] leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">English</a>
                                    </li>
                                    <li class="leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">Italiano</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Language End -->
                            <!-- Currency Start -->
                            <div class="header-top-lan-curr header-top-curr dropdown pl-[20px] flex flex-wrap relative">
                                <button type="button" class="dropdown-toggle text-[13px] flex items-center p-[0] transition-all duration-[0.3s] ease delay-0 text-[#777] border-[0] tracking-[0.7px]">Dollar
                                    <i class="fi-rr-angle-small-down text-[14px] ml-[5px] text-[#777] tra   nsition-all duration-[0.3s] ease delay-0 flex"></i>
                                </button>
                                <ul class="hidden dropdown-menu absolute top-[32px] left-[auto] right-[0] min-w-[130px] truncate px-[10px] bg-[#fff] z-[1] border-[1px] border-solid border-[#eee]">
                                    <li class="active border-b-[1px] border-solid border-[#eee] leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">USD $</a>
                                    </li>
                                    <li class="leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">EUR €</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                </div>
            </div>
        </div>
        <!-- Header Top  End -->

        <!-- Header Bottom  Start -->
        <div
            class="gi-header-bottom py-[12px] max-[991px]:py-[10px] max-[991px]:border-b-[1px] border-solid border-[#eee]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <div class="gi-flex flex flex-row justify-between w-full max-[575px]:flex-col">
                        <!-- Header Logo Start -->
                        <div class="self-center gi-header-logo max-[575px]:mb-[15px]">
                            <div class="header-logo text-left">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt="Site Logo"
                                        class="w-[230px] max-[1399px]:w-[180px] max-[1199px]:w-[150px] max-[991px]:w-[120px] max-[767px]:w-[100px] "></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->
                        <!-- Main Menu Start -->
                        <div id="gi-main-menu-desk" class="w-full flex items-center min-[992px]:block hidden">
                            <div class="nav-desk">
                                <div class="w-full flex flex-wrap px-[12px] min-[1400px]:relative">
                                    <div class="basis-auto w-full self-center">
                                        <div class="gi-main-menu flex">
                                            <ul class="w-full flex justify-center flex-wrap pl-[0]">
                                                <li
                                                    class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Home<i
                                                            class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                    <ul
                                                        class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block border-[1px] border-solid border-[#eee] py-[5px]">
                                                        <li><a href="index.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Grocery</a>
                                                        </li>
                                                        <li><a href="demo-2.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Fashion</a>
                                                        </li>
                                                        <li><a href="demo-3.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Fashion
                                                                2</a></li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="dropdown drop-list static ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Categories<i
                                                            class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                    <ul
                                                        class="mega-menu block transition-all duration-[0.3s] ease-in-out w-full max-[1399px]:mx-[12px] max-[1399px]:w-[calc(100%-24px)] mt-[15px] absolute bg-[#fff] pl-[30px] opacity-0 invisible left-0 z-[15] border-[1px] border-solid border-[#eee] truncate">
                                                        <li class="flex">
                                                            <span class="bg"></span>
                                                            <ul
                                                                class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                                <li class="menu_title">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Classic</a>
                                                                </li>
                                                                <li><a href="shop-left-sidebar-col-3.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Left
                                                                        sidebar 3 column</a></li>
                                                                <li><a href="shop-left-sidebar-col-4.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Left
                                                                        sidebar 4 column</a></li>
                                                                <li><a href="shop-right-sidebar-col-3.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Right
                                                                        sidebar 3 column</a></li>
                                                                <li><a href="shop-right-sidebar-col-4.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Right
                                                                        sidebar 4 column</a></li>
                                                                <li><a href="shop-full-width.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Full
                                                                        width 4 column</a></li>
                                                            </ul>
                                                            <ul
                                                                class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                                <li class="menu_title">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Banner</a>
                                                                </li>
                                                                <li><a href="shop-banner-left-sidebar-col-3.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">left
                                                                        sidebar 3 column</a></li>
                                                                <li><a href="shop-banner-left-sidebar-col-4.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">left
                                                                        sidebar 4 column</a></li>
                                                                <li><a href="shop-banner-right-sidebar-col-3.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">right
                                                                        sidebar column</a></li>
                                                                <li><a href="shop-banner-right-sidebar-col-4.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">right
                                                                        sidebar 4 column</a></li>
                                                                <li><a href="shop-banner-full-width.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Full
                                                                        width 4 column</a></li>
                                                            </ul>
                                                            <ul
                                                                class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                                <li class="menu_title">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Columns</a>
                                                                </li>
                                                                <li><a href="shop-full-width-col-3.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">3
                                                                        Columns full width</a></li>
                                                                <li><a href="shop-full-width-col-4.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">4
                                                                        Columns full width</a></li>
                                                                <li><a href="shop-full-width-col-5.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">5
                                                                        Columns full width</a></li>
                                                                <li><a href="shop-full-width-col-6.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">6
                                                                        Columns full width</a></li>
                                                                <li><a href="shop-banner-full-width-col-3.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Banner
                                                                        3 Columns</a></li>
                                                            </ul>
                                                            <ul
                                                                class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                                <li class="menu_title">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">List</a>
                                                                </li>
                                                                <li><a href="shop-list-left-sidebar.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Shop
                                                                        left sidebar</a></li>
                                                                <li><a href="shop-list-right-sidebar.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Shop
                                                                        right sidebar</a></li>
                                                                <li><a href="shop-list-banner-left-sidebar.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Banner
                                                                        left sidebar</a></li>
                                                                <li><a href="shop-list-banner-right-sidebar.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Banner
                                                                        right sidebar</a></li>
                                                                <li><a href="shop-list-full-col-2.html"
                                                                        class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Full
                                                                        width 2 columns</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Products<i
                                                            class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                    <ul
                                                        class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block border-[1px] border-solid border-[#eee] py-[5px]">
                                                        <li class="dropdown position-static">
                                                            <a href="javascript:void(0)"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                                page
                                                                <i
                                                                    class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[2px] text-[18px] flex"></i>
                                                            </a>
                                                            <ul
                                                                class="sub-menu sub-menu-child transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block border-[1px] border-solid border-[#eee] py-[5px]">
                                                                <li><a href="product-left-sidebar.html"
                                                                        class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                                        left sidebar</a></li>
                                                                <li><a href="product-right-sidebar.html"
                                                                        class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                                        right sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown position-static">
                                                            <a href="javascript:void(0)"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                                Accordion
                                                                <i
                                                                    class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[2px] text-[18px] flex"></i>
                                                            </a>
                                                            <ul
                                                                class="sub-menu sub-menu-child transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block border-[1px] border-solid border-[#eee] py-[5px]">
                                                                <li><a href="product-accordion-left-sidebar.html"
                                                                        class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">left
                                                                        sidebar</a></li>
                                                                <li><a href="product-accordion-right-sidebar.html"
                                                                        class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">right
                                                                        sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="product-full-width.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                                full width</a></li>
                                                        <li><a href="product-accordion-full-width.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">accordion
                                                                full width</a></li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Blog<i
                                                            class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                    <ul
                                                        class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block border-[1px] border-solid border-[#eee] py-[5px]">
                                                        <li><a href="blog-left-sidebar.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">left
                                                                sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">right
                                                                sidebar</a></li>
                                                        <li><a href="blog-full-width.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Full
                                                                Width</a></li>
                                                        <li><a href="blog-detail-left-sidebar.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Detail
                                                                left sidebar</a></li>
                                                        <li><a href="blog-detail-right-sidebar.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Detail
                                                                right sidebar</a></li>
                                                        <li><a href="blog-detail-full-width.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Detail
                                                                Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Others<i
                                                            class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                    <ul
                                                        class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block border-[1px] border-solid border-[#eee] py-[5px]">
                                                        <li><a href="about-us.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">About
                                                                Us</a></li>
                                                        <li><a href="contact-us.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Contact
                                                                Us</a></li>
                                                        <li><a href="cart.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Cart</a>
                                                        </li>
                                                        <li><a href="checkout.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Checkout</a>
                                                        </li>
                                                        <li><a href="compare.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Compare</a>
                                                        </li>
                                                        <li><a href="faq.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">FAQ</a>
                                                        </li>
                                                        <li><a href="login.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Login</a>
                                                        </li>
                                                        <li><a href="register.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Register</a>
                                                        </li>
                                                        <li><a href="track-order.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Track
                                                                Order</a></li>
                                                        <li><a href="terms-condition.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Terms
                                                                Condition</a></li>
                                                        <li><a href="privacy-policy.html"
                                                                class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Privacy
                                                                Policy</a></li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                    <a href="shop-banner-left-sidebar-col-3.html"
                                                        class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                        <i
                                                            class="fi-rr-badge-percent transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Offers
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Menu End -->
                        <!-- Header Button Start -->
                        <div class="gi-header-action self-center max-[991px]:hidden">
                            <div class="gi-header-bottons flex justify-end">
                                <!-- Header User Start -->
                                <div class="gi-acc-drop relative">
                                    <a href="javascript:void(0)"
                                        class="gi-header-btn gi-header-user dropdown-toggle gi-user-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap"
                                        title="Account">
                                        <div class="header-icon relative flex">
                                            <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                        </div>
                                        <div class="gi-btn-desc flex flex-col uppercase ml-[10px] max-[1199px]:hidden">
                                            <span
                                                class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Account</span>
                                            <span
                                                class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">Login</span>
                                        </div>
                                    </a>
                                    <ul
                                        class="gi-dropdown-menu min-w-[150px] py-[5px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute z-[16] text-left bg-[#fff] block opacity-0 invisible left-[0] right-[auto] border-[1px] border-solid border-[#eee]">
                                        <li><a class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]"
                                                href="register.html">Register</a></li>
                                        <li><a class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]"
                                                href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]"
                                                href="login.html">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.html"
                                    class="gi-header-btn gi-wish-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap"
                                    title="Wishlist">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px] max-[1199px]:hidden">
                                        <span
                                            class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Wishlist</span>
                                        <span
                                            class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]"><b
                                                class="gi-wishlist-count">3</b>-items</span>
                                    </div>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="javascript:void(0)"
                                    class="gi-header-btn gi-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap"
                                    title="Cart">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-shopping-bag text-[24px] leading-[17px]"></i>
                                        <span
                                            class="main-label-note-new transition-all duration-[0.3s] ease-in-out h-[10px] w-[10px] m-auto bg-[#ec716d] rounded-[50%] cursor-default hidden absolute bottom-[15px] left-[0] right-[0] z-[3]"></span>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px] max-[1199px]:hidden">
                                        <span
                                            class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Cart</span>
                                        <span
                                            class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">
                                            <b class="gi-cart-count">3</b>-items
                                        </span>
                                    </div>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                        <!-- Header Top responsive Action -->
                        <div class="grow-[1] shrink-[0] basis-[0%]  min-[576px]:flex justify-end items-center min-[992px]:hidden">
                            <div class="gi-header-bottons flex justify-end">
                                <div class="right-icons flex flex-row">
                                    <!-- Header User Start -->
                                    <a href="login.html"
                                        class="gi-header-btn gi-header-user mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                        <div class="header-icon relative flex">
                                            <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                        </div>
                                    </a>
                                    <!-- Header User End -->
                                    <!-- Header Wishlist Start -->
                                    <a href="wishlist.html"
                                        class="gi-header-btn gi-wish-toggle mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                        <div class="header-icon relative flex">
                                            <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                        </div>
                                        <span
                                            class="gi-header-count gi-wishlist-count w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
                                    </a>
                                    <!-- Header Wishlist End -->
                                    <!-- Header Cart Start -->
                                    <a href="javascript:void(0)"
                                        class="gi-header-btn gi-cart-toggle mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                        <div class="header-icon relative flex">
                                            <i class="fi-rr-shopping-bag text-[24px] leading-[17px]"></i>
                                            <span class="main-label-note-new"></span>
                                        </div>
                                        <span
                                            class="gi-header-count gi-cart-count  w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
                                    </a>
                                    <!-- Header Cart End -->
                                    <!-- Header menu Start -->
                                    <a href="javascript:void(0)"
                                        class="gi-header-btn gi-site-menu-icon relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                        <i class="fi-rr-menu-burger text-[24px] leading-[17px]"></i>
                                    </a>
                                    <!-- Header menu End -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Top responsive Action -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Button End -->

        <!-- Header menu -->
        <div
            class="gi-header-cat transition-all duration-[0.3s] ease-in-out bg-[#fff] border-t-[1px] border-b-[1px] border-solid border-[#eee] hidden min-[992px]:block">
            <div
                class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
                <div class="gi-nav-bar flex flex-row justify-between relative w-full px-[12px]">
                    <!-- Category Toggle -->
                    <div class="gi-category-icon-block py-[5px] static">
                        <div class="gi-category-menu relative">
                            <div class="gi-category-toggle w-[200px] min-h-[50px] px-[15px] flex items-center bg-[#5caf90] cursor-pointer max-[1199px]:w-auto max-[991px]:border-[0]">
                                <i class="fi fi-rr-apps text-[18px] text-[#fff] leading-[0]"></i>
                                <span class="text ml-[10px] text-[15px] text-[#fff] font-medium max-[1199px]:hidden">All Categories</span>
                                <i class="fi-rr-angle-small-down gi-angle text-[18px] uppercase text-[#fff] text-center absolute right-[15px] leading-[0] max-[1199px]:hidden" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="gi-cat-dropdown transition-all duration-[0.3s] ease-in-out w-[600px] mt-[15px] p-[15px] absolute bg-[#fff] opacity-[0] invisible left-[0] z-[-15] border-[1px] border-solid border-[#eee]">
                            <div class="gi-cat-block">
                                <div class="gi-cat-tab flex">
                                    <ul class="nav-tabs min-w-[240px] p-[10px] flex-col justify-center mr-[16px]" id="myTab">
                                        <li class="active transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] flex items-center mb-[10px]">
                                            <a href="#v-pills-home" class="flex">
                                                <img src="assets/img/category/c-1.png" alt="category" class="w-[20px] mr-[10px]">
                                                Cothes & Footwear
                                            </a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] flex items-center mb-[10px]">
                                            <a href="#v-pills-profile" class="flex">
                                                <img src="assets/img/category/c-8.png" alt="category" class="w-[20px] mr-[10px]">
                                                Jewellery 
                                            </a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] flex items-center mb-[10px]">
                                            <a href="#v-pills-messages" class="flex">
                                                <img src="assets/img/category/c-9.png" alt="category" class="w-[20px] mr-[10px]">
                                                perfume & cosmetics
                                            </a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] flex items-center">
                                            <a href="#v-pills-settings" class="flex">
                                                <img src="assets/img/category/c-4.png" alt="category" class="w-[20px] mr-[10px]">
                                                glasses & bags
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content transition-all w-full" id="myTabContent">
                                        <div class="tab-pane" id="v-pills-home">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Cothes</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Shirt</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">shorts </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">jacket</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">dress & frock</a> 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Footwear</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Sports</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Formal</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Casual</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">safety shoes </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-profile">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">jewelry</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Earrings</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Couple Rings </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Necklace </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">jewelry</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Earrings</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Couple Rings </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Necklace </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-messages">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">perfume</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Clothes perfume</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">deodorant</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Flower fragrance</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Air Freshener</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">cosmetics</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">shampoo</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Sunscreen</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">body wash</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">makeup kit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-settings">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">glasses</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Sunglasses</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Lenses</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6 class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">bags</h6>
                                                    <ul class="cat-list">
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">shopping bag </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Gym backpack</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">purse</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar-col-3.html" class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">wallet</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header Search Start -->
                    <div class="self-center gi-header-search my-[0] mx-[auto] max-[991px]:m-0">
                        <div
                            class="header-search w-full min-w-[700px] px-[30px] flex justify-center relative max-[1399px]:min-w-[500px] max-[1199px]:min-w-[400px] max-[991px]:p-0 max-[767px]:min-w-[350px] max-[480px]:min-w-[300px] max-[320px]:min-w-full">
                            <form
                                class="gi-search-group-form h-[50px] max-w-[500px] w-[100%] relative flex border-[1px] border-solid border-[#eee] items-center"
                                action="#">
                                <input
                                    class="form-control gi-search-bar block w-full min-h-[50px] h-[50px] max-[991px]:h-[40px] max-[991px]:min-h-[40px] px-[15px] text-[13px] font-normal leading-[1] text-[#777] bg-transparent outline-[0] border-[0] tracking-[0.6px]"
                                    placeholder="Search Products..." type="text">
                                <button type="submit"
                                    class="search_submit relative flex items-center justify-center w-[48px] h-[40px] basis-[48px]">
                                    <i
                                        class="fi-rr-search text-[#4b5966] h-[18px] w-[18px] transition-all duration-[0.3s] ease-in-out"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Header Search End -->
                    <div class="gi-location-block py-[5px]">
                        <div class="gi-location-menu transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-location-toggle w-[200px] min-h-[50px] px-[15px] flex items-center bg-[#5caf90] cursor-pointer">
                                <i class="fi fi-rr-marker location text-[#fff] text-[18px] leading-[0]"></i>
                                <span
                                    class="gi-location-title gi-location w-[calc(100%-30px)] px-[10px] text-[15px] text-[#fff] font-medium tracking-[0.2px] whitespace-nowrap truncate">New
                                    York</span>
                                <i class="fi-rr-angle-small-down gi-angle text-[18px] uppercase text-[#fff] text-center absolute right-[15px] leading-[0]"
                                    aria-hidden="true"></i>
                            </div>
                            <div
                                class="gi-location-content transition-all duration-[0.3s] ease-in-out w-[200px] py-[15px] px-[13px] mt-[15px] block absolute invisible left-auto right-0 top-[100%] z-[14] border-[1px] border-solid border-[#eee] bg-[#fff] overflow-auto">
                                <div class="gi-location-dropdown">
                                    <div class="w-full flex flex-wrap gi-location-wrapper">
                                        <ul class="loc-grid w-full">
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">current
                                                    Location</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Los
                                                    Angeles</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Chicago</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Houston</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Phoenix</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">San
                                                    Diego</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header menu End -->

        <!-- Mobile Menu sidebar Start -->
        <div class="gi-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]"></div>
        <div id="gi-mobile-menu"
            class="gi-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] pb-[20px] px-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]">
            <div class="gi-menu-title w-full pb-[10px] flex flex-wrap justify-between">
                <span class="menu_title flex items-center text-[16px] text-[#4b5966] font-semibold">My Menu</span>
                <button type="button"
                    class="gi-close-menu relative text-[30px] leading-[1] text-[#777] bg-transparent border-0 mx-[5px]">×</button>
            </div>
            <div class="gi-menu-inner">
                <div class="gi-menu-content">
                    <ul>
                        <li class="dropdown relative drop-list">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] text-[15px] font-medium">Home</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li><a href="index.html"
                                        class="mb-[0] pl-[15px] py-[12px] pr-[0] capitalize block text-[14px] font-normal text-[#777]">Grocery</a>
                                </li>
                                <li><a href="demo-2.html"
                                        class="mb-[0] pl-[15px] py-[12px] pr-[0] capitalize block text-[14px] font-normal text-[#777]">Fashion</a>
                                </li>
                                <li><a href="demo-3.html"
                                        class="mb-[0] pl-[15px] py-[12px] pr-[0] capitalize block text-[14px] font-normal text-[#777]">Fashion
                                        2</a></li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] text-[15px] font-medium">Categories</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Classic
                                        Variation</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="shop-left-sidebar-col-3.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Left
                                                sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Left
                                                sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Right
                                                sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Right
                                                sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Full
                                                width 4 column</a></li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Classic
                                        Variation</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="shop-banner-left-sidebar-col-3.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                left sidebar 3 column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                left sidebar 4 column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                right sidebar 3 column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                right sidebar 4 column</a></li>
                                        <li><a href="shop-banner-full-width.html"
                                                class="pl-[30px] py-[12px] text-[14px] block text-[#999] font-normal">Banner
                                                Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Columns
                                        Variation</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="shop-full-width-col-3.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">3
                                                Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">4
                                                Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">5
                                                Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">6
                                                Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                3 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">List
                                        Variation</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="shop-list-left-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Shop
                                                left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Shop
                                                right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Full
                                                width 2 columns</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] text-[15px] font-medium">Products</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Product
                                        page</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="product-left-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Product
                                                left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Product
                                                right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Product
                                        accordion</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="product-accordion-left-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">left
                                                sidebar</a></li>
                                        <li><a href="product-accordion-right-sidebar.html"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">right
                                                sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">product
                                        full width</a></li>
                                <li><a href="product-accordion-full-width.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">accordion
                                        full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] text-[15px] font-medium">Blog</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li><a href="blog-left-sidebar.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        detail right sidebar</a></li>
                                <li><a href="blog-full-width.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        full width</a></li>
                                <li><a href="blog-detail-full-width.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        detail full width</a></li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] text-[15px] font-medium">Others</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li><a href="about-us.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">About
                                        Us</a></li>
                                <li><a href="contact-us.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Contact
                                        Us</a></li>
                                <li><a href="cart.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Cart</a>
                                </li>
                                <li><a href="checkout.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Checkout</a>
                                </li>
                                <li><a href="compare.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Compare</a>
                                </li>
                                <li><a href="faq.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">FAQ</a>
                                </li>
                                <li><a href="login.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Login</a>
                                </li>
                                <li><a href="register.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Register</a>
                                </li>
                                <li><a href="track-order.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Track
                                        Order</a></li>
                                <li><a href="terms-condition.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Terms
                                        Condition</a></li>
                                <li><a href="privacy-policy.html"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Privacy
                                        Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <!-- Social Start -->
                    <div class="header-res-social mt-[30px]">
                        <div class="header-top-social">
                            <ul class="flex flex-row justify-center">
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] mr-[15px]">
                                    <a href="#"><i class="gicon gi-facebook text-[#fff]"></i></a>
                                </li>
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] mr-[15px]">
                                    <a href="#"><i class="gicon gi-twitter text-[#fff]"></i></a>
                                </li>
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] mr-[15px]">
                                    <a href="#"><i class="gicon gi-instagram text-[#fff]"></i></a>
                                </li>
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966]">
                                    <a href="#"><i class="gicon gi-linkedin text-[#fff]"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- Mobile Menu sidebar End -->
    </header>
    <!-- Header End  -->

    <!-- Cart sidebar Start -->
    <div class="gi-side-cart-overlay w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[17] hidden"></div>
    <div id="gi-side-cart" class="gi-side-cart w-[350px] max-[480px]:w-[300px] h-full pt-[15px] px-[20px] text-[14px] font-normal fixed z-[17] top-[0] right-0 left-auto block transition-all duration-[0.5s] ease delay-0 bg-[#fff] overflow-auto">
        <div class="gi-cart-inner relative z-[9] flex flex-col h-full justify-between">
            <div class="gi-cart-top">
                <div class="gi-cart-title w-full flex flex-wrap justify-between">
                    <span class="cart_title text-[15px] text-[#4b5966] font-Poppins font-semibold mb-[20px]">My Cart</span>
                    <a href="javascript:void(0)" class="gi-cart-close relative border-[0] text-[30px] leading-[20px] text-[#4b5966]">
                        <i class="fi-rr-cross-small text-[20px] leading-[0]"></i>
                    </a>
                </div>
                <ul class="gi-cart-pro-items">
                    <li class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee]">
                        <a href="product-left-sidebar.html" class="gi-pro-img flex grow-[1] basis-[20%] items-center">
                            <img src="assets/img/product-images/35_1.jpg" class="w-full" alt="product">
                        </a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="product-left-sidebar.html" class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Shirt for Men's</a>
                            <span class="cart-price text-[14px] block mt-[5px]">
                            <span class="text-[#777] font-semibold text-[16px]">$45.00</span> x 1</span>
                            <div class="qty-plus-minus border-[1px] border-solid border-[#eee] h-[35px] overflow-hidden relative w-[85px] flex items-center justify-between py-[7px] mt-[7px]">
                                <input class="qty-input" type="text" name="gi-qtybtn" value="1">
                            </div>
                            <a href="javascript:void(0)" class="remove leading-[15px] absolute top-[0] right-[0] pl-[10px] text-[#ff0000] text-[22px]">×</a>
                        </div>
                    </li>
                    <li class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee]">
                        <a href="product-left-sidebar.html" class="gi-pro-img flex grow-[1] basis-[20%] items-center">
                            <img src="assets/img/product-images/34_1.jpg" class="w-full" alt="product">
                        </a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="product-left-sidebar.html"
                                class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Women's Dress</a>
                            <span class="cart-price text-[14px] block mt-[5px]"><span
                                    class="text-[#777] font-semibold text-[16px]">$25.00</span> x 1</span>
                            <div
                                class="qty-plus-minus border-[1px] border-solid border-[#eee] h-[35px] overflow-hidden relative w-[85px] flex items-center justify-between py-[7px] mt-[7px]">
                                <input class="qty-input" type="text" name="gi-qtybtn" value="1">
                            </div>
                            <a href="javascript:void(0)"
                                class="remove leading-[15px] absolute top-[0] right-[0] pl-[10px] text-[#ff0000] text-[22px]">×</a>
                        </div>
                    </li>
                    <li class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee]">
                        <a href="product-left-sidebar.html" class="gi-pro-img flex grow-[1] basis-[20%] items-center">
                            <img src="assets/img/product-images/45_1.jpg" class="w-full" alt="product">
                        </a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="product-left-sidebar.html"
                                class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Men Shoes</a>
                            <span class="cart-price text-[14px] block mt-[5px]"><span
                                    class="text-[#777] font-semibold text-[16px]">$49.00</span> x 1</span>
                            <div
                                class="qty-plus-minus border-[1px] border-solid border-[#eee] h-[35px] overflow-hidden relative w-[85px] flex items-center justify-between py-[7px] mt-[7px]">
                                <input class="qty-input" type="text" name="gi-qtybtn" value="1">
                            </div>
                            <a href="javascript:void(0)"
                                class="remove leading-[15px] absolute top-[0] right-[0] pl-[10px] text-[#ff0000] text-[22px]">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="gi-cart-bottom">
                <div
                    class="cart-sub-total flex flex-wrap justify-between pt-[0] pb-[8px] border-t-[1px] border-solid border-[#eee] mt-[20px]">
                    <table class="table cart-table w-full">
                        <tbody class="mt-[10px]">
                            <tr>
                                <td class="text-left font-medium text-[#777] p-[6px]">Sub-Total :</td>
                                <td class="text-right font-bold text-[#777] p-[6px]">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left font-medium text-[#777] p-[6px]">VAT (20%) :</td>
                                <td class="text-right font-bold text-[#777] p-[6px]">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left font-medium text-[#777] p-[6px]">Total :</td>
                                <td class="text-right font-bold text-[#777] primary-color p-[6px]">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn flex justify-between mb-[20px]">
                    <a href="cart.html"
                        class="gi-btn-1 w-[48%] h-[40px] block uppercase font-semibold text-[14px] py-[8px] px-[15px] leading-[22px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative hover:bg-[#5caf90] hover:text-[#fff]">View
                        Cart</a>
                    <a href="checkout.html"
                        class="gi-btn-2 w-[48%] h-[40px] block uppercase font-semibold text-[14px] py-[8px] px-[15px] leading-[22px] bg-[#5caf90] text-[#fff] text-center transition-all dummy-[0.3s] ease-in-out hover:bg-[#4b5966]">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart sidebar End -->

    <!-- Hero Slider Start -->
    <section class="section gi-hero h-full w-full mb-[40px] max-[575px]:mb-[30px] max-[1199px]:relative">
        <div class="flex flex-wrap justify-between items-center mx-auto w-full">
            <div class="gi-main-content w-full">
                <!-- Hero Slider Start -->
                <div class="gi-slider-content h-full">
                    <div class="gi-main-slider">
                        <div class="gi-slider swiper-container main-slider-nav main-slider-dot">
                            <!-- Main slider  -->
                            <div class="swiper-wrapper">
                                <div class="gi-slide-item swiper-slide h-[800px] max-[1399px]:h-[500px] max-[991px]:h-[400px] max-[767px]:h-[300px] max-[575px]:h-[290px] max-[420px]:h-[230px] max-[420px]:bg-center bg-cover flex slide-1">
                                    <div class="flex flex-wrap justify-between items-center w-[100%] mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                                        <div class="gi-slide-content px-[12px] max-w-[33rem] max-[1399px]:max-w-[24rem] max-[1199px]:max-w-[20rem] max-[991px]:max-w-[17rem] max-[767px]:max-w-[14rem] max-[420px]:max-w-[12rem] max-[360px]:max-w-[10rem] flex flex-col justify-center relative z-[9] slider-animation">
                                            <p class="mb-[20px] text-[20px] text-[#5caf90] leading-[1] tracking-[0] font-medium max-[767px]:text-[16px] max-[767px]:mb-[10px] max-[360px]:text-[13px]">
                                                Starting at $ <b>20.00</b></p>
                                            <h1 class="gi-slide-title mb-[30px] text-[55px] leading-[68px] text-[#fff] tracking-[0.05rem] font-bold relative max-[1399px]:text-[40px] max-[1399px]:leading-[50px] max-[1199px]:text-[32px] max-[1199px]:leading-[42px] max-[991px]:text-[26px] max-[991px]:leading-[36px] max-[767px]:text-[22px] max-[767px]:leading-[32px] max-[767px]:mb-[20px] max-[420px]:text-[18px] max-[420px]:leading-[28px] max-[360px]:text-[17px] max-[360px]:leading-[27px]">
                                                Fashion sale for women's</h1>
                                            <div class="gi-slide-btn block">
                                                <a href="#" class="gi-btn-1 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]">Shop
                                                    Now
                                                    <i class="fi-rr-angle-double-small-right ml-[5px] text-[#fff] flex" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-slide-item swiper-slide h-[800px] max-[1399px]:h-[500px] max-[991px]:h-[400px] max-[767px]:h-[300px] max-[575px]:h-[290px] max-[420px]:h-[230px] max-[420px]:bg-center bg-cover flex slide-2">
                                    <div class="flex flex-wrap justify-between items-center w-[100%] mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                                        <div class="gi-slide-content px-[12px] max-w-[33rem] max-[1399px]:max-w-[24rem] max-[1199px]:max-w-[20rem] max-[991px]:max-w-[17rem] max-[767px]:max-w-[14rem] max-[420px]:max-w-[12rem] max-[360px]:max-w-[10rem] flex flex-col justify-center relative z-[9] slider-animation">
                                            <p class="mb-[20px] text-[20px] text-[#5caf90] leading-[1] tracking-[0] font-medium max-[767px]:text-[16px] max-[767px]:mb-[10px] max-[360px]:text-[13px]">
                                                Starting at $ <b>29.99</b></p>
                                            <h1 class="gi-slide-title mb-[30px] text-[55px] leading-[68px] text-[#fff] tracking-[0.05rem] font-bold relative max-[1399px]:text-[40px] max-[1399px]:leading-[50px] max-[1199px]:text-[32px] max-[1199px]:leading-[42px] max-[991px]:text-[26px] max-[991px]:leading-[36px] max-[767px]:text-[22px] max-[767px]:leading-[32px] max-[767px]:mb-[20px] max-[420px]:text-[18px] max-[420px]:leading-[28px] max-[360px]:text-[17px] max-[360px]:leading-[27px]">
                                                Explore glasses sale for Women's</h1>
                                            <div class="gi-slide-btn block">
                                                <a href="#" class="gi-btn-1 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]">Shop
                                                    Now
                                                    <i class="fi-rr-angle-double-small-right ml-[5px] text-[#fff] flex" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-white"></div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Category section -->
    <section class="gi-category body-bg py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap px-[12px]">
                <div class="min-[1200px]:w-full basis-auto max-w-full border-content-color">
                    <div class="gi-category-block owl-carousel flex">
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <span
                                    class="gi-lbl px-[5px] absolute top-[0] right-[0] bg-[#5caf90] text-[#fff] text-[12px] font-semibold">30%</span>
                                <img src="assets/img/category/c-1.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            Clothes</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">320 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <img src="assets/img/category/c-2.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            watches</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">65 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <span
                                    class="gi-lbl px-[5px] absolute top-[0] right-[0] bg-[#5caf90] text-[#fff] text-[12px] font-semibold">15%</span>
                                <img src="assets/img/category/c-3.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            Dresses</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">548 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <span
                                    class="gi-lbl px-[5px] absolute top-[0] right-[0] bg-[#5caf90] text-[#fff] text-[12px] font-semibold">10%</span>
                                <img src="assets/img/category/c-4.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            glasses</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">48 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <img src="assets/img/category/c-5.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            hat & caps</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">59 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <img src="assets/img/category/c-6.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            Shorts </h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">845 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <img src="assets/img/category/c-7.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4
                                            class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                            jacket</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">652 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <span
                                    class="gi-lbl px-[5px] absolute top-[0] right-[0] bg-[#5caf90] text-[#fff] text-[12px] font-semibold">20%</span>
                                <img src="assets/img/category/c-1.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4 class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">Clothes</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">253 Items</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gi-cat-box transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#f7f7f7] relative z-[5]">
                                <img src="assets/img/category/c-2.png" alt="category"
                                    class="h-[50px] w-[50px] w-50 my-[10px] block">
                                <div class="gi-cat-detail text-center">
                                    <a href="shop-left-sidebar-col-3.html">
                                        <h4 class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">Eggs</h4>
                                    </a>
                                    <p class="items m-[0] text-[13px] leading-[28px] text-[#777]">154 Items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category section End -->

    <!--  Day Of The Deal Start -->
    <section class="gi-deal-section py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap px-[12px] overflow-hidden">
                <div class="gi-deal-section w-full">
                    <div class="gi-products">
                        <div class="section-title mb-[20px] relative flex justify-between pb-[20px] z-[5] max-[767px]:flex-col"
                            data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                            <div class="section-detail">
                                <h2
                                    class="gi-title mb-[0] text-[25px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px]">
                                    Day of the <span class="text-[#5caf90]">deal</span></h2>
                                <p class="max-w-[400px] mt-[10px] text-[14px] text-[#777] leading-[18px]">Don't wait.
                                    The time will never be just right.</p>
                            </div>
                            <div id="dealend" class="dealend-timer max-[767px]:mt-[15px]"></div>
                        </div>
                        <div class="gi-deal-block mx-[-12px]" data-aos="fade-up" data-aos-duration="2000"
                            data-aos-delay="300">
                            <div class="deal-slick-carousel flex gi-product-slider">
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <span class="label veg max-[991px]:hidden">
                                                        <span class="dot"></span>
                                                    </span>
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/35_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/35_2.jpg" alt="Product">
                                                </a>
                                                <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                    <span class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                </span>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                                <div class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                    <ul class="flex">
                                                        <li class="bg-[#01f1f1] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#01f1f1]"></a>
                                                        </li>
                                                        <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                        </li>
                                                        <li class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex">
                                                        <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                        </li>
                                                        <li class="inline-block float-left cursor-pointer">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Dried Fruits</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Mixed
                                                    Nuts Berries Pack</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$56.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/34_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/34_2.jpg" alt="Product">
                                                </a>
                                                <span
                                                    class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                    <span
                                                        class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                </span>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i
                                                            class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i
                                                            class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i
                                                            class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i
                                                            class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                                <div class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                    <ul class="flex">
                                                        <li class="bg-[#FF0000] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#FF0000]"></a>
                                                        </li>
                                                        <li class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex">
                                                        <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                        </li>
                                                        <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                        </li>
                                                        <li class="inline-block float-left cursor-pointer">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">x</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left ">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Cookies</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Multi
                                                    Grain Combo Cookies</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$25.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <span class="label nonveg max-[991px]:hidden">
                                                        <span class="dot"></span>
                                                    </span>
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/45_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/45_1.jpg" alt="Product">
                                                </a>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i
                                                            class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i
                                                            class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i
                                                            class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i
                                                            class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                    <ul class="flex">
                                                        <li class="bg-[#Dc143c] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#Dc143c]"></a>
                                                        </li>
                                                        <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                        </li>
                                                        <li class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex">
                                                        <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">5</a>
                                                        </li>
                                                        <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                        </li>
                                                        <li class="inline-block float-left cursor-pointer">
                                                            <a href="javascript:void(0)"
                                                                class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left ">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Foods</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Fresh
                                                    Mango juice pack</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$49.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$65.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/52_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/52_1.jpg" alt="Product">
                                                </a>
                                                <span
                                                    class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                    <span
                                                        class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                </span>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i
                                                            class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i
                                                            class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i
                                                            class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i
                                                            class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left ">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Dried Fruits</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Dates
                                                    Value Fresh Pouch</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$78.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$85.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/54_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/54_1.jpg" alt="Product">
                                                </a>
                                                <span
                                                    class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                    <span
                                                        class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                </span>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i
                                                            class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i
                                                            class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i
                                                            class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i
                                                            class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Foods</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Stick
                                                    Fiber Masala Magic</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$50.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/48_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/48_1.jpg" alt="Product">
                                                </a>
                                                <span
                                                    class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                    <span
                                                        class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                </span>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i
                                                            class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i
                                                            class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i
                                                            class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i
                                                            class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                                <div class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                    <ul class="flex">
                                                        <li class="bg-[#01f1f1] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#01f1f1]"></a>
                                                        </li>
                                                        <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                        </li>
                                                        <li class="bg-[#5caf90] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                            <a href="javascript:void(0)" class="bg-[#5caf90]"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left ">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Fresh Fruit</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Natural
                                                    Hub Cherry Karonda</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$20.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$21.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div
                                        class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                        <div
                                            class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html"
                                                    class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/51_1.jpg" alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                        src="assets/img/product-images/51_1.jpg" alt="Product">
                                                </a>
                                                <div
                                                    class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                    <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Wishlist">
                                                        <i
                                                            class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                        <i
                                                            class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                        title="Compare">
                                                        <i
                                                            class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Add To Cart"
                                                        class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                        <i
                                                            class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left ">
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6
                                                    class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                    Tuber root</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html"
                                                    class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Fresh
                                                    Organic Ginger Pack</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    <i
                                                        class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                </span>
                                                <span class="gi-price">
                                                    <span
                                                        class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$2.00</span>
                                                    <span
                                                        class="old-price text-[14px] text-[#777] line-through">$3.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Day Of The Deal Start End -->

    <!-- Banner section -->
    <section class="gi-banner py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap px-[12px]">
                <div class="w-full">
                    <div class="gi-animated-banner w-full h-[600px] max-[1199px]:h-full bg-[url('assets/img/banner/11.jpg')] bg-center bg-no-repeat bg-cover overflow-hidden relative"
                        data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                        <div
                            class="gi-bnr-detail h-full py-[80px] px-[100px] max-[991px]:p-[50px] max-[420px]:p-[15px] flex flex-col justify-center items-end text-right relative">
                            <div class="gi-bnr-info">
                                <h3
                                    class="mt-[15px] mb-[15px] text-[#fff] leading-[1.2] font-semibold text-[1.75rem] max-[991px]:text-[20px] max-[767px]:text-[16px] max-[767px]:mt-[5px]">
                                    30% off sale <span class="text-[#fff] font-normal"></span></h3>
                                <h2
                                    class="text-[50px] max-[1399px]:text-[38px] max-[1199px]:text-[30px] max-[991px]:text-[28px] max-[767px]:text-[20px] max-[480px]:text-[18px] font-bold text-[#fff] leading-[65px] max-[1199px]:leading-[40px] max-[991px]:leading-[35px] max-[767px]:leading-[27px] max-[480px]:leading-[25px] z-[2] relative">
                                    Latest Exclusive <br>Summer Collection</h2>
                                <a href="shop-left-sidebar-col-3.html"
                                    class="gi-btn-2 mt-[15px] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[5px] max-[767px]:py-[6px] px-[10px] max-[767px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section End -->

    <!-- New Product tab Area Start -->
    <section class="gi-product-tab gi-products py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="gi-tab-title w-full inline-flex justify-between px-[12px] max-[991px]:flex-col">
                <div class="gi-main-title">
                    <div class="section-title mb-[20px] pb-[20px] flex flex-start">
                        <div class="section-detail">
                            <h2 class="gi-title mb-[0] text-[25px] max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope tracking-[0.01rem]">
                                New <span class="text-[#5caf90]">Arrivals</span></h2>
                            <p class="max-w-[400px] mt-[10px] text-[14px] text-[#777] leading-[18px] font-light">Shop
                                online for new arrivals and get free shipping!</p>
                        </div>
                    </div>
                </div>
                <!-- Tab Start -->
                <div class="gi-pro-tab mt-[0] max-[991px]:mt-[-20px] max-[991px]:mb-[30px]">
                    <ul class="nav-tabs flex flex-wrap max-[991px]:justify-start" id="myproTabTwo">
                        <li class="inline-block align-top text-[14px] text-[#777] uppercase p-[0] cursor-pointer font-medium transition-all duration-[0.3s] ease delay-[0s] leading-[20px] tracking-[0.7px] mr-[50px] max-[991px]:mr-[30px] max-[480px]:mr-[20px]">
                            <a class="nav-link relative font-medium p-[0] max-[480px]:text-[13px] max-[480px]:leading-[28px]" href="#all">All</a>
                        </li>
                        <li class="active inline-block align-top text-[14px] text-[#777] uppercase p-[0] cursor-pointer font-medium transition-all duration-[0.3s] ease delay-[0s] leading-[20px] tracking-[0.7px] mr-[50px] max-[991px]:mr-[30px] max-[480px]:mr-[20px]">
                            <a class="nav-link relative font-medium p-[0] max-[480px]:text-[13px] max-[480px]:leading-[28px]" href="#snack">Clothes</a>
                        </li>
                        <li class="inline-block align-top text-[14px] text-[#777] uppercase p-[0] cursor-pointer font-medium transition-all duration-[0.3s] ease delay-[0s] leading-[20px] tracking-[0.7px] mr-[50px] max-[991px]:mr-[30px] max-[480px]:mr-[20px]">
                            <a class="nav-link relative font-medium p-[0] max-[480px]:text-[13px] max-[480px]:leading-[28px]" href="#fruit">Footwear</a>
                        </li>
                        <li class="inline-block align-top text-[14px] text-[#777] uppercase p-[0] cursor-pointer font-medium transition-all duration-[0.3s] ease delay-[0s] leading-[20px] tracking-[0.7px]">
                            <a class="nav-link relative font-medium p-[0] max-[480px]:text-[13px] max-[480px]:leading-[28px]" href="#veg">accessories</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- New Product -->
            <div class="w-full flex flex-wrap mb-[-24px]">
                <div class="w-full">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pro-pane" id="all">
                            <div class="w-full flex flex-wrap">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/32_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/32_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#008000] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#008000]"></a>
                                                            </li>
                                                            <li class="bg-[#8118d5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#8118d5]"></a>
                                                            </li>
                                                            <li class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)" class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)" class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        men's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        stylish printed shirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$59.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$87.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/53_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/53_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        jewellery</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Rose
                                                        Gold Earring</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$60.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$80.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/54_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/54_1.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Lipstick</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Liquid
                                                        Matte Lipstick</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$20.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/33_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/33_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#5caf90] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5caf90]"></a>
                                                            </li>
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#e91e63] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#e91e63]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        women's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Stylish
                                                        printed women's dress</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$78.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$85.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/39_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/39_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Unisex</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Printed
                                                        Round Neck Tshirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$32.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$45.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/50_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/50_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        perfume</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Long
                                                        lasting perfume</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$25.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/45_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/45_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#Dc143c] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#Dc143c]"></a>
                                                            </li>
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">5</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Sports</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Women's
                                                        sport shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$500.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$600.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/49_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/49_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Belt</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        Leather Belt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$15.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$17.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/53_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/53_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        jewellery</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Rose
                                                        Gold Earring</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$60.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$80.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px] max-[1199px]:hidden max-[767px]:flex">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/54_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/54_1.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Lipstick</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Liquid
                                                        Matte Lipstick</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$20.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 1st Product tab end -->
                        <!-- 2nd Product tab start -->
                        <div class="tab-pro-pane" id="snack">
                            <div class="w-full flex flex-wrap">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/35_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/35_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#5DADE2] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5DADE2]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#EC7063] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#EC7063]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        men's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        wear printed shirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$50.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/34_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/34_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#5caf90] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5caf90]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#d3708a] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#d3708a]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        women's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Princess
                                                        Look fashion Dress</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$58.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$65.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/32_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/32_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        men's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        stylish printed shirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$59.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$87.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/33_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/33_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        women's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Stylish
                                                        printed women's dress</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$78.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$85.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/36_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/36_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        men's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        wear printed shirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$25.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$35.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/37_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/37_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Baby Wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Cotton
                                                        Clothes Sets for Boys</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$56.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/38_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/38_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Winter Wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        Jacket Fashion Coat</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$49.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$65.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/39_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/39_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Unisex</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Printed
                                                        Round Neck Tshirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$32.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$45.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/34_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/34_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        women's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Princess
                                                        Look fashion Dress</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$58.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$65.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px] max-[1199px]:hidden max-[767px]:flex">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/32_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/32_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#5f6af5] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#5f6af5]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">s</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">m</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        men's wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        stylish printed shirt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$59.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$87.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd Product tab end -->
                        <!-- 3rd Product tab start -->
                        <div class="tab-pro-pane" id="fruit">
                            <div class="w-full flex flex-wrap">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/40_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/40_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Sports</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        sport shoes black</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$100.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$120.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/41_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/41_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Sports</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a
                                                        href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        sport shoes blue</a></h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$150.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$170.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/42_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/42_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        party wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        Formal Shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$110.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$120.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/43_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/43_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        party wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">women's
                                                        Formal Shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$200.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$210.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/44_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/44_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Sneaker</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        sport shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$250.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$350.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/45_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/45_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Sports</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Women's
                                                        sport shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$500.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$600.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/46_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/46_1.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Casual</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Women's
                                                        casual shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$100.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$120.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/47_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/47_2.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Baby shoes</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Baby
                                                        printed shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$50.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$55.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/41_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/41_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Sports</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a
                                                        href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        sport shoes blue</a></h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$150.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$170.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px] max-[1199px]:hidden max-[767px]:flex">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/42_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/42_2.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flex">
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">6</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer mr-[5px]">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">7</a>
                                                            </li>
                                                            <li class="inline-block float-left cursor-pointer">
                                                                <a href="javascript:void(0)"
                                                                    class="p-[3px] h-[18px] min-w-[20px] capitalize flex items-center justify-center text-[12px] leading-[24px] bg-[#f7f7f7] text-[#777] font-normal">8</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        party wear</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        Formal Shoes</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$110.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$120.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd Product tab end -->
                        <!-- 4th Product tab start -->
                        <div class="tab-pro-pane" id="veg">
                            <div class="w-full flex flex-wrap">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/48_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/48_1.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li
                                                                class="bg-[#01f1f1] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#01f1f1]"></a>
                                                            </li>
                                                            <li
                                                                class="bg-[#e8c2ff] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#e8c2ff]"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        wallet</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Women's
                                                        wallet Hand Purse</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$50.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$70.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/49_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/49_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Belt</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        Leather Belt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$15.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$17.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/50_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/50_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        perfume</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Long
                                                        lasting perfume</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$25.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/51_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/51_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        shampoo</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">anti
                                                        dandruff shampoo</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$5.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$7.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/52_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/52_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative">New</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Body Lotion</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Body
                                                        Lotion for Dry Skin</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$2.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$3.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/53_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/53_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        jewellery</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Rose
                                                        Gold Earring</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$60.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$80.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/54_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/54_1.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Lipstick</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Liquid
                                                        Matte Lipstick</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$20.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/55_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/55_1.jpg" alt="Product">
                                                    </a>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        makeup kit</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Compact
                                                        makeup kit</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$80.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$90.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div
                                            class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div
                                                class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/49_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/49_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="gi-pro-option transition-all w-full duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[0] flex justify-between my-[0] pt-[20px] px-[20px] mx-auto opacity-0">
                                                        <ul class="flex">
                                                            <li class="bg-[#607d8b] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#607d8b]"></a>
                                                            </li>
                                                            <li class="bg-[#383838] transition-all duration-[0.3s] ease-in-out h-[15px] w-[15px] mx-[2px] flex items-center justify-center border-[1px] border-solid border-[#eee]">
                                                                <a href="javascript:void(0)" class="bg-[#383838]"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        Belt</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Men's
                                                        Leather Belt</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$15.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$17.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[480px]:w-full px-[12px] max-[1199px]:hidden max-[767px]:flex">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee]">
                                            <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html"
                                                        class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/50_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]"
                                                            src="assets/img/product-images/50_1.jpg" alt="Product">
                                                    </a>
                                                    <span
                                                        class="flags flex flex-col p-[0] uppercase absolute top-[10px] left-[10px] z-[2]">
                                                        <span
                                                            class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative">Sale</span>
                                                    </span>
                                                    <div
                                                        class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] top-[10px] bottom-[0] right-[-10px] max-[991px]:opacity-[1] max-[991px]:right-[10px] flex flex-col items-center my-[0] mx-auto opacity-0">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Wishlist">
                                                            <i
                                                                class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] modal-toggle">
                                                            <i
                                                                class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]"
                                                            title="Compare">
                                                            <i
                                                                class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] my-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee]">
                                                            <i
                                                                class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6
                                                        class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">
                                                        perfume</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                    <a href="product-left-sidebar.html"
                                                        class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Long
                                                        lasting perfume</a>
                                                </h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star fill text-[14px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                        <i
                                                            class="gicon gi-star text-[14px] text-[#777] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span
                                                            class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$25.00</span>
                                                        <span
                                                            class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product tab Area End -->

    <!-- Offer Banner Section Start -->
    <section class="gi-offer-section overflow-hidden py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <!--  Offer banners -->
            <div class="w-full flex flex-wrap">
                <div class="w-[33.33%] max-[1199px]:w-[50%] max-[767px]:w-full w-full px-[12px] wow fadeInUp" data-wow-duration="2s">
                    <div class="gi-ofr-banners">
                        <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                            <div class="gi-bnr-img w-full relative">
                                <span class="lbl py-[2px] px-[7px] text-[12px] absolute top-[0] left-[0] capitalize bg-[#fff] text-[#4b5966]">50% Off</span>
                                <img src="assets/img/banner/12.jpg" alt="banner" class="w-full">
                            </div>
                            <div class="gi-bnr-detail max-w-[150px] max-[1399px]:max-w-[120px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%] max-[1199px]:max-w-[160px] max-[1199px]:right-[15px] max-[991px]:max-w-[110px] max-[767px]:max-w-[155px] max-[420px]:max-w-[150px] max-[360px]:max-w-[110px] max-[360px]:top-auto max-[360px]:bottom-[30px] max-[360px]:right-[15px] max-[360px]:transform-none">
                                <h5 class="text-[#fff] text-[34px] font-bold leading-[1.2] capitalize mb-[6px] max-[1399px]:text-[28px] max-[1199px]:text-[22px] max-[991px]:text-[16px] max-[767px]:text-[20px] max-[420px]:text-[16px]">Women's Collection</h5>
                                <a href="shop-left-sidebar-col-3.html" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[5px] max-[360px]:py-[3px] px-[15px] max-[360px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[360px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[33.33%] max-[1199px]:w-[50%] max-[767px]:w-full w-full px-[12px] wow fadeInUp" data-wow-duration="2s">
                    <div class="gi-ofr-banners max-[767px]:mt-[30px]">
                        <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                            <div class="gi-bnr-img w-full relative">
                                <span class="lbl py-[2px] px-[7px] text-[12px] absolute top-[0] left-[0] capitalize bg-[#fff] text-[#4b5966]">60% Off</span>
                                <img src="assets/img/banner/13.jpg" alt="banner" class="w-full">
                            </div>
                            <div class="gi-bnr-detail max-w-[150px] max-[1399px]:max-w-[120px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%] max-[1199px]:max-w-[160px] max-[1199px]:right-[15px] max-[991px]:max-w-[110px] max-[767px]:max-w-[155px] max-[420px]:max-w-[150px] max-[360px]:max-w-[110px] max-[360px]:top-auto max-[360px]:bottom-[30px] max-[360px]:right-[15px] max-[360px]:transform-none">
                                <h5 class="text-[#fff] text-[34px] font-bold leading-[1.2] capitalize mb-[6px] max-[1399px]:text-[28px] max-[1199px]:text-[22px] max-[991px]:text-[16px] max-[767px]:text-[20px] max-[420px]:text-[16px]">Kid's Collection</h5>
                                <a href="shop-left-sidebar-col-3.html" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[5px] max-[360px]:py-[3px] px-[15px] max-[360px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[360px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[33.33%] max-[1199px]:hidden max-[767px]:flex max-[767px]:w-full w-full px-[12px] wow fadeInUp" data-wow-duration="2s">
                    <div class="gi-ofr-banners max-[767px]:mt-[30px]">
                        <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                            <div class="gi-bnr-img w-full relative">
                                <span class="lbl py-[2px] px-[7px] text-[12px] absolute top-[0] left-[0] capitalize bg-[#fff] text-[#4b5966]">70% Off</span>
                                <img src="assets/img/banner/14.jpg" alt="banner" class="w-full">
                            </div>
                            <div class="gi-bnr-detail max-w-[150px] max-[1399px]:max-w-[120px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%] max-[1199px]:max-w-[160px] max-[1199px]:right-[15px] max-[991px]:max-w-[110px] max-[767px]:max-w-[155px] max-[420px]:max-w-[150px] max-[360px]:max-w-[110px] max-[360px]:top-auto max-[360px]:bottom-[30px] max-[360px]:right-[15px] max-[360px]:transform-none">
                                <h5 class="text-[#fff] text-[34px] font-bold leading-[1.2] capitalize mb-[6px] max-[1399px]:text-[28px] max-[1199px]:text-[22px] max-[991px]:text-[16px] max-[767px]:text-[20px] max-[420px]:text-[16px]">Men's Collection</h5>
                                <a href="shop-left-sidebar-col-3.html" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[5px] max-[360px]:py-[3px] px-[15px] max-[360px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[360px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer section end -->

    <!-- Service Section -->
    <section class="gi-service-section py-[40px] max-[767px]:py-[30px]">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap mt-[-12px] mb-[-12px]">
                <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp">
                    <div
                        class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[20px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-truck-moving text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3
                                class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">
                                Free Shipping</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Free shipping on all
                                US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp" data-wow-delay=".4s">
                    <div
                        class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[20px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-hand-holding-seeding text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3
                                class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">
                                24X7 Support</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Contact us 24 hours
                                a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp" data-wow-delay=".6s">
                    <div
                        class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[20px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-badge-percent text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3
                                class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">
                                30 Days Return</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Simply return it
                                within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp" data-wow-delay=".8s">
                    <div
                        class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[20px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-donate text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3
                                class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">
                                Payment Secure</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Contact us 24 hours
                                a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Trending, Top Rated Start -->
    <section class="gi-offer-section overflow-hidden py-[40px] max-[767px]:py-[30px]">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap">
                <!-- Trending -->
                <div class="w-full gi-all-product-content mb-[40px] wow fadeInUp" data-wow-delay=".4s">
                    <div class="w-full px-[12px]">
                        <div class="section-title mb-[0] pb-[15px]">
                            <div class="section-detail">
                                <h2
                                    class="gi-title mb-[0] text-[25px] max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope tracking-[0.01rem]">
                                    Trending <span class="text-[#5caf90]">Items</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="gi-trending-slider">
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/32_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html" title="Healthy Nutmix, 200g Pack"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Men's
                                            stylish printed shirt</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Fashion</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$42.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$45.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/37_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Cotton
                                            Clothes Sets for Boys</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Baby Wear</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$25.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/49_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Men's
                                            Leather Belt</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Belt</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$62.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$65.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/50_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Long
                                            lasting perfume</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">perfume</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$10.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$11.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/54_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Liquid
                                            Matte Lipstick</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Lipstick</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$52.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$55.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/41_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Men's
                                            sport shoes blue</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">shoes</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$20.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                                <span class="qty text-[12px] text-[#777] ml-[9px] hidden">- 12
                                                    pcs</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Rated -->
                <div class="w-full gi-all-product-content mb-[40px] wow fadeInUp" data-wow-delay=".6s">
                    <div class="w-full px-[12px]">
                        <div class="section-title mb-[0] pb-[15px]">
                            <div class="section-detail">
                                <h2
                                    class="gi-title mb-[0] text-[25px] max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope tracking-[0.01rem]">
                                    Top <span class="text-[#5caf90]">Rated</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="gi-rated-slider">
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/53_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Rose
                                            Gold Earring</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">jewellery</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$62.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$65.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/36_2.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Men's
                                            wear printed shirt</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Fashion</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$56.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$78.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/46_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Women's
                                            casual shoes</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">shoes</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$25.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/51_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">anti
                                            dandruff shampoo</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">shampoo</a>
                                    </h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$20.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/38_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Men's
                                            Jacket Fashion Coat</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Clothes</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$50.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$55.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/48_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Women's
                                            wallet Hand Purse</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">wallet</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$52.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$55.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Selling -->
                <div class=" w-full gi-all-product-content wow fadeInUp" data-wow-delay=".8s">
                    <div class="w-full px-[12px]">
                        <div class="section-title mb-[0] pb-[15px]">
                            <div class="section-detail">
                                <h2
                                    class="gi-title mb-[0] text-[25px] max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope tracking-[0.01rem]">
                                    Top <span class="text-[#5caf90]">Selling</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="gi-trending-slider">
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/54_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Liquid
                                            Matte Lipstick</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Lipstick</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$52.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$55.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/48_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Women's
                                            wallet Hand Purse</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">wallet</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$52.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$55.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/50_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Long
                                            lasting perfume</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">perfume</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$10.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$11.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/37_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Cotton
                                            Clothes Sets for Boys</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">Baby
                                            Wear</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$25.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/41_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">Men's
                                            sport
                                            shoes blue</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">shoes</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$20.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                                <span class="qty text-[12px] text-[#777] ml-[9px] hidden">- 12
                                                    pcs</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full gi-all-product-block px-[12px]">
                            <div
                                class="gi-all-product-inner mr-[1px] p-[15px] flex flex-wrap items-center bg-[#fff] border-[1px] border-solid border-[#eee] overflow-hidden relative">
                                <div class="gi-pro-image-outer basis-[70px]">
                                    <div class="gi-pro-image overflow-hidden">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image w-full" src="assets/img/product-images/51_1.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <div class="gi-pro-content w-[calc(100%-70px)] basis-[calc(100%-70px)] pl-[15px]">
                                    <h5 class="gi-pro-title text-[16px]">
                                        <a href="product-left-sidebar.html"
                                            class="text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block font-Poppins text-[14px] leading-[24px] font-medium tracking-[0.2px] capitalize">anti
                                            dandruff shampoo</a>
                                    </h5>
                                    <h6
                                        class="gi-pro-stitle text-[#777] whitespace-nowrap overflow-hidden text-ellipsis block text-[12px] leading-[24px] font-normal tracking-[0.3px] capitalize mb-[5px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="text-[#999] hover:text-[#5caf90]">shampoo</a></h6>
                                    <div class="gi-pro-rat-price">
                                        <div class="gi-pro-rat-pri-inner">
                                            <span class="gi-price text-[14px] flex items-center text-[#5caf90]">
                                                <span
                                                    class="new-price text-[#4b5966] font-bold text-[14px]">$20.00</span>
                                                <span
                                                    class="old-price text-[12px] line-through text-[#777] ml-[9px]">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="add-to-cart w-[30px] h-[30px] absolute bottom-[10px] right-[10px] bg-[#fff] border-[1px] border-solid border-[#eee] flex items-center justify-center opacity-[0]"
                                        title="Add To Cart">
                                        <i class="fi-rr-shopping-basket text-[18px] text-[#777] leading-[0]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending, Top Rated End -->

    <!-- Blog Section Start -->
    <section class="gi-blog-section py-[40px] max-[767px]:py-[30px] wow fadeInUp">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap mb-[-24px]">
                <div
                    class="section-title w-full mb-[20px] pb-[20px] flex justify-between pb-[20px] z-[5] max-[575px]:flex-col px-[12px]">
                    <div class="section-detail">
                        <h2
                            class="gi-title mb-[0] text-[25px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px]">
                            Latest <span class="text-[#5caf90]">Blog</span></h2>
                        <p class="max-w-[400px] mt-[10px] text-[14px] text-[#777] leading-[18px]">We tackle interesting
                            topics every day in 2023.</p>
                    </div>
                    <span class="title-link flex flex-end max-[575px]:mt-[15px]">
                        <a href="blog-left-sidebar.html"
                            class="text-[#777] flex items-center max-[575px]:text-[14px]">All Blogs<i
                                class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out h-[18px] ml-[10px] text-[#777]"></i></a>
                    </span>
                </div>
                <div class="gi-blog-carousel owl-carousel px-[12px]">
                    <div class="gi-blog-item">
                        <div class="blog-info transition-all duration-[0.3s] ease-in-out w-full mb-[24px] bg-[#fff]">
                            <figure class="blog-img w-full h-auto m-[0] relative overflow-hidden">
                                <a href="#"><img src="assets/img/blog/9.jpg" alt="news imag"
                                        class="transition-all duration-[0.3s] ease-in-out h-full w-full"></a>
                            </figure>
                            <div class="detail w-full m-[0]">
                                <div class="inline-block py-[5px] px-[10px] absolute top-[12px] right-[12px] bg-[rgba(0,0,0,0.5)]">
                                    <h4 class="text-[18px] text-[#fff] text-center font-bold">30</h4>
                                    <span class="flex justify-center text-[12px] text-[#fff]">Jun</span>
                                </div>
                                <h3 class="mt-[10px] mb-[15px] p-[0] leading-[26px]"><a href="#"
                                        class="font-Poppins text-[#4b5966] text-[16px] font-medium leading-[22px]">Marketing
                                        Guide: 5 Steps to Success to way.</a></h3>
                                <div class="more-info">
                                    <a href="blog-detail-left-sidebar.html"
                                        class="transition-all duration-[0.3s] ease-in-out text-[#4b5966] text-[13px] flex items-center hover:text-[#5caf90]">Read
                                        More<i
                                            class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out ml-[5px] text-[#4b5966] text-[13px] flex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gi-blog-item">
                        <div class="blog-info">
                            <figure class="blog-img w-full h-auto m-[0] relative overflow-hidden">
                                <a href="#"><img src="assets/img/blog/10.jpg" alt="news imag"
                                        class="transition-all duration-[0.3s] ease-in-out h-full w-full"></a>
                            </figure>
                            <div class="detail w-full m-[0]">
                                <div class="inline-block py-[5px] px-[10px] absolute top-[12px] right-[12px] bg-[rgba(0,0,0,0.5)]">
                                    <h4 class="text-[18px] text-[#fff] text-center font-bold">02</h4>
                                    <span class="flex justify-center text-[12px] text-[#fff]">Apr</span>
                                </div>
                                <h3 class="mt-[10px] mb-[15px] p-[0] leading-[26px]"><a href="#"
                                        class="font-Poppins text-[#4b5966] text-[16px] font-medium leading-[22px]">Best
                                        way to solve business deal issue in market.</a></h3>
                                <div class="more-info">
                                    <a href="blog-detail-left-sidebar.html"
                                        class="transition-all duration-[0.3s] ease-in-out text-[#4b5966] text-[13px] flex items-center hover:text-[#5caf90]">Read
                                        More<i
                                            class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out ml-[5px] text-[#4b5966] text-[13px] flex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gi-blog-item">
                        <div class="blog-info">
                            <figure class="blog-img w-full h-auto m-[0] relative overflow-hidden">
                                <a href="#"><img src="assets/img/blog/11.jpg" alt="news imag"
                                        class="transition-all duration-[0.3s] ease-in-out h-full w-full"></a>
                            </figure>
                            <div class="detail w-full m-[0]">
                                <div class="inline-block py-[5px] px-[10px] absolute top-[12px] right-[12px] bg-[rgba(0,0,0,0.5)]">
                                    <h4 class="text-[18px] text-[#fff] text-center font-bold">09</h4>
                                    <span class="flex justify-center text-[12px] text-[#fff]">Mar</span>
                                </div>
                                <h3 class="mt-[10px] mb-[15px] p-[0] leading-[26px]"><a href="#"
                                        class="font-Poppins text-[#4b5966] text-[17px] font-medium leading-[22px]">31
                                        grocery customer service stats know in 2019.</a></h3>
                                <div class="more-info">
                                    <a href="blog-detail-left-sidebar.html"
                                        class="transition-all duration-[0.3s] ease-in-out text-[#4b5966] text-[13px] flex items-center hover:text-[#5caf90]">Read
                                        More<i
                                            class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out ml-[5px] text-[#4b5966] text-[13px] flex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gi-blog-item">
                        <div class="blog-info">
                            <figure class="blog-img w-full h-auto m-[0] relative overflow-hidden">
                                <a href="#"><img src="assets/img/blog/12.jpg" alt="news imag"
                                        class="transition-all duration-[0.3s] ease-in-out h-full w-full"></a>
                            </figure>
                            <div class="detail w-full m-[0]">
                                <div class="inline-block py-[5px] px-[10px] absolute top-[12px] right-[12px] bg-[rgba(0,0,0,0.5)]">
                                    <h4 class="text-[18px] text-[#fff] text-center font-bold">25</h4>
                                    <span class="flex justify-center text-[12px] text-[#fff]">Jan</span>
                                </div>
                                <h3 class="mt-[10px] mb-[15px] p-[0] leading-[26px]"><a href="#"
                                        class="font-Poppins text-[#4b5966] text-[17px] font-medium leading-[22px]">Business
                                        ideas to grow your business traffic.</a></h3>
                                <div class="more-info">
                                    <a href="blog-detail-left-sidebar.html"
                                        class="transition-all duration-[0.3s] ease-in-out text-[#4b5966] text-[13px] flex items-center hover:text-[#5caf90]">Read
                                        More<i
                                            class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out ml-[5px] text-[#4b5966] text-[13px] flex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gi-blog-item">
                        <div class="blog-info">
                            <figure class="blog-img w-full h-auto m-[0] relative overflow-hidden">
                                <a href="#"><img src="assets/img/blog/13.jpg" alt="news imag"
                                        class="transition-all duration-[0.3s] ease-in-out h-full w-full"></a>
                            </figure>
                            <div class="detail w-full m-[0]">
                                <div class="inline-block py-[5px] px-[10px] absolute top-[12px] right-[12px] bg-[rgba(0,0,0,0.5)]">
                                    <h4 class="text-[18px] text-[#fff] text-center font-bold">10</h4>
                                    <span class="flex justify-center text-[12px] text-[#fff]">Dec</span>
                                </div>
                                <h3 class="mt-[10px] mb-[15px] p-[0] leading-[26px]"><a href="#"
                                        class="font-Poppins text-[#4b5966] text-[17px] font-medium leading-[22px]">Marketing
                                        Guide: 5 Steps way to Success.</a></h3>
                                <div class="more-info">
                                    <a href="blog-detail-left-sidebar.html"
                                        class="transition-all duration-[0.3s] ease-in-out text-[#4b5966] text-[13px] flex items-center hover:text-[#5caf90]">Read
                                        More<i
                                            class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out ml-[5px] text-[#4b5966] text-[13px] flex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gi-blog-item">
                        <div class="blog-info">
                            <figure class="blog-img w-full h-auto m-[0] relative overflow-hidden">
                                <a href="#"><img src="assets/img/blog/14.jpg" alt="news imag"
                                        class="transition-all duration-[0.3s] ease-in-out h-full w-full"></a>
                            </figure>
                            <div class="detail w-full m-[0]">
                                <div class="inline-block py-[5px] px-[10px] absolute top-[12px] right-[12px] bg-[rgba(0,0,0,0.5)]">
                                    <h4 class="text-[18px] text-[#fff] text-center font-bold">08</h4>
                                    <span class="flex justify-center text-[12px] text-[#fff]">Aug</span>
                                </div>
                                <h3 class="mt-[10px] mb-[15px] p-[0] leading-[26px]"><a href="#"
                                        class="font-Poppins text-[#4b5966] text-[17px] font-medium leading-[22px]">15
                                        customer service stats idea know in 2023.</a></h3>
                                <div class="more-info">
                                    <a href="blog-detail-left-sidebar.html"
                                        class="transition-all duration-[0.3s] ease-in-out text-[#4b5966] text-[13px] flex items-center hover:text-[#5caf90]">Read
                                        More<i
                                            class="fi-rr-angle-double-small-right transition-all duration-[0.3s] ease-in-out ml-[5px] text-[#4b5966] text-[13px] flex"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Start -->
    <footer class="gi-footer bg-[#fff] border-t-[1px] border-solid border-[#eee] mt-[40px]">
        <div class="footer-container">
            <div class="footer-top py-[80px] max-[767px]:py-[60px]">
                <div
                    class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                    <div class="w-full flex flex-wrap">
                        <div class="min-[992px]:w-[25%] px-[12px] w-full gi-footer-cat wow fadeInUp">
                            <div class="gi-footer-widget gi-footer-company flex flex-col">
                                <img src="assets/img/logo/logo.png"
                                    class="gi-footer-logo max-w-[144px] max-[767px]:max-w-[130px]  mb-[30px]"
                                    alt="footer logo">
                                <p
                                    class="gi-footer-detail max-w-[400px] mb-[30px] p-[0] text-[14px] leading-[27px] font-normal text-[#777] inline-block relative max-[1199px]:text-[14px]">
                                    Grabit is the biggest market of grocery products. Get your
                                    daily needs from our store.</p>
                                <div
                                    class="gi-app-store mb-[30px] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row max-[320px]:flex-col">
                                    <a href="#" class="app-img"><img src="assets/img/app/android.png"
                                            class="adroid max-w-[140px] max-[1399px]:max-w-[120px]  mb-[15px] mr-[15px]"
                                            alt="apple"></a>
                                    <a href="#" class="app-img"><img src="assets/img/app/apple.png"
                                            class="apple max-w-[140px] max-[1399px]:max-w-[120px] mb-[15px]"
                                            alt="apple"></a>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-info wow fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="gi-footer-widget">
                                <h4
                                    class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">
                                    Category</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Dairy
                                                & Milk</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-banner-left-sidebar-col-3.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Snack
                                                & Spice</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-full-width-col-5.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Fast
                                                Food</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-list-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Juice
                                                & Drinks</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="shop-list-full-col-2.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Bakery</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="shop-banner-right-sidebar-col-4.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Seafood</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-account wow fadeInUp"
                            data-wow-delay="0.3s">
                            <div class="gi-footer-widget">
                                <h4
                                    class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">
                                    Company</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="about-us.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">About
                                                us</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="track-order.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Delivery</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="privacy-policy.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Legal
                                                Notice</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="terms-condition.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Terms
                                                & conditions</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="checkout.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Secure
                                                payment</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="contact-us.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Contact
                                                us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-service wow fadeInUp"
                            data-wow-delay="0.4s">
                            <div class="gi-footer-widget">
                                <h4
                                    class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">
                                    Account</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="register.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Sign
                                                In</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="cart.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">View
                                                Cart</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="privacy-policy.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Return
                                                Policy</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Become
                                                a Vendor</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Affiliate
                                                Program</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="checkout.html"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Payments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[25%] gi-footer-toggle px-[12px] w-full gi-footer-cont-social mb-[-20px] wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="gi-footer-contact mb-[30px] max-[991px]:mb-[0]">
                                <div class="gi-footer-widget">
                                    <h4
                                        class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">
                                        Contact</h4>
                                    <div class="gi-footer-links gi-footer-dropdown">
                                        <ul class="align-itegi-center">
                                            <li
                                                class="gi-footer-link gi-foo-location m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i
                                                        class="fi fi-rr-marker location leading-[0] text-[18px] mt-[5px] h-[25px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <p class="m-[0] text-[14px] font-normal text-[#777]">2548 Broaddus Maple
                                                    Court, Madisonville KY 4783, USA.</p>
                                            </li>
                                            <li
                                                class="gi-footer-link gi-foo-call m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i
                                                        class="fi fi-brands-whatsapp leading-[0] text-[18px] h-[20px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <a href="tel:+009876543210"
                                                    class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">+00
                                                    9876543210</a>
                                            </li>
                                            <li
                                                class="gi-footer-link gi-foo-mail m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i
                                                        class="fi fi-rr-envelope leading-[0] text-[18px] h-[20px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <a href="mailto:example@email.com"
                                                    class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">example@email.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-footer-social">
                                <div class="gi-footer-widget">
                                    <div class="gi-footer-links gi-footer-dropdown">
                                        <ul class="align-itegi-center flex flex-wrap">
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-facebook text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-twitter text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-linkedin text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-instagram text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="footer-bottom py-[10px] max-[991px]:py-[15px] border-t-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
                <div
                    class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                    <div class="w-full flex flex-wrap">
                        <div
                            class="gi-bottom-info flex flex-row items-center justify-between w-full px-[12px] max-[991px]:flex-col">
                            <!-- Footer Copyright Start -->
                            <div class="footer-copy max-[991px]:mb-[15px]">
                                <div class="footer-bottom-copy">
                                    <div class="gi-copy text-[#777] text-[13px] tracking-[1px] text-center font-light">
                                        Copyright ©
                                        <a class="site-name text-[#5caf90]" href="index.html">Grabit</a>
                                        all rights reserved. Powered by Grabit.
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Copyright End -->
                            <!-- Footer payment -->
                            <div class="footer-bottom-right">
                                <div class="footer-bottom-payment flex justify-content-center">
                                    <div class="payment-link">
                                        <img src="assets/img/hero-bg/payment.png" alt="payment">
                                    </div>
                                </div>
                            </div>
                            <!-- Footer payment -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Quickview Modal -->
    <div class="gi-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[30] bg-[#000000b3]"></div>
    <div class="modal gi-modal max-[575px]:w-full fixed top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto">
        <div class="modal-dialog modal-dialog-centered h-full my-[0%] mx-auto max-w-[900px] w-[900px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out">
            <div class="modal-content quickview-modal p-[30px] relative bg-[#fff] max-[360px]:p-[15px]">
                <button type="button"
                    class="gi-close-modal qty_close absolute top-[10px] right-[10px] leading-[18px] max-[420px]:top-[5px] max-[420px]:right-[5px]"></button>
                <div class="modal-body mx-[-12px] max-[767px]:mx-[0]">
                    <div class="w-full flex flex-wrap w-full">
                        <div class="min-[768px]:w-[41.66%] px-[12px] max-[767px]:px-[0] w-full">
                            <div
                                class="single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] overflow-hidden">
                                <div class="single-product-scroll h-full">
                                    <div class="single-slide h-full flex items-center zoom-image-hover">
                                        <img class="img-responsive h-full w-full"
                                            src="assets/img/product-images/32_1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[768px]:w-[58.33%] px-[12px] max-[767px]:px-[0] w-full max-[767px]:mt-[30px]">
                            <div class="quickview-pro-content">
                                <h5 class="gi-quick-title">
                                    <a href="product-left-sidebar.html" class="mb-[15px] block text-[#4b5966] text-[22px] leading-[1.5] font-medium max-[991px]:text-[20px]">Mix Men's stylish printed shirt</a>
                                </h5>
                                <div class="gi-quickview-rating flex mb-[15px]">
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[5px]"></i>
                                    <i class="gicon gi-star text-[14px] text-[#777] mr-[5px]"></i>
                                </div>
                                <div
                                    class="gi-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1900s,</div>
                                <div class="gi-quickview-price pt-[5px] pb-[10px] flex items-center justify-left">
                                    <span class="new-price text-[#4b5966] font-bold text-[22px]">$50.00</span>
                                    <span class="old-price text-[18px] ml-[10px] line-through text-[#777]">$62.00</span>
                                </div>
                                <div class="gi-pro-variation mt-[5px]">
                                    <div
                                        class="gi-pro-variation-inner flex flex-col mb-[15px] gi-pro-variation-size gi-pro-size">
                                        <div class="gi-pro-variation-content">
                                            <ul class="gi-opt-size">
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90] active">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Small">S</a>
                                                </li>
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Medium">M</a>
                                                </li>
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Large">X</a>
                                                </li>
                                                <li class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]" data-tooltip="Extra Large">XL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-quickview-qty mt-[15px] inline-flex">
                                    <div
                                        class="qty-plus-minus w-[100px] h-[43px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between">
                                        <input
                                            class="qty-input w-[40px] h-[50px] text-[#777] text-[14px] text-center outline-[0]"
                                            type="text" name="gi_qtybtn" value="1">
                                    </div>
                                    <div class="gi-quickview-cart">
                                        <button type="button"
                                            class="gi-btn-1 ml-[15px] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]"><i
                                                class="fi-rr-shopping-basket text-[14px] leading-[0] mr-[5px]"></i> Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quickview Modal end -->

    <!-- Newsletter Modal Start -->
    <div id="gi-popnews-bg"></div>
    <div id="gi-popnews-box">
        <div id="gi-popnews-close"
            class="transition-all duration-[0.3s] ease-in-out absolute top-[0] right-[0] cursor-pointer h-[30px] w-[30px] text-[#ff0000] rounded-[100%] flex items-center justify-center text-[24px] leading-[1] opacity-[0.5] hover:opacity-[1]">
            ×</div>
        <div class="mx-[-12px]">
            <div class="w-full flex flex-wrap">
                <div class="min-[768px]:w-[50%] w-full px-[12px] max-[767px]:hidden">
                    <img src="assets/img/bg/newsletter-2.png" alt="newsletter" class="w-full">
                </div>
                <div class="min-[768px]:w-[50%] w-full px-[12px]">
                    <div id="gi-popnews-box-content" class="h-full flex flex-col items-center justify-center">
                        <h2
                            class="text-[#4b5966] block text-[22px] leading-[33px] font-semibold mb-[10px] mx-auto leading-[0] capitalize">
                            Newsletter.</h2>
                        <p class="text-[15px] leading-[28px] font-light mb-[1rem]">Subscribe the masterkart to get in
                            touch and get the future update.</p>
                        <form id="gi-popnews-form" action="#" method="post">
                            <input type="email" name="newsemail"
                                class="bg-transparent border-[1px] border-solid border-[#eee] text-[14px] mb-[27px] px-[15px] w-full h-[50px] outline-[0]"
                                placeholder="Email Address" required>
                            <button type="button"
                                class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative py-[10px] max-[360px]:py-[3px] px-[15px] max-[360px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[360px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]"
                                name="subscribe">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    <!-- Back to top  -->
    <a class="gi-back-to-top inline-block bg-[#4b5966] w-[40px] h-[40px] text-center fixed bottom-[30px] right-[30px] opacity-[0] invisible z-[16] border-[1px] border-solid border-[#fff] hover:cursor-pointer hover:bg-[#383838] hover:opacity-[1] max-[767px]:bottom-[15px] max-[767px]:right-[15px]"></a>

    <!-- Feature tools -->
    <div class="gi-tools-sidebar-overlay hidden w-full h-screen fixed top-0 left-0 bg-[#00000080] z-[16]"></div>
    <div class="gi-tools-sidebar bg-[#fff] w-[300px] h-screen fixed right-0 top-0 transition-all duration-[0.3s] ease z-[17]">
        <a href="javascript:void(0)"
            class="gi-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] h-[40px] w-[40px] bg-[#1d253199] transition-all duration-[0.3s] ease-in flex items-center justify-center text-[25px] z-[-1]">
            <i class="fi fi-rr-settings text-[#fff]"></i>
        </a>
        <div
            class="gi-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#17181c]">
            <h6 class="m-0 text-[17px] font-bold text-[#4b5966] leading-[1.2]">Tools</h6>
            <a href="javascript:void(0)" class="close-tools relative border-[0] text-[30px] leading-[20px] text-[#4b5966]">
                <i class="fi-rr-cross-small text-[20px] leading-[0]"></i>
            </a>
        </div>
        <div class="gi-tools-detail overflow-auto px-[15px] pb-[15px] h-[calc(100vh-72px)]">
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Select Color
                </h3>
                <ul class="gi-color">
                    <li
                        class="color-primary inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative active-variant">
                    </li>
                    <li class="color-1 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-2 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-3 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-4 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-5 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-6 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-7 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-8 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li class="color-9 inline-block h-[35px] w-[35px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                </ul>
            </div>
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Modes</h3>
                <div class="gi-tools-rtl flex flex-wrap flex-row justify-between">
                    <div class="mode-primary gi-tools-item w-[125px] mb-[10px] text-center mode active-rtl ltr"
                        data-gi-mode-tool="ltr">
                        <img src="assets/img/tools/ltr.png" alt="ltr"
                            class="w-full p-[5px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">LTR</p>
                    </div>
                    <div class="gi-tools-item w-[125px] mb-[10px] text-center mode rtl" data-gi-mode-tool="rtl">
                        <img src="assets/img/tools/rtl.png" alt="rtl"
                            class="w-full p-[5px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">RTL</p>
                    </div>
                </div>
            </div>
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Dark Modes</h3>
                <div class="gi-tools-dark flex flex-wrap flex-row justify-between">
                    <div class="mode-primary gi-dark-item mode w-[125px] mb-[10px] text-center active-dark light"
                        data-gi-mode-tool="light">
                        <img src="assets/img/tools/light.png" alt="light"
                            class="w-full p-[5px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">Light</p>
                    </div>
                    <div class="gi-dark-item w-[125px] mb-[10px] text-center mode dark" data-gi-mode-tool="dark">
                        <img src="assets/img/tools/dark.png" alt="dark"
                            class="w-full p-[5px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">Dark</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/fontawesome.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/countdownTimer.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/nouislider.js"></script>
    <script src="assets/js/plugins/wow.js"></script>

    <!-- Main Js -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo-3.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/demo-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2025 01:58:39 GMT -->
</html>