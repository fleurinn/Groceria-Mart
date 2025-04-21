
<!-- Category section -->
<section class="gi-category body-bg py-[40px] max-[767px]:py-[30px] wow fadeInUp" data-wow-duration="2s">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="w-full flex flex-wrap px-[12px] mb-[-15px]">
                <div class="min-[1200px]:w-full basis-auto max-w-full border-content-color">
                    <div class="gi-category-block owl-carousel flex">
                        @foreach ($categoryproducts as $categoryproduct)
                            <div class="gi-cat-box transition-all duration-[0.3s] ease-in-out p-[15px] rounded-[5px] relative bg-[#fff6ec]">
                                <div class="gi-cat-icon h-full p-[15px] flex flex-col items-center justify-center bg-[#fff] relative rounded-[5px] z-[5]">
                                    {{-- Ganti icon dengan image --}}
                                    <img src="{{ asset('storage/categoryproducts/' . $categoryproduct->image) }}" alt="{{ $categoryproduct->name }}" class="w-[40px] h-[40px] object-contain my-[10px]">
                                    
                                    <div class="gi-cat-detail text-center">
                                        <a href="shop-left-sidebar-col-3.html">
                                            <h4 class="gi-cat-title m-[0] text-[15px] leading-[22px] font-semibold text-[#4b5966] capitalize font-manrope">
                                                {{ $categoryproduct->name }}
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category section End -->
