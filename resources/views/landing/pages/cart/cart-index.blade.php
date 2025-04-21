@extends('landing.layouts.app')

@section('page_title', 'Keranjang Pengguna | Groceria')
@section('content')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<!-- Cart section -->
<section class="gi-cart-section py-[40px] max-[767px]:py-[30px]">
    <h2 class="hidden">Keranjang</h2>
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="flex flex-wrap w-full">
<!-- Sidebar Area Start -->
<div class="gi-cart-rightside min-[992px]:w-[33.33%] w-full px-[12px]">
                    <div class="gi-sidebar-wrap p-[15px] rounded-[5px] border-[1px] border-solid border-[#eee] mb-[0]">
                        <!-- Sidebar Summary Block -->
                        <div class="gi-sidebar-block">
                            <div class="gi-sb-title">
                                <h3 class="gi-sidebar-title text-[20px] font-semibold tracking-[0] mb-[0] leading-[1.2] relative text-[#4b5966] max-[1199px]:text-[18px]">Detail</h3>
                            </div>
                        
                            {{-- Informasi Pengguna --}}
                            <div class="gi-sb-block-content mb-[0] border-b-[0] mt-[15px]">
                                <h4 class="gi-ship-title mb-[0] text-[17px] font-bold border-b-[1px] border-[#eee] text-[#777] pb-[15px] flex justify-between">Informasi Pengguna</h4>
                                <div class="gi-cart-form pt-[19px]">
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">Nama Lengkap</label>
                                        <input type="text" value="{{ Auth::user()->name }}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">Nomor Handphone</label>
                                        <input type="text" value="{{ Auth::user()->shippingAddress->no_telp ?? '-'}}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">E-mail</label>
                                        <input type="text" value="{{ Auth::user()->email }}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                </div>
                            </div>
                        
                            {{-- Informasi Tambahan --}}
                            <div class="gi-sb-block-content-user mb-[0] border-b-[0] mt-[15px]">
                                <h4 class="gi-ship-title cursor-pointer text-[17px] font-bold border-b-[1px] border-[#eee] text-[#777] pb-[15px] flex justify-between"
                                    onclick="toggleDropdownUser(this)">
                                    Informasi Tambahan
                                </h4>
                                <div class="gi-cart-form-user pt-[19px] hidden">
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">Kota</label>
                                        <input type="text" value="{{ Auth::user()->shippingAddress->city->name ?? '-' }}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">Kecamatan</label>
                                        <input type="text" value="{{ Auth::user()->shippingAddress->district->name ?? '-' }}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">Desa</label>
                                        <input type="text" value="{{ Auth::user()->shippingAddress->village->name ?? '-' }}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                    <span class="gi-cart-wrap">
                                        <label class="mb-[9px] text-[#4b5966] text-[14px] font-medium">Alamat Lengkap</label>
                                        <input type="text" value="{{ Auth::user()->shippingAddress->address ?? '-' }}" readonly class="h-[50px] bg-gray-100 border-[#eee] text-[#4b5966] text-[14px] mb-[26px] px-[15px] w-full rounded-[5px]">
                                    </span>
                                </div>
                            </div>
                        
                            @php
                            $shippingOptions = [
                                5000 => 'Reguler - Rp5.000',
                                10000 => 'Express - Rp10.000',
                            ];
                        @endphp
                        
                        {{-- Ringkasan Pembayaran --}}
                        <div class="gi-sb-block-content mb-[0] border-b-[0] mt-[15px]">
                            <div class="gi-cart-summary-bottom">
                                <div class="gi-cart-summary">
                                    {{-- Subtotal --}}
                                            @php
                                                $total = $carts->sum(function ($cart) {
                                                    return ($cart->product->price * ((100 - $cart->product->discount) / 100)) * $cart->quantity;
                                                });
                                            @endphp
                                        <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#4b5966] text-[14px]">Sub-Total</span>
                                        <span class="text-right text-[#4b5966] text-[14px] font-medium">
                                            

                                            <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                                        </span>
                                    </div>
                        
                                    {{-- Pilihan Ongkos Kirim --}}
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#4b5966] text-[14px]">Ongkos Kirim</span>
                                        <select id="shipping-select" name="shipping_cost" class="text-right text-[#4b5966] text-[14px] font-medium bg-transparent border-none" 							name="shipping_cost">
                                            <option value="">Pilih Ongkir</option>
                                            @foreach ($shippingOptions as $value => $label)
                                            <option value="{{ $value }}" {{ old('shipping_cost') == $value ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                        
                                    {{-- Kupon Diskon --}}
                                    <div class="flex justify-between items-center mb-[10px]">
                                        <span class="text-left text-[#4b5966] text-[14px]">Kupon Diskon</span>
                                        <span class="text-right text-[#5caf90] text-[14px] font-medium">
                                            <a class="gi-cart-coupan cursor-pointer">Pakai Kupon</a>
                                        </span>
                                    </div>
                        
                                    <div class="gi-cart-coupan-content mb-[0] hidden">
                                        <form id="voucher-form" class="gi-cart-coupan-form flex border-[1px] border-[#eee] p-[5px] rounded-[5px]">
                                            @csrf
                                            <input class="gi-coupan h-[40px] text-[#777] text-[14px] w-[80%] px-[10px]" type="text" placeholder="Masukan kode kupon" name="discount_code" required>
                                            <button type="submit" class="gi-btn-2 py-[10px] px-[15px] bg-[#5caf90] text-[#fff] hover:bg-[#4b5966] hover:text-[#fff] rounded-[5px] text-[14px]">Pakai</button>
                                        </form>
                                        <div id="voucher-response" class="text-[14px] text-[#4b5966] mt-2"></div>
                                    </div>
                        
                                    {{-- Total Keseluruhan --}}
                                    <div class="gi-cart-summary-total border-t-[1px] border-[#eee] pt-[19px] mt-[16px] flex justify-between items-center">
                                        <span class="text-left text-[16px] font-medium text-[#4b5966]">Total Keseluruhan</span>
                                        <span class="text-right text-[16px] font-medium text-[#4b5966]">Rp
                                            <span id="total"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Script --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const shippingSelect = document.getElementById('shipping-select');
                                const subtotalElement = document.getElementById('subtotal');
                                const totalElement = document.getElementById('total');
                                let originalSubtotal = parseInt({{ $total }});
                                let discountAmount = 0;
                                let shippingCost = parseInt(shippingSelect.value); // Nilai default saat halaman dimuat
                        
                                // Ambil total cart (yang sudah termasuk diskon + ongkir dari backend)
                                const updateTotal = async () => {
                                    try {
                                        const response = await fetch("{{ route('cart.total') }}");
                                        const data = await response.json();
                                        if (response.ok) {
                                            const finalTotal = data.total_price;
                                            totalElement.innerText = finalTotal.toLocaleString('id-ID');
                                        } else {
                                            console.error('Gagal mengambil total cart');
                                        }
                                    } catch (error) {
                                        console.error('Error saat mengambil total:', error);
                                    }
                                };
                        
                                // Event saat user mengganti ongkir
                                shippingSelect.addEventListener('change', function () {
                                    shippingCost = parseInt(this.value);
                        
                                    // Kirim data ongkir ke server
                                    fetch("{{ url('/set-shipping-cost') }}", {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                        },
                                        body: JSON.stringify({
                                            shipping_cost: shippingCost
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.message) {
                                            updateTotal(); // Perbarui total setelah ongkir berhasil di-set
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Gagal mengirim ongkir:', error);
                                    });
                                });
                        
                                // Toggle form kupon
                                const couponToggleBtn = document.querySelector('.gi-cart-coupan');
                                const couponContent = document.querySelector('.gi-cart-coupan-content');
                                if (couponToggleBtn && couponContent) {
                                    couponToggleBtn.addEventListener('click', function () {
                                        couponContent.classList.toggle('hidden');
                                    });
                                }
                        
                                // Submit form kupon
                                const voucherForm = document.getElementById('voucher-form');
                                if (voucherForm) {
                                    voucherForm.addEventListener('submit', function (e) {
                                        e.preventDefault();
                                        const formData = new FormData(voucherForm);
                        
                                        fetch("{{ route('voucher.apply') }}", {
                                            method: 'POST',
                                            headers: {
                                                'X-CSRF-TOKEN': formData.get('_token'),
                                                'Accept': 'application/json'
                                            },
                                            body: formData
                                        })
                                        .then(res => res.json())
                                        .then(data => {
                                            if (data.discount_amount) {
                                                updateTotal(); // Ambil ulang total setelah diskon diterapkan
                                            } else {
                                                document.getElementById('voucher-response').innerText = data.message || 'Kupon tidak valid.';
                                            }
                                        })
                                        .catch(err => {
                                            document.getElementById('voucher-response').innerText = 'Terjadi kesalahan saat menghubungi server.';
                                        });
                                    });
                                }
                        
                                // Panggil saat halaman pertama kali dimuat
                                updateTotal();
                            });
                        </script>
                        
                        
                        

                        </div>
                        
                    </div>
                </div>
            <div class="gi-cart-leftside min-[992px]:w-[66.66%] w-full px-[12px] max-[991px]:mt-[30px]">
                <!-- cart content Start -->
                <div class="gi-cart-content">
                    <div class="gi-cart-inner">
                        <div class="flex flex-wrap w-full">
                            <form action="#" class="w-full">
                                <div class="table-content cart-table-content">
                                    <table class="w-full bg-[#fff] ">
                                        <thead class="max-[767px]:border-[0] max-[767px]:h-[1px] max-[767px]:m-[-1px] max-[767px]:overflow-hidden max-[767px]:p-[0] max-[767px]:absolute max-[767px]:w-[1px]">
                                            <tr class="bg-[#fff] border-b-[2px] border-solid border-[#eee]">
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-left capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Produk</th>
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-center capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Harga</th>
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-center capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Kuantitas</th>
                                                <th class="text-[#4b5966] text-[15px] font-medium pt-[15px] pb-[12px] px-[14px] text-center capitalize align-middle whitespace-nowrap leading-[1] tracking-[0]">Aksi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($carts as $cart)
                                            <tr class="border-b-[1px] border-solid border-[#eee]">
                                                <td data-label="Product" class="gi-cart-pro-name w-[40%] text-[#4b5966] text-[16px] py-[15px] px-[14px] text-left">
                                                    <a href="#" class="text-[#777] font-normal text-[14px] flex items-center">
                                                        <img class="gi-cart-pro-img w-[60px] mr-[15px]" src="{{ asset('storage/products/' . $cart->product->image) }}" alt="">
                                                        {{ $cart->product->name }}
                                                    </a>
                                                </td>
                                                <td data-label="Price" class="gi-cart-pro-price text-center text-[#4b5966] font-medium text-[15px] py-[15px] px-[14px]">
                                                    <span class="amount">Rp{{ number_format($cart->product->price, 0, ',', '.') }}</span>
                                                </td>
                                                <td data-label="Quantity" class="text-[#4b5966] text-[16px] py-[15px] px-[14px] text-center">
                                                    <div class="cart-qty-plus-minus border-[1px] border-[#eee] rounded-[5px] h-[35px] overflow-hidden w-[84px] flex items-center justify-between mx-auto">
                                                        <button type="button" class="qty-btn minus px-2 text-[#4b5966]">-</button>
                                                        <input 
                                                            class="cart-plus-minus border-0 text-[#4b5966] text-[14px] w-[30px] text-center font-semibold" 
                                                            type="text" 
                                                            value="{{ $cart->quantity }}" 
                                                            data-cart-id="{{ $cart->id }}" 
                                                            readonly>
                                                        <button type="button" class="qty-btn plus px-2 text-[#4b5966]">+</button>
                                                    </div>
                                                </td>
                                                <td data-label="Remove" class="gi-cart-pro-remove text-[#4b5966] text-[16px] py-[15px] px-[14px] text-center items-center">
                                                    <form action="{{ route('carts.destroy', $cart->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-[22px]"><i class="gicon gi-trash-o"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-gray-500 py-4">Keranjang kamu kosong 😔</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex">
                                    <div class="w-full">
                                        <div class="pt-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mt-6">                    
                                            <!-- Checkout Button -->


                                            <!-- Tombol Bayar Sekarang -->
                                            <button id="pay-button"
                                                class="gi-btn-2 ml-auto transition-all duration-300 ease-in-out rounded-[5px] py-2 px-4 bg-[#5caf90] text-white text-[14px] font-medium hover:bg-[#4b5966]">
                                                Bayar Sekarang
                                            </button>

                                            <!-- Script Midtrans Snap -->
                                            <script src="https://app.sandbox.midtrans.com/snap/snap.js"
                                                data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                const payButton = document.getElementById('pay-button');
                                                const snapToken = @json($snapToken); // Dapatkan snapToken dari controller

                                                if (snapToken) {
                                                    payButton.addEventListener('click', function () {
                                                        console.log(snapToken);  // Tambahkan ini untuk memeriksa nilai snapToken
                                                        snap.pay(snapToken, {
                                                            onSuccess: function (result) {
                                                                console.log('Pembayaran sukses', result);
                                                                fetch("{{ route('payment.update-status') }}", {
                                                                    method: "POST",
                                                                    headers: {
                                                                        "Content-Type": "application/json",
                                                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                                                    },
                                                                    body: JSON.stringify(result)
                                                                })
                                                                .then(response => response.json())
                                                                .then(data => {
                                                                    console.log("Status pembayaran diperbarui:", data);
                                                                    window.location.href = "{{ route('keranjang') }}";
                                                                })
                                                                .catch(error => {
                                                                    console.error("Gagal mengirim status pembayaran ke server:", error);
                                                                });
                                                            },
                                                            onPending: function (result) {
                                                                console.log('Menunggu pembayaran', result);
                                                            },
                                                            onError: function (result) {
                                                                console.error('Terjadi error', result);
                                                                alert('Terjadi kesalahan saat proses pembayaran.');
                                                            }
                                                        });
                                                    });
                                                } else {
                                                    payButton.addEventListener('click', function () {
                                                        alert('Token pembayaran tidak tersedia. Harap coba lagi atau hubungi dukungan.');
                                                    });
                                                }
                                            });
                                            </script>

                                            

                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--cart content End -->
            </div>
        </div>
    </div>
</section>
<!-- Cart section End -->
<!-- New product section -->
<section class="gi-new-product py-[40px] max-[767px]:py-[30px]">
    <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px] relative">
        <div class="flex flex-wrap w-full overflow-hidden mb-[-24px]">
            <div class="gi-new-prod-section w-full">
                <div class="gi-products">
                    <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                        <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">New <span class="text-[#5caf90]">Arrivals</span></h2>
                        <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Browse The Collection of Top Products</p>
                    </div>
                    <div class="gi-new-block " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="new-product-carousel owl-carousel gi-product-slider">
                            <div class="gi-product-content h-full pb-[24px] px-[12px] flex max-[575px]:w-full max-[575px]:m-auto">
                                <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                    <div class="gi-pro-image-outer transition-all duration-[0.3s] delay-[0s] ease z-[11] relative">
                                        <div class="gi-pro-image overflow-hidden">
                                            <a href="#" class="image relative block overflow-hidden pointer-events-none">
                                                <span class="label veg max-[991px]:hidden">
                                                    <span class="dot"></span>
                                                </span>
                                                <img class="main-image max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/6_1.jpg" alt="Product">
                                                <img class="hover-image absolute z-[1] top-[0] left-[0] opacity-[0] transition-all duration-[0.3s] ease delay-[0s]" src="assets/img/product-images/6_2.jpg" alt="Product">
                                            </a>
                                            <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                <span class="sale px-[10px] py-[5px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                            </span>
                                            <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-0">
                                                <a class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Wishlist">
                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group quickview transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] modal-toggle">
                                                    <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="gi-btn-group compare transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]" title="Compare">
                                                    <i class="fi fi-rr-arrows-repeat transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                                <a href="javascript:void(0)" title="Add To Cart" class="gi-btn-group add-to-cart transition-all duration-[0.3s] ease-in-out h-[30px] w-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                        <a href="#">
                                            <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] leading-[1.2] capitalize">Dried Fruits</h6>
                                        </a>
                                        <h5 class="gi-pro-title h-full mb-[10px] text-[16px]">
                                            <a href="#" class="block text-[14px] leading-[22px] font-normal text-[#4b5966] tracking-[0.85px] capitalize font-Poppins hover:text-[#5caf90]">Mixed Nuts Seeds & Berries Pack</a>
                                        </h5>
                                        <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                            <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star fill text-[14px] text-[#f27d0c] mr-[3px] float-left mr-[3px]"></i>
                                                <i class="gicon gi-star text-[14px] text-[#777] mr-[3px] float-left mr-[3px]"></i>
                                            </span>
                                            <span class="gi-price">
                                                <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px]">$45.00</span>
                                                <span class="old-price text-[14px] text-[#777] line-through">$56.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New product section End -->
 
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.qty-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.cart-plus-minus');
            const cartId = input.dataset.cartId;
            const isPlus = this.classList.contains('plus');
            const url = isPlus ? "{{ route('keranjang.increase') }}" : "{{ route('keranjang.decrease') }}";

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ cart_id: cartId })
            })
            .then(res => res.json())
            .then(data => {
                // Setelah berhasil update, langsung refresh halaman
                window.location.reload();
            })
            .catch(err => {
                console.error(err);
                alert("Terjadi kesalahan.");
            });
        });
    });
});
</script>


<script>
function toggleDropdownUser(header) {
    const parent = header.closest('.gi-sb-block-content-user');
    const content = parent.querySelector('.gi-cart-form-user');
    content.classList.toggle('hidden');
}
</script>

@endsection

