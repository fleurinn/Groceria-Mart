@section('header')

    <!-- Header start  -->
    <header class="gi-header bg-[#fff] z-[14] max-[991px]:z-[16] relative">
                    <!-- Header Top responsive Action -->
                    <div class="grow-[1] shrink-[0] basis-[0%] min-[992px]:hidden">
                        <div class="gi-header-bottons flex justify-end">
                            <div class="right-icons flex flex-row">
                                <!-- Header User Start -->
                                <a href="#" class="gi-header-btn gi-header-user mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                    </div>
                                </a>
                                <!-- Header User End -->
                                <!-- Header Wishlist Start -->
                                <a href="#" class="gi-header-btn gi-wish-toggle mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <span class="gi-header-count gi-wishlist-count w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
                                </a>
                                <!-- Header Wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="javascript:void(0)" class="gi-header-btn gi-cart-toggle mr-[30px] relative transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-shopping-bag text-[24px] leading-[17px]"></i>
                                        <span class="main-label-note-new"></span>
                                    </div>
                                    <span class="gi-header-count gi-cart-count  w-[15px] h-[15px] text-[#fff] flex items-center justify-center rounded-[50%] text-[11px] absolute top-[-2px] right-[-6px] opacity-[0.8]">3</span>
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
        <!-- Header Top  End -->

        <!-- Header Bottom  Start -->
        <div class="gi-header-bottom py-[30px] max-[991px]:py-[15px] max-[991px]:border-b-[1px] border-solid border-[#eee]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="w-full flex flex-wrap px-[12px]">
                    <div class="gi-flex flex flex-row justify-between w-full max-[575px]:flex-col">
                        <!-- Header Logo Start -->
                        <div class="self-center gi-header-logo max-[575px]:mb-[15px]">
                            <div class="header-logo text-left">
                                <a href="index.html"><img src="assets/img/logo/logogroceria.png" alt="Site Logo" class="w-[144px] max-[1199px]:w-[130px] max-[991px]:w-[120px] max-[767px]:w-[100px] "></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->
                        <!-- Header Search Start -->
                        <div class="self-center gi-header-search my-[0] mx-[auto] max-[991px]:m-0">
                            <div class="header-search w-full min-w-[700px] px-[30px] relative max-[1399px]:min-w-[500px] max-[1199px]:min-w-[400px] max-[991px]:p-0 max-[767px]:min-w-[350px] max-[480px]:min-w-[300px] max-[320px]:min-w-full">
                                <form class="gi-search-group-form relative flex border-[1px] border-solid border-[#eee] items-center rounded-[5px]" action="#">
                                    <input class="form-control gi-search-bar block w-full min-h-[50px] h-[50px] max-[991px]:h-[40px] max-[991px]:min-h-[40px] px-[15px] text-[13px] font-normal leading-[1] text-[#777] bg-transparent outline-[0] border-[0] tracking-[0.6px]" placeholder="Cari Produk..." type="text">
                                    <button type="submit" class="search_submit relative flex items-center justify-center w-[48px] h-[40px] basis-[48px]">
                                        <i class="fi-rr-search text-[#4b5966] h-[18px] w-[18px] transition-all duration-[0.3s] ease-in-out"></i>
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
                                    <a href="javascript:void(0)" class="gi-header-btn gi-header-user dropdown-toggle gi-user-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Akun">
                                        <div class="header-icon relative flex">
                                            <i class="fi-rr-user text-[24px] leading-[17px]"></i>
                                        </div>
                                        <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                            <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Akun</span>
                                            @guest
                                                <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">Masuk</span>
                                            @endguest

                                            @auth
                                                <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">
                                                    {{ Auth::user()->first_name }}
                                                </span>
                                            @endauth
                                        </div>
                                    </a>
                                    <ul class="gi-dropdown-menu min-w-[150px] py-[5px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute z-[16] text-left bg-[#fff] block opacity-0 invisible left-[0] right-[auto] border-[1px] border-solid border-[#eee] rounded-[5px]">

                                    @guest
                                        <li>
                                            <a href="{{ route('register') }}" class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">Daftar</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('login') }}" class="dropdown-item py-[10px] px-[20px] block w-full font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]">Masuk</a>
                                        </li>
                                    @endguest

                                    @auth
                                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                                            @csrf
                                            <button type="submit" class="dropdown-item py-[10px] px-[20px] block w-full text-left font-normal text-[13px] text-[#777] hover:bg-transparent hover:text-[#5caf90]" style="background: none; border: none; cursor: pointer;">
                                                <span class="me-2" data-feather="log-out"></span>Keluar
                                            </button>
                                        </form>
                                    @endauth

                                </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                @php
                                    use Illuminate\Support\Facades\Auth;
                                    use App\Models\Wishlist;

                                    $wishlistCount = 0;
                                    if (Auth::check()) {
                                        $wishlistCount = Wishlist::where('user_id', Auth::id())->count();
                                    }
                                @endphp
                                <a href="{{ route('wishlist.index') }}" class="gi-header-btn gi-wish-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Wishlist">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-heart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                        <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Favorit</span>
                                        <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]"><b class="gi-wishlist-count">{{ $wishlistCount }}</b>-item</span>
                                    </div>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="{{ route('keranjang') }}" class="gi-header-btn gi-wish-toggle mr-[30px] transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Wishlist">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-shopping-cart text-[24px] leading-[17px]"></i>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                        <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Keranjang</span>
                                        <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]"><b class="gi-wishlist-count">{{ $cartCount }}</b>-item</span>
                                    </div>
                                </a>
                                <!-- <a href="{{ route('keranjang') }}" class="gi-header-btn gi-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex text-[#4b5966] w-[auto] items-center whitespace-nowrap" title="Cart">
                                    <div class="header-icon relative flex">
                                        <i class="fi-rr-shopping-bag text-[24px] leading-[17px]"></i>
                                        <span class="main-label-note-new transition-all duration-[0.3s] ease-in-out h-[10px] w-[10px] m-auto bg-[#ec716d] rounded-[50%] cursor-default hidden absolute bottom-[15px] left-[0] right-[0] z-[3]"></span>
                                    </div>
                                    <div class="gi-btn-desc flex flex-col uppercase ml-[10px]">
                                        <span class="gi-btn-title transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#777] mb-[6px] tracking-[0.6px] capitalize font-medium">Cart</span>
                                        <span class="gi-btn-stitle transition-all duration-[0.3s] ease-in-out text-[13px] font-medium text-[#4b5966] leading-[14px] max-[1199px]:text-[11px] max-[1199px]:min-w-[48px]">
                                            <b class="gi-cart-count">3</b>-items
                                        </span>
                                    </div>
                                </a>
                                Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Button End -->

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
                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ route('landing-page') }}" class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class=" transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Beranda
                                                </a>
                                            </li>
                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ route('produk') }}" class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class=" transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Produk
                                                </a>
                                            </li>
                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ route('user.order.history') }}"class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class=" transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Order
                                                </a>
                                            </li>
                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ route('about-us') }}" class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class=" transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Tentang Kami
                                                </a>
                                            </li>

                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ route('service') }}" class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class=" transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Kritik & Saran
                                                </a>
                                            </li>

                                            <li class="non-drop mx-[20px] transition-all duration-[0.3s] ease-in-out max-[1199px]:mx-[15px]">
                                                <a href="{{ route('user.index') }}" class="transition-all duration-[0.3s] ease-in-out text-[15px] leading-[60px] capitalize text-[#4b5966] flex items-center font-medium">
                                                    <i class="transition-all duration-[0.3s] ease-in-out mr-[5px] text-[18px] text-[#4b5966] flex"></i>Profil
                                                </a>
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

        <!-- Mobile Sidebar Menu Start -->
