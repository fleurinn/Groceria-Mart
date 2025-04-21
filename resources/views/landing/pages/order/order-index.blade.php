@extends('landing.layouts.app')

@section('page_title', 'Produk | Groceria')
@section('content')


<!-- Category section -->
<section class="gi-category py-[40px] py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="gi-shop-rightside min-[992px]:order-[6] min-[768px]:order-[-1] min-[992px]:w-[75%] min-[768px]:w-full w-full px-[12px]">
                    <!-- Shop Top Start -->
                    <div class="gi-pro-list-top flex items-center text-[14px] border-[1px] border-solid border-[#eee] rounded-[5px] mb-[30px]">
                        <div class=" w-full gi-grid-list">
                            <div class="gi-gl-btn ml-[5px] flex items-center flex-row">
                                <button type="button" class="grid-btn btn-grid-50 h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row active">
                                    <i class="fi fi-rr-apps text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                                <button type="button" class="grid-btn btn-list-50 h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row">
                                    <i class="fi fi-rr-list text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                            </div>
                        </div>
                        <div class=" w-full gi-sort-select flex justify-center items-center">
                            <div class="gi-select-inner relative flex w-[140px] h-[50px] leading-[1.5] bg-[#fff] overflow-hidden rounded-[0] border-l-[1px] border-solid border-[#eee]">
                                <select name="gi-select" id="gi-select" class="appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] cursor-pointer">
                                    <option selected="" disabled="">Sort by</option>
                                    <option value="1">Position</option>
                                    <option value="2">Relevance</option>
                                    <option value="3">Name, A to Z</option>
                                    <option value="4">Name, Z to A</option>
                                    <option value="5">Price, low to high</option>
                                    <option value="6">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->
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
                        <!-- Pagination Start -->
                        <div class="gi-pro-pagination pt-[15px] flex justify-between items-center border-t-[1px] border-solid border-[#eee] max-[575px]:flex-col">
                            <span class="text-[14px] text-[#777] max-[575px]:mb-[10px]">Showing 1-12 of 21 item(s)</span>
                            <ul class="gi-pro-pagination-inner">
                                <li class="inline-block float-left mr-[5px]"><a class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] active" href="#">1</a></li>
                                <li class="inline-block float-left mr-[5px]"><a class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:text-[#fff] hover:bg-[#5caf90]" href="#">2</a></li>
                                <li class="inline-block float-left mr-[5px]"><a class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:text-[#fff] hover:bg-[#5caf90]" href="#">3</a></li>
                                <li class="inline-block float-left mr-[5px]"><span class="w-[20px] text-[#777] block text-center text-[14px] tracking-[0.02rem] max-[575px]:mb-[10px]">...</span></li>
                                <li class="inline-block float-left mr-[5px]"><a class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px] hover:text-[#fff] hover:bg-[#5caf90]" href="#">8</a></li>
                                <li class="inline-block float-left"><a class="next w-auto px-[13px] text-[#fff] bg-[#5caf90] leading-[30px] h-[32px] bg-[#eee] flex text-center align-top text-[16px] justify-center items-center rounded-[5px]" href="#">Next <i class="gicon gi-angle-right ml-[10px] transition-all duration-[0.3s] ease-in-out text-[#fff]"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category section End -->

@endsection