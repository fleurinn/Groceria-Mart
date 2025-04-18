<section class="gi-register py-[40px]">
    <div class="container mx-auto">
        <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
            <h2 class="gi-title text-[26px] font-semibold text-[#4b5966]">Diskon Voucher</h2>
            <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center">Gunakan code coupon saat checkout untuk mendapatkan diskon spesial pada pembelian Anda!</p>
        </div>

        @foreach($categoryproducts as $category)
            <div class="w-full text-left mb-[20px] px-[12px]">
                <h4 class="text-[18px] font-bold text-[#4b5966]">{{ $category->name }} ({{ $category->vouchers->count() }})</h4>
                <p class="text-[15px] text-[#777]"><span style="color: red;">*</span> Berlaku untuk produk dari kategori ini.</p>
            </div>

            <div class="mb-[40px] pb-[40px] w-full">
                <div class="flex flex-wrap w-full">
                    @foreach($category->vouchers as $voucher)
                        <div class="min-[768px]:w-[50%] w-full px-[12px] mb-[30px]">
                            <div class="gi-ofr-banners">
                                <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                                    <div class="gi-bnr-img w-full relative">
                                        <span class="lbl py-[2px] px-[7px] text-[12px] rounded-[5px] absolute top-[15px] left-[15px] capitalize bg-[#4b5966] text-[#fff] opacity-[0.8]">{{ $voucher->discount_value }}{{ $voucher->discount_type === 'global' ? '%' : 'Rp' }}</span>
                                        <img src="{{ asset($voucher->image ?? 'assets/img/banner/default.jpg') }}" alt="{{ $voucher->title }}" class="w-full rounded-[5px]">
                                    </div>
                                    <div class="gi-bnr-detail max-w-[200px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%]">
                                        <h5 class="font-manrope text-[22px] text-[#4b5966] font-bold capitalize mb-[8px]">{{ $voucher->title }}</h5>
                                        <p class="text-[14px] text-[#777] mb-[10px] hidden max-[767px]:block">{{ $voucher->description }}</p>
                                        <a href="{{ route('shop.category', $category->slug) }}" class="gi-btn-2 py-[5px] px-[15px] bg-[#5caf90] text-[#fff] rounded-[5px] hover:bg-[#4b5966]">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
