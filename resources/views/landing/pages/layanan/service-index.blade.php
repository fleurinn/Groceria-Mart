@extends('landing.layouts.app')

@section('page_title', 'Kategori Produk | Groceria')
@section('content')

<!-- Contact us section -->
<section class="gi-contact py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Get in <span class="text-[#5caf90]">Touch</span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Please select a topic below related to you inquiry. If you don't fint what you need, fill out our
                    contact form.</p>   
            </div>
            <div class="w-full flex flex-wrap gi-contact-detail my-[-12px]">
                <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-box h-full p-[24px] border-[1px] border-solid border-[#eee] bg-[#f8f8fb] relative rounded-[5px] transition-all duration-[0.3s] ease-in-out">
                        <div class="detail flex flex-col justify-center items-center text-center">
                            <div class="icon w-[70px] h-[70px] mb-[15px] bg-[#4b5966] flex flex-col justify-center items-center rounded-[5px] text-center">
                                <i class="fa fa-envelope text-[25px] text-[#fff] leading-[1]" aria-hidden="true"></i>
                            </div>
                            <div class="info text-center">
                                <h3 class="title text-[20px] font-semibold text-[#4b5966] capitalize tracking-[0.01rem] leading-[1.2] mb-[6px]">Mail & Website</h3>
                                <p class="m-[0] text-[14px] text-[#777] leading-[28px] font-light tracking-[0.02rem]">
                                    <i class="fa fa-envelope text-[14px] text-[#777] text-center" aria-hidden="true"></i> &nbsp; mail.example@gmail.com
                                </p>
                                <p class="m-[0] text-[14px] text-[#777] leading-[28px] font-light tracking-[0.02rem]">
                                    <i class="fa fa-globe text-[14px] text-[#777] text-center" aria-hidden="true"></i> &nbsp; www.yourdomain.com
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-box h-full p-[24px] border-[1px] border-solid border-[#eee] bg-[#f8f8fb] relative rounded-[5px] transition-all duration-[0.3s] ease-in-out">
                        <div class="detail flex flex-col justify-center items-center text-center">
                            <div class="icon w-[70px] h-[70px] mb-[15px] bg-[#4b5966] flex flex-col justify-center items-center rounded-[5px] text-center">
                                <i class="fa fa-mobile text-[25px] text-[#fff] leading-[1]" aria-hidden="true"></i>
                            </div>
                            <div class="info text-center">
                                <h3 class="title text-[20px] font-semibold text-[#4b5966] capitalize tracking-[0.01rem] leading-[1.2] mb-[6px]">Contact</h3>
                                <p class="m-[0] text-[14px] text-[#777] leading-[28px] font-light tracking-[0.02rem]">
                                    <i class="fa fa-mobile text-[14px] text-[#777] text-center" aria-hidden="true"></i> &nbsp; (+91)-9876XXXXX
                                </p>
                                <p class="m-[0] text-[14px] text-[#777] leading-[28px] font-light tracking-[0.02rem]">
                                    <i class="fa fa-mobile text-[14px] text-[#777] text-center" aria-hidden="true"></i> &nbsp; (+91)-987654XXXX
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] py-[12px] m-auto">
                    <div class="gi-box h-full p-[24px] border-[1px] border-solid border-[#eee] bg-[#f8f8fb] relative rounded-[5px] transition-all duration-[0.3s] ease-in-out">
                        <div class="detail flex flex-col justify-center items-center text-center">
                            <div class="icon w-[70px] h-[70px] mb-[15px] bg-[#4b5966] flex flex-col justify-center items-center rounded-[5px] text-center">
                                <i class="fa fa-map-marker text-[25px] text-[#fff] leading-[1]" aria-hidden="true"></i>
                            </div>
                            <div class="info text-center">
                                <h3 class="title text-[20px] font-semibold text-[#4b5966] capitalize tracking-[0.01rem] leading-[1.2] mb-[6px]">Address</h3>
                                <p class="m-[0] text-[14px] text-[#777] leading-[28px] font-light tracking-[0.02rem]">
                                    <i class="fa fa-map-marker text-[14px] text-[#777] text-center" aria-hidden="true"></i> &nbsp; Ruami Mello Moraes Filho,
                                    987 - Salvador - MA, 40352, Brazil.
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-wrap pt-[80px] max-[576px]:pt-[60px]">
                <div class="min-[768px]:w-[50%] w-full px-[12px]">
                    <iframe src="http://maps.google.com/maps?q=-12.942227,-38.480291&amp;z=15&amp;output=embed" class="h-full w-full mb-[-7px] border-[1px] border-solid border-[#eee] rounded-[5px] max-[767px]:h-[300px]" allowfullscreen=""></iframe>
                </div>
                <div class="min-[768px]:w-[50%] w-full px-[12px]">
                    <form class="max-[767px]:mt-[50px]">
                        <div class="form-group mb-[30px]">
                            <input type="text" class="form-control py-[10px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] text-[#777] block w-full font-normal leading-[1.5]" id="fname" placeholder="Full Name">
                        </div>
                        <div class="form-group mb-[30px]">
                            <input type="email" class="form-control py-[10px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] text-[#777] block w-full font-normal leading-[1.5]" id="umail" placeholder="Email">
                        </div>
                        <div class="form-group mb-[30px]">
                            <input type="text" class="form-control py-[10px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] text-[#777] block w-full font-normal leading-[1.5]" id="phone" placeholder="Phone">
                        </div>
                        <div class="form-group mb-[30px]">
                            <textarea class="form-control py-[10px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[15px] text-[#777] block w-full font-normal leading-[1.5]" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection    