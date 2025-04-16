<!-- New Product tab Area Start -->
<section class="gi-product-tab gi-products py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="gi-tab-title w-full inline-flex justify-between px-[12px] max-[991px]:flex-col">
                <div class="gi-main-title">
                    <div class="section-title mb-[20px] pb-[20px] flex flex-start">
                        <div class="section-detail">
                            <h2 class="gi-title mb-[0] text-[25px] max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope tracking-[0.01rem]">Produk<span class="text-[#5caf90]"> Terlaris</span></h2>
                            <p class="max-w-[400px] mt-[10px] text-[14px] text-[#777] leading-[18px] font-light">Produk terlaris lebih menarik dan ekonomis!</p>
                        </div>
                    </div>
                </div>
                <!-- Tab Start -->
                <div class="gi-pro-tab mt-[40px] max-[991px]:mt-[-20px] max-[991px]:mb-[30px]">
                    <ul class="nav-tabs flex flex-wrap max-[991px]:justify-start" id="myproTab">
                        <li class="active inline-block align-top text-[14px] text-[#777] uppercase p-[0] cursor-pointer font-medium transition-all duration-[0.3s] ease delay-[0s] leading-[20px] tracking-[0.7px] mr-[50px] max-[991px]:mr-[30px] max-[480px]:mr-[20px]">
                            <a class="nav-link relative font-medium p-[0] max-[480px]:text-[13px] max-[480px]:leading-[28px]" href="#all">Semua</a>
                        </li>
                        @foreach($categoryproducts->take(3) as $category)
                        <li class="inline-block align-top text-[14px] text-[#777] uppercase p-[0] cursor-pointer font-medium transition-all duration-[0.3s] ease delay-[0s] leading-[20px] tracking-[0.7px] mr-[50px] max-[991px]:mr-[30px] max-[480px]:mr-[20px]">
                            <a data-bs-toggle="tab" class="nav-link relative font-medium p-[0] max-[480px]:text-[13px] max-[480px]:leading-[28px]"  href="#category-{{ $category->id }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- New Product -->
            <div class="w-full flex flex-wrap mb-[-24px]">
                <div class="col">
                    <div class="tab-content" id="myproTabContent">
                        <!-- 1st Product tab start -->
                        <div class="tab-pro-pane" id="all">
                            <div class="w-full flex flex-wrap">
                            @forelse($products as $product)
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[420px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                            <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                                        @foreach ($product->variants as $variant)
                                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                                        @endforeach
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
                                                        <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]"
                                                            title="Compare">
                                                            <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                            <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">{{ $product->category->name ?? '-' }}</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a href="product-left-sidebar.html" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">{{ $product->name }}</a></h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">Rp{{ $product->discount }}</span>
                                                        <span class="old-price text-[14px] text-[#777] line-through">Rp{{ $product->price }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                    <a class="text-center text-gray-500 opacity-75 pl-2 font-semibold">Produk kosong.</a>
                            @endforelse
                            </div>
                        </div>
                        <!-- 1st Product tab end -->
                         <!-- 2nd Product tab start ini untuk sesuai category product -->
                        <!-- Category Specific Tabs -->
                        @foreach($categoryproducts as $category)
                            <div class="tab-pro-pane tab-pane fade" id="category-{{ $category->id }}">
                                <div class="w-full flex flex-wrap">
                                @foreach($category->products as $product)
                                    <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] max-[575px]:w-[50%] max-[420px]:w-full px-[12px]">
                                    <div class="gi-product-content h-full pb-[24px] flex">
                                        <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                            <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                                <div class="gi-pro-image overflow-hidden">
                                                    <a href="product-left-sidebar.html" class="image relative block overflow-hidden pointer-events-none">
                                                        <span class="label veg max-[991px]:hidden">
                                                            <span class="dot"></span>
                                                        </span>
                                                        <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                                        @foreach ($product->variants as $variant)
                                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                                        @endforeach
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
                                                        <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]"
                                                            title="Compare">
                                                            <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart"
                                                            class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                            <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">{{ $product->category->name ?? '-' }}</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-full mb-[10px] text-[16px]"><a href="product-left-sidebar.html" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">{{ $product->name }}</a></h5>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                    <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                        <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                        <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                                    </span>
                                                    <span class="gi-price">
                                                        <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">Rp{{ $product->discount }}</span>
                                                        <span class="old-price text-[14px] text-[#777] line-through">Rp{{ $product->price }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                        @endforeach
                        <!-- 2nd Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product tab Area End -->