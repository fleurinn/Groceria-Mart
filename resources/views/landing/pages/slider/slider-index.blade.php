@extends('landing.layouts.app')

@section('page_title', 'Info | Groceria')
@section('content')

<!-- Hero Slider Start -->
<section class="section gi-hero h-full w-full my-[40px] max-[575px]:my-[30px] max-[1199px]:relative">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="gi-main-content w-full px-[12px]">
                <!-- Hero Slider Start -->
                <div class="gi-slider-content h-full">
                    <div class="gi-main-slider">
                        <div class="gi-slider rounded-[5px] swiper-container main-slider-nav main-slider-dot">
                            <!-- Main slider  -->
                            <div class="swiper-wrapper">
                                <div class="gi-slide-item swiper-slide h-[600px] max-[1399px]:h-[500px] max-[991px]:h-[400px] max-[767px]:h-[300px] max-[575px]:h-[290px] max-[420px]:h-[230px] max-[420px]:bg-center bg-cover flex slide-1">
                                    <div class="gi-slide-content max-w-[33rem] max-[1399px]:max-w-[24rem] max-[1199px]:max-w-[20rem] max-[991px]:max-w-[17rem] max-[767px]:max-w-[14rem] max-[420px]:max-w-[12rem] max-[360px]:max-w-[10rem] ml-[100px] max-[991px]:ml-[70px] max-[767px]:ml-[30px] flex flex-col justify-center relative z-[9] slider-animation">
                                        <p class="mb-[20px] text-[20px] text-[#5caf90] leading-[1] tracking-[0] font-medium max-[767px]:text-[16px] max-[360px]:text-[13px]">Starting at $ <b>20.00</b></p>
                                        <h1 class="gi-slide-title mb-[30px] text-[55px] leading-[68px] text-[#4b5966] tracking-[0.05rem] font-bold relative max-[1399px]:text-[40px] max-[1399px]:leading-[50px] max-[1199px]:text-[32px] max-[1199px]:leading-[42px] max-[991px]:text-[26px] max-[991px]:leading-[36px] max-[767px]:text-[22px] max-[767px]:leading-[32px] max-[767px]:mb-[20px] max-[420px]:text-[18px] max-[420px]:leading-[28px] max-[360px]:text-[17px] max-[360px]:leading-[27px]">Organic & healthy vegetables</h1>
                                        <div class="gi-slide-btn block">
                                            <a href="#" class="gi-btn-1 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]">Shop Now 
                                                <i class="fi-rr-angle-double-small-right ml-[5px] text-[#fff] flex" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi-slide-item swiper-slide h-[600px] max-[1399px]:h-[500px] max-[991px]:h-[400px] max-[767px]:h-[300px] max-[575px]:h-[290px] max-[420px]:h-[230px] max-[420px]:bg-center bg-cover flex slide-2">
                                    <div class="gi-slide-content max-w-[33rem] max-[1399px]:max-w-[24rem] max-[1199px]:max-w-[20rem] max-[991px]:max-w-[17rem] max-[767px]:max-w-[14rem] max-[420px]:max-w-[12rem] max-[360px]:max-w-[10rem] ml-[100px] max-[991px]:ml-[70px] max-[767px]:ml-[30px] flex flex-col justify-center relative z-[9] slider-animation">
                                        <p class="mb-[20px] text-[20px] text-[#5caf90] leading-[1] tracking-[0] font-medium max-[767px]:text-[16px] max-[360px]:text-[13px]">Starting at $ <b>29.99</b></p>
                                        <h1 class="gi-slide-title mb-[30px] text-[55px] leading-[68px] text-[#4b5966] tracking-[0.05rem] font-bold relative max-[1399px]:text-[40px] max-[1399px]:leading-[50px] max-[1199px]:text-[32px] max-[1199px]:leading-[42px] max-[991px]:text-[26px] max-[991px]:leading-[36px] max-[767px]:text-[22px] max-[767px]:leading-[32px] max-[767px]:mb-[20px] max-[420px]:text-[18px] max-[420px]:leading-[28px] max-[360px]:text-[17px] max-[360px]:leading-[27px]">Explore fresh & juicy fruits</h1>
                                        <div class="gi-slide-btn block">
                                            <a href="#" class="gi-btn-1 transition-all duration-[0.3s] ease-in-out overflow-hidden text-center relative rounded-[5px] py-[10px] max-[767px]:py-[6px] px-[15px] max-[767px]:px-[10px] bg-[#4b5966] text-[#fff] border-[0] text-[15px] max-[767px]:text-[13px] tracking-[0] font-medium inline-flex items-center hover:bg-[#5caf90] hover:text-[#fff]">Shop Now 
                                                <i class="fi-rr-angle-double-small-right ml-[5px] text-[#fff] flex" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-white"></div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    @endsection