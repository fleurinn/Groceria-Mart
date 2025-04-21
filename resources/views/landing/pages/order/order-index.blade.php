@extends('landing.layouts.app')

@section('page_title', 'Produk | Groceria')
@section('content')


<!-- Category section -->
<section class="gi-category py-[40px] max-[767px]:py-[30px]">
    <div class="flex flex-wrap justify-between items-center mx-auto w-full px-[80px]"> <!-- Menambahkan padding horizontal 50px -->
        <div class="flex flex-wrap w-full">
            <div class="gi-shop-rightside w-full">
                <!-- Shop Top Start -->
                    <div class="gi-pro-list-top flex items-center justify-between text-[14px] border-[1px] border-solid border-[#eee] rounded-[5px] mb-[30px]">
                        <div class="min-[768px]:w-[50%] w-full gi-grid-list">
                            <div class="gi-gl-btn ml-[5px] flex items-center flex-row">
                                <button type="button" class="grid-btn btn-grid-50 h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row active">
                                    <i class="fi fi-rr-apps text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                                <button type="button" class="grid-btn btn-list-50 h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row">
                                    <i class="fi fi-rr-list text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                            </div>
                        </div>
                        <form method="GET" action="{{ route('user.order.history') }}" class="min-[768px]:w-[50%] w-full gi-sort-select flex justify-end items-center">
                            <div class="gi-select-inner relative flex w-[180px] h-[50px] leading-[1.5] bg-[#fff] overflow-hidden rounded-[0] border-l-[1px] border-solid border-[#eee]">
                                <select name="status_pengiriman" class="appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] cursor-pointer" onchange="this.form.submit()">
                                    <option value="" {{ request('status_pengiriman') == '' ? 'selected' : '' }}>Semua Status</option>
                                    <option value="proses" {{ request('status_pengiriman') == 'proses' ? 'selected' : '' }}>Proses</option>
                                    <option value="dalam perjalanan" {{ request('status_pengiriman') == 'dalam perjalanan' ? 'selected' : '' }}>Dalam Perjalanan</option>
                                    <option value="selesai" {{ request('status_pengiriman') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- Shop Top End -->
                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner mx-[-12px]">
                            <div class="flex flex-wrap w-full">
                            @foreach ($payments as $payment)
                                <div class="w-full px-[12px] gi-product-box max-[575px]:mx-auto pro-gl-content">
                                    <div class="gi-product-content pb-[24px] h-full flex max-[767px]:max-w-[400px] max-[575px]:max-w-[350px] max-[767px]:m-auto">
                                    <div class="gi-product-inner min-h-[200px] flex-1 transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-row overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px] max-[767px]:flex-col">
                                    <div class="gi-pro-content h-full w-full p-[20px] relative z-[10] flex flex-col text-left border-l-[1px] border-solid border-[#eee] justify-center">
                                                <a href="shop-left-sidebar-col-3.html">
                                                    <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] capitalize font-manrope tracking-[0.01rem] leading-[1.2]">{{ $payment->created_at->format('Y-m-d H:i') }}</h6>
                                                </a>
                                                <h5 class="gi-pro-title h-auto mb-[10px] text-[16px] tracking-[0.01rem] font-normal leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="text-[#4b5966] block text-[16px] leading-[22px] font-normal tracking-[0.85px] capitalize font-Poppins">{{ $payment->payment_id }}</a>
                                                </h5>
                                                <p class="gi-info my-[5px] text-[13px] text-[#777] block">{{ $payment->user->name }} - {{ $payment->status_pengiriman }}</p>
                                                <div class="gi-pro-rat-price mt-[5px] mb-[0] flex items-end justify-end">
                                                    <span class="gi-price text-[18px] flex items-center justify-end text-right text-[#4b5966] tracking-[0.4px]">
                                                        <span class="old-price text-[14px] text-[#777] tracking-[0.02rem] mr-2">Total Belanja</span>
                                                        <span class="new-price text-[#4b5966] font-bold text-[14px] tracking-[0.02rem]">Rp{{ number_format($payment->total, 0, ',', '.') }}</span>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <!--Shop content End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category section End -->

@endsection