

@php
    use App\Models\Product;
    $products = Product::where('status', 'publik')->get();
@endphp

<!--  Day Of The Deal Start -->
<section class="gi-deal-section py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="w-full flex flex-wrap px-[12px] overflow-hidden">
            <div class="gi-deal-section w-full">
                <div class="gi-products">
                    <div class="section-title mb-[20px] relative flex justify-between pb-[20px] z-[5] max-[767px]:flex-col" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                        <div class="section-detail">
                            <h2 class="gi-title mb-[0] text-[25px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1] font-manrope max-[991px]:text-[24px] max-[767px]:text-[22px] max-[575px]:text-[20px]">Day of the <span class="text-[#5caf90]">deal</span></h2>
                            <p class="max-w-[400px] mt-[10px] text-[14px] text-[#777] leading-[18px]">Don't wait. The time will never be just right.</p>
                        </div>
                        <div id="dealend" class="dealend-timer max-[767px]:mt-[15px]"></div>
                    </div>

                    <div class="gi-deal-block mx-[-12px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="deal-slick-carousel flex gi-product-slider">

                            @foreach ($products as $product)
                                <div class="gi-product-content h-full px-[12px] flex">
                                    <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                        <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                            <div class="gi-pro-image overflow-hidden">
                                                <a href="# " class="image relative block overflow-hidden pointer-events-none">
                                                    <span class="label veg max-[991px]:hidden">
                                                        <span class="dot"></span>
                                                    </span>
                                                    <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/2_1.jpg" alt="{{ $product->name }}">
                                                </a>
                                                @if ($product->discount > 0)
                                                    <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                        <span class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                            <a>
                                                <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">{{ $product->tag }}</h6>
                                            </a>
                                            <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                                <a class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">{{ $product->name }}</a>
                                            </h5>
                                            <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                <span class="gi-price">
                                                    @if ($product->discount > 0)
                                                        <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">
                                                            Rp{{ number_format($product->price - ($product->price * $product->discount / 100), 0, ',', '.') }}
                                                        </span>
                                                        <span class="old-price text-[14px] text-[#777] line-through">
                                                            Rp{{ number_format($product->price, 0, ',', '.') }}
                                                        </span>
                                                    @else
                                                        <span class="new-price text-[#4b5966] font-bold text-[14px]">
                                                            Rp{{ number_format($product->price, 0, ',', '.') }}
                                                        </span>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Day Of The Deal End -->
