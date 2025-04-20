@extends('landing.layouts.app')

@section('page_title', 'Produk | Groceria')
@section('content')
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      border-bottom: 1px solid #eee;
    }

    .logo {
      font-weight: bold;
      font-size: 1.5rem;
      color: #188c3e;
    }

    .search-bar {
      flex: 1;
      margin: 0 2rem;
    }

    .search-bar input {
      width: 100%;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .nav-icons {
      display: flex;
      gap: 2rem;
      font-size: 0.9rem;
    }

    .nav-icons span {
      cursor: pointer;
    }

    nav {
      display: flex;
      gap: 2rem;
      padding: 1rem 2rem;
      border-bottom: 1px solid #eee;
      font-weight: 500;
    }

    nav a {
      text-decoration: none;
      color: #000;
    }

    .order-tabs {
      display: flex;
      justify-content: center;
      gap: 2rem;
      border-bottom: 1px solid #ddd;
      padding: 1rem 0;
    }

    .order-tabs span {
      padding: 0.5rem 1rem;
      cursor: pointer;
    }

    .order-tabs .active {
      border-bottom: 2px solid #000;
      font-weight: bold;
    }

    .order-empty {
      text-align: center;
      padding: 4rem 2rem;
    }

    .order-empty img {
      width: 64px;
      height: 64px;
      margin-bottom: 1rem;
    }

    .order-empty h2 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .order-empty p {
      color: #666;
    }
  </style>

<!-- Header menu -->
<div class="gi-header-cat transition-all duration-[0.3s] ease-in-out bg-[#fff] border-t-[1px] border-b-[1px] border-solid border-[#eee] hidden min-[992px]:block">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="gi-nav-bar flex flex-row justify-between relative w-full px-[12px]">
            <!-- Main Menu Start -->
            <div id="gi-main-menu-desk" class="w-full flex items-center min-[992px]:block">
                <div class="nav-desk">
                    <div class="w-full flex flex-wrap px-[12px] min-[1400px]:relative">
                        <div class="basis-auto w-full self-center">
                            <div class="gi-main-menu flex">
                                <ul class="w-full flex justify-center flex-wrap pl-[0]">
                                    <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out relative max-[1199px]:mx-[15px] group">
                                        <a class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium cursor-pointer">
                                            <i class="transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Order
                                        </a>
                                        <!-- Dropdown Menu -->
                                        <ul class="absolute top-full left-0 bg-white shadow-lg mt-0 hidden group-hover:block z-50 min-w-[180px]">
                                        <li>
                                            <a href="{{ route('order') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Semua</a>
                                        </li>

                                            <li>
                                                <a href="{{ route('orders') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Belum Dibayar</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orders') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Untuk Dikirim</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orders') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dikirim</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orders') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Untuk Diulas</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Menu End -->
        </div>
    </div>
</div>
<!-- Header menu End -->



  <!-- Category section -->
    <section class="gi-category py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner mx-[-12px]">
                            <div class="flex flex-wrap w-full">
                                <div class="w-full px-[12px] gi-product-box max-[575px]:mx-auto pro-gl-content">
                                    <div class="gi-product-content pb-[24px] h-full flex max-[767px]:max-w-[400px] max-[575px]:max-w-[350px] max-[767px]:m-auto">
                                        <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-row overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px] max-[767px]:flex-col">
                                            <div class="gi-pro-image-outer transition-all duration-[0.3s] ease delay-[0s] z-[11] relative max-w-[270px] bg-[#fff] flex items-center max-[767px]:max-w-full">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none transition-all duration-[0.3s] ease-in-out">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full z-[1] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_1.jpg" alt="Product">
                                                        <img class="hover-image absolute z-[2] top-[0] left-[0] opacity-[0] max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_2.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                        <span class="sale py-[5px] px-[10px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                                    </span>
                                                    <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-[0]">
                                                        <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]" title="Wishlist">
                                                            <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="gi-btn-group modal-toggle quickview transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]">
                                                            <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]" title="Compare">
                                                            <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]">
                                                            <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-l-[1px] border-solid border-[#eee] justify-center">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] capitalize font-manrope tracking-[0.01rem] leading-[1.2]">Dried Fruits</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-auto mb-[10px] text-[16px] tracking-[0.01rem] font-normal leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="text-[#4b5966] block text-[16px] leading-[22px] font-normal tracking-[0.85px] capitalize font-Poppins">Dates Value Pack Pouch</a>
                                                </h5>
                                                <p class="gi-info my-[5px] text-[13px] text-[#777] block">Contrary to popular belief, Lorem Ipsum is not simply
                                                    random text. It has roots in a piece of classical Latin literature
                                                    from 45 BC, making it over 2000 years old.</p>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star inline-block text-[#777] float-left text-[14px] mr-[3px]"></i>
                                                        <i class="gicon gi-star inline-block text-[#777] float-left text-[14px] mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price text-[18px] flex items-center justify-left text-[#4b5966] tracking-[0.4px]">
                                                        <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px] tracking-[0.02rem]">$78.00</span>
                                                        <span class="old-price text-[14px] text-[#777] tracking-[0.02rem] line-through">$85.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Shop content End -->
                </div>  
            </div>
        </div>
    </section>
    <!-- Category section End -->


  @endsection