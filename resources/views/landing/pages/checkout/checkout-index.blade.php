@extends('landing.layouts.app')

@section('page_title', 'Checkout | Groceria')
@section('content')

<!-- Checkout section -->
<section class="gi-checkout-section py-[40px] text-[14px] max-[767px]:py-[30px]">
        <h2 class="hidden">Checkout Page</h2>
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full">
                <!-- Sidebar Area Start -->
                <div class="gi-checkout-rightside px-[12px] min-[992px]:w-[33.33%] w-full">
                    <div class="gi-sidebar-wrap gi-checkout-del-wrap border-[1px] border-solid border-[#eee] mb-[30px] p-[15px] rounded-[5px]">
                        <!-- Sidebar Summary Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title">
                                <h3 class="gi-sidebar-title text-[20px] max-[1199px]:text-[18px] font-semibold tracking-[0] mb-[0] relative text-[#4b5966] leading-[1.2]">Delivery Method</h3>
                            </div>
                            <div class="gi-sb-block-content mt-[15px]">
                                <div class="gi-checkout-del">
                                    <div class="gi-del-desc text-[#777] text-[14px] font-light leading-[24px] mb-[15px] block leading-[0]">Please select the preferred shipping method to use on this order.</div>
                                    <form action="#">
                                        <span class="gi-del-option flex">
                                            <span class="w-[50%]">
                                                <span class="gi-del-opt-head text-[#4b5966] text-[15px] font-medium leading-[1] tracking-[0] mb-[10px] block">Free Shipping</span>
                                                <input type="radio" id="del1" name="radio-group" checked>
                                                <label for="del1" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#777] tracking-[0] mb-[15px]">Rate - $0 .00</label>
                                            </span>
                                            <span class="w-[50%]">
                                                <span class="gi-del-opt-head text-[#4b5966] text-[15px] font-medium leading-[1] tracking-[0] mb-[10px] block">Flat Rate</span>
                                                <input type="radio" id="del2" name="radio-group">
                                                <label for="del2" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#777] tracking-[0] mb-[15px]">Rate - $5.00</label>
                                            </span>
                                        </span>
                                        <span class="gi-del-commemt block mt-[12px]">
                                            <span class="gi-del-opt-head mb-[8px] text-[#4b5966] text-[15px] font-medium leading-[1] tracking-[0] block">Add Comments About Your Order</span>
                                            <textarea name="your-commemt" placeholder="Comments" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] h-[100px] py-[10px] px-[15px] mb-[0] w-full outline-[0] text-[14px] block rounded-[5px]"></textarea>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                    <div class="gi-sidebar-wrap gi-checkout-pay-wrap border-[1px] border-solid border-[#eee] mb-[30px] p-[15px] rounded-[5px]">
                        <!-- Sidebar Payment Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title">
                                <h3 class="gi-sidebar-title text-[20px] max-[1199px]:text-[18px] font-semibold tracking-[0] mb-[0] relative text-[#4b5966] leading-[1.2]">Payment Method</h3>
                            </div>
                            <div class="gi-sb-block-content mt-[15px]">
                                <div class="gi-checkout-pay">
                                    <div class="gi-pay-desc text-[#777] text-[14px] font-light leading-[24px] mb-[15px] block tracking-[0]">Please select the preferred payment method to use on this order.</div>
                                    <form action="#">
                                        <span class="gi-pay-option">
                                            <span>
                                                <input type="radio" id="pay1" name="radio-group" checked>
                                                <label for="pay1" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#777] tracking-[0]">Cash On Delivery</label>
                                            </span>
                                        </span>
                                        <span class="gi-pay-commemt">
                                            <span class="gi-pay-opt-head mb-[8px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] block">Add Comments About Your Order</span>
                                            <textarea class="bg-transparent border-[1px] border-solid border-[#eee] h-[110px] py-[10px] px-[15px] mb-[0] w-full outline-[0] text-[14px] block rounded-[5px]" name="your-commemt" placeholder="Comments"></textarea>
                                        </span>
                                        <span class="gi-pay-agree relative block mt-[20px]">
                                            <input class="absolute opacity-[0] cursor-pointer z-[999] top-[0] left-[0] h-[15px] w-[15px] outline-[0]" type="checkbox" value="">
                                            <a href="#" class="ml-[27px] block text-[#777] text-[14px] mt-[0] leading-[18px] font-light tracking-[0] cursor-pointer">I have read and agree to the <span class="text-[#4b5966] font-medium">Terms & Conditions.</span></a>
                                            <span class="checked absolute top-[0] left-[0] h-[15px] w-[15px] bg-[#fff] border-[1px] border-solid border-[#ededed] rounded-[4px]"></span>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Payment Block -->
                    </div>
                    <div class="gi-sidebar-wrap gi-check-pay-img-wrap border-[1px] border-solid border-[#eee] p-[15px] rounded-[5px]">
                        <!-- Sidebar Payment Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title">
                                <h3 class="gi-sidebar-title text-[20px] font-semibold tracking-[0] mb-[0] relative text-[#4b5966] leading-[1.2] max-[1199px]:text-[18px]">Payment Method</h3>
                            </div>
                            <div class="gi-sb-block-content mt-[15px]">
                                <div class="gi-check-pay-img-inner flex justify-between w-full flex-wrap">
                                    <div class="gi-check-pay-img">
                                        <img src="assets/img/hero-bg/payment.png" class="w-full" alt="payment">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Payment Block -->
                    </div>
                </div>
                <div class="gi-checkout-leftside px-[12px] min-[992px]:w-[66.66%] w-full max-[991px]:mt-[30px]">
                    <!-- checkout content Start -->
                    <div class="gi-checkout-content">
                        <div class="gi-checkout-inner">
                            <div class="gi-checkout-wrap p-[30px] border-[1px] border-solid border-[#eee] bg-[#fff] rounded-[5px] mb-[40px]">
                                <div class="gi-checkout-block gi-check-new mb-[30px]">
                                <div class="gi-sb-title">
                                <h3 class="text-[20px] max-[1199px]:text-[18px] font-semibold tracking-[0] mb-[0] relative text-[#4b5966] leading-[1.2]">Summary</h3>
                            </div>
                            <div class="gi-sb-block-content mt-[15px]">
                                <div class="gi-checkout-summary">
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#777] text-[14px] leading-[24px] tracking-[0]">Sub-Total</span>
                                        <span class="text-right text-[#4b5966] text-[15px] leading-[24px] font-medium">$80.00</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#777] text-[14px] leading-[24px] tracking-[0]">Delivery Charges</span>
                                        <span class="text-right text-[#4b5966] text-[15px] leading-[24px] font-medium">$80.00</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#777] text-[14px] leading-[24px] tracking-[0]">Coupan Discount</span>
                                        <span class="text-right text-[#4b5966] text-[15px] leading-[24px] font-medium"><a class="gi-checkout-coupan text-[#5caf90] text-[14px] font-medium">Apply Coupan</a></span>
                                    </div>
                                    <div class="gi-checkout-coupan-content hidden flex justify-between items-center mb-[10px]">
                                        <form class="gi-checkout-coupan-form flex border-[1px] border-solid border-[#eee] p-[5px] rounded-[5px]" name="gi-checkout-coupan-form" method="post" action="#">
                                            <input class="gi-coupan inline-block align-top leading-[35px] h-[35px] w-full text-[#777] text-[14px] border-[0] bg-transparent text-left pl-[10px] pr-[10px] tracking-[0.5px] rounded-[5px] outline-[0]" type="text" required="" placeholder="Enter Your Coupan Code" name="gi-coupan" value="">
                                            <button type="submit" class="gi-coupan-btn gi-btn-2 text-[16px] text-center px-[15px] transition-all duration-[0.3s] ease-in-out font-medium bg-[#5caf90] text-[#fff] rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" name="subscribe" value="">Apply</button>
                                        </form>
                                    </div>
                                    <div class="gi-checkout-summary-total border-t-[1px] border-solid border-[#eee] pt-[19px] mb-[0] mt-[16px] flex justify-between items-center">
                                        <span class="text-left text-[16px] font-semibold text-[#4b5966] tracking-[0] font-manrope">Total Amount</span>
                                        <span class="text-right text-[16px] font-semibold text-[#4b5966] font-manrope">$80.00</span>
                                    </div>
                                </div>
                                <div class="gi-checkout-pro">
                                    <div class="w-full mb-4">
                                        <div class="gi-product-inner flex flex-row items-center border border-[#eee] rounded-[5px] overflow-hidden cursor-pointer transition-all duration-300">
                                            
                                            <!-- Gambar di sebelah kiri -->
                                            <div class="gi-pro-image-outer w-[150px] flex-shrink-0">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image block relative overflow-hidden">
                                                        <img class="main-image w-full transition-all duration-300" src="assets/img/product-images/8_1.jpg" alt="Product">
                                                        <img class="hover-image absolute top-0 left-0 opacity-0 transition-all duration-300" src="assets/img/product-images/8_2.jpg" alt="Product">
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Konten di sebelah kanan -->
                                            <div class="gi-pro-content flex flex-col justify-center p-4 w-full">
                                                <h5 class="gi-pro-title text-[16px] mb-2">
                                                    <a href="product-left-sidebar.html" class="text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Smoked Honey Spiced Nuts</a>
                                                </h5>

                                                <div class="gi-pro-rating mb-2 opacity-70 flex">
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star text-[14px] text-[#777] mr-1"></i>
                                                </div>

                                                <div class="gi-price">
                                                    <span class="old-price text-[14px] text-[#777] line-through mr-2">$58.00</span>
                                                    <span class="new-price text-[#4b5966] font-bold text-[14px]">$45.00</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-full mb-4">
                                        <div class="gi-product-inner flex flex-row items-center border border-[#eee] rounded-[5px] overflow-hidden cursor-pointer transition-all duration-300">
                                            
                                            <!-- Gambar di sebelah kiri -->
                                            <div class="gi-pro-image-outer w-[150px] flex-shrink-0">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image block relative overflow-hidden">
                                                        <img class="main-image w-full transition-all duration-300" src="assets/img/product-images/8_1.jpg" alt="Product">
                                                        <img class="hover-image absolute top-0 left-0 opacity-0 transition-all duration-300" src="assets/img/product-images/8_2.jpg" alt="Product">
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Konten di sebelah kanan -->
                                            <div class="gi-pro-content flex flex-col justify-center p-4 w-full">
                                                <h5 class="gi-pro-title text-[16px] mb-2">
                                                    <a href="product-left-sidebar.html" class="text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Smoked Honey Spiced Nuts</a>
                                                </h5>

                                                <div class="gi-pro-rating mb-2 opacity-70 flex">
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star text-[14px] text-[#777] mr-1"></i>
                                                </div>

                                                <div class="gi-price">
                                                    <span class="old-price text-[14px] text-[#777] line-through mr-2">$58.00</span>
                                                    <span class="new-price text-[#4b5966] font-bold text-[14px]">$45.00</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-full mb-4">
                                        <div class="gi-product-inner flex flex-row items-center border border-[#eee] rounded-[5px] overflow-hidden cursor-pointer transition-all duration-300">
                                            
                                            <!-- Gambar di sebelah kiri -->
                                            <div class="gi-pro-image-outer w-[150px] flex-shrink-0">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image block relative overflow-hidden">
                                                        <img class="main-image w-full transition-all duration-300" src="assets/img/product-images/8_1.jpg" alt="Product">
                                                        <img class="hover-image absolute top-0 left-0 opacity-0 transition-all duration-300" src="assets/img/product-images/8_2.jpg" alt="Product">
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Konten di sebelah kanan -->
                                            <div class="gi-pro-content flex flex-col justify-center p-4 w-full">
                                                <h5 class="gi-pro-title text-[16px] mb-2">
                                                    <a href="product-left-sidebar.html" class="text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Smoked Honey Spiced Nuts</a>
                                                </h5>

                                                <div class="gi-pro-rating mb-2 opacity-70 flex">
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-1"></i>
                                                    <i class="gicon gi-star text-[14px] text-[#777] mr-1"></i>
                                                </div>

                                                <div class="gi-price">
                                                    <span class="old-price text-[14px] text-[#777] line-through mr-2">$58.00</span>
                                                    <span class="new-price text-[#4b5966] font-bold text-[14px]">$45.00</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="gi-checkout-wrap pb-[3px] p-[30px] border-[1px] border-solid border-[#eee] bg-[#fff] rounded-[5px] mb-[40px]">
                                <div class="gi-checkout-block gi-check-bill">
                                    <h3 class="gi-checkout-title mb-[26px] leading-[1.2] text-[20px] font-semibold tracking-[0] relative block text-[#4b5966] font-Montserrat max-[575px]:text-[18px]">Billing Details</h3>
                                    <div class="gi-bl-block-content">
                                        <div class="gi-check-subtitle mb-[10px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Checkout Options</div>
                                        <span class="gi-bill-option mb-[32px] block">
                                            <span class="mr-[45px]">
                                                <input type="radio" id="bill1" name="radio-group">
                                                <label for="bill1" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#777] tracking-[0] mb-[15px]">I want to use an existing address</label>
                                            </span>
                                            <span class="mr-[45px]">
                                                <input type="radio" id="bill2" name="radio-group" checked>
                                                <label for="bill2" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#777] tracking-[0] mb-[15px]">I want to use new address</label>
                                            </span>
                                        </span>
                                        <div class="gi-check-bill-form mb-[2px]">
                                            <form action="#" method="post" class="flex flex-row flex-wrap mx-[-15px]">
                                                <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">First Name*</label>
                                                    <input type="text" name="firstname" placeholder="Enter your first name" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]" required>
                                                </span>
                                                <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Last Name*</label>
                                                    <input type="text" name="lastname" placeholder="Enter your last name" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]" required>
                                                </span>
                                                <span class="gi-bill-wrap w-full px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Address</label>
                                                    <input type="text" name="address" placeholder="Address Line 1" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">
                                                </span>
                                                <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">City *</label>
                                                    <span class="gi-bl-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[27px] rounded-[5px]">
                                                        <select name="gi_select_city" id="gi-select-city" class="gi-bill-select">
                                                            <option selected disabled>City</option>
                                                            <option value="1">City 1</option>
                                                            <option value="2">City 2</option>
                                                            <option value="3">City 3</option>
                                                            <option value="4">City 4</option>
                                                            <option value="5">City 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Post Code</label>
                                                    <input type="text" name="postalcode" placeholder="Post Code" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px] h-[50px]">
                                                </span>
                                                <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Country *</label>
                                                    <span class="gi-bl-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[27px] rounded-[5px]">
                                                        <select name="gi_select_country" id="gi-select-country" class="gi-bill-select">
                                                            <option selected disabled>Country</option>
                                                            <option value="1">Country 1</option>
                                                            <option value="2">Country 2</option>
                                                            <option value="3">Country 3</option>
                                                            <option value="4">Country 4</option>
                                                            <option value="5">Country 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="gi-bill-wrap gi-bill-half w-[50%] px-[15px]">
                                                    <label class="mb-[7px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1] inline-block">Region State</label>
                                                    <span class="gi-bl-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[27px] rounded-[5px]">
                                                        <select name="gi_select_state" id="gi-select-state" class="gi-bill-select">
                                                            <option selected disabled>Region/State</option>
                                                            <option value="1">Region/State 1</option>
                                                            <option value="2">Region/State 2</option>
                                                            <option value="3">Region/State 3</option>
                                                            <option value="4">Region/State 4</option>
                                                            <option value="5">Region/State 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="gi-check-order-btn flex flex-end p-[0]">
                                <a class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="#">Place Order</a>
                            </span>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout section End -->

@endsection