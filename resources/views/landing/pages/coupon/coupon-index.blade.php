@extends('landing.layouts.app')

@section('page_title', 'Coupons | Groceria')
@section('content')

<!-- Register section -->
<section class="gi-register py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Coupons<span></span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Gunakan code coupon saat checkout untuk mendapatkan diskon spesial pada pembelian Anda!</p>
                    </div>

                <!-- Kategori Promo -->
                <div class="w-full text-left mb-[20px]">
                    <h4 class="text-[18px] px-[8px] font-bold text-[#4b5966]">Exclusive coupon (2)</h4>
                    <p class="text-[15px] px-[8px] text-[#777]"><span style="color: red;">*</span> Diskon berlaku untuk produk buah, sayur, makanan ringan, dan fast food.</p>
                </div>
                <!-- Shop Banners Start -->
                <div class="mb-[40px] pb-[40px] w-full">
                    <div class="flex flex-wrap w-full">
                        <div class="min-[768px]:w-[50%] w-full px-[12px]">    
                            <div class="gi-ofr-banners">    
                                <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                                    <div class="gi-bnr-img w-full relative">
                                        <span class="lbl py-[2px] px-[7px] text-[12px] rounded-[5px] absolute top-[15px] left-[15px] capitalize bg-[#4b5966] text-[#fff] opacity-[0.8] tracking-[0.02rem]">70% Off</span>
                                        <img src="assets/img/banner/5.jpg" alt="banner" class="w-full rounded-[5px]">
                                    </div>
                                    <div class="gi-bnr-detail max-w-[200px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%] max-[1199px]:max-w-[160px] max-[1199px]:right-[15px] max-[991px]:max-w-[110px] max-[767px]:max-w-[155px] max-[420px]:max-w-[150px] max-[360px]:max-w-[110px] max-[360px]:top-auto max-[360px]:bottom-[30px] max-[360px]:right-[15px] max-[360px]:translate-0 max-[360px]:transform-none">
                                        <h5 class="font-manrope text-[34px] text-[#4b5966] font-bold capitalize tracking-[0.01rem] mb-[8px] leading-[1.2] max-[1399px]:text-[28px] max-[1199px]:text-[22px] max-[991px]:text-[16px] max-[767px]:text-[20px] max-[420px]:text-[16px]">Fresh Fruits & veggies</h5>
                                        <p class="text-[16px] text-[#777] capitalize leading-[22px] font-normal tracking-[0.02rem] mb-[16px] max-[991px]:hidden max-[767px]:block max-[767px]:text-[14px] max-[420px]:leading-[17px] max-[420px]:text-[13px] max-[360px]:hidden">The flavor of something special.</p>
                                        <a href="shop-left-sidebar-col-3.html" class="gi-btn-2 py-[5px] px-[15px] transition-all duration-[0.3s] ease-in-out text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff] max-[360px]:py-[3px] max-[360px]:px-[10px] max-[360px]:text-[13px]">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[768px]:w-[50%] w-full px-[12px]">
                            <div class="gi-ofr-banners max-[767px]:mt-[30px]">
                                <div class="gi-bnr-body flex flex-row relative overflow-hidden">
                                    <div class="gi-bnr-img w-full relative">
                                        <span class="lbl py-[2px] px-[7px] text-[12px] rounded-[5px] absolute top-[15px] left-[15px] capitalize bg-[#4b5966] text-[#fff] opacity-[0.8] tracking-[0.02rem]">50% Off</span>
                                        <img src="assets/img/banner/6.jpg" alt="banner" class="w-full rounded-[5px]">
                                    </div>
                                    <div class="gi-bnr-detail max-w-[200px] flex flex-col items-start justify-center absolute top-[50%] right-[50px] translate-y-[-50%] max-[1199px]:max-w-[160px] max-[1199px]:right-[15px] max-[991px]:max-w-[110px] max-[767px]:max-w-[155px] max-[420px]:max-w-[150px] max-[360px]:max-w-[110px] max-[360px]:top-auto max-[360px]:bottom-[30px] max-[360px]:right-[15px] max-[360px]:translate-0 max-[360px]:transform-none">
                                        <h5 class="font-manrope text-[34px] text-[#4b5966] font-bold capitalize tracking-[0.01rem] mb-[8px] leading-[1.2] max-[1399px]:text-[28px] max-[1199px]:text-[22px] max-[991px]:text-[16px] max-[767px]:text-[20px] max-[420px]:text-[16px]">Tasty Snack & Fastfood</h5>
                                        <p class="text-[16px] text-[#777] capitalize leading-[22px] font-normal tracking-[0.02rem] mb-[16px] max-[991px]:hidden max-[767px]:block max-[767px]:text-[14px] max-[420px]:leading-[17px] max-[420px]:text-[13px] max-[360px]:hidden">A healthy meal for every one.</p>
                                        <a href="shop-left-sidebar-col-3.html" class="gi-btn-2 py-[5px] px-[15px] transition-all duration-[0.3s] ease-in-out text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff] max-[360px]:py-[3px] max-[360px]:px-[10px] max-[360px]:text-[13px]">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Sample section End -->




@endsection