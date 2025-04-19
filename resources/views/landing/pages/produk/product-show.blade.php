@extends('landing.layouts.app')

@section('page_title', 'Produk Detail | Groceria')
@section('content')

<!-- Sart Single Product -->
<section class="gi-single-product py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <div class="gi-pro-rightside gi-common-rightside w-full">
                    @php $product = $product ?? null; @endphp

                    @if ($product)    
                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="flex flex-wrap w-full">
                                <div class="single-pro-img single-pro-img-no-sidebar w-[40%] max-[991px]:w-full relative pr-[12px] max-[991px]:pl-[12px] max-[991px]:w-full max-[991px]:max-w-[500px] max-[991px]:m-auto max-[420px]:px-[0]">
                                    <div class="single-product-scroll p-[15px] sticky top-[30px] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                        <div class="single-product-cover overflow-hidden cursor-zoom-in rounded-[5px]">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive h-full w-full" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            @foreach ($product->variants ?? [] as $variant)
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive h-full w-full" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="single-nav-thumb w-full overflow-hidden">
                                            <div class="single-slide px-[11px] pt-[11px]">
                                                <img class="img-responsive h-full w-full object-cover border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            @foreach ($product->variants ?? [] as $variant)
                                            <div class="single-slide px-[11px] pt-[11px]">
                                                <img class="img-responsive h-full w-full object-cover border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar w-[60%] max-[991px]:w-full relative pl-[12px] max-[991px]:pl-[0] max-[991px]:mt-[30px] max-[991px]:w-full">
                                    <div class="single-pro-content">
                                        <h5 class="gi-single-title text-[#4b5966] text-[22px] capitalize mb-[20px] block font-oppins font-medium leading-[35px] tracking-[0.02rem] max-[1199px]:text-[20px] max-[1199px]:leading-[33px] max-[767px]:text-[18px] max-[767px]:text-[18px] max-[767px]:leading-[31px]">{{ $product->name }}</h5>
                                        <div class="gi-single-rating-wrap flex mb-[14px] items-center">
                                            <div class="gi-single-rating pr-[15px] leading-[17px]">
                                                <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                <i class="gicon gi-star-o text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                            </div>
                                            <span class="gi-read-review text-[#999] leading-[17px]">
                                                |&nbsp;&nbsp;<a href="#" class="text-[#999] text-[14px] leading-[20px] hover:text-[#5caf90]">992 Ratings</a>
                                            </span>
                                        </div>
                                        <div class="gi-single-price-stoke mb-[15px] pt-[15px] pb-[15px] flex justify-between">
                                            <div class="gi-single-price flex flex-col">
                                                @php
                                                    $originalPrice = $product->discount > 0 ? $product->price / (1 - ($product->discount / 100)) : $product->price;
                                                @endphp

                                                <div class="gi-single-price flex flex-col">
                                                    <div class="final-price mb-[15px] text-[#4b5966] font-semibold text-[22px] leading-[32px] font-Poppins tracking-[0] max-[1199px]:text-[20px]">
                                                        Rp{{ number_format($product->price, 0, ',', '.') }}
                                                        @if($product->discount > 0)
                                                            <span class="price-des ml-[15px] text-[#5caf90] font-medium text-[18px] tracking-[0.02rem]">
                                                                -{{ number_format($product->discount, 0, ',', '.') }}%
                                                            </span>
                                                        @endif
                                                    </div>
                                                    @if($product->discount > 0)
                                                        <div class="mrp text-[#777]">
                                                            M.R.P. : <span class="text-[#999] line-through">Rp{{ number_format($originalPrice, 0, ',', '.') }}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="gi-single-stoke flex flex-col">
                                                <span class="gi-single-ps-title leading-[1] text-[16px] tracking-[0] {{ $product->stock > 0 ? 'text-[#5caf90]' : 'text-[#e9abab]' }}">
                                                {{ $product->stock > 0 ? 'Available' : 'Out Of Stock' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="gi-single-desc mb-[12px] pb-[5px] text-[#777] text-[14px] tracking-[0] break-all leading-[26px] font-Poppins">
                                        {{ Str::limit(strip_tags($product->description), 200) }}</div>
                                        <!-- bagian pilihan antara product atau variantnya -->
                                        <div class="w-full max-w-2xl pb-5 mx-auto flex items-start gap-4">
                                            <!-- Kolom Kiri: Judul -->
                                            <div class="w-1/4">
                                                <h3 class="text-[#4b5966] font-semibold text-[15px] leading-[32px] font-Poppins tracking-[0] max-[1199px]:text-[20px]">
                                                    VARIANT :</h3>
                                            </div>
                                            <!-- Kolom Kanan: Opsi Pilihan -->
                                            <div class="w-3/4 grid grid-cols-2 gap-2" id="model-options">
                                                <button data-model="1" class="model-btn border border-gray-300 px-3 py-2 text-sm rounded-md text-left relative flex items-center gap-2">
                                                    <!-- Gambar di kiri -->
                                                    <img src="{{ asset('storage/products/' . $product->image) }}" alt="Model 1" class="w-10 h-10 object-cover rounded-md" />
                                                    
                                                    <!-- Teks -->
                                                    <span>{{ $product->name }}</span>
                                                    
                                                    <!-- Checkmark -->
                                                    <div class="checkmark hidden absolute bottom-1 right-1 text-green-500 text-xl">✔</div>
                                                </button>
                                                @foreach ($product->variants ?? [] as $variant)
                                                <button data-model="1" class="model-btn border border-gray-300 px-3 py-2 text-sm rounded-md text-left relative flex items-center gap-2">
                                                    <!-- Gambar di kiri -->
                                                    <img src="{{ asset('storage/variants/' . $variant->image) }}" alt="Model 1" class="w-10 h-10 object-cover rounded-md" />
                                                    
                                                    <!-- Teks -->
                                                    <span>{{ $variant->name }}</span>
                                                    
                                                    <!-- Checkmark -->
                                                    <div class="checkmark hidden absolute bottom-1 right-1 text-green-500 text-xl">✔</div>
                                                </button>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- end -->
                                        <div class="gi-single-qty flex flex-wrap w-full m-[-5px]">
                                        <form action="{{ route('carts.store') }}" method="POST" class="flex items-center">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="qty-plus-minus w-[120px] h-[40px] p-[10px] border-[1px] border-solid border-[#eee] overflow-hidden m-[5px] relative flex items-center justify-between rounded-[5px]">
                                                    <input class="qty-input w-full text-center" type="number" name="quantity" value="1" min="1">
                                                </div>

                                                <div class="gi-single-cart">
                                                    <button type="submit"
                                                        class="btn btn-primary gi-btn-1 flex h-[40px] leading-[50px] text-center text-[14px] m-[5px] py-[10px] px-[15px] uppercase justify-center bg-[#4b5966] text-[#fff] transition-all duration-[0.3s] ease-in-out relative rounded-[5px] items-center min-w-[160px] font-semibold tracking-[0.02rem] border-[0] hover:bg-[#5caf90] hover:text-[#fff]">
                                                        Add To Cart
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="gi-single-wishlist m-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="gi-single-pro-tab mt-[40px]">
                        <div class="gi-single-pro-tab-wrapper flex flex-col">
                            <div class="gi-single-pro-tab-nav w-full m-auto relative block text-center float-left">
                                <ul class="nav-tabs inline-block float-left" id="singleprotab">
                                    <li class="active mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Detail
                                        </a>
                                    </li>
                                    <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Specifications
                                        </a>
                                    </li>
                                    <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Vendor
                                        </a>
                                    </li>
                                    <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content transition-all w-full overflow-hidden bg-[#fff] text-left p-[30px] border-[1px] border-solid border-[#eee] text-[#202020] text-[18px] tracking-[0] leading-[1.6] rounded-[5px]" id="singleTabContent">
                                <div id="gi-spt-nav-details" class="tab-single-pane">
                                    <div class="gi-single-pro-tab-desc">
                                        <p class="mb-[15px] text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal font-Poppins">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>
                                        <ul class="mb-[15px] pl-[24px]">
                                            <li class="list-disc text-[15px] mb-[4px] text-[#777]">Any Product types that You want - Simple, Configurable</li>
                                            <li class="list-disc text-[15px] mb-[4px] text-[#777]">Downloadable/Digital Products, Virtual Products</li>
                                            <li class="list-disc text-[15px] mb-[4px] text-[#777]">Inventory Management with Backordered items</li>
                                            <li class="list-disc text-[15px] mb-[4px] text-[#777]">Flatlock seams throughout.</li>
                                        </ul>
                                        <p class="font-Poppins mb-[15px] text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>
                                        <p class="font-Poppins text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal">There are many variations of passages of Lorem Ipsum available, but the
                                            majority have
                                            suffered alteration in some form, by injected humour, or randomised words
                                            which don't
                                            look even slightly believable. If you are going to use a passage of Lorem
                                            Ipsum,
                                            you need to be sure there isn't anything embarrassing hidden in the middle
                                            of text.
                                            All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                            chunks as necessary,
                                            making this the first true generator on the Internet. It uses a dictionary
                                            of over
                                            200 Latin words, combined with a handful of model sentence structures, to
                                            generate
                                            Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                            always
                                            free from repetition, injected humour, or non-characteristic words etc.</p>
                                    </div>
                                </div>
                                <div id="gi-spt-nav-info" class="tab-single-pane">
                                    <div class="gi-single-pro-tab-moreinfo">
                                        <p class="font-Poppins text-[#777] text-[14px] font-normal leading-[28px] mb-[16px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries.
                                        </p>
                                        <ul class="pl-[24px]">
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Model</span> SKU140</li>
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Weight</span> 500 g</li>
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Dimensions</span> 35 × 30 × 7 cm</li>
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Color</span> Black, Pink, Red, White</li>
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Size</span> 10 X 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="gi-spt-nav-vendor" class="tab-single-pane">
                                    <div class="gi-single-pro-tab-moreinfo">
                                        <div class="gi-product-vendor">
                                            <div class="gi-vendor-info mb-[15px] flex flex-row">
                                                <span>
                                                    <img src="assets/img/vendor/3.jpg" alt="vendor" class="w-[80px] mr-[15px] border-[1px] border-solid border-[#eee]">
                                                </span>
                                                <div>
                                                    <h5 class="text-[15px] font-semibold text-[#4b5966]">Ocean Crate</h5>
                                                    <p class="text-[#777] font-Poppins text-[14px] font-normal leading-[28px]">Products : 358</p>
                                                    <p class="text-[#777] font-Poppins text-[14px] font-normal leading-[28px]">Sales : 5587</p>
                                                </div>
                                            </div>
                                            <div class="gi-detail">
                                                <ul class="mb-[15px] pl-[24px]">
                                                    <li class="mb-[4px] text-[15px] list-disc text-[#777] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Phone No. :</span> +00 987654321</li>
                                                    <li class="mb-[4px] text-[15px] list-disc text-[#777] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Email. :</span> Example@gmail.com</li>
                                                    <li class="mb-[4px] text-[15px] list-disc text-[#777] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Address. :</span> 2548 Broaddus Maple Court, Madisonville
                                                        KY 4783, USA.</li>
                                                </ul>
                                                <p class="text-[#777] font-Poppins text-[14px] font-normal leading-[28px] tracking-[0.02rem]">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                                    the
                                                    1500s, when an unknown printer took a galley of type and scrambled
                                                    it to
                                                    make a type specimen book. It has survived not only five centuries,
                                                    but also
                                                    the leap into electronic typesetting, remaining essentially
                                                    unchanged.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="gi-spt-nav-review" class="tab-single-pane">
                                    <div class="flex flex-wrap w-full">
                                        <div class="gi-t-review-wrapper mt-[10px]">
                                            <div class="gi-t-review-item flex mb-[25px] pb-[25px] border-b-[1px] border-solid border-[#eee]">
                                                <div class="gi-t-review-avtar basis-[50px] grow-[0] shrink-[0] mr-[15px]">
                                                    <img src="assets/img/user/1.jpg" alt="user" class="max-w-full rounded-[5px]">
                                                </div>
                                                <div class="gi-t-review-content">
                                                    <div class="gi-t-review-top flex flex-col mb-[10px]">
                                                        <div class="gi-t-review-name text-[15px] m-[0] leading-[1.5] block text-[#4b5966]">Mariya Lykra</div>
                                                        <div class="gi-t-review-rating mt-[5px]">
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star-o inline-block text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="gi-t-review-bottom">
                                                        <p class="w-full text-[14px] text-[#777] font-normal">Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gi-t-review-item flex mb-[25px] pb-[25px] border-b-[1px] border-solid border-[#eee]">
                                                <div class="gi-t-review-avtar basis-[50px] grow-[0] shrink-[0] mr-[15px]">
                                                    <img src="assets/img/user/2.jpg" alt="user" class="max-w-full rounded-[5px]">
                                                </div>
                                                <div class="gi-t-review-content">
                                                    <div class="gi-t-review-top flex flex-col mb-[10px]">
                                                        <div class="gi-t-review-name text-[15px] m-[0] leading-[1.5] block text-[#4b5966]">Moris Willson</div>
                                                        <div class="gi-t-review-rating mt-[5px]">
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star-o inline-block text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star-o inline-block text-[#b2b2b2] float-left text-[14px] mr-[3px]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="gi-t-review-bottom">
                                                        <p class="w-full text-[14px] text-[#777] font-normal">Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gi-ratting-content w-full">
                                            <h3 class="mb-[10px] text-[20px] font-semibold leading-[1] font-Poppins text-[#4b5966] tracking-[0.01rem]">Add a Review</h3>
                                            <div class="gi-ratting-form">
                                                <form action="#">
                                                    <div class="gi-ratting-star flex mt-[5px] mb-[25px] items-center">
                                                        <span class="mr-[18px] text-[16px] text-[#777] tracking-[0.02rem]">Your rating:</span>
                                                        <div class="gi-t-review-rating">
                                                            <i class="gicon gi-star fill inline-block text-[18px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[18px] text-[#f27d0c] float-left mr-[3px]"></i>
                                                            <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px]"></i>
                                                            <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px]"></i>
                                                            <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="gi-ratting-input mb-[10px]">
                                                        <input name="your-name" placeholder="Name" type="text" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]">
                                                    </div>
                                                    <div class="gi-ratting-input mb-[10px]">
                                                        <input name="your-email" placeholder="Email*" type="email" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]" required>
                                                    </div>
                                                    <div class="gi-ratting-input form-submit">
                                                        <textarea name="your-commemt" placeholder="Enter Your Comment" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] h-[150px] p-[20px] mb-[15px] w-full outline-[0] text-[14px] rounded-[5px]"></textarea>
                                                        <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]" value="Submit">Submit</button>
                                                    </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                     @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Single Product -->

    <!-- Related product section -->
    <section class="gi-related-product gi-new-product py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap overflow-hidden">
                <div class="gi-new-prod-section w-full px-[12px]">
                    <div class="gi-products">
                        <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                            <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Related <span class="text-[#5caf90]">Products</span></h2>
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
                                            <a href="shop-left-sidebar-col-3.html">
                                                <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Dried Fruits</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a href="product-left-sidebar.html" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Mixed Nuts Seeds & Berries Pack</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related product section End -->



<script>
    const buttons = document.querySelectorAll('.model-btn');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove selected from all
            buttons.forEach(btn => {
                btn.classList.remove('border-green-500', 'ring-2', 'ring-green-400');
                btn.querySelector('.checkmark').classList.add('hidden');
            });

            // Add to clicked one
            button.classList.add('border-green-500', 'ring-2', 'ring-green-400');
            button.querySelector('.checkmark').classList.remove('hidden');
        });
    });
</script>
@endsection