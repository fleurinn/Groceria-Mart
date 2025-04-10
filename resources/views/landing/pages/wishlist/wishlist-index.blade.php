@extends('landing.layouts.app')

@section('page_title', 'Wishlist Pengguna | Groceria')
@section('content')

<!-- Wishlist section -->
<section class="gi-faq py-[40px] max-[767px]:py-[30px] gi-wishlist">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Product <span class="text-[#5caf90]">Wishlist</span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Your product wish is our first priority.</p>
            </div>
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="gi-vendor-dashboard-card border-[1px] border-solid border-[#eee] rounded-[5px] overflow-y-auto">
                        <div class="gi-vendor-card-header min-w-[700px] p-[30px] border-b-[1px] border-solid border-[#eee] flex justify-between items-center">
                            <h5 class="m-[0] text-[18px] uppercase font-bold text-[#777] tracking-[0.01rem] leading-[1.2]">Wishlist</h5>
                            <div class="gi-header-btn">
                                <a class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="#">Shop Now</a>
                            </div>
                        </div>
                        <div class="gi-vendor-card-body min-w-[700px] p-[30px]">
                            <div class="gi-vendor-card-table">
                                <table class="table gi-table w-full mb-[1rem]">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">ID</th>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Image</th>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Name</th>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Date</th>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Price</th>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Status</th>
                                            <th scope="col" class="p-[0.5rem] text-left text-[#4b5966]">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="wish-empt border-t-[3px] border-solid border-[#eee] border-solid border-[#dee2e6]">
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">225</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/1_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Californian Almonds Value 250g + 50g Pack</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">16 Jul 2021</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$65</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#5caf90] tracking-[0.02rem]">Available</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish mx-[3px] text-[20px] font-normal btn w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">548</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/10_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Healthy Nutmix, 200g Pack</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">13 Aug 2016</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$68</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#e9abab] tracking-[0.02rem]">Out Of Stock</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish mx-[3px] text-[20px] font-normal btn w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">684</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/15_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Capsicum - Red</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">20 Jul 2015</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$360</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#5caf90] tracking-[0.02rem]">Available</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish mx-[3px] text-[20px] font-normal btn w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">987</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/17_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Ginger - Organic</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">05 Feb 2014</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$584</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#e9abab] tracking-[0.02rem]">Out Of Stock</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish mx-[3px] text-[20px] font-normal btn w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">225</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/18_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Lemon - Seedless</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">23 Jul 2013</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$65</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#e9abab] tracking-[0.02rem]">Out Of Stock</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish mx-[3px] text-[20px] font-normal btn w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">548</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/20_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Organic fresh Broccoli</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">28 Mar 2011</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$68</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#999] tracking-[0.02rem]">Disabled</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish btn mx-[3px] text-[20px] font-normal w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="pro-gl-content">
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">684</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><img class="prod-img h-[58px] w-[58px]" src="assets/img/product-images/25_1.jpg" alt="product image"></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">Fresh Lichi</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">16 Apr 2010</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#777] tracking-[0.02rem]">$360</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]"><span class="max-[767px]:text-[14px] py-[14px] flex text-[#5caf90] tracking-[0.02rem]">Available</span></td>
                                            <td class="p-[0.5rem] border-b-[1px] border-solid border-[#dee2e6]">
                                                <span class="tbl-btn py-[14px] flex text-[#777]">
                                                    <a class="gi-btn-2 add-to-cart w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" href="javascript:void(0)" title="Add To Cart">
                                                        <i class="fi-rr-shopping-basket leading-[10px]"></i>
                                                    </a>
                                                    <a class="gi-btn-1 gi-remove-wish btn mx-[3px] text-[20px] font-normal w-[30px] h-[30px] inline-flex items-center justify-center transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#4b5966] text-[#fff] text-center rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]" href="javascript:void(0)" title="Remove From List">
                                                        ×
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wishlist section End -->

    <!-- New product section -->
    <section class="gi-related-product gi-new-product py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap overflow-hidden">
                <div class="gi-new-prod-section w-full px-[12px]">
                    <div class="gi-products">
                        <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                            <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">New <span class="text-[#5caf90]">Arrivals</span></h2>
                            <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Browse The Collection of Top Products</p>
                        </div>
                        <div class="gi-new-block mx-[-12px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                            <div class="new-product-carousel owl-carousel gi-product-slider">
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                    <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                        <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none">
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
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
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
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Multi-Grain
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
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                    <div class=" transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
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
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Fresh Mango
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
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                    <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                        <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_1.jpg"
                                                        alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_2.jpg"
                                                        alt="Product">
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
                                                <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Dates Value
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
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                    <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                        <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/1_1.jpg"
                                                        alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/1_2.jpg"
                                                        alt="Product">
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
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Stick Fiber
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
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                    <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                        <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/24_1.jpg"
                                                        alt="Product">
                                                    <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/24_1.jpg"
                                                        alt="Product">
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
                                                <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Natural Hub Red
                                                    Cherry Karonda</a></h5>
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
                                <div class="gi-product-content h-full px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
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