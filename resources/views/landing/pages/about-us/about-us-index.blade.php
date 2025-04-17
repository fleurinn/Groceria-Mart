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
<!-- Service Section End -->
    <!-- Testimonials Section -->
    <section class="gi-testimonials-section py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <h3 class="hidden">Testimonials</h3>
                    <div class="testim-bg py-[80px] max-[575px]:py-[60px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <span class="gi-testi-shape-1"></span>
                        <div class="gi-test-outer gi-test-section max-w-[700px] m-auto flex justify-center items-center relative">
                            <ul id="gi-testimonial-slider" class="owl-carousel">
                                <li class="gi-test-item my-[0] mx-auto py-[0] px-[15px] relative">
                                    <img src="assets/img/icons/top-quotes.svg" class="svg_img test_svg top absolute h-auto top-[-5px] left-[0] right-auto" alt="user">
                                    <div class="gi-test-inner max-w-[730px] my-[0] mx-auto cursor-pointer">
                                        <div class="gi-test-[img] w-[100px] mx-auto mt-auto mb-[30px] block">
                                            <img alt="testimonial" title="testimonial" src="assets/img/user/pelanggan1.jpg" class="rounded-[50%]">
                                        </div>
                                        <div class="gi-test-content flex flex-col">
                                            <div class="gi-test-desc mb-[15px] text-[#777] text-[15px] leading-[26px] tracking-[0]">Belanja grosir di Groceria sangat memudahkan bisnis saya. Pilihan produknya lengkap, harganya bersaing, dan proses pemesanannya pun cepat. Pengiriman selalu tepat waktu dan barangnya terkemas dengan baik. Sangat puas!</div>
                                            <div class="gi-test-name text-[22px] font-semibold mb-[6px] text-[#5caf90] tracking-[0.6px] leading-[1.2]">Budi Santoso</div>
                                            <div class="gi-test-designation text-[16px] text-[#777] leading-[1.2] tracking-[0.5px] mb-[8px]">Pemilik Toko Kelontong</div>
                                            <div class="gi-test-rating my-[0] mx-auto">
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/img/icons/bottom-quotes.svg" class="svg_img test_svg bottom absolute h-auto bottom-[-5px] right-[0] left-auto" alt="">
                                </li>
                                
                                <li class="gi-test-item my-[0] mx-auto py-[0] px-[15px] relative">
                                    <img src="assets/img/icons/top-quotes.svg" class="svg_img test_svg top absolute h-auto top-[-5px] left-[0] right-auto" alt="user">
                                    <div class="gi-test-inner max-w-[730px] my-[0] mx-auto cursor-pointer">
                                        <div class="gi-test-[img] w-[100px] mx-auto mt-auto mb-[30px] block">
                                            <img alt="testimonial" title="testimonial" src="assets/img/user/pelanggan2.jpg" class="rounded-[50%]">
                                        </div>
                                        <div class="gi-test-content flex flex-col">
                                            <div class="gi-test-desc mb-[15px] text-[#777] text-[15px] leading-[26px] tracking-[0]">Saya sangat terbantu dengan adanya Groceria. Sebagai pemilik restoran, saya bisa dengan mudah memesan bahan baku dalam jumlah besar tanpa harus repot datang ke pasar atau distributor. Kualitas produknya terjamin dan harganya juga kompetitif. Layanan pelanggan juga responsif dan membantu.</div>
                                            <div class="gi-test-name text-[22px] font-semibold mb-[6px] text-[#5caf90] tracking-[0.6px] leading-[1.2]">Siti Aminah</div>
                                            <div class="gi-test-designation text-[16px] text-[#777] leading-[1.2] tracking-[0.5px] mb-[8px]">Pemilik Restoran</div>
                                            <div class="gi-test-rating my-[0] mx-auto">
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                                <i class="gicon gi-star fill inline-block text-[11px] mx-[0.5px] float-left text-[#f27d0c]"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/img/icons/bottom-quotes.svg" class="svg_img test_svg bottom absolute h-auto bottom-[-5px] right-[0] left-auto" alt="">
                                </li>

                                </ul>
                        </div>
                        <span class="gi-testi-shape-2"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- Facts Section -->
    <section class="gi-facts-section py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap w-full my-[-12px]">
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">10+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Sumber Produk</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Kami mendapatkan produk dari lebih dari 10 sumber terpercaya.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">100+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Pilihan Kualitas</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Menawarkan lebih dari 100 pilihan produk berkualitas setiap hari.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">50+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Pelanggan Terlayani</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Telah melayani lebih dari 50 pelanggan dengan layanan terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">99%</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Kepuasan Pelanggan</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Mencapai tingkat kepuasan pelanggan hingga sampai 99%.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facts Section End -->

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