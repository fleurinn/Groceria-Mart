@extends('landing.layouts.app')

@section('page_title', 'Produk Detail | Groceria')
@section('content')

<!-- Sart Single Product -->
<section class="gi-single-product py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <div class="gi-pro-rightside gi-common-rightside w-full">
                    @php $product = $product ?? null; @endphp

                    @if ($product)    
                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="flex flex-wrap w-full">
                                <div class="single-pro-img single-pro-img-no-sidebar w-[40%] max-[991px]:w-full relative pr-[12px] max-[991px]:pl-[12px] max-[991px]:w-full max-[991px]:max-w-[500px] max-[991px]:m-auto max-[420px]:px-[0]">
                                    <div class="single-product-scroll p-[15px] sticky top-[30px] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                        <div class="single-product-cover overflow-hidden cursor-zoom-in rounded-[5px]">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive h-full w-full" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            @foreach ($product->variants ?? [] as $variant)
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive h-full w-full" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="single-nav-thumb w-full overflow-hidden">
                                            <div class="single-slide px-[11px] pt-[11px]">
                                                <img class="img-responsive h-full w-full object-cover border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            @foreach ($product->variants ?? [] as $variant)
                                            <div class="single-slide px-[11px] pt-[11px]">
                                                <img class="img-responsive h-full w-full object-cover border-[1px] border-solid border-transparent transition-all duration-[0.3s] ease delay-[0s] cursor-pointer rounded-[5px]" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar w-[60%] max-[991px]:w-full relative pl-[12px] max-[991px]:pl-[0] max-[991px]:mt-[30px] max-[991px]:w-full">
                                    <div class="single-pro-content">
                                        <h5 class="gi-single-title text-[#4b5966] text-[22px] capitalize mb-[20px] block font-oppins font-medium leading-[35px] tracking-[0.02rem] max-[1199px]:text-[20px] max-[1199px]:leading-[33px] max-[767px]:text-[18px] max-[767px]:text-[18px] max-[767px]:leading-[31px]">{{ $product->name }}</h5>
                                        <div class="gi-single-rating-wrap flex mb-[14px] items-center">
                                                <div class="gi-single-rating pr-[15px] leading-[17px]">
                                                    @php
                                                        $averageRating = $product->reviews->avg('rating'); // Menghitung rata-rata rating
                                                        $averageRating = round($averageRating); // Membulatkan nilai agar menjadi integer
                                                    @endphp

                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i class="gicon gi-star inline-block text-[14px] mr-[3px] {{ $i <= $averageRating ? 'text-[#f27d0c]' : 'text-[#b2b2b2]' }}"></i>
                                                    @endfor
                                                </div>
                                                <span class="gi-read-review text-[#999] leading-[17px]">
                                                    |&nbsp;&nbsp;<a href="#" class="text-[#999] text-[14px] leading-[20px] hover:text-[#5caf90]">
                                                        {{ $product->reviews->count() }} Ratings
                                                    </a>
                                                </span>
                                        </div>
                                        <div class="gi-single-price-stoke mb-[15px] pt-[15px] pb-[15px] flex justify-between">
                                            <div class="gi-single-price flex flex-col">
                                                @php
                                                    $originalPrice = $product->discount > 0 ? $product->price / (1 - ($product->discount / 100)) : $product->price;
                                                @endphp

                                                <div class="gi-single-price flex flex-col">
                                                    <div class="final-price mb-[15px] text-[#4b5966] font-semibold text-[22px] leading-[32px] font-Poppins tracking-[0] max-[1199px]:text-[20px]">
                                                        Rp{{ number_format($product->price, 0, ',', '.') }}
                                                        @if($product->discount > 0)
                                                            <span class="price-des ml-[15px] text-[#5caf90] font-medium text-[18px] tracking-[0.02rem]">
                                                                -{{ number_format($product->discount, 0, ',', '.') }}%
                                                            </span>
                                                        @endif
                                                    </div>
                                                    @if($product->discount > 0)
                                                        <div class="mrp text-[#777]">
                                                            M.R.P. : <span class="text-[#999] line-through">Rp{{ number_format($originalPrice, 0, ',', '.') }}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="gi-single-stoke flex flex-col">
                                                <span class="gi-single-ps-title leading-[1] text-[16px] tracking-[0] {{ $product->stock > 0 ? 'text-[#5caf90]' : 'text-[#e9abab]' }}">
                                                {{ $product->stock > 0 ? 'Available' : 'Out Of Stock' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="gi-single-desc mb-[12px] pb-[5px] text-[#777] text-[14px] tracking-[0] break-all leading-[26px] font-Poppins">
                                        {{ Str::limit(strip_tags($product->description), 200) }}</div>
                                        <!-- bagian pilihan antara product atau variantnya -->
                                        <div class="w-full max-w-2xl pb-5 mx-auto flex items-start gap-4">
                                            <!-- Kolom Kiri: Judul -->
                                            <div class="w-1/4">
                                                <h3 class="text-[#4b5966] font-semibold text-[15px] leading-[32px] font-Poppins tracking-[0] max-[1199px]:text-[20px]">
                                                    VARIANT :</h3>
                                            </div>
                                            <!-- Kolom Kanan: Opsi Pilihan -->
                                            <div class="w-3/4 grid grid-cols-2 gap-2" id="model-options">
                                                <button data-model="1" class="model-btn border border-gray-300 px-3 py-2 text-sm rounded-md text-left relative flex items-center gap-2">
                                                    <!-- Gambar di kiri -->
                                                    <img src="{{ asset('storage/products/' . $product->image) }}" alt="Model 1" class="w-10 h-10 object-cover rounded-md" />
                                                    
                                                    <!-- Teks -->
                                                    <span>{{ $product->name }}</span>
                                                    
                                                    <!-- Checkmark -->
                                                    <div class="checkmark hidden absolute bottom-1 right-1 text-green-500 text-xl">✔</div>
                                                </button>
                                                @foreach ($product->variants ?? [] as $variant)
                                                <button data-model="1" class="model-btn border border-gray-300 px-3 py-2 text-sm rounded-md text-left relative flex items-center gap-2">
                                                    <!-- Gambar di kiri -->
                                                    <img src="{{ asset('storage/variants/' . $variant->image) }}" alt="Model 1" class="w-10 h-10 object-cover rounded-md" />
                                                    
                                                    <!-- Teks -->
                                                    <span>{{ $variant->name }}</span>
                                                    
                                                    <!-- Checkmark -->
                                                    <div class="checkmark hidden absolute bottom-1 right-1 text-green-500 text-xl">✔</div>
                                                </button>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- end -->
                                        <div class="gi-single-qty flex flex-wrap w-full m-[-5px]">
                                        <form action="{{ route('carts.store') }}" method="POST" class="flex items-center">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="qty-plus-minus w-[120px] h-[40px] p-[10px] border-[1px] border-solid border-[#eee] overflow-hidden m-[5px] relative flex items-center justify-between rounded-[5px]">
                                                    <input class="qty-input w-full text-center" type="number" name="quantity" value="1" min="1">
                                                </div>

                                                <div class="gi-single-cart">
                                                    <button type="submit"
                                                        class="btn btn-primary gi-btn-1 flex h-[40px] leading-[50px] text-center text-[14px] m-[5px] py-[10px] px-[15px] uppercase justify-center bg-[#4b5966] text-[#fff] transition-all duration-[0.3s] ease-in-out relative rounded-[5px] items-center min-w-[160px] font-semibold tracking-[0.02rem] border-[0] hover:bg-[#5caf90] hover:text-[#fff]">
                                                        Add To Cart
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="gi-single-wishlist m-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single product tab start -->
                    <div class="gi-single-pro-tab mt-[40px]">
                        <div class="gi-single-pro-tab-wrapper flex flex-col">
                            <div class="gi-single-pro-tab-nav w-full m-auto relative block text-center float-left">
                                <ul class="nav-tabs inline-block float-left" id="singleprotab">
                                    <li class="active mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#gi-spt-nav-details" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Detail
                                        </a>
                                    </li>
                                    <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#gi-spt-nav-info" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Spesifikasi
                                        </a>
                                    </li>
                                    <li class="mr-[5px] ml-auto mb-[5px] inline-block float-left">
                                        <a href="#gi-spt-nav-review" class="capitalize leading-[24px] py-[8px] px-[28px] m-[0] text-[15px] font-medium relative transition-all duration-[300ms] linear inline-block cursor-pointer bg-[#fff] text-[#4b5966] border-[1px] border-solid border-[#eee] rounded-[5px] leading-[0] hover:bg-[#5caf90] hover:text-[#fff] hover:border-[#5caf90]">
                                            Ulasan
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content transition-all w-full overflow-hidden bg-[#fff] text-left p-[30px] border-[1px] border-solid border-[#eee] text-[#202020] text-[18px] tracking-[0] leading-[1.6] rounded-[5px]" id="singleTabContent">
                                <div id="gi-spt-nav-details" class="tab-single-pane">
                                    <div class="gi-single-pro-tab-desc">
                                        <p class="mb-[15px] text-[14px] tracking-[0] text-[#777] leading-[28px] font-normal font-Poppins">
                                        {!! Str::limit(strip_tags($product->description, '<b><i><strong><em>'), 80) !!}
                                        </p>
                                    </div>
                                </div>
                                <div id="gi-spt-nav-info" class="tab-single-pane">
                                    <div class="gi-single-pro-tab-moreinfo">
                                        <p class="font-Poppins text-[#777] text-[14px] font-normal leading-[28px] mb-[16px]">
                                        Toko Groceria dengan bangga mempersembahkan produk unggulan yang dirancang khusus untuk memenuhi kebutuhan Anda. Dengan desain yang modern dan fungsional, setiap produk kami tidak hanya memenuhi standar tinggi, tetapi juga mencerminkan kualitas terbaik. Kami berkomitmen untuk memberikan pengalaman berbelanja yang luar biasa, dengan perhatian penuh terhadap detail di setiap elemen.
                                        berikut spesifikasi dari produk.
                                        </p>
                                        <ul class="pl-[24px]">
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Weight</span> {{ $product->weight }}</li>
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Dimensions</span> {{ $product->dimension }}</li>
                                            <li class="list-disc mb-[4px] text-[15px] text-[#777] tracking-[0.02rem] leading-[1.6] max-[575px]:mb-[10px]"><span class="mr-[25px] min-w-[150px] text-[15px] text-[#4b5966] inline-block font-medium tracking-[0.02rem] max-[575px]:w-full">Color</span>{{ $product->color }} </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="gi-spt-nav-review" class="tab-single-pane">
                                    <div class="flex flex-wrap w-full">
                                        <div class="gi-t-review-wrapper mt-[10px]">
                                        @foreach ($product->reviews as $review)
                                            <div class="gi-t-review-item flex mb-[25px] pb-[25px] border-b-[1px] border-solid border-[#eee]">
                                                <div class="gi-t-review-avtar basis-[50px] grow-[0] shrink-[0] mr-[15px]">
                                                    <img src="{{ asset('assets/img/pp/user.png') }}" alt="user" class="max-w-full rounded-[5px]">
                                                </div>
                                                <div class="gi-t-review-content">
                                                    <div class="gi-t-review-top flex flex-col mb-[10px]">
                                                        <div class="gi-t-review-name text-[15px] m-[0] leading-[1.5] block text-[#4b5966]">{{ $review->user->name }}</div>
                                                        <div class="gi-t-review-name text-[15px] m-[0] leading-[1.5] block text-[#4b5966]">{{ $review->created_at->diffForHumans() }}</div>
                                                        <div class="gi-t-review-rating mt-[5px]">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <i class="gicon gi-star inline-block text-[16px] {{ $i <= $review->rating ? 'text-[#f27d0c]' : 'text-[#b2b2b2]' }}"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="gi-t-review-bottom">
                                                        <p class="w-full text-[14px] text-[#777] font-normal">
                                                        {{ $review->comment }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
<div class="gi-ratting-content w-full">
    <h3 class="mb-[10px] text-[20px] font-semibold leading-[1] font-Poppins text-[#4b5966] tracking-[0.01rem]">Tambahkan Ulasan</h3>
    <div class="gi-ratting-form">
        <!-- Form untuk review -->
        <form id="review-form" method="POST">
            @csrf
            <!-- Hidden input untuk product_id -->
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <!-- Rating Stars -->
            <div class="gi-ratting-star flex mt-[5px] mb-[25px] items-center">
                <span class="mr-[18px] text-[16px] text-[#777] tracking-[0.02rem]">Rating Anda:</span>
                <div class="gi-t-review-rating" id="star-rating">
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="gicon gi-star-o inline-block text-[18px] text-[#b2b2b2] float-left mr-[3px] cursor-pointer" data-value="{{ $i }}"></i>
                    @endfor
                </div>
                <input type="hidden" name="rating" id="rating" value="0">
            </div>

            <!-- Nama pengguna (di-disable jika sudah login) -->
            <div class="gi-ratting-input mb-[10px]">
                <input name="your-name" placeholder="Nama*" type="text" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]" value="{{ Auth::user()->name }}" disabled>
            </div>

            <!-- Email pengguna (di-disable jika sudah login) -->
            <div class="gi-ratting-input mb-[10px]">
                <input name="your-email" placeholder="Email*" type="email" class="text-[14px] rounded-[5px] w-full mb-[15px] py-[5px] px-[20px] outline-[0] border-[1px] border-solid border-[#eee] text-[#777] h-[50px]" value="{{ Auth::user()->email }}" disabled>
            </div>

            <!-- Komentar -->
            <div class="gi-ratting-input form-submit">
                <textarea name="comment" placeholder="Masukan komentar anda*" class="bg-transparent border-[1px] border-solid border-[#eee] text-[#4b5966] h-[150px] p-[20px] mb-[15px] w-full outline-[0] text-[14px] rounded-[5px]"></textarea>
                <button type="submit" class="gi-btn-2 transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] text-[14px] font-medium bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]">Kirim</button>
            </div>  
        </form>
    </div>
</div>

                    <!-- product details description area end -->   
                    </div>
                    @endif
                </div>
            </div>
        </div>
</section>
    <!-- End Single Product -->




<script>
    const buttons = document.querySelectorAll('.model-btn');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove selected from all
            buttons.forEach(btn => {
                btn.classList.remove('border-green-500', 'ring-2', 'ring-green-400');
                btn.querySelector('.checkmark').classList.add('hidden');
            });

            // Add to clicked one
            button.classList.add('border-green-500', 'ring-2', 'ring-green-400');
            button.querySelector('.checkmark').classList.remove('hidden');
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Bintang rating interaktif
    const stars = document.querySelectorAll('#star-rating i');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const rating = this.dataset.value;
            ratingInput.value = rating;

            // Update tampilan bintang
            stars.forEach(s => {
                s.classList.remove('gi-star', 'text-[#f27d0c]');
                s.classList.add('gi-star-o', 'text-[#b2b2b2]');
            });

            for (let i = 0; i < rating; i++) {
                stars[i].classList.remove('gi-star-o', 'text-[#b2b2b2]');
                stars[i].classList.add('gi-star', 'text-[#f27d0c]');
            }
        });
    });

    // Kirim review via AJAX
    const form = document.getElementById('review-form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("{{ route('review.store') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message || "Review berhasil dikirim!");
            form.reset();

            // Reset bintang
            stars.forEach(s => {
                s.classList.remove('gi-star', 'text-[#f27d0c]');
                s.classList.add('gi-star-o', 'text-[#b2b2b2]');
            });

            ratingInput.value = 0;
        })
        .catch(error => {
            console.error("Gagal:", error);
            alert("Terjadi kesalahan saat mengirim review.");
        });
    });
});
</script>

@endsection