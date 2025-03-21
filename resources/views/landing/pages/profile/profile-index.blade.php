@extends('landing.layouts.app')

@section('page_title', 'Profile User | Groceria')
@section('content')

<!-- Register section -->
<section class="gi-register py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Profile<span></span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Best place to buy and sell digital products.</p>
            </div>
            <div class="flex flex-wrap w-full">
                <div class="gi-register-wrapper max-w-[934px] my-[0] mx-auto px-[12px]">
                    <div class="gi-register-container border-[1px] border-solid border-[#eee] p-[30px] text-left bg-[#fff] rounded-[5px] max-[575px]:p-[15px]">
                        <div class="gi-register-form">
                            <form action="#" method="post" class="flex flex-row flex-wrap mx-[-15px]">
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">First Name*</label>
                                    <input type="text" name="firstname" placeholder="Enter your first name" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Last Name*</label>
                                    <input type="text" name="lastname" placeholder="Enter your last name" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email add..." class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Phone Number*</label>
                                    <input type="text" name="phonenumber" placeholder="Enter your phone number" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap w-full px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Address</label>
                                    <input type="text" name="address" placeholder="Address Line 1" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">City *</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="gi_select_city" id="gi-select-city" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                            <option selected disabled>City</option>
                                            <option value="1">City 1</option>
                                            <option value="2">City 2</option>
                                            <option value="3">City 3</option>
                                            <option value="4">City 4</option>
                                            <option value="5">City 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Post Code</label>
                                    <input type="text" name="postalcode" placeholder="Post Code" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Country *</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="gi_select_country" id="gi-select-country" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                            <option selected disabled>Country</option>
                                            <option value="1">Country 1</option>
                                            <option value="2">Country 2</option>
                                            <option value="3">Country 3</option>
                                            <option value="4">Country 4</option>
                                            <option value="5">Country 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Region State</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="gi_select_state" id="gi-select-state" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                            <option selected disabled>Region/State</option>
                                            <option value="1">Region/State 1</option>
                                            <option value="2">Region/State 2</option>
                                            <option value="3">Region/State 3</option>
                                            <option value="4">Region/State 4</option>
                                            <option value="5">Region/State 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-recaptcha w-full flex justify-center px-[15px]">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control hidden w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span>
                                <span class="gi-register-wrap gi-register-btn flex flex-row justify-end w-full px-[15px] max-[767px]:flex-col">
                                    <a href="{{ route('produk') }}" class="gi-btn-1 py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] max-[767px]:mt-[15px] hover:bg-[#5caf90]">
                                        Edit Profile
                                    </a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sample section End -->

@endsection