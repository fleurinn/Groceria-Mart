<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/blog-detail-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2025 01:58:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Grabit - Multipurpose eCommerce Tailwind CSS Template.</title>
    <meta name="keywords"
        content="tailwindcss, ecommerce, farming, food market, grocery market, grocery shop, grocery store, grocery supper market, multi vendor, organic food, supermarket, supermarket grocery">
    <meta name="description" content="Multipurpose eCommerce Tailwind CSS Template">
    <meta name="author" content="Maraviya Infotech">
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
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Main Style -->
    <link rel="stylesheet" id="main_style" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


</head>

<body class="w-full h-full relative font-Poppins font-normal overflow-x-hidden">

    <!-- Loader -->
    <div id="gi-overlay"
        class=" w-full h-full fixed top-0 right-0 left-0 bottom-0 bg-[#fff] z-[99] flex items-center justify-center overflow-hidden">
        <div class="loader"></div>
    </div>

    <!-- Header start  -->
    <header class="gi-header bg-[#fff] z-[14] max-[991px]:z-[16] relative">
        <!-- Header Top Start -->
        <div class="header-top py-[10px] text-[#777] bg-[#f8f8fb]">
            <div
                class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <!-- Header Top social Start -->
                    <div class="grow-[1] shrink-[0] basis-[0%] min-[992px]:block max-[767px]:hidden">
                        <div class="header-top-social">
                            <ul class="mb-[0] p-[0] flex">
                                <li
                                    class="list-inline-item transition-all duration-[0.3s] ease-in-out flex text-[13px] mr-[15px]">
                                    <a href="javascript:void(0)"
                                        class="mx-[5px] text-center flex items-center justify-center text-[15px]">
                                        <i
                                            class="fi fi-rr-phone-call transition-all duration-[0.3s] ease-in-out text-[#777]"></i>
                                    </a>
                                    +91 987 654 3210
                                </li>
                                <li
                                    class="list-inline-item transition-all duration-[0.3s] ease-in-out flex text-[13px]">
                                    <a href="javascript:void(0)"
                                        class="mx-[5px] text-center flex items-center justify-center text-[15px]">
                                        <i
                                            class="fi fi-brands-whatsapp transition-all duration-[0.3s] ease-in-out text-[#777]"></i>
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
                    <div class="grow-[1] shrink-[0] basis-[0%] hidden min-[992px]:block">
                        <div class="header-top-right-inner flex justify-end">
                            <a class="gi-help pl-[20px] text-[13px] text-[#777] tracking-[0.7px] font-normal hover:text-[#5caf90]"
                                href="faq.html">Help?</a>
                            <a class="gi-help pl-[20px] text-[13px] text-[#777] tracking-[0.7px] font-normal hover:text-[#5caf90]"
                                href="track-order.html">Track Order?</a>
                            <!-- Language Start -->
                            <div class="header-top-lan-curr header-top-lan dropdown pl-[20px] flex flex-wrap relative">
                                <button type="button"
                                    class="dropdown-toggle text-[13px] flex items-center p-[0] transition-all duration-[0.3s] ease delay-0 text-[#777] border-[0] tracking-[0.7px]">English
                                    <i
                                        class="fi-rr-angle-small-down text-[14px] ml-[5px] text-[#777] transition-all duration-[0.3s] ease delay-0 flex"></i>
                                </button>
                                <ul
                                    class="hidden dropdown-menu absolute top-[32px] left-[auto] right-[0] min-w-[130px] truncate px-[10px] bg-[#fff] z-[1] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                    <li class="active border-b-[1px] border-solid border-[#eee] leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent"
                                            href="#">English</a>
                                    </li>
                                    <li class="leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent"
                                            href="#">Italiano</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Language End -->
                            <!-- Currency Start -->
                            <div class="header-top-lan-curr header-top-curr dropdown pl-[20px] flex flex-wrap relative">
                                <button type="button"
                                    class="dropdown-toggle text-[13px] flex items-center p-[0] transition-all duration-[0.3s] ease delay-0 text-[#777] border-[0] tracking-[0.7px]">Dollar
                                    <i
                                        class="fi-rr-angle-small-down text-[14px] ml-[5px] text-[#777] transition-all duration-[0.3s] ease delay-0 flex"></i>
                                </button>
                                <ul
                                    class="hidden dropdown-menu absolute top-[32px] left-[auto] right-[0] min-w-[130px] truncate px-[10px] bg-[#fff] z-[1] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                    <li class="active border-b-[1px] border-solid border-[#eee] leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">USD
                                            $</a>
                                    </li>
                                    <li class="leading-[1.5] py-[5px]">
                                        <a class="dropdown-item p-[7px] text-[14px] bg-transparent" href="#">EUR
                                            €</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="grow-[1] shrink-[0] basis-[0%] min-[992px]:hidden">
                        <div class="gi-header-bottons flex justify-end">
                            <div class="right-icons flex flex-row">
                                <!-- Header User Start -->
                                <a href="{{ url('/login') }}"
                                    class="gi-header-btn gi-header-user mr-[30px] relative transition-all duration-[0.3s] ease-in-out flex text-[#4b5966] w-[auto] items-center">
                                    Login
                                </a>

                                <div class="header-icon relative flex">
                                    <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                </div>
                                </a>
                                <!-- Header User End -->
                                <!-- Header Wishlist Start -->
                                <a href="{{ url('/login') }}"
                                    class="gi-header-btn gi-header-user mr-[30px] relative transition-all duration-[0.3s] ease-in-out flex text-[#4b5966] w-[auto] items-center">
                                    Login
                                </a>

                                <div class="header-icon relative flex">
                                    <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                </div>
                                <span
                                    class="gi-header-count gi-wishlist-count w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
                                </a>
                                <!-- Header Wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="{{ url('/login') }}"
                                    class="gi-header-btn gi-header-user mr-[30px] relative transition-all duration-[0.3s] ease-in-out flex text-[#4b5966] w-[auto] items-center">
                                    Login
                                </a>

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
                                    class="gi-header-btn gi-site-menu-icon relative transition-all duration-[0.3s] ease-in-out flex text-[#4b5966] w-auto items-center">
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
        <!-- Header Top  End -->

        <!-- Header Bottom  Start -->
        <div
            class="gi-header-bottom py-[30px] max-[991px]:py-[15px] max-[991px]:border-b-[1px] border-solid border-[#eee]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <div class="gi-flex flex flex-row justify-between w-full max-[575px]:flex-col">
                        <!-- Header Logo Start -->
                        <div class="self-center gi-header-logo max-[575px]:mb-[15px]">
                            <div class="header-logo text-left">
                                <a href="{{ url('/index') }}">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Site Logo"
                                        class="w-[144px] max-[1199px]:w-[130px] max-[991px]:w-[120px] max-[767px]:w-[100px]">
                                </a>

                            </div>
                        </div>
                        <!-- Header Logo End -->
                        <!-- Header Search Start -->
                        <div class="self-center gi-header-search my-[0] mx-[auto] max-[991px]:m-0">
                            <div
                                class="header-search w-full min-w-[700px] px-[30px] relative max-[1399px]:min-w-[500px] max-[1199px]:min-w-[400px] max-[991px]:p-0 max-[767px]:min-w-[350px] max-[480px]:min-w-[300px] max-[320px]:min-w-full">
                                <form
                                    class="gi-search-group-form relative flex border-[1px] border-solid border-[#eee] items-center rounded-[5px]"
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
                                        <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                            <span
                                                class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Account</span>
                                            <span
                                                class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">Login</span>
                                        </div>
                                    </a>
                                    <ul
                                        class="gi-dropdown-menu min-w-[150px] py-[5px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute z-[16] text-left bg-[#fff] block opacity-0 invisible left-[0] right-[auto] border-[1px] border-solid border-[#eee] rounded-[5px]">
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
                                <a href="{{ url('/wishlist') }}"
                                    class="gi-header-btn gi-wish-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap"
                                    title="Wishlist">

                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
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
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
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
                            <div
                                class="gi-category-toggle w-[200px] min-h-[50px] px-[15px] flex items-center bg-[#5caf90] rounded-[5px] cursor-pointer max-[1199px]:w-auto max-[991px]:border-[0]">
                                <i class="fi fi-rr-apps text-[18px] text-[#fff] leading-[0]"></i>
                                <span
                                    class="text ml-[10px] text-[15px] text-[#fff] font-medium max-[1199px]:hidden">All
                                    Categories</span>
                                <i class="fi-rr-angle-small-down text-[18px] uppercase text-[#fff] text-center absolute right-[15px] leading-[0] max-[1199px]:hidden"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div
                            class="gi-cat-dropdown transition-all duration-[0.3s] ease-in-out w-[600px] mt-[15px] p-[15px] absolute bg-[#fff] opacity-[0] invisible left-[0] z-[-15] rounded-[5px] border-[1px] border-solid border-[#eee]">
                            <div class="gi-cat-block">
                                <div class="gi-cat-tab flex">
                                    <ul class="nav-tabs min-w-[230px] bg-[#f8f8fb] p-[15px] rounded-[5px] flex-col justify-center mr-[16px]"
                                        id="myTab">
                                        <li
                                            class="active transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] rounded-[5px] flex items-center mb-[10px]">
                                            <a href="#v-pills-home">
                                                <i
                                                    class="fi-rr-cupcake transition-all duration-[0.3s] ease-in-out mr-[10px] text-[18px] leading-[0]"></i>Dairy
                                                & Bakery
                                            </a>
                                        </li>
                                        <li
                                            class="transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] rounded-[5px] flex items-center mb-[10px]">
                                            <a href="#v-pills-profile">
                                                <i
                                                    class="fi fi-rs-apple-whole transition-all duration-[0.3s] ease-in-out mr-[10px] text-[18px] leading-[0]"></i>Fruits
                                                & Vegetable
                                            </a>
                                        </li>
                                        <li
                                            class="transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] rounded-[5px] flex items-center mb-[10px]">
                                            <a href="#v-pills-messages">
                                                <i
                                                    class="fi fi-rr-popcorn transition-all duration-[0.3s] ease-in-out mr-[10px] text-[18px] leading-[0]"></i>Snack
                                                & Spice
                                            </a>
                                        </li>
                                        <li
                                            class="transition-all duration-[0.3s] ease-in-out cursor-pointer px-[15px] py-[10px] bg-[#fff] text-[13px] text-[#4b5966] font-medium text-left capitalize border-[1px] border-solid border-[#eee] rounded-[5px] flex items-center">
                                            <a href="#v-pills-settings">
                                                <i
                                                    class="fi fi-rr-popcorn transition-all duration-[0.3s] ease-in-out mr-[10px] text-[18px] leading-[0]"></i>Juice
                                                & Drinks
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content transition-all w-full" id="myTabContent">
                                        <div class="tab-pane" id="v-pills-home">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Dairy</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Milk</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Ice
                                                                cream</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cheese</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Frozen
                                                                custard</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Frozen
                                                                yogurt</a></li>

                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Bakery</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cake
                                                                and Pastry</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Rusk
                                                                Toast</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Bread
                                                                & Buns</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Chocolate
                                                                Brownie</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cream
                                                                Roll</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-profile">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Fruits</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cauliflower</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Bell
                                                                Peppers</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Broccoli</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cabbage</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Tomato</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Vegetable</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cauliflower</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Bell
                                                                Peppers</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Broccoli</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cabbage</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Tomato</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-messages">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Snacks</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">French
                                                                fries</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Potato
                                                                chips</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Biscuits
                                                                & Cookies</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Popcorn</a>
                                                        </li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Rice
                                                                Cakes</a></li>

                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Spice</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cinnamon
                                                                Powder</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Cumin
                                                                Powder</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Fenugreek
                                                                Powder</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Pepper
                                                                Powder</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Long
                                                                Pepper</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-settings">
                                            <div class="tab-list w-full flex flex-wrap">
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        Juice</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Mango
                                                                Juice</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Coconut
                                                                Water</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Tetra
                                                                Pack</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Apple
                                                                Juices</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Lychee
                                                                Juice</a></li>

                                                    </ul>
                                                </div>
                                                <div class="px-[12px] grow-[1]">
                                                    <h6
                                                        class="gi-col-title text-[#5caf90] font-Poppins text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">
                                                        soft drink</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Breizh
                                                                Cola</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Green
                                                                Cola</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Jolt
                                                                Cola</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Mecca
                                                                Cola</a></li>
                                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                class="text-[#777] capitalize leading-[28px] font-normal text-[13px] block py-[5px] border-[0] h-auto hover:text-[#5caf90]">Topsia
                                                                Cola</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Menu Start -->
                    <div id="gi-main-menu-desk" class="w-full items-center hidden min-[992px]:flex">

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
                                                    class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block rounded-[5px] border-[1px] border-solid border-[#eee] py-[5px]">
                                                    <li><a href="{{ url('/index') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Grocery</a>
                                                    </li>
                                                    <li><a href="{{ url('/demo-2') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Fashion</a>
                                                    </li>
                                                    <li><a href="{{ url('/demo-3') }}"
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
                                                    class="mega-menu block transition-all duration-[0.3s] ease-in-out w-full max-[1399px]:mx-[12px] max-[1399px]:w-[calc(100%-24px)] mt-[15px] absolute bg-[#fff] pl-[30px] opacity-0 invisible left-0 z-[15] rounded-[5px] border-[1px] border-solid border-[#eee] truncate">
                                                    <li class="flex">
                                                        <span class="bg"></span>
                                                        <ul
                                                            class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                            <li class="menu_title">
                                                                <a href="javascript:void(0)"
                                                                    class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Classic</a>
                                                            </li>
                                                            <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Left
                                                                    sidebar 3 column</a></li>
                                                            <li><a href="{{ url('/shop-left-sidebar-col-4') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Left
                                                                    sidebar 4 column</a></li>
                                                            <li><a href="{{ url('/shop-right-sidebar-col-3') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Right
                                                                    sidebar 3 column</a></li>
                                                            <li><a href="{{ url('/shop-right-sidebar-col-4') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Right
                                                                    sidebar 4 column</a></li>
                                                            <li><a href="{{ url('/shop-full-width') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Full
                                                                    width 4 column</a></li>

                                                        </ul>
                                                        <ul
                                                            class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                            <li class="menu_title">
                                                                <a href="javascript:void(0)"
                                                                    class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Banner</a>
                                                            </li>
                                                            <li><a href="{{ url('shop-banner-left-sidebar-col-3') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Left
                                                                    sidebar 3 column</a></li>
                                                            <li><a href="{{ url('/shop-banner-left-sidebar-col-4') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Left
                                                                    sidebar 4 column</a></li>
                                                            <li><a href="{{ url('/shop-banner-right-sidebar-col-3') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Right
                                                                    sidebar 3 column</a></li>
                                                            <li><a href="{{ url('/shop-banner-right-sidebar-col-4') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Right
                                                                    sidebar 4 column</a></li>
                                                            <li><a href="{{ url('/shop-banner-full-width') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Full
                                                                    width 4 column</a></li>

                                                        </ul>
                                                        <ul
                                                            class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                            <li class="menu_title">
                                                                <a href="javascript:void(0)"
                                                                    class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">Columns</a>
                                                            </li>
                                                            <li><a href="{{ url('shop-full-width-col-3') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">3
                                                                    Columns full width</a></li>
                                                            <li><a href="{{ url('/shop-full-width-col-4') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">4
                                                                    Columns full width</a></li>
                                                            <li><a href="{{ url('/shop-full-width-col-5') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">5
                                                                    Columns full width</a></li>
                                                            <li><a href="{{ url('/shop-full-width-col-6') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">6
                                                                    Columns full width</a></li>
                                                            <li><a href="{{ url('/shop-banner-full-width-col-3') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Banner
                                                                    3 Columns</a></li>

                                                        </ul>
                                                        <ul
                                                            class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px] block">
                                                            <li class="menu_title">
                                                                <a href="javascript:void(0)"
                                                                    class="text-[#5caf90] text-[15px] capitalize leading-[30px] font-medium block border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] h-auto">List</a>
                                                            </li>
                                                            <li><a href="{{ url('/shop-list-left-sidebar') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Shop
                                                                    left sidebar</a></li>
                                                            <li><a href="{{ url('/shop-list-right-sidebar') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Shop
                                                                    right sidebar</a></li>
                                                            <li><a href="{{ url('/shop-list-banner-left-sidebar') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Banner
                                                                    left sidebar</a></li>
                                                            <li><a href="{{ url('/shop-list-banner-right-sidebar') }}"
                                                                    class="text-[#777] capitalize leading-[30px] font-normal text-[13px] block py-[5px] border-0 h-auto hover:text-[#5caf90]">Banner
                                                                    right sidebar</a></li>
                                                            <li><a href="{{ url('/shop-list-full-col-2') }}"
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
                                                    class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block rounded-[5px] border-[1px] border-solid border-[#eee] py-[5px]">
                                                    <li class="dropdown position-static">
                                                        <a href="javascript:void(0)"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                            page
                                                            <i
                                                                class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[2px] text-[18px] flex"></i>
                                                        </a>
                                                        <ul
                                                            class="sub-menu sub-menu-child transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block rounded-[5px] border-[1px] border-solid border-[#eee] py-[5px]">
                                                            <li><a href="{{ url('/product-left-sidebar') }}"
                                                                    class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Product
                                                                    left sidebar</a></li>
                                                            <li><a href="{{ url('/product-right-sidebar') }}"
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
                                                            class="sub-menu sub-menu-child transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block rounded-[5px] border-[1px] border-solid border-[#eee] py-[5px]">
                                                            <li><a href="{{ url('/product-accordion-left-sidebar') }}"
                                                                    class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Left
                                                                    sidebar</a></li>
                                                            <li><a href="{{ url('/product-accordion-right-sidebar') }}"
                                                                    class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Right
                                                                    sidebar</a></li>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/product/full-width') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">
                                                            Product full width
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/product/accordion-full-width') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">
                                                            Accordion full width
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li
                                                class="dropdown drop-list relative ml-[20px] mr-[30px] transition-all duration-[0.3s] ease-in-out max-[1199px]:ml-[15px]">
                                                <a href="javascript:void(0)"
                                                    class="dropdown-arrow relative transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">Blog<i
                                                        class="fi-rr-angle-small-right transition-all duration-[0.3s] ease-in-out mr-[5px] text-[#4b5966] absolute right-[-27px] text-[18px] rotate-[90deg] flex"></i></a>
                                                <ul
                                                    class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block rounded-[5px] border-[1px] border-solid border-[#eee] py-[5px]">
                                                    <li><a href="{{ url('/blog-left-sidebar') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Left
                                                            Sidebar</a></li>
                                                    <li><a href="{{ url('/blog-right-sidebar') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Right
                                                            Sidebar</a></li>
                                                    <li><a href="{{ url('/blog-full-width') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Full
                                                            Width</a></li>
                                                    <li><a href="{{ url('/blog-detail-left-sidebar') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Detail
                                                            Left Sidebar</a></li>
                                                    <li><a href="{{ url('/blog-detail-right-sidebar') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Detail
                                                            Right Sidebar</a></li>
                                                    <li><a href="{{ url('/blog-detail-full-width') }}"
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
                                                    class="sub-menu transition-all duration-[0.3s] ease-in-out mt-[15px] absolute z-[16] text-left opacity-0 invisible min-w-[205px] left-0 right-auto bg-[#fff] block rounded-[5px] border-[1px] border-solid border-[#eee] py-[5px]">
                                                    <li><a href="{{ url('/about-us') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">About
                                                            Us</a></li>
                                                    <li><a href="{{ url('/contact-us') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Contact
                                                            Us</a></li>
                                                    <li><a href="{{ url('/cart') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Cart</a>
                                                    </li>
                                                    <li><a href="{{ url('/checkout') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Checkout</a>
                                                    </li>
                                                    <li><a href="{{ url('/compare') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Compare</a>
                                                    </li>
                                                    <li><a href="{{ url('/faq') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">FAQ</a>
                                                    </li>
                                                    <li><a href="{{ url('/login') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Login</a>
                                                    </li>
                                                    <li><a href="{{ url('/register') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Register</a>
                                                    </li>
                                                    <li><a href="{{ url('/track-order') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Track
                                                            Order</a></li>
                                                    <li><a href="{{ url('/terms-condition') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Terms
                                                            Condition</a></li>
                                                    <li><a href="{{ url('/privacy-policy') }}"
                                                            class="transition-all duration-[0.3s] ease-in-out leading-[20px] px-[20px] py-[10px] font-normal text-[13px] text-[#777] capitalize flex justify-between items-center hover:text-[#5caf90]">Privacy
                                                            Policy</a></li>

                                                </ul>
                                            </li>
                                            <li
                                                class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ url('/shop-banner-left-sidebar-col-3') }}"
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

                    <div class="gi-location-block py-[5px]">
                        <div class="gi-location-menu transition-all duration-[0.3s] ease-in-out relative">
                            <div
                                class="gi-location-toggle w-[200px] min-h-[50px] px-[15px] flex items-center bg-[#5caf90] rounded-[5px] cursor-pointer">
                                <i class="fi fi-rr-marker location text-[#fff] text-[18px] leading-[0]"></i>
                                <span
                                    class="gi-location-title gi-location w-[calc(100%-30px)] px-[10px] text-[15px] text-[#fff] font-medium tracking-[0.2px] whitespace-nowrap truncate">New
                                    York</span>
                                <i class="fi-rr-angle-small-down gi-angle text-[18px] uppercase text-[#fff] text-center absolute right-[15px] leading-[0]"
                                    aria-hidden="true"></i>
                            </div>
                            <div
                                class="gi-location-content transition-all duration-[0.3s] ease-in-out w-[200px] py-[15px] px-[13px] mt-[15px] block absolute invisible left-auto right-0 top-[100%] rounded-[5px] z-[14] border-[1px] border-solid border-[#eee] bg-[#fff] overflow-auto">
                                <div class="gi-location-dropdown">
                                    <div class="w-full flex flex-wrap gi-location-wrapper">
                                        <ul class="loc-grid w-full">
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">current
                                                    Location</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Los
                                                    Angeles</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Chicago</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Houston</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90] mb-[10px]">
                                                <i
                                                    class="fi fi-rr-map-marker-plus text-[14px] mr-[10px] text-[#777] leading-[0]"></i>
                                                <span
                                                    class="gi-detail gi-detail-current w-[calc(100%-30px)] block truncate text-[#4b5966]">Phoenix</span>
                                            </li>
                                            <li
                                                class="loc-list current w-full p-[10px] relative flex items-center flex-row justify-left text-[13px] font-medium capitalize border-[1px] border-solid border-[#eee] rounded-[5px] cursor-pointer hover:border-[#5caf90] hover:text-[#5caf90]">
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
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] font-medium">Home</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li><a href="{{ url('/index') }}"
                                        class="mb-[0] pl-[15px] py-[12px] pr-[0] capitalize block text-[14px] font-normal text-[#777]">Grocery</a>
                                </li>
                                <li><a href="{{ url('/demo-2') }}"
                                        class="mb-[0] pl-[15px] py-[12px] pr-[0] capitalize block text-[14px] font-normal text-[#777]">Fashion</a>
                                </li>
                                <li><a href="{{ url('/demo-3') }}"
                                        class="mb-[0] pl-[15px] py-[12px] pr-[0] capitalize block text-[14px] font-normal text-[#777]">Fashion
                                        2</a></li>

                            </ul>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] font-medium">Categories</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Classic
                                        Variation</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Left
                                                sidebar 3 column</a></li>
                                        <li><a href="{{ url('shop-left-sidebar-col-4') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Left
                                                sidebar 4 column</a></li>
                                        <li><a href="{{ url('shop-right-sidebar-col-3') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Right
                                                sidebar 3 column</a></li>
                                        <li><a href="{{ url('shop-right-sidebar-col-4') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Right
                                                sidebar 4 column</a></li>
                                        <li><a href="{{ url('shop-full-width') }}"
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
                                        <li><a href="{{ url('shop-banner-left-sidebar-col-3') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                left sidebar 3 column</a></li>
                                        <li><a href="{{ url('/shop-banner-left-sidebar-col-4') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                left sidebar 4 column</a></li>
                                        <li><a href="{{ url('/shop-banner-right-sidebar-col-3') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                right sidebar 3 column</a></li>
                                        <li><a href="{{ url('/shop-banner-right-sidebar-col-4') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                right sidebar 4 column</a></li>
                                        <li><a href="{{ url('/shop-banner-full-width') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                Full width 4 column</a></li>

                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Columns
                                        Variation</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="{{ url('shop-full-width-col-3') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">3
                                                Columns full width</a></li>
                                        <li><a href="{{ url('/shop-full-width-col-4') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">4
                                                Columns full width</a></li>
                                        <li><a href="{{ url('/shop-full-width-col-5') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">5
                                                Columns full width</a></li>
                                        <li><a href="{{ url('/shop-full-width-col-6') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">6
                                                Columns full width</a></li>
                                        <li><a href="{{ url('/shop-banner-full-width-col-3') }}"
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
                                        <li><a href="{{ url('/shop-list-left-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Shop
                                                left sidebar</a></li>
                                        <li><a href="{{ url('/shop-list-right-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Shop
                                                right sidebar</a></li>
                                        <li><a href="{{ url('/shop-list-banner-left-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                left sidebar</a></li>
                                        <li><a href="{{ url('/shop-list-banner-right-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Banner
                                                right sidebar</a></li>
                                        <li><a href="{{ url('/shop-list-full-col-2') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Full
                                                width 2 columns</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] font-medium">Products</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li class="relative">
                                    <a href="javascript:void(0)"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Product
                                        page</a>
                                    <ul
                                        class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                        <li><a href="{{ url('/product-left-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Product
                                                left sidebar</a></li>
                                        <li><a href="{{ url('/product-right-sidebar') }}"
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
                                        <li><a href="{{ url('product-accordion-left-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Left
                                                sidebar</a></li>
                                        <li><a href="{{ url('/product-accordion-right-sidebar') }}"
                                                class="pl-[30px] py-[12px] block text-[14px] text-[#999] font-normal">Right
                                                sidebar</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ url('product-full-width') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Product
                                        Full Width</a></li>
                                <li><a href="{{ url('/product-accordion-full-width') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Accordion
                                        Full Width</a></li>

                            </ul>
                        </li>
                        <li class="dropdown relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow mb-[12px] p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] font-medium">Blog</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <li><a href="{{ url('blog-left-sidebar') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        Left Sidebar</a></li>
                                <li><a href="{{ url('/blog-right-sidebar') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        Right Sidebar</a></li>
                                <li><a href="{{ url('/blog-detail-left-sidebar') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        Detail Left Sidebar</a></li>
                                <li><a href="{{ url('/blog-detail-right-sidebar') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        Detail Right Sidebar</a></li>
                                <li><a href="{{ url('/blog-full-width') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        Full Width</a></li>
                                <li><a href="{{ url('/blog-detail-full-width') }}"
                                        class="mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#777]">Blog
                                        Detail Full Width</a></li>

                            </ul>
                        </li>
                        <li class="relative">
                            <a href="javascript:void(0)"
                                class="dropdown-arrow p-[12px] block capitalize text-[#777] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] font-medium">Others</a>
                            <ul
                                class="sub-menu w-full min-w-[auto] p-0 mb-[10px] static hidden visible transition-none opacity-[1]">
                                <ul>
                                    <li><a href="{{ url('/about-us') }}" class="menu-link">About Us</a></li>
                                    <li><a href="{{ url('/contact-us') }}" class="menu-link">Contact Us</a></li>
                                    <li><a href="{{ url('/cart') }}" class="menu-link">Cart</a></li>
                                    <li><a href="{{ url('/checkout') }}" class="menu-link">Checkout</a></li>
                                    <li><a href="{{ url('/compare') }}" class="menu-link">Compare</a></li>
                                    <li><a href="{{ url('/faq') }}" class="menu-link">FAQ</a></li>
                                    <li><a href="{{ url('/login') }}" class="menu-link">Login</a></li>
                                    <li><a href="{{ url('/register') }}" class="menu-link">Register</a></li>
                                    <li><a href="{{ url('/track-order') }}" class="menu-link">Track Order</a></li>
                                    <li><a href="{{ url('/terms-condition') }}" class="menu-link">Terms &
                                            Conditions</a></li>
                                    <li><a href="{{ url('/privacy-policy') }}" class="menu-link">Privacy Policy</a>
                                    </li>
                                </ul>

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
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] rounded-[5px] mr-[15px]">
                                    <a href="#"><i class="gicon gi-facebook text-[#fff]"></i></a>
                                </li>
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] rounded-[5px] mr-[15px]">
                                    <a href="#"><i class="gicon gi-twitter text-[#fff]"></i></a>
                                </li>
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] rounded-[5px] mr-[15px]">
                                    <a href="#"><i class="gicon gi-instagram text-[#fff]"></i></a>
                                </li>
                                <li
                                    class="list-inline-item h-[30px] w-[30px] flex items-center justify-center bg-[#4b5966] rounded-[5px]">
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
    <div id="gi-side-cart"
        class="gi-side-cart w-[350px] max-[480px]:w-[300px] h-full pt-[15px] px-[20px] text-[14px] font-normal fixed z-[17] top-[0] right-0 left-auto block transition-all duration-[0.5s] ease delay-0 bg-[#fff] overflow-auto">
        <div class="gi-cart-inner relative z-[9] flex flex-col h-full justify-between">
            <div class="gi-cart-top">
                <div class="gi-cart-title w-full flex flex-wrap justify-between">
                    <span class="cart_title text-[15px] text-[#4b5966] font-Poppins font-semibold mb-[20px]">My
                        Cart</span>
                    <a href="javascript:void(0)"
                        class="gi-cart-close relative border-[0] text-[30px] leading-[20px] text-[#4b5966]">
                        <i class="fi-rr-cross-small text-[20px] leading-[0]"></i>
                    </a>
                </div>
                <ul class="gi-cart-pro-items">
                    <li
                        class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <a href="{{ url('/product-left-sidebar') }}"
                            class="gi-pro-img flex grow-[1] basis-[20%] items-center"><img
                                src="assets/img/product-images/25_1.jpg" class="w-full" alt="product"></a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="{{ url('/product-left-sidebar') }}"
                                class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Fresh
                                Lichi</a>
                            <span class="cart-price text-[14px] block mt-[5px]"><span
                                    class="text-[#777] font-semibold text-[16px]">$25.00</span> x 1 kg</span>
                            <div
                                class="qty-plus-minus border-[1px] border-solid border-[#eee] h-[35px] overflow-hidden relative w-[85px] flex items-center justify-between py-[7px] mt-[7px]">
                                <input class="qty-input" type="text" name="gi-qtybtn" value="1">
                            </div>
                            <a href="javascript:void(0)"
                                class="remove leading-[15px] absolute top-[0] right-[0] pl-[10px] text-[#ff0000] text-[22px]">×</a>
                        </div>
                    </li>
                    <li
                        class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <a href="{{ url('/product-left-sidebar') }}"
                            class="gi-pro-img flex grow-[1] basis-[20%] items-center"><img
                                src="assets/img/product-images/17_1.jpg" class="w-full" alt="product"></a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="{{ url('/product-left-sidebar') }}"
                                class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Ginger
                                - Organic</a>
                            <span class="cart-price text-[14px] block mt-[5px]"><span
                                    class="text-[#777] font-semibold text-[16px]">$5.00</span> x 1 250g</span>
                            <div
                                class="qty-plus-minus border-[1px] border-solid border-[#eee] h-[35px] overflow-hidden relative w-[85px] flex items-center justify-between py-[7px] mt-[7px]">
                                <input class="qty-input" type="text" name="gi-qtybtn" value="1">
                            </div>
                            <a href="javascript:void(0)"
                                class="remove leading-[15px] absolute top-[0] right-[0] pl-[10px] text-[#ff0000] text-[22px]">×</a>
                        </div>
                    </li>
                    <li
                        class="mb-[15px] p-[15px] flex overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <a href="{{ url('/product-left-sidebar') }}"
                            class="gi-pro-img flex grow-[1] basis-[20%] items-center"><img
                                src="assets/img/product-images/2_1.jpg" class="w-full" alt="product"></a>
                        <div class="gi-pro-content relative grow-[1] basis-[70%] pl-[15px] overflow-hidden">
                            <a href="{{ url('/product-left-sidebar') }}"
                                class="cart-pro-title w-full pr-[30px] text-[#777] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Dates
                                Value Pack Pouch</a>
                            <span class="cart-price text-[14px] block mt-[5px]"><span
                                    class="text-[#777] font-semibold text-[16px]">$59.00</span> x 1 pack</span>
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
                    <a href="{{ url('/cart') }}"
                        class="gi-btn-1 w-[48%] h-[40px] block uppercase font-semibold text-[14px] py-[8px] px-[15px] leading-[22px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]">View
                        Cart</a>
                    <a href="{{ url('/checkout') }}"
                        class="gi-btn-2 w-[48%] h-[40px] block uppercase font-semibold text-[14px] py-[8px] px-[15px] leading-[22px] bg-[#5caf90] text-[#fff] text-center rounded-[5px] transition-all dummy-[0.3s] ease-in-out hover:bg-[#4b5966]">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart sidebar End -->

    <!-- Breadcrumb start -->
    <div class="gi-breadcrumb mb-[40px]">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div
                        class="flex flex-wrap m-0 p-[15px] border-[1px] border-solid border-[#eee] rounded-b-[5px] border-t-[0] gi_breadcrumb_inner">
                        <div class="min-[768px]:w-[50%] w-full px-[12px]">
                            <h2
                                class="gi-breadcrumb-title text-[#4b5966] block text-[15px] font-Poppins leading-[22px] font-semibold my-[0] mx-auto capitalize max-[767px]:mb-[5px] max-[767px]:text-center">
                                Blog Page</h2>
                        </div>
                        <div class="min-[768px]:w-[50%] w-full px-[12px]">
                            <!-- gi-breadcrumb-list start -->
                            <ul class="gi-breadcrumb-list text-right max-[767px]:text-center">
                                <li
                                    class="gi-breadcrumb-item inline-block text-[14px] font-normal tracking-[0.02rem] leading-[1.2] capitalize">
                                    <a href="index.html" class="relative text-[#4b5966]">Home</a></li>
                                <li
                                    class="gi-breadcrumb-item inline-block text-[14px] font-normal tracking-[0.02rem] leading-[1.2] capitalize active">
                                    Blog Page</li>
                            </ul>
                            <!-- gi-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- Blog section -->
    <section class="gi-blog py-[40px] max-[767px]:py-[30px]">
        <div
            class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full">
                <div class="min-[992px]:w-[66.66%] w-full min-[992px]:order-[6] min-[768px]:order-[-1] px-[12px]">
                    <!-- Blog content Start -->
                    <div class="gi-blogs-content">
                        <div class="gi-blogs-inner">
                            <div class="gi-single-blog-item">
                                <div class="single-blog-info">
                                    <figure class="blog-img mb-[16px]">
                                        <a href="#"><img src="assets/img/blog/8.jpg" alt="blog imag"
                                                class="w-full rounded-[5px]"></a>
                                    </figure>
                                    <div class="single-blog-detail">
                                        <label class="mb-[15px] text-[#999] inline-block">June 30,2022 - <a
                                                href="#"
                                                class="text-[#999] hover:text-[#5caf90]">Organic</a></label>
                                        <h3
                                            class="text-[22px] font-semibold text-[#4b5966] leading-[1.2] mb-[6px] max-[767px]:text-[20px] max-[575px]:text-[19px]">
                                            Marketing Guide: 5 Steps to Success.</h3>
                                        <p class="gi-text text-[#777] text-[14px] mb-[16px]">"Lorem Ipsum is simply
                                            dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged. It was popularised in the 1960s with the release of
                                            Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            desktop publishing software like Aldus PageMaker including versions of Lorem
                                            Ipsum.</p>
                                        <p
                                            class="gi-text-highlight text-[#777] text-[14px] italic font-medium mb-[16px]">
                                            The standard chunk of Lorem Ipsum used since the
                                            1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33
                                            from "de Finibus Bonorum et Malorum" by Cicero.</p>
                                        <p class="text-[#777] text-[14px] mb-[16px]">Contrary to popular belief, Lorem
                                            Ipsum is not simply random text. It has
                                            roots in a piece of passages of Lorem Ipsum classical Latin literature from
                                            45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                                            at Hampden-Sydney College in Virginia</p>
                                        <div class="sub-img mt-[30px] mx-[-12px]">
                                            <div class="flex flex-wrap">
                                                <div class="min-[768px]:w-[50%] w-full px-[12px] mb-[24px]">
                                                    <img src="assets/img/blog/3.jpg" alt="blog"
                                                        class="w-full rounded-[5px]">
                                                </div>
                                                <div class="min-[768px]:w-[50%] w-full px-[12px] mb-[24px]">
                                                    <img src="assets/img/blog/4.jpg" alt="blog"
                                                        class="w-full rounded-[5px]">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-[#777] text-[14px] leading-[28px] mb-[16px]">It is a long
                                            established fact that a reader will be distracted by the
                                            readable content of a page distracted by the readable when looking at its
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                            distribution of letters, as opposed to using.</p>
                                        <p class="text-[#777] text-[14px] leading-[28px] mb-[16px]">There are many
                                            variations of passages of Lorem Ipsum available, but the
                                            majority have suffered distracted by the readable alteration in some form,
                                            by injected humour.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination Start -->
                        <div
                            class="gi-pro-pagination pt-[15px] flex justify-between items-center border-t-[1px] border-solid border-[#eee] max-[575px]:flex-col">
                            <span class="text-[14px] text-[#777] max-[575px]:mb-[10px]">Showing 1-6 of 20 items</span>
                            <ul class="gi-pro-pagination-inner">
                                <li class="inline-block float-left mr-[5px]">
                                    <a class="w-[32px] h-[32px] p-[0] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff] active"
                                        href="#">1</a>
                                </li>
                                <li class="inline-block float-left mr-[5px]">
                                    <a class="w-[32px] h-[32px] p-[0] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]"
                                        href="#">2</a>
                                </li>
                                <li class="inline-block float-left mr-[5px]">
                                    <a class="w-[32px] h-[32px] p-[0] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]"
                                        href="#">3</a>
                                </li>
                                <li class="inline-block float-left mr-[5px]">
                                    <span class="w-[20px] text-[#777] block text-center">...</span>
                                </li>
                                <li class="inline-block float-left mr-[5px]">
                                    <a class="w-[32px] h-[32px] p-[0] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]"
                                        href="#">8</a>
                                </li>
                                <li class="inline-block float-left">
                                    <a class="next w-[32px] h-[32px] p-[0] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]"
                                        href="#">Next <i class="gicon gi-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Pagination End -->
                        <!-- Comments Start -->
                        <div class="gi-blog-comments mt-[80px] max-[575px]:mt-[60px]">
                            <div class="gi-blog-cmt-preview">
                                <div class="gi-blog-comment-wrapper">
                                    <h4
                                        class="gi-blog-dgi-title mb-[30px] py-[10px] px-[15px] text-[16px] font-semibold text-[#4b5966] bg-[#f8f8fb] rounded-[5px] leading-[1.2]">
                                        Comments : 05</h4>
                                    <div class="gi-single-comment-wrapper mb-[30px] flex flex-row">
                                        <div class="gi-blog-user-img w-[50px] mr-[15px]">
                                            <img src="assets/img/user/1.jpg" alt="blog image"
                                                class="w-full rounded-[5px]">
                                        </div>
                                        <div class="gi-blog-comment-content w-[calc(100%-115px)]">
                                            <h5
                                                class="text-[#4b5966] text-[16px] font-semibold mb-[6px] leading-[1.2]">
                                                John Deo</h5>
                                            <span class="text-[#999] text-[13px]">October 14, 2018 </span>
                                            <p class="py-[5px] text-[#777] text-[14px] leading-[28px] font-light">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim
                                                ad minim veniam. </p>
                                            <div class="gi-blog-details-btn">
                                                <a href="javascript:void(0)"
                                                    class="text-[#5caf90] text-[13px]">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="gi-single-comment-wrapper mb-[30px] flex flex-row ml-[65px] max-[420px]:ml-[30px]">
                                        <div class="gi-blog-user-img w-[50px] mr-[15px]">
                                            <img src="assets/img/user/2.jpg" alt="blog image"
                                                class="w-full rounded-[5px]">
                                        </div>
                                        <div class="gi-blog-comment-content w-[calc(100%-115px)]">
                                            <h5
                                                class="text-[#4b5966] text-[16px] font-semibold mb-[6px] leading-[1.2]">
                                                Jenifer lowes</h5>
                                            <span class="text-[#999] text-[13px]">October 14, 2018 </span>
                                            <p class="py-[5px] text-[#777] text-[14px] leading-[28px] font-light">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolor magna aliqua. labore et
                                                dolor magna aliqua.</p>
                                            <div class="gi-blog-details-btn">
                                                <a href="javascript:void(0)"
                                                    class="text-[#5caf90] text-[13px]">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-blog-cmt-form">
                                <div class="gi-blog-reply-wrapper mt-50">
                                    <h4
                                        class="gi-blog-dgi-title mb-[30px] py-[10px] px-[15px] text-[16px] font-semibold text-[#4b5966] bg-[#f8f8fb] rounded-[5px] leading-[1.2]">
                                        Leave A Reply</h4>
                                    <form class="gi-blog-form" action="#">
                                        <div class="flex flex-wrap mx-[-12px]">
                                            <div class="min-[768px]:w-[50%] w-full px-[12px]">
                                                <div class="gi-leave-form">
                                                    <input type="text" placeholder="Full Name"
                                                        class="w-full h-[45px] mb-[30px] pl-[20px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] outline-[0]">
                                                </div>
                                            </div>
                                            <div class="min-[768px]:w-[50%] w-full px-[12px]">
                                                <div class="gi-leave-form">
                                                    <input type="email" placeholder="Email Address"
                                                        class="w-full h-[45px] mb-[30px] pl-[20px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] outline-[0]">
                                                </div>
                                            </div>
                                            <div class="w-full px-[12px]">
                                                <div class="gi-text-leave">
                                                    <textarea placeholder="Message"
                                                        class="w-full h-[200px] mb-[30px] py-[15px] px-[20px] border-[1px] border-solid border-[#eee] outline-[0] rounded-[5px]"></textarea>
                                                    <a href="#"
                                                        class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Submit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Comments End -->
                    </div>
                    <!--Blog content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div
                    class="min-[992px]:w-[33.33%] w-full min-[992px]:order-[-1] min-[768px]:order-[6] max-[991px]:mt-[30px] gi-blogs-sidebar gi-blogs-leftside px-[12px]">
                    <div
                        class="gi-blog-search h-[50px] w-full mb-[30px] p-[0] outline-[0] border-[1px] border-solid border-[#eee] text-[#4b5966] relative rounded-[5px] overflow-hidden">
                        <form class="gi-blog-search-form flex items-center bg-[#fff]" action="#">
                            <input
                                class="form-control block w-full min-h-[48px] h-[48px] px-[20px] text-[16px] font-normal leading-[1] text-[#777] bg-transparent border-[0] outline-[0] tracking-[0]"
                                placeholder="Search Our Blog" type="text">
                            <button type="submit" class="submit relative h-[48px] w-[48px] text-[#4b5966]"><i
                                    class="gicon gi-search"></i></button>
                        </form>
                    </div>
                    <div class="gi-blog-sidebar-wrap p-[30px] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <!-- Sidebar Recent Blog Block -->
                        <div class="gi-sidebar-block mb-[30px] gi-sidebar-recent-blog">
                            <div class="gi-sb-title border-b-[2px] border-solid border-[#eee] pb-[15px]">
                                <h3
                                    class="gi-sidebar-title w-full flex justify-between relative leading-[1.2] mb-[6px] font-Poppins text-[18px] font-medium">
                                    Recent Articles</h3>
                            </div>
                            <div class="gi-blog-block-content gi-sidebar-dropdown">
                                <div
                                    class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row">
                                    <div
                                        class="gi-sidebar-block-img mr-[15px] max-[1199px]:mb-[15px] max-[991px]:mb-[0]">
                                        <img src="assets/img/blog/6.jpg" alt="blog imag"
                                            class="w-[100px] rounded-[5px]">
                                    </div>
                                    <div class="gi-sidebar-block-detial">
                                        <h5 class="gi-blog-title leading-[1.2] mb-[6px]"><a
                                                href="blog-detail-left-sidebar.html"
                                                class="text-[#777] text-[16px] tracking-[0] leading-[22px] font-semibold capitalize">The
                                                best fashion influencers.</a></h5>
                                        <div
                                            class="gi-blog-date mb-[10px] text-[14px] text-[#999] leading-[1] tracking-[0]">
                                            February 10, 2021-2022</div>
                                        <a href="{{ url('/blog-left-sidebar') }}"
                                            class="text-[14px] text-[#5caf90] w-full leading-[20px] font-normal capitalize cursor-pointer flex justify-between">-
                                            Organic</a>
                                    </div>
                                </div>
                                <div
                                    class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row">
                                    <div
                                        class="gi-sidebar-block-img mr-[15px] max-[1199px]:mb-[15px] max-[991px]:mb-[0]">
                                        <img src="assets/img/blog/5.jpg" alt="blog imag"
                                            class="w-[100px] rounded-[5px]">
                                    </div>
                                    <div class="gi-sidebar-block-detial">
                                        <h5 class="gi-blog-title leading-[1.2] mb-[6px]"><a
                                                href="blog-detail-left-sidebar.html"
                                                class="text-[#777] text-[16px] tracking-[0] leading-[22px] font-semibold capitalize">Vogue
                                                Shopping Weekend.</a></h5>
                                        <div
                                            class="gi-blog-date mb-[10px] text-[14px] text-[#999] leading-[1] tracking-[0]">
                                            March 14, 2021-2022</div>
                                        <a href="{{ url('/blog-left-sidebar') }}"
                                            class="text-[14px] text-[#5caf90] w-full leading-[20px] font-normal capitalize cursor-pointer flex justify-between">-
                                            Fruits</a>
                                    </div>
                                </div>
                                <div
                                    class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row">
                                    <div
                                        class="gi-sidebar-block-img mr-[15px] max-[1199px]:mb-[15px] max-[991px]:mb-[0]">
                                        <img src="assets/img/blog/4.jpg" alt="blog imag"
                                            class="w-[100px] rounded-[5px]">
                                    </div>
                                    <div class="gi-sidebar-block-detial">
                                        <h5 class="gi-blog-title leading-[1.2] mb-[6px]"><a
                                                href="blog-detail-left-sidebar.html"
                                                class="text-[#777] text-[16px] tracking-[0] leading-[22px] font-semibold capitalize">Fashion
                                                Market Reveals Her Jacket.</a></h5>
                                        <div
                                            class="gi-blog-date mb-[10px] text-[14px] text-[#999] leading-[1] tracking-[0]">
                                            June 09, 2021-2022</div>
                                        <a href="{{ url('/blog-left-sidebar') }}"
                                            class="text-[14px] text-[#5caf90] w-full leading-[20px] font-normal capitalize cursor-pointer flex justify-between">-
                                            Vegetables</a>
                                    </div>
                                </div>
                                <div
                                    class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row">
                                    <div
                                        class="gi-sidebar-block-img mr-[15px] max-[1199px]:mb-[15px] max-[991px]:mb-[0]">
                                        <img src="assets/img/blog/3.jpg" alt="blog imag"
                                            class="w-[100px] rounded-[5px]">
                                    </div>
                                    <div class="gi-sidebar-block-detial">
                                        <h5 class="gi-blog-title leading-[1.2] mb-[6px]"><a
                                                href="blog-detail-left-sidebar.html"
                                                class="text-[#777] text-[16px] tracking-[0] leading-[22px] font-semibold capitalize">Summer
                                                Trending Fashion Market.</a></h5>
                                        <div
                                            class="gi-blog-date mb-[10px] text-[14px] text-[#999] leading-[1] tracking-[0]">
                                            July 17, 2021-2022</div>
                                        <a href="{{ url('/blog-left-sidebar') }}"
                                            class="text-[14px] text-[#5caf90] w-full leading-[20px] font-normal capitalize cursor-pointer flex justify-between">-
                                            Fastfood</a>
                                    </div>
                                </div>
                                <div
                                    class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row">
                                    <div
                                        class="gi-sidebar-block-img mr-[15px] max-[1199px]:mb-[15px] max-[991px]:mb-[0]">
                                        <img src="assets/img/blog/2.jpg" alt="blog imag"
                                            class="w-[100px] rounded-[5px]">
                                    </div>
                                    <div class="gi-sidebar-block-detial">
                                        <h5 class="gi-blog-title leading-[1.2] mb-[6px]"><a
                                                href="blog-detail-left-sidebar.html"
                                                class="text-[#777] text-[16px] tracking-[0] leading-[22px] font-semibold capitalize">Winter
                                                2021 Trending Fashion Market.</a></h5>
                                        <div
                                            class="gi-blog-date mb-[10px] text-[14px] text-[#999] leading-[1] tracking-[0]">
                                            August 02, 2021-2022</div>
                                        <a href="{{ url('/blog-left-sidebar') }}"
                                            class="text-[14px] text-[#5caf90] w-full leading-[20px] font-normal capitalize cursor-pointer flex justify-between">-
                                            Vegetables</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Recent Blog Block -->
                        <!-- Sidebar Category Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title border-b-[2px] border-solid border-[#eee] pb-[15px]">
                                <h3
                                    class="gi-sidebar-title w-full flex justify-between relative leading-[1.2] mb-[6px] font-Poppins text-[18px] font-medium">
                                    Categories</h3>
                            </div>
                            <div class="gi-blog-block-content gi-sidebar-dropdown">
                                <ul>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]"
                                                checked>
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">Dairy
                                                & Milk<span title="Products" class="text-[#999] text-[13px]">-
                                                    68</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">Seafood<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    58</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">Bakery<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    84</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">cosmetics<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    63</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">electrics<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    75</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">phones<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    26</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">Clothes<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    39</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="gi-sidebar-block-item py-[15px] border-b-[1px] border-solid border-[#eee] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row relative">
                                            <input type="checkbox"
                                                class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[99] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)"
                                                class="w-full text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer flex justify-between">Watch<span
                                                    title="Products" class="text-[#999] text-[13px]">-
                                                    48</span></a><span class="checked"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section End -->

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
                                            class="adroid max-w-[140px] max-[1399px]:max-w-[120px]  mb-[15px] rounded-[5px] mr-[15px]"
                                            alt="apple"></a>
                                    <a href="#" class="app-img"><img src="assets/img/app/apple.png"
                                            class="apple max-w-[140px] max-[1399px]:max-w-[120px] mb-[15px] rounded-[5px]"
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
                                            <a href="{{ url('/shop-left-sidebar-col-3') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Dairy
                                                & Milk</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/shop-banner-left-sidebar-col-3') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Snack
                                                & Spice</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/shop-full-width-col-5') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Fast
                                                Food</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="s{{ url('/shop-list-left-sidebar') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Juice
                                                & Drinks</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/shop-list-full-col-2') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Bakery</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="{{ url('/shop-banner-right-sidebar-col-4') }}"
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
                                            <a href="{{ url('/about-us.') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">About
                                                us</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/track-order') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Delivery</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/privacy-policy') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Legal
                                                Notice</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/terms-condition') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Terms
                                                & conditions</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/checkout') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Secure
                                                payment</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="{{ url('/contact-us') }}"
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
                                            <a href="{{ url('/register') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Sign
                                                In</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/cart') }}"
                                                class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">View
                                                Cart</a>
                                        </li>
                                        <li
                                            class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="{{ url('/privacy-policy') }}"
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
                                            <a href="{{ url('/checkout') }}"
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
                                                <p class="m-[0] text-[14px] font-normal text-[#777]">2548 Broaddus
                                                    Maple Court, Madisonville KY 4783, USA.</p>
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
                                                    class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-facebook text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-twitter text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i
                                                        class="gicon gi-linkedin text-[16px] text-[#fff]"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#"
                                                    class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i
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
                                    <div
                                        class="gi-copy text-[#777] text-[13px] tracking-[1px] text-center font-light">
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
    <div
        class="modal gi-modal max-[575px]:w-full fixed top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto">
        <div
            class="modal-dialog modal-dialog-centered h-full my-[0%] mx-auto max-w-[900px] w-[900px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out">
            <div class="modal-content quickview-modal p-[30px] relative bg-[#fff] rounded-[5px] max-[360px]:p-[15px]">
                <button type="button"
                    class="gi-close-modal qty_close absolute top-[10px] right-[10px] leading-[18px] max-[420px]:top-[5px] max-[420px]:right-[5px]"></button>
                <div class="modal-body mx-[-12px] max-[767px]:mx-[0]">
                    <div class="w-full flex flex-wrap">
                        <div class="min-[768px]:w-[41.66%] px-[12px] max-[767px]:px-[0] w-full">
                            <div
                                class="single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden">
                                <div class="single-product-scroll h-full">
                                    <div class="single-slide h-full flex items-center zoom-image-hover">
                                        <img class="img-responsive h-full w-full"
                                            src="assets/img/product-images/10_1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[768px]:w-[58.33%] px-[12px] max-[767px]:px-[0] w-full max-[767px]:mt-[30px]">
                            <div class="quickview-pro-content">
                                <h5 class="gi-quick-title">
                                    <a href="product-left-sidebar.html"
                                        class="mb-[15px] block text-[#4b5966] text-[22px] leading-[1.5] font-medium max-[991px]:text-[20px]">Mix
                                        nuts premium quality organic dried fruit 250g pack</a>
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
                                    <span
                                        class="old-price text-[18px] ml-[10px] line-through text-[#777]">$62.00</span>
                                </div>
                                <div class="gi-pro-variation mt-[5px]">
                                    <div
                                        class="gi-pro-variation-inner flex flex-col mb-[15px] gi-pro-variation-size gi-pro-size">
                                        <div class="gi-pro-variation-content">
                                            <ul class="gi-opt-size">
                                                <li
                                                    class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90] active">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]"
                                                        data-tooltip="Small">250g</a>
                                                </li>
                                                <li
                                                    class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]"
                                                        data-tooltip="Medium">500g</a>
                                                </li>
                                                <li
                                                    class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]"
                                                        data-tooltip="Large">1kg</a>
                                                </li>
                                                <li
                                                    class="h-[22px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#fff] flex items-center justify-center text-[12px] leading-[22px] rounded-[3px] font-normal float-left mr-[5px] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                                    <a href="javascript:void(0)" class="gi-opt-sz text-[#777]"
                                                        data-tooltip="Extra Large">2kg</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-quickview-qty mt-[15px] inline-flex">
                                    <div
                                        class="qty-plus-minus w-[100px] h-[43px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between rounded-[3px]">
                                        <input
                                            class="qty-input w-[40px] h-[50px] text-[#777] text-[14px] text-center outline-[0]"
                                            type="text" name="gi_qtybtn" value="1">
                                    </div>
                                    <div class="gi-quickview-cart">
                                        <button type="button"
                                            class="gi-btn-1 ml-[15px] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]"><i
                                                class="fi-rr-shopping-basket text-[14px] leading-[0] mr-[5px]"></i>
                                            Add To Cart</button>
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

    <!-- Back to top  -->
    <a
        class="gi-back-to-top inline-block bg-[#4b5966] w-[40px] h-[40px] text-center rounded-[4px] fixed bottom-[30px] right-[30px] opacity-[0] invisible z-[16] border-[1px] border-solid border-[#fff] hover:cursor-pointer hover:bg-[#000] hover:opacity-[1] max-[767px]:bottom-[15px] max-[767px]:right-[15px]"></a>

    <!-- Feature tools -->
    <div class="gi-tools-sidebar-overlay hidden w-full h-screen fixed top-0 left-0 bg-[#00000080] z-[16]"></div>
    <div
        class="gi-tools-sidebar bg-[#fff] w-[300px] h-screen fixed right-0 top-0 transition-all duration-[0.3s] ease z-[17]">
        <a href="javascript:void(0)"
            class="gi-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] h-[40px] w-[40px] bg-[#1d253199] transition-all duration-[0.3s] ease-in flex items-center justify-center text-[25px] z-[-1] rounded-[5px]">
            <i class="fi fi-rr-settings text-[#fff]"></i>
        </a>
        <div
            class="gi-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#17181c]">
            <h6 class="m-0 text-[17px] font-bold text-[#4b5966] leading-[1.2]">Tools</h6>
            <a href="javascript:void(0)"
                class="close-tools relative border-[0] text-[30px] leading-[20px] text-[#4b5966]">
                <i class="fi-rr-cross-small text-[20px] leading-[0]"></i>
            </a>
        </div>
        <div class="gi-tools-detail overflow-auto px-[15px] pb-[15px] h-[calc(100vh-72px)]">
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Select Color
                </h3>
                <ul class="gi-color">
                    <li
                        class="color-primary inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative active-variant">
                    </li>
                    <li
                        class="color-1 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-2 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-3 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-4 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-5 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-6 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-7 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-8 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                    <li
                        class="color-9 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative">
                    </li>
                </ul>
            </div>
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Modes</h3>
                <div class="gi-tools-rtl flex flex-wrap flex-row justify-between">
                    <div class="mode-primary gi-tools-item w-[125px] mb-[10px] text-center mode active-rtl ltr"
                        data-gi-mode-tool="ltr">
                        <img src="assets/img/tools/ltr.png" alt="ltr"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">LTR</p>
                    </div>
                    <div class="gi-tools-item w-[125px] mb-[10px] text-center mode rtl" data-gi-mode-tool="rtl">
                        <img src="assets/img/tools/rtl.png" alt="rtl"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">RTL</p>
                    </div>
                </div>
            </div>
            <div class="gi-tools-block">
                <h3 class="my-[15px] text-[14px] font-medium text-[#4b5966] font-Poppins leading-[1.2]">Dark Modes
                </h3>
                <div class="gi-tools-dark flex flex-wrap flex-row justify-between">
                    <div class="mode-primary gi-dark-item mode w-[125px] mb-[10px] text-center active-dark light"
                        data-gi-mode-tool="light">
                        <img src="assets/img/tools/light.png" alt="light"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">Light</p>
                    </div>
                    <div class="gi-dark-item w-[125px] mb-[10px] text-center mode dark" data-gi-mode-tool="dark">
                        <img src="assets/img/tools/dark.png" alt="dark"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#17181c] hover:border-[#5caf90]">
                        <p class="m-0 capitalize">Dark</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>


<!-- Mirrored from maraviyainfotech.com/projects/grabit-tailwind/grabit-tailwind/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2025 01:58:18 GMT -->

</html>