<div id="mobileMenuSidebar" class="fixed inset-0 bg-black bg-opacity-50 z-[99] hidden">
    <div class="w-[280px] h-full bg-white p-4 overflow-y-auto shadow-lg relative">
        <button onclick="toggleMobileMenu()" class="absolute top-4 right-4 text-gray-500 hover:text-red-500">
            <i class="fi-rr-cross text-[20px]"></i>
        </button>
        <div class="mb-6">
            <a href="index.html">
                <img src="assets/img/logo/logogroceria.png" class="w-[120px]" alt="Logo">
            </a>
        </div>

        <ul class="space-y-4 text-[#4b5966] text-[15px] font-medium">
            <li><a href="{{ route('login') }}">Akun Saya</a></li>
            <li><a href="{{ route('wishlist.index') }}">Favorit</a></li>
            <li><a href="{{ route('keranjang') }}">Keranjang</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">Promo</a></li>
            <li><a href="#">Bantuan</a></li>
        </ul>

        @auth
        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button type="submit" class="w-full text-left text-red-500 font-medium">Keluar</button>
        </form>
        @endauth
    </div>
</div>
<!-- Mobile Sidebar Menu End -->

<script>
    function toggleMobileMenu() {
        const sidebar = document.getElementById('mobileMenuSidebar');
        sidebar.classList.toggle('hidden');
    }

    // Tambahkan event listener untuk tombol menu burger
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('.gi-site-menu-icon');
        if (menuButton) {
            menuButton.addEventListener('click', toggleMobileMenu);
        }
    });
</script>


    </header>
    <!-- Header End  -->