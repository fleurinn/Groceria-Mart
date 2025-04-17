@section('footer')

<!-- Footer Start -->
<footer class="gi-footer bg-[#fff] border-t-[1px] border-solid border-[#eee] mt-[40px]">
        <div class="footer-container">
            <div class="footer-top py-[80px] max-[767px]:py-[60px]">
                <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                    <div class="w-full flex flex-wrap">
                        <div class="min-[992px]:w-[25%] px-[12px] w-full gi-footer-cat wow fadeInUp">
                            <div class="gi-footer-widget gi-footer-company flex flex-col">
                                <img src="assets/img/logo/logogroceria.png" class="gi-footer-logo max-w-[144px] max-[767px]:max-w-[130px]  mb-[30px]" alt="footer logo">
                                <p class="gi-footer-detail max-w-[400px] mb-[30px] p-[0] text-[14px] leading-[27px] font-normal text-[#777] inline-block relative max-[1199px]:text-[14px]">Groceria adalah toko grosir produk bahan makanan. Dapatkan kebutuhan sehari-hari Anda dari toko kami.</p>
                                <div class="gi-app-store mb-[30px] flex flex-row max-[1199px]:flex-col max-[991px]:flex-row max-[320px]:flex-col">
                                    {{-- <a href="#" class="app-img"><img src="assets/img/app/android.png" class="adroid max-w-[140px] max-[1399px]:max-w-[120px]  mb-[15px] rounded-[5px] mr-[15px]" alt="apple"></a>
                                    <a href="#" class="app-img"><img src="assets/img/app/apple.png" class="apple max-w-[140px] max-[1399px]:max-w-[120px] mb-[15px] rounded-[5px]" alt="apple"></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-info wow fadeInUp" data-wow-delay="0.2s">
                            <div class="gi-footer-widget">
                                <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Kategori</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Makanan</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Minuman</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Snack & Biscuit</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Rumah Tangga</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Ibu & Anak</a>
                                        </li>
                                        {{-- <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Kesehatan&Kebersihan</a>
                                        </li> --}}
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Kebutuhan Dapur</a>
                                        </li>
                                        {{-- <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Lainnya</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-account wow fadeInUp" data-wow-delay="0.3s">
                            <div class="gi-footer-widget">
                                <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Perusahaan</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Tentang Kami</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Kontak</a>
                                        </li>
                                        {{-- <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Legal Notice</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Terms & conditions</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Secure payment</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Contact us</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[16.66%] gi-footer-toggle px-[12px] w-full gi-footer-service wow fadeInUp" data-wow-delay="0.4s">
                            <div class="gi-footer-widget">
                                <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Akun</h4>
                                <div class="gi-footer-links gi-footer-dropdown">
                                    <ul class="align-itegi-center">
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Masuk</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Daftar</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Pembayaran</a>
                                        </li>
                                        {{-- <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Become a Vendor</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Affiliate Program</a>
                                        </li>
                                        <li class="gi-footer-link m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center">
                                            <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">Payments</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[25%] gi-footer-toggle px-[12px] w-full gi-footer-cont-social mb-[-20px] wow fadeInUp" data-wow-delay="0.5s">
                            <div class="gi-footer-contact mb-[30px] max-[991px]:mb-[0]">
                                <div class="gi-footer-widget">
                                    <h4 class="gi-footer-heading text-[18px] font-medium mb-[20px] text-[#4b5966] leading-[1.2] tracking-[0] relative block w-full pb-[15px] capitalize font-Poppins border-b-[1px] border-solid border-[#eee] max-[991px]:mb-[20px] max-[991px]:text-[14px]">Kontak</h4>
                                    <div class="gi-footer-links gi-footer-dropdown">
                                        <ul class="align-itegi-center">
                                            <li class="gi-footer-link gi-foo-location m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i class="fi fi-rr-marker location leading-[0] text-[18px] mt-[5px] h-[25px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <p class="m-[0] text-[14px] font-normal text-[#777]">Jl. Wr. Borong No.22, Bojong Rangkas, Kec. Ciampea, Kabupaten Bogor, Jawa Barat 16620</p>
                                            </li>
                                            <li class="gi-footer-link gi-foo-call m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i class="fi fi-brands-whatsapp leading-[0] text-[18px] h-[20px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">+62 8802678910</a>
                                            </li>
                                            <li class="gi-footer-link gi-foo-mail m-[0] leading-[1.5] border-[0] p-[0] font-normal text-[16px] text-[#5caf90] flex items-center mb-[16px]">
                                                <span class="w-[25px] flex basis-auto grow-[0] shrink-[0]">
                                                    <i class="fi fi-rr-envelope leading-[0] text-[18px] h-[20px] text-[#5caf90] w-[auto]"></i>
                                                </span>
                                                <a href="#" class="transition-all duration-[0.3s] ease-in-out text-[14px] leading-[20px] p-[0] text-[#777] mb-[0] inline-block relative break-all tracking-[0] font-normal hover:text-[#5caf90] hover:opacity-[1]">groceria@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-footer-social">
                                <div class="gi-footer-widget">
                                    <div class="gi-footer-links gi-footer-dropdown">
                                        <ul class="align-itegi-center flex flex-wrap">
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-whatsapp text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-twitter text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-facebook text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="gi-footer-link pr-[5px]">
                                                <a href="#" class="h-[30px] w-[30px] bg-[#4b5966] rounded-[5px] capitalize flex items-center justify-center text-[15px]"><i class="gicon gi-instagram text-[16px] text-[#fff]" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-[10px] max-[991px]:py-[15px] border-t-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
                <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                    <div class="w-full flex flex-wrap">
                        <div class="gi-bottom-info flex flex-row items-center justify-between w-full px-[12px] max-[991px]:flex-col">
                            <!-- Footer Copyright Start -->
                            <div class="footer-copy max-[991px]:mb-[15px]">
                                <div class="footer-bottom-copy">
                                    <div class="gi-copy text-[#777] text-[13px] tracking-[1px] text-center font-light">Copyright © 
                                        <a class="site-name text-[#5caf90]" href="#">Groceria</a>
                                        all rights reserved. Powered by Groceria.</div>
                                </div>
                            </div>
                            <!-- Footer Copyright End -->
                            <!-- Footer payment -->
                            <div class="footer-bottom-right">
                                <div class="footer-bottom-payment flex justify-content-center">
                                    <div class="payment-link">
                                        <img src="assets/img/hero-bg/payment.png" alt="payment">
                                    </div>
                                </div>
                            </div>
                            <!-- Footer payment -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
