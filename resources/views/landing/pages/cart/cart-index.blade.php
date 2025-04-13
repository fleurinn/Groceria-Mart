@extends('landing.layouts.app')

@section('page_title', 'Keranjang Pengguna | Groceria')
@section('content')

<!-- Cart section -->
<section class="gi-cart-section py-[40px] max-[767px]:py-[30px]">
    <h2 class="hidden">Cart Page</h2>
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="flex flex-wrap w-full">
            <div class="gi-cart-leftside min-[992px]:w-[100%] w-full px-[12px] max-[991px]:mt-[30px]">
                <!-- cart content Start -->
                <div class="gi-cart-content">
                    <div class="gi-cart-inner">
                        <div class="flex flex-wrap w-full">
                            <form action="#" class="w-full">
                                <div class="table-content cart-table-content">
                                    <table class="w-full bg-[#fff] ">
                                        <thead class="max-[767px]:border-[0] max-[767px]:h-[1px] max-[767px]:m-[-1px] max-[767px]:overflow-hidden max-[767px]:p-[0] max-[767px]:absolute max-[767px]:w-[1px]">
                                            <tr class="bg-[#fff] border-b-[2px] border-solid border-[#eee]">
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Product</th>
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Price</th>
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-center capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Quantity</th>
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($carts as $cart)
                                            <tr class="border-b-[1px] border-solid border-[#eee]">
                                                <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left">
                                                    <a href="#" class="text-[#777] font-normal text-[14px] flex items-center">
                                                        <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="{{ asset('storage/products/' . $cart->product->image) }}" alt="">
                                                        {{ $cart->product->name }}
                                                    </a>
                                                </td>
                                                <td data-label="Price" class="gi-cart-pro-price text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px]">
                                                    <span class="amount">Rp{{ number_format($cart->product->price, 0, ',', '.') }}</span>
                                                </td>
                                                <td data-label="Quantity" class="text-[#4b5966] text-[16px] py-[15px] px-[14px] text-center">
                                                    <div class="cart-qty-plus-minus border-[1px] border-[#eee] rounded-[5px] h-[35px] overflow-hidden w-[84px] flex items-center justify-between mx-auto">
                                                        <button type="button" class="qty-btn minus px-2 text-[#4b5966]">-</button>
                                                        <input 
                                                            class="cart-plus-minus border-0 text-[#4b5966] text-[14px] w-[30px] text-center font-semibold" 
                                                            type="text" 
                                                            value="{{ $cart->quantity }}" 
                                                            data-cart-id="{{ $cart->id }}" 
                                                            readonly>
                                                        <button type="button" class="qty-btn plus px-2 text-[#4b5966]">+</button>
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="gi-cart-pro-subtotal text-[#4b5966] text-[15px] font-medium py-[15px] px-[14px]">
                                                    Rp{{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}
                                                </td>
                                                <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] text-[16px] py-[15px] px-[14px] text-right">
                                                    <form action="{{ route('carts.destroy', $cart->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-[22px]"><i class="gicon gi-trash-o"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-gray-500 py-4">Keranjang kamu kosong 😔</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="w-full">
                                        <div class="pt-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mt-6">
                                            
                                            <!-- Total Amount -->
                                            <div class="flex justify-between items-center w-full sm:w-auto">
                                                <span class="text-[16px] font-medium text-[#4b5966] leading-[24px]">Total Amount:</span>
                                                <span class="text-[16px] font-bold text-[#4b5966] leading-[24px] ml-4">
                                                    Rp{{ number_format($total, 0, ',', '.') }}
                                                </span>
                                            </div>
                                            
                                            <!-- Checkout Button -->
                                            <button type="button"
                                                class="gi-btn-2 transition-all duration-300 ease-in-out rounded-[5px] py-2 px-4 bg-[#5caf90] text-white text-[14px] font-medium hover:bg-[#4b5966]">
                                                Check Out
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--cart content End -->
            </div>
        </div>
    </div>
</section>
<!-- Cart section End -->
<!-- New product section -->
<section class="gi-new-product py-[40px] max-[767px]:py-[30px]">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="flex flex-wrap w-full overflow-hidden mb-[-24px]">
            <div class="gi-new-prod-section w-full">
                <div class="gi-products">
                    <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                        <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">New <span class="text-[#5caf90]">Arrivals</span></h2>
                        <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Browse The Collection of Top Products</p>
                    </div>
                    <div class="gi-new-block " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="new-product-carousel owl-carousel gi-product-slider">
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <span class="label veg max-[991px]:hidden">
                                                    <span class="dot"></span>
                                                </span>
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/6_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/6_2.jpg" alt="Product">
                                            </a>
                                            <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                <span class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                            </span>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Dried Fruits</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                            <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Mixed Nuts Seeds & Berries Pack</a>
                                        </h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$56.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/3_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/3_1.jpg" alt="Product">
                                            </a>
                                            <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                <span class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                            </span>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Cookies</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Multi-Grain
                                                Jaggery Combo Cookies</a></h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <span class="qty absolute bottom-[0] right-[0] text-[#777] text-[13px]">10 kg</span>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$25.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <span class="label nonveg max-[991px]:hidden">
                                                    <span class="dot"></span>
                                                </span>
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/9_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/9_2.jpg" alt="Product">
                                            </a>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Foods</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Fresh Mango
                                                tasty juice 500ml pack</a></h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$49.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$65.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_2.jpg" alt="Product">
                                            </a>
                                            <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                <span class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                            </span>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Dried Fruits</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Dates Value
                                                Solimo Fresh Pouch</a></h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$78.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$85.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/1_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/1_2.jpg" alt="Product">
                                            </a>
                                            <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                <span class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative rounded-[5px]">New</span>
                                            </span>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Foods</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Stick Fiber
                                                Gluten Free Masala-Magic</a></h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <span class="qty absolute bottom-[0] right-[0] text-[#777] text-[13px]">2 pack</span>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$50.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/24_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/24_1.jpg" alt="Product">
                                            </a>
                                            <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                <span class="new sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#5caf90] text-[#fff] tracking-[0.5px] relative rounded-[5px]">New</span>
                                            </span>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Fresh Fruit</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                            <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Natural Hub Red Cherry Karonda</a>
                                        </h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <span class="qty absolute bottom-[0] right-[0] text-[#777] text-[13px]">1 kg</span>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$20.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$21.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/17_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/17_1.jpg" alt="Product">
                                            </a>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Tuber root</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                            <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Fresh Organic Ginger Product</a>
                                        </h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                <span class="qty absolute bottom-[0] right-[0] text-[#777] text-[13px]">100 g</span>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$2.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$3.00</span>
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
<!-- New product section End -->
 
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.qty-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.cart-plus-minus');
            const cartId = input.dataset.cartId;
            const isPlus = this.classList.contains('plus');
            const url = isPlus ? "{{ route('keranjang.increase') }}" : "{{ route('keranjang.decrease') }}";

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ cart_id: cartId })
            })
            .then(res => res.json())
            .then(data => {
                // Setelah berhasil update, langsung refresh halaman
                window.location.reload();
            })
            .catch(err => {
                console.error(err);
                alert("Terjadi kesalahan.");
            });
        });
    });
});
</script>

@endsection
