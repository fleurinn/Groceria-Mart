@extends('landing.layouts.app')

@section('page_title', 'Keranjang Pengguna | Groceria')
@section('content')

<!-- About section -->
<section class="gi-about py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="flex flex-wrap">
                <div class="min-[1200px]:w-[50%] min-[768px]:w-full px-[12px]">
                    <div class="gi-about-img">
                        <img src="assets/img/common/about.png" class="v-img w-full rounded-[5px] max-[1199px]:max-w-[600px] max-[199px]:mb-[30px]" alt="about">
                        <img src="assets/img/common/about-2.png" class="h-img" alt="about">
                        <img src="assets/img/common/about-3.png" class="h-img" alt="about">
                    </div>
                </div>
                <div class="min-[1200px]:w-[50%] min-[768px]:w-full px-[12px]">
                    <div class="gi-about-detail h-full flex flex-col justify-center max-[1199px]:mt-[30px]">
                        <div class="section-title pt-[0] flex flex-col mb-[20px]">
                            <h2 class="mb-[15px] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Who We <span class="text-[#5caf90]">Are?</span></h2>
                            <p class="m-0 text-[#777] text-[18px] font-medium uppercase max-[991px]:text-[17px] max-[767px]:text-[16px] max-[575px]:text-[15px]">We’re here to serve only the best products for you. Enriching your homes with the best
                                essentials.</p>
                        </div>
                        <p class="text-[#777] text-[14px] font-normal mb-[16px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text-[#777] text-[14px] font-normal mb-[16px]">Lorem Ipsum has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged.</p>
                        <p class="text-[#777] text-[14px] font-normal mb-[16px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section End -->

    <!-- Service Section -->
    <section class="gi-service-section py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Our <span class="text-[#5caf90]">Services</span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Customer service should not be a department. It should be the entire company.</p>
            </div>
            <div class="flex flex-wrap w-full my-[-12px]">
                <div class="py-[12px] px-[12px] min-[992px]:w-[25%] min-[576px]:w-[50%] w-full" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                    <div class="gi-ser-inner p-[30px] transition-all duration-[0.3s] ease delay-[0s] cursor-pointer border-[1px] border-solid border-[#eee] h-full flex items-center justify-center flex-col text-center nh-[#fff] rounded-[5px]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-truck-moving text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3 class="mb-[10px] text-[18px] font-medium text-[#4b5966] tracking-[0.6px] font-Poppins leading-[1.2] max-[575px]:text-[16px]">Free Shipping</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px] font-light">Free shipping on all US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="py-[12px] px-[12px] min-[992px]:w-[25%] min-[576px]:w-[50%] w-full" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="gi-ser-inner p-[30px] transition-all duration-[0.3s] ease delay-[0s] cursor-pointer border-[1px] border-solid border-[#eee] h-full flex items-center justify-center flex-col text-center nh-[#fff] rounded-[5px]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-hand-holding-seeding text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3 class="mb-[10px] text-[18px] font-medium text-[#4b5966] tracking-[0.6px] font-Poppins leading-[1.2] max-[575px]:text-[16px]">24X7 Support</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px] font-light">Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="py-[12px] px-[12px] min-[992px]:w-[25%] min-[576px]:w-[50%] w-full" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                    <div class="gi-ser-inner p-[30px] transition-all duration-[0.3s] ease delay-[0s] cursor-pointer border-[1px] border-solid border-[#eee] h-full flex items-center justify-center flex-col text-center nh-[#fff] rounded-[5px]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-badge-percent text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3 class="mb-[10px] text-[18px] font-medium text-[#4b5966] tracking-[0.6px] font-Poppins leading-[1.2] max-[575px]:text-[16px]">30 Days Return</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px] font-light">Simply return it within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="py-[12px] px-[12px] min-[992px]:w-[25%] min-[576px]:w-[50%] w-full" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                    <div class="gi-ser-inner p-[30px] transition-all duration-[0.3s] ease delay-[0s] cursor-pointer border-[1px] border-solid border-[#eee] h-full flex items-center justify-center flex-col text-center nh-[#fff] rounded-[5px]">
                        <div class="gi-service-image mb-[15px]">
                            <i class="fi fi-ts-donate text-[40px] text-[#5caf90] leading-[0]"></i>
                        </div>
                        <div class="gi-service-desc">
                            <h3 class="mb-[10px] text-[18px] font-medium text-[#4b5966] tracking-[0.6px] font-Poppins leading-[1.2] max-[575px]:text-[16px]">Payment Secure</h3>
                            <p class="m-[0] text-[14px] text-[#777] leading-[1.5] tracking-[0.5px] font-light">Contact us 24 hours a day, 7 days a week</p>
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
                                            <img alt="testimonial" title="testimonial" src="assets/img/user/1.jpg" class="rounded-[50%]">
                                        </div>
                                        <div class="gi-test-content flex flex-col">
                                            <div class="gi-test-desc mb-[15px] text-[#777] text-[15px] leading-[26px] tracking-[0]">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s.</div>
                                            <div class="gi-test-name text-[22px] font-semibold mb-[6px] text-[#5caf90] tracking-[0.6px] leading-[1.2]">Mariya Klinton</div>
                                            <div class="gi-test-designation text-[16px] text-[#777] leading-[1.2] tracking-[0.5px] mb-[8px]">CEO</div>
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
                                    <img src="assets/img/icons/top-quotes.svg" class="svg_img test_svg top absolute h-auto top-[-5px] left-[0] right-auto" alt="">
                                    <div class="gi-test-inner max-w-[730px] my-[0] mx-auto cursor-pointer">
                                        <div class="gi-test-img w-[100px] mx-auto mt-auto mb-[30px] block">
                                            <img alt="testimonial" title="testimonial" src="assets/img/user/2.jpg" class="rounded-[50%]">
                                        </div>
                                        <div class="gi-test-content flex flex-col">
                                            <div class="gi-test-desc mb-[15px] text-[#777] text-[15px] leading-[26px] tracking-[0]">standard dummy text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen</div>
                                            <div class="gi-test-name text-[22px] font-semibold mb-[6px] text-[#5caf90] tracking-[0.6px] leading-[1.2]">John Doe</div>
                                            <div class="gi-test-designation text-[16px] text-[#777] leading-[1.2] tracking-[0.5px] mb-[8px]">General Manager</div>
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
                                    <img src="assets/img/icons/top-quotes.svg" class="svg_img test_svg top absolute h-auto top-[-5px] left-[0] right-auto" alt="">
                                    <div class="gi-test-inner max-w-[730px] my-[0] mx-auto cursor-pointer   ">
                                        <div class="gi-test-img w-[100px] mx-auto mt-auto mb-[30px] block">
                                            <img alt="testimonial" title="testimonial" src="assets/img/user/3.jpg" class="rounded-[50%]">
                                        </div>
                                        <div class="gi-test-content flex flex-col">
                                            <div class="gi-test-desc mb-[15px] text-[#777] text-[15px] leading-[26px] tracking-[0]">when an unknown printer took a galley of type and
                                                scrambled it to make a type specimenLorem Ipsum has been the industry's
                                                ever since the 1500s, </div>
                                            <div class="gi-test-name text-[22px] font-semibold mb-[6px] text-[#5caf90] tracking-[0.6px] leading-[1.2]">Nency Lykra</div>
                                            <div class="gi-test-designation text-[16px] text-[#777] leading-[1.2] tracking-[0.5px] mb-[8px]">Marketing Manager</div>
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
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">65K+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Vendors</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Contrary to popular belief, Lorem is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">$45B+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Earnings</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Contrary to popular belief, Lorem is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">25M+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Sold</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Contrary to popular belief, Lorem is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] py-[12px]">
                    <div class="gi-facts-inner py-[30px] px-[15px] h-full flex items-center justify-center flex-col text-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                        <div class="gi-count">
                            <span class="counter mb-[15px] text-[40px] font-extrabold text-[#ddd] max-[991px]:text-[38px] max-[767px]:text-[36px] max-[575px]:text-[32px]">70K+</span>
                        </div>
                        <div class="gi-facts-desc">
                            <h4 class="text-[20px] text-[#4b5966] font-semibold leading-[1.2] mb-[6px]">Products</h4>
                            <p class="max-w-[250px] m-0 text-[14px] text-[#777]">Contrary to popular belief, Lorem is not simply random text.</p>
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
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Our <span class="text-[#5caf90]">Team</span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Meet out expert team members.</p>
            </div>
            <div class="gi-team owl-carousel px-[12px]">
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/1.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-twitter text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-facebook text-[#fff] text-[15px]" aria-hidden="true"></i>
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
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">Olivia Smith</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Founder</p>
                    </div>
                </div>
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/2.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-twitter text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-facebook text-[#fff] text-[15px]" aria-hidden="true"></i>
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
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">William Dalin</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Co-Founder</p>
                    </div>
                </div>
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/3.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-twitter text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-facebook text-[#fff] text-[15px]" aria-hidden="true"></i>
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
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">Emma Welson</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Manager</p>
                    </div>
                </div>
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/4.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-twitter text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-facebook text-[#fff] text-[15px]" aria-hidden="true"></i>
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
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">Benjamin Martin</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Leader</p>
                    </div>
                </div>
                <div class="gi-team-box relative">
                    <div class="gi-team-imag relative">
                        <img src="assets/img/user/5.jpg" alt="user" class="w-full rounded-[5px]">
                        <div class="gi-team-socials transition-all duration-[0.3s] ease-in-out m-auto absolute top-auto bottom-[0] left-[0] right-[0] opacity-[0] max-[991px]:bottom-[15px] max-[991px]:opacity-[1]">
                            <ul class="align-itegi-center flex flex-row justify-center">
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-twitter text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="#" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-facebook text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="gi-social-link">
                                    <a href="" class="h-[30px] w-[30px] m-[2px] flex items-center justify-center bg-[#4b5966] rounded-[5px] hover:bg-[#5caf90]">
                                        <i class="gicon gi-linkedin text-[#fff] text-[15px]" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gi-team-info text-center">
                        <h5 class="mt-[15px] text-[#4b5966] text-[18px] leading-[1.2] mb-[6px] font-bold">Amelia Martin</h5>
                        <p class="m-0 text-[#777] font-light text-[13px] leading-[16px]">Leader</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facts Section End -->

@endsection