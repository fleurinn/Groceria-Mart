@extends('landing.layouts.app')

@section('page_title', 'Keranjang Pengguna | Groceria')
@section('content')

<!-- About section -->
<section class="gi-about py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap">
                <div class="min-[1200px]:w-[50%] min-[768px]:w-full px-[12px]">
                    <div class="gi-about-img">
                        <img src="assets/img/common/about5.jpg" class="v-img w-full rounded-[5px] max-[1199px]:max-w-[600px] max-[199px]:mb-[30px]" alt="about">
                        <img src="assets/img/common/about1.jpg" class="h-img" alt="about">
                        <img src="assets/img/common/about7.jpg" class="h-img" alt="about">
                    </div>
                </div>
                <div class="min-[1200px]:w-[50%] min-[768px]:w-full px-[12px]">
                    <div class="gi-about-detail h-full flex flex-col justify-center max-[1199px]:mt-[30px]">
                        <div class="section-title pt-[0] flex flex-col mb-[20px]">
                            <style>
                                .about-groceria-text {
                                    text-align: justify;
                                }
                            </style>
                            
                            <h2 class="mb-[15px] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Tentang <span class="text-[#5caf90]">Groceria</span></h2>
                            <div class="">
                                <p class="m-0 text-[#777] text-[18px] font-medium uppercase max-[991px]:text-[17px] max-[767px]:text-[16px] max-[575px]:text-[15px]">Solusi Belanja Grosir Online Anda.</p>
                            </div>
                            <p class="text-[#777] text-[14px] font-normal mb-[10px] about-groceria-text">Groceria adalah platform web inovatif yang dirancang untuk memudahkan Anda dalam melakukan pembelian barang secara grosir melalui internet. Kami menyediakan berbagai pilihan pengiriman yang fleksibel, anda dapat menggambil barang ke toko maupun diantar ke alamat tujuan.</p>
                            <p class="text-[#777] text-[14px] font-normal mb-[10px] about-groceria-text">Jelajahi dan temukan beragam produk grosir berkualitas yang Anda butuhkan dengan mudah dan cepat hanya di Groceria. Nikmati kenyamanan dan fleksibilitas dalam memilih metode pengiriman yang paling sesuai dengan kebutuhan serta preferensi Anda.</p>
                            <p class="text-[#777] text-[14px] font-normal mb-[10px] about-groceria-text">Kami memiliki komitmen yang kuat untuk senantiasa memberikan pengalaman belanja grosir online yang efisien, aman, dan terpercaya bagi setiap pelanggan. Kepuasan Anda adalah prioritas utama kami di Groceria.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section End -->

   <!-- Service Section -->
<section class="gi-service-section py-[40px] max-[767px]:py-[30px]">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="w-full flex flex-wrap mt-[-12px] mb-[-12px]">
            <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp">
                <div class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[30px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#eee]">
                    <div class="gi-service-image mb-[15px]">
                        <i class="fi fi-ts-truck-moving text-[40px] text-[#5caf90] leading-[0]"></i>
                    </div>
                    <div class="gi-service-desc">
                        <h3 class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">Pengiriman Cepat
                        </h3>
                        <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Pengiriman cepat untuk daerah ciampea dan sekitarnya</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp" data-wow-delay=".4s">
                <div class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[30px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#eee]">
                    <div class="gi-service-image mb-[15px]">
                        <i class="fi fi-ts-hand-holding-seeding text-[40px] text-[#5caf90] leading-[0]"></i>
                    </div>
                    <div class="gi-service-desc">
                        <h3 class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">24/7 Respons</h3>
                        <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Layanan terbaik dengan respon yang cepat dan akurat</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp" data-wow-delay=".6s">
                <div class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[30px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#eee]">
                    <div class="gi-service-image mb-[15px]">
                        <i class="fi fi-ts-badge-percent text-[40px] text-[#5caf90] leading-[0]"></i>
                    </div>
                    <div class="gi-service-desc">
                        <h3 class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">Pembayaran Terpercaya</h3>
                        <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Pembayaran menggunakan Bank /
                             E- Money yang dilindungi</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[576px]:w-[50%] w-full p-[12px] wow fadeInUp" data-wow-delay=".8s">
                <div class="gi-ser-inner transition-all duration-[0.3s] ease delay-[0s] p-[30px] max-[991px]:p-[24px] h-full flex items-center justify-center flex-col text-center bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#eee]">
                    <div class="gi-service-image mb-[15px]">
                        <i class="fi fi-ts-donate text-[40px] text-[#5caf90] leading-[0]"></i>
                    </div>
                    <div class="gi-service-desc">
                        <h3 class="font-Poppins text-[18px] font-medium text-[#4b5966] leading-[1.2] tracking-[0.6px] mb-[10px] max-[575px]:text-[16px]">Barang Berkualitas</h3>
                        <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px]">Solusi tepat untuk kebutuhan berkualitas anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Team Section -->
    <section class="gi-team-section py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] px-[12px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Team <span class="text-[#5caf90]">Kami</span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Kami adalah tim yang merancang dan membangun platform Groceria untuk Anda.</p>
            </div>
            <div class="gi-team owl-carousel px-[12px]">
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/riana1_300x300.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-twitter text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-instagram text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-linkedin text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gi-team-info text-center">
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">GeaKiera</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Analis & Designer</p>
                    </div>
                </div>
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/riana1_300x300.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-whatsapp text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-instagram text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-linkedin text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gi-team-info text-center">
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">Adhya Setyawati</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Frontend Development</p>
                    </div>
                </div>
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/riana1_300x300.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-whatsapp text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-instagram text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-linkedin text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gi-team-info text-center">
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">Riana Desima Ayu Sari</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Backend Development</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection