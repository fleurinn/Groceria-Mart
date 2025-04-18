<!-- Offer Banner Section Start -->
<section class="gi-offer-section overflow-hidden py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <!--  Offer banners -->
            <div class="w-full flex flex-wrap">
            @foreach($vouchers as $voucher)
                <div class="min-[768px]:w-[50%] w-full px-[12px] wow fadeInLeft" data-wow-duration="2s">
                    <div class="gi-ofr-banners">
                        <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                        <div class="gi-bnr-img w-full relative">
                        <span class="lbl py-[2px] px-[7px] text-[12px] rounded-[5px] absolute top-[15px] left-[15px] capitalize bg-[#4b5966] text-[#fff] opacity-[0.8]">
                            DISKON {{ number_format($voucher->discount_value, 0, ',', '.') }}%
                        </span>
                        <img 
                            src="{{ asset('storage/voucher_images/' . $voucher->image) }}" 
                            alt="{{ $voucher->title }}" 
                            class="rounded-[5px] object-cover" 
                            style="width: 700px; height: 275px;"
                        >
                        </div>
                            <div class="gi-bnr-detail max-w-[200px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%] max-[1199px]:max-w-[160px] max-[1199px]:right-[15px] max-[991px]:max-w-[110px] max-[767px]:max-w-[155px] max-[420px]:max-w-[150px] max-[360px]:max-w-[110px] max-[360px]:top-auto max-[360px]:bottom-[30px] max-[360px]:right-[15px] max-[360px]:transform-none">
                                <h5 class="text-[#4b5966] text-[34px] font-bold leading-[1.2] capitalize mb-[6px] max-[1399px]:text-[28px] max-[1199px]:text-[22px] max-[991px]:text-[16px] max-[767px]:text-[20px] max-[420px]:text-[16px]">{{ $voucher->title }}</h5>
                                <p class="prose text-[#777] mb-[16px] text-[16px] leading-[22px] capitalize font-normal max-[991px]:hidden max-[767px]:block max-[767px]:text-[14px] max-[420px]:text-[13px] max-[420px]:leading-[17px] max-[360px]:hidden">{!! Str::limit(strip_tags($voucher->description, '<b><i><strong><em>'), 80) !!}
                                </p>
                                <a href="shop-left-sidebar-col-3.html" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[5px] max-[360px]:py-[3px] px-[15px] max-[360px]:px-[10px] bg-[#5caf90] text-[#fff] border-[0] text-[14px] max-[360px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#4b5966] hover:text-[#fff]">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
</section>
    <!-- Offer section end -->