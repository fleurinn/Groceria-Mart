@extends('landing.layouts.app')

@section('page_title', 'Keranjang Pengguna | Groceria')
@section('content')

<!-- Cart section -->
<section class="gi-cart-section py-[40px] max-[767px]:py-[30px]">
    <h2 class="hidden">Cart Page</h2>
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="flex flex-wrap w-full">
            <!-- Sidebar Area Start -->
            <div class="gi-cart-rightside min-[992px]:w-[33.33%] w-full px-[12px]">
                <div class="gi-sidebar-wrap p-[15px] rounded-[5px] border-[1px] border-solid border-[#eee] mb-[0]">
                    <!-- Sidebar Summary Block -->
                    <div class="gi-sidebar-block">
                        <div class="gi-sb-title">
                            <h3 class="gi-sidebar-title text-[20px] font-semibold tracking-[0] mb-[0] leading-[1.2] relative text-[#4b5966] max-[1199px]:text-[18px]">Summary</h3>
                        </div>
                        <div class="gi-sb-block-content mb-[0] border-b-[0] mt-[15px]">
                            <h4 class="gi-ship-title mb-[0] text-[17px] font-bold tracking-[0] leading-[1.2] border-b-[1px] border-solid border-[#eee] text-[#777] pb-[15px] relative flex items-center justify-between">Estimate Shipping</h4>
                            <div class="gi-cart-form pt-[19px]">
                                <p class="text-[#777] text-[14px] mb-[10px] tracking-[0] leading-[28px] font-light">Enter your destination to get a shipping estimate</p>
                                <form action="#" method="post">
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium tracking-[0] leading-[1] inline-block">Country *</label>
                                        <span class="gi-cart-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[28px] rounded-[5px]">
                                            <select name="gi_cart_country" id="gi-cart-select-country" class="gi-cart-select">
                                                <option selected="" disabled="">United States</option>
                                                <option value="1">Country 1</option>
                                                <option value="2">Country 2</option>
                                                <option value="3">Country 3</option>
                                                <option value="4">Country 4</option>
                                                <option value="5">Country 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium tracking-[0] leading-[1] inline-block">State/Province</label>
                                        <span class="gi-cart-select-inner relative flex w-full h-[50px] border-[1px] border-solid border-[#eee] text-[14px] p-[0] mb-[28px] rounded-[5px]">
                                            <select name="gi_cart_state" id="gi-cart-select-state" class="gi-cart-select">
                                                <option selected="" disabled="">Please Select a region, state</option>
                                                <option value="1">Region/State 1</option>
                                                <option value="2">Region/State 2</option>
                                                <option value="3">Region/State 3</option>
                                                <option value="4">Region/State 4</option>
                                                <option value="5">Region/State 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium tracking-[0] leading-[1] inline-block">Zip/Postal Code</label>
                                        <input type="text" name="postalcode" placeholder="Zip/Postal Code" class="h-[50px] bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full outline-[0] rounded-[5px]">
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="gi-sb-block-content mb-[0] border-b-[0] mt-[15px]">
                            <div class="gi-cart-summary-bottom">
                                <div class="gi-cart-summary">
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#4b5966] text-[14px] leading-[24px] tracking-[0]">Sub-Total</span>
                                        <span class="text-right text-[#4b5966] text-[14px] leading-[24px] font-medium">$80.00</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#4b5966] text-[14px] leading-[24px] tracking-[0]">Delivery Charges</span>
                                        <span class="text-right text-[#4b5966] text-[14px] leading-[24px] font-medium">$80.00</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#4b5966] text-[14px] leading-[24px] tracking-[0]">Coupan Discount</span>
                                        <span class="text-right text-[#5caf90] text-[14px] leading-[24px] font-medium"><a class="gi-cart-coupan">Apply Coupan</a></span>
                                    </div>
                                    <div class="gi-cart-coupan-content mb-[0] hidden">
                                        <form class="gi-cart-coupan-form flex border-[1px] border-solid border-[#eee] p-[5px] rounded-[5px]" name="gi-cart-coupan-form" method="post" action="#">
                                            <input class="gi-coupan inline-block align-top leading-[35px] h-[40px] text-[#777] text-[14px] w-[80%] border-[0] bg-transparent text-left px-[10px] tracking-[0.5px] outline-[0] rounded-[5px]" type="text" required="" placeholder="Enter Your Coupan Code" name="gi-coupan" value="">
                                            <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]" name="subscribe" value="">Apply</button>
                                        </form>
                                    </div>
                                    <div class="gi-cart-summary-total border-t-[1px] border-solid border-[#eee] pt-[19px] mb-[0] mt-[16px] flex justify-between items-center">
                                        <span class="text-left text-[16px] font-medium text-[#4b5966] leading-[24px] tracking-[0]">Total Amount</span>
                                        <span class="text-right text-[16px] font-medium text-[#4b5966] leading-[24px] tracking-[0]">$80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gi-cart-leftside min-[992px]:w-[66.66%] w-full px-[12px] max-[991px]:mt-[30px]">
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
                                            <tr class="border-b-[1px] border-solid border-[#eee] max-[767px]:border-[1px] max-[767px]:block max-[767px]:mb-[15px]">
                                                <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:w-full max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[#777] font-normal text-[14px] flex leading-[1.5] tracking-[0.6px] items-center">
                                                        <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="assets/img/product-images/1_1.jpg" alt="">Crunchy
                                                        Triangle Chips Snacks
                                                    </a>
                                                </td>
                                                <td data-label="Price" class="gi-cart-pro-price text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <span class="amount tracking-[0.02rem]">$56.00</span>
                                                </td>
                                                <td data-label="Quantity" class="gi-cart-pro-qty text-[#4b5966] text-[16px] py-[15px] px-[14px] text-center max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <div class="cart-qty-plus-minus border-[1px] border-solid border-[#eee] rounded-[5px] h-[35px] overflow-hidden p-[0] relative w-[84px] flex items-center justify-between my-[0] mx-auto max-[767px]:m-[0]">
                                                        <input class="cart-plus-minus border-[0] text-[#4b5966] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[40px] outline-[0] leading-[38px] font-semibold" type="text" name="cartqtybutton" value="1">
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="gi-cart-pro-subtotal text-[#4b5966] text-[15px] font-medium py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">$56.00</td>
                                                <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] w-[90px] text-[16px] py-[15px] px-[14px] text-right max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[22px] my-[0] mx-auto"><i class="gicon gi-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="border-b-[1px] border-solid border-[#eee] max-[767px]:border-[1px] max-[767px]:block max-[767px]:mb-[15px]">
                                                <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:w-full max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[#777] font-normal text-[14px] flex leading-[1.5] tracking-[0.6px] items-center">
                                                        <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="assets/img/product-images/2_1.jpg" alt="">Dates
                                                        Value Pack Pouch
                                                    </a>
                                                </td>
                                                <td data-label="Price" class="gi-cart-pro-price text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <span class="amount tracking-[0.02rem]">$75.00</span>
                                                </td>
                                                <td data-label="Quantity" class="gi-cart-pro-qty text-[#4b5966] text-[16px] py-[15px] px-[14px] text-center max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <div class="cart-qty-plus-minus border-[1px] border-solid border-[#eee] rounded-[5px] h-[35px] overflow-hidden p-[0] relative w-[84px] flex items-center justify-between my-[0] mx-auto max-[767px]:m-[0]">
                                                        <input class="cart-plus-minus border-[0] text-[#4b5966] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[40px] outline-[0] leading-[38px] font-semibold" type="text" name="cartqtybutton" value="1">
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="gi-cart-pro-subtotal text-[#4b5966] text-[15px] font-medium py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">$75.00</td>
                                                <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] w-[90px] text-[16px] py-[15px] px-[14px] text-right max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[22px] my-[0] mx-auto"><i class="gicon gi-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="border-b-[1px] border-solid border-[#eee] max-[767px]:border-[1px] max-[767px]:block max-[767px]:mb-[15px]">
                                                <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:w-full max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[#777] font-normal text-[14px] flex leading-[1.5] tracking-[0.6px] items-center">
                                                        <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="assets/img/product-images/3_1.jpg" alt="">Californian Almonds Value Pack
                                                    </a>
                                                </td>
                                                <td data-label="Price" class="gi-cart-pro-price text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <span class="amount tracking-[0.02rem]">$48.00</span>
                                                </td>
                                                <td data-label="Quantity" class="gi-cart-pro-qty text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <div class="cart-qty-plus-minus border-[1px] border-solid border-[#eee] rounded-[5px] h-[35px] overflow-hidden p-[0] relative w-[84px] flex items-center justify-between my-[0] mx-auto max-[767px]:m-[0]">
                                                        <input class="cart-plus-minus border-[0] text-[#4b5966] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[40px] outline-[0] leading-[38px] font-semibold" type="text" name="cartqtybutton" value="1">
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="gi-cart-pro-subtotal text-[#4b5966] text-[15px] font-medium py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">$48.00</td>
                                                <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] w-[90px] text-[16px] py-[15px] px-[14px] text-right max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[22px] my-[0] mx-auto"><i class="gicon gi-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="border-b-[1px] border-solid border-[#eee] max-[767px]:border-[1px] max-[767px]:block max-[767px]:mb-[15px]">
                                                <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:w-full max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[#777] font-normal text-[14px] flex leading-[1.5] tracking-[0.6px] items-center">
                                                        <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="assets/img/product-images/4_1.jpg" alt="">
                                                        Banana Chips Snacks & Spices
                                                    </a>
                                                </td>
                                                <td data-label="Price" class="gi-cart-pro-price text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <span class="amount tracking-[0.02rem]">$95.00</span>
                                                </td>
                                                <td data-label="Quantity" class="gi-cart-pro-qty text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <div class="cart-qty-plus-minus border-[1px] border-solid border-[#eee] rounded-[5px] h-[35px] overflow-hidden p-[0] relative w-[84px] flex items-center justify-between my-[0] mx-auto max-[767px]:m-[0]">
                                                        <input class="cart-plus-minus border-[0] text-[#4b5966] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[40px] outline-[0] leading-[38px] font-semibold" type="text" name="cartqtybutton" value="1">
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="gi-cart-pro-subtotal text-[#4b5966] text-[15px] font-medium py-[15px] px-[14px] text-left max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">$95.00</td>
                                                <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] w-[90px] text-[16px] py-[15px] px-[14px] text-right max-[767px]:border-b-[1px] max-[767px]:border-solid max-[767px]:border-[#eee] max-[767px]:flex max-[767px]:justify-between max-[767px]:items-center max-[767px]:text-[14px] max-[767px]:py-[8px] max-[767px]:px-[10px]">
                                                    <a href="#" class="text-[22px] my-[0] mx-auto"><i class="gicon gi-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="w-full">
                                        <div class="gi-cart-update-bottom pt-[30px] flex justify-between">
                                            <a href="#" class="text-[#4b5966] inline-block underline text-[15px] leading-[20px] font-medium tracking-[0.8px]">Continue Shopping</a>
                                            <button type="button" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Check Out</button>
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
 
@endsection
