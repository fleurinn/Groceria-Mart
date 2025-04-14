@extends('landing.layouts.app')

@section('page_title', 'Produk | Groceria')
@section('content')

<!-- Shop section -->
<section class="gi-shop py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <div class="gi-shop-rightside w-full">
                    <!-- Shop Top Start -->
                    <div class="gi-pro-list-top flex items-center justify-between text-[14px] border-[1px] border-solid border-[#eee] rounded-[5px] mb-[30px]">
                        <div class="min-[768px]:w-[50%] w-full gi-grid-list">
                            <div class="gi-gl-btn ml-[5px] flex items-center flex-row">
                                <button type="button" class="grid-btn filter-toggle-icon h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row">
                                    <i class="fi fi-rr-filter text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                                <button type="button" class="grid-btn btn-grid-50 h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row active">
                                    <i class="fi fi-rr-apps text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                                <button type="button" class="grid-btn btn-list-50 h-[40px] w-[40px] border-[0] rounded-[0] flex items-center justify-center flex-row">
                                    <i class="fi fi-rr-list text-[20px] text-[#4b5966] leading-[0]"></i>
                                </button>
                            </div>
                        </div>
                        @php
                        $sortOptions = [
                            '' => 'Sort by',
                            'name_asc' => 'Name, A to Z',
                            'name_desc' => 'Name, Z to A',
                            'price_low_high' => 'Price, low to high',
                            'price_high_low' => 'Price, high to low',
                        ];
                        @endphp
                        <form method="GET" class="min-[768px]:w-[50%] w-full gi-sort-select flex justify-end items-center">
                        @foreach(request()->except('sort') as $key => $value)
                            @if(is_array($value))
                                @foreach($value as $item)
                                    <input type="hidden" name="{{ $key }}[]" value="{{ $item }}">
                                @endforeach
                            @else
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endif
                        @endforeach
                        <div class="gi-select-inner relative flex w-[180px] h-[50px] leading-[1.5] bg-[#fff] overflow-hidden rounded-[0] border-l-[1px] border-solid border-[#eee]">
                            <select name="sort" id="gi-select" class="appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] cursor-pointer" onchange="this.form.submit()">
                                @foreach ($sortOptions as $value => $label)
                                    <option value="{{ $value }}" {{ request('sort') == $value ? 'selected' : '' }} {{ $loop->first ? 'disabled' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Select Bar Start -->
                    @if(request('tag'))
                    <div class="gi-select-bar mt-[-5px] mx-[-5px] mb-[25px] flex flex-wrap justify-end">
                        <span class="gi-select-btn m-[5px] px-[10px] border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] flex items-center capitalize">
                            {{ request('tag') }}
                            <a class="gi-select-cancel ml-[15px] text-[#ff8585] text-[18px] transition-all duration-[0.3s] ease-in-out"
                            href="{{ request()->url() }}">×</a>
                        </span>
                        <span class="gi-select-btn gi-select-btn-clear m-[5px] p-[0] border-[1px] border-solid border-[#eee] rounded-[5px] text-[#777] text-[14px] flex items-center capitalize">
                            <a class="gi-select-clear transition-all duration-[0.3s] ease-in-out h-full m-[0] py-[3px] px-[10px] text-[14px] flex items-center bg-[#4b5966] text-[#fff] rounded-[5px] hover:bg-[#5caf90] hover:text-[#fff]"
                            href="{{ request()->url() }}">Clear All</a>
                        </span>
                    </div>
                    @endif
                    <!-- Select Bar End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                            <div class="shop-pro-inner mx-[-12px]">
                                <div class="flex flex-wrap w-full">
                        @foreach ($products as $product)    
                                    <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] max-[420px]:w-full px-[12px] gi-product-box max-[575px]:w-[50%] max-[575px]:mx-auto pro-gl-content">
                                        <div class="gi-product-content pb-[24px] h-full flex">
                                            <div class="gi-product-inner transition-all duration-[0.3s] ease-in-out cursor-pointer flex flex-col overflow-hidden border-[1px] border-solid border-[#eee] rounded-[5px]">
                                                <div class="gi-pro-image-outer transition-all duration-[0.3s] ease delay-[0s] z-[11] relative">
                                                    <div class="gi-pro-image overflow-hidden">
                                                        <a href="#" class="image relative block overflow-hidden pointer-events-none transition-all duration-[0.3s] ease-in-out">
                                                            <span class="label veg max-[991px]:hidden">
                                                                <span class="dot"></span>
                                                            </span>
                                                            <img class="main-image max-w-full z-[1] transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                                                            @foreach ($product->variants as $variant)
                                                            <img class="hover-image absolute z-[2] top-[0] left-[0] opacity-[0] max-w-full transition-all duration-[0.3s] ease delay-[0s]" src="{{ asset('storage/variants/' . $variant->image) }}" alt="{{ $variant->name }}">
                                                            @endforeach
                                                        </a>
                                                        <span class="flags flex flex-col p-[0] uppercase absolute top-[10px] right-[10px] z-[2]">
                                                            <span class="sale py-[5px] px-[10px] text-[11px] font-medium leading-[12px] text-left uppercase flex items-center bg-[#ff7070] text-[#fff] tracking-[0.5px] relative rounded-[5px]">Sale</span>
                                                        </span>
                                                        <div class="gi-pro-actions transition-all duration-[0.3s] ease-in-out absolute z-[9] left-[0] right-[0] bottom-[-10px] max-[991px]:opacity-[1] max-[991px]:bottom-[10px] flex flex-row items-center justify-center my-[0] mx-auto opacity-[0]">
                                                            <form action="{{ route('wishlist.store') }}" method="POST" class="inline-block">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                <button type="submit" title="Add To Wishlist" class="gi-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]">
                                                                    <i class="fi-rr-heart transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                                </button>
                                                            </form>
                                                            <a href="{{ route('produk.detail', $product ->id) }}" class="gi-btn-group transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]">
                                                                <i class="fi-rr-eye transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                            </a>
                                                            <form action="{{ route('carts.store') }}" method="POST" class="inline-block">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button type="submit" title="Add To Cart" class="gi-btn-group transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] hover:bg-[#5caf90]">
                                                                    <i class="fi-rr-shopping-basket transition-all duration-[0.3s] ease-in-out text-[#777] leading-[10px]"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gi-pro-content h-full p-[20px] relative z-[10] flex flex-col text-left border-t-[1px] border-solid border-[#eee]">
                                                    <a href="#">
                                                        <h6 class="gi-pro-stitle mb-[10px] font-normal text-[#999] text-[13px] capitalize font-manrope tracking-[0.01rem] leading-[1.2]">{{ $product->category->name ?? '-' }}</h6>
                                                    </a>
                                                    <h5 class="gi-pro-title h-full mb-[10px] text-[16px] tracking-[0.01rem] font-normal leading-[1.2]">
                                                        <a href="#" class="text-[#4b5966] block text-[14px] leading-[22px] font-normal tracking-[0.85px] capitalize font-Poppins">{{ $product->name }}</a>
                                                    </h5>
                                                    <p class="gi-info text-[15px] leading-[28px] font-light tracking-[0.02rem] mb-[16px] hidden">{{ $product->description }}</p>
                                                    <div class="gi-pro-rat-price mt-[5px] mb-[0] flex flex-col">
                                                        <span class="gi-pro-rating mb-[10px] opacity-[0.7] relative">
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star fill inline-block text-[#f27d0c] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star inline-block text-[#777] float-left text-[14px] mr-[3px]"></i>
                                                            <i class="gicon gi-star inline-block text-[#777] float-left text-[14px] mr-[3px]"></i>
                                                        </span>
                                                        <span class="gi-price text-[18px] flex items-center justify-left text-[#4b5966] tracking-[0.4px]">
                                                            <span class="new-price text-[#4b5966] font-bold text-[14px] mr-[7px] tracking-[0.02rem]">Rp{{ $product->price }}</span>
                                                            <span class="old-price text-[14px] text-[#777] tracking-[0.02rem] line-through">Rp{{ $product->discount }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        @endforeach 
                                </div>
                            </div>
                        <!-- Pagination Start -->
                        @if ($products->hasPages())
                        <div class="gi-pro-pagination pt-[15px] flex justify-between items-center border-t-[1px] border-solid border-[#eee] max-[575px]:flex-col">
                            <span class="text-[14px] text-[#777] max-[575px]:mb-[10px]">
                                Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} of {{ $products->total() }} item(s)
                            </span>

                            <ul class="gi-pro-pagination-inner">
                                {{-- Previous --}}
                                @if ($products->onFirstPage())
                                    <li class="inline-block float-left mr-[5px]"><span class="w-[32px] h-[32px] flex items-center justify-center text-[#ccc]">Prev</span></li>
                                @else
                                    <li class="inline-block float-left mr-[5px]">
                                        <a href="{{ $products->previousPageUrl() }}" class="transition-all duration-[0.3s] ease-in-out w-auto px-[13px] text-[#fff] bg-[#5caf90] leading-[30px] h-[32px] flex items-center justify-center rounded-[5px]">Prev</a>
                                    </li>
                                @endif

                                {{-- Pages --}}
                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                    @if ($page == $products->currentPage())
                                        <li class="inline-block float-left mr-[5px]">
                                            <span class="w-[32px] h-[32px] bg-[#eee] text-[#777] flex justify-center items-center rounded-[5px] font-bold">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li class="inline-block float-left mr-[5px]">
                                            <a href="{{ $url }}" class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#eee] flex justify-center items-center rounded-[5px] hover:text-[#fff] hover:bg-[#5caf90]">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                {{-- Next --}}
                                @if ($products->hasMorePages())
                                    <li class="inline-block float-left">
                                        <a href="{{ $products->nextPageUrl() }}" class="next w-auto px-[13px] text-[#fff] bg-[#5caf90] leading-[30px] h-[32px] flex items-center justify-center rounded-[5px]">Next <i class="gicon gi-angle-right ml-[10px] transition-all duration-[0.3s] ease-in-out text-[#fff]"></i></a>
                                    </li>
                                @else
                                    <li class="inline-block float-left"><span class="w-[32px] h-[32px] flex items-center justify-center text-[#ccc]">Next</span></li>
                                @endif
                            </ul>
                        </div>
                        @endif
                        <!-- Pagination End -->
                    </div>
                    <!--Shop content End -->

                </div>
                <!-- Sidebar Area Start -->
                <div class="filter-sidebar-overlay w-full h-screen bg-[#00000080] fixed top-[0] left-[0] z-[16] hidden"></div>
                    <div class="gi-shop-sidebar gi-filter-sidebar transition-all duration-[0.3s] ease-in-out w-[300px] h-screen p-[0] fixed top-[0] left-[0] z-[16] bg-[#fff] translate-x-[-100%] overflow-auto">
                        <div class="sidebar-filter-title p-[15px] flex flex-row justify-between bg-[#f8f8fb]">
                            <h5 class="m-[0] text-[20px] font-bold font-manrope tracking-[0.01rem] leading-[1.2]">Filters</h5>
                            <a class="filter-close ml-[15px] text-[#ff8585] text-[24px] leading-[1]" href="javascript:void(0)">×</a>
                        </div>
                        <div id="shop_sidebar">
                            <div class="gi-sidebar-wrap p-[15px] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                <!-- Sidebar Category Block -->
                                <div class="gi-sidebar-block mb-[15px]">
                                    <div class="gi-sb-title border-b-[1px] border-solid border-[#eee] pb-[15px]">
                                        <h3 class="gi-sidebar-title font-semibold tracking-[0] relative text-[#4b5966] w-full flex justify-between font-Poppins text-[17px] leading-[1.2]">Category</h3>
                                    </div>

                                    <div class="gi-sb-block-content mt-[15px]">
                                        <form id="category-filter-form" method="GET" action="{{ url()->current() }}">
                                            @foreach($categoryproducts as $categoryproduct)
                                                <ul>
                                                    <li>
                                                        <div class="gi-sidebar-block-item py-[15px] relative flex flex-row">
                                                            <input 
                                                                type="checkbox" 
                                                                name="category[]" 
                                                                value="{{ $categoryproduct->id }}"
                                                                {{ in_array($categoryproduct->id, request()->get('category', [])) ? 'checked' : '' }}
                                                                onchange="document.getElementById('category-filter-form').submit();"
                                                                class="w-full h-[calc(100% - 5px)] absolute opacity-[0] cursor-pointer z-[9] top-[50%] translate-y-[-50%]"
                                                            >
                                                            <a href="javascript:void(0)" class="w-full text-[#777] text-[14px] mt-[0] leading-[20px] font-normal capitalize cursor-pointer flex justify-between pl-[30px]">
                                                                <span class="flex">
                                                                    <i class="fi-rr-cupcake w-[20px] h-[20px] mr-[7px] text-[17px]"></i>{{ $categoryproduct->name }}
                                                                </span>
                                                            </a>
                                                            <span class="checked absolute top-[50%] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] transition-all duration-[300ms] linear translate-y-[-50%] rounded-[5px] overflow-hidden"></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        </form>
                                    </div>
                                </div>
                               <!-- Sidebar tags -->
                                <div class="gi-sidebar-block">
                                    <div class="gi-sb-title border-b-[1px] border-solid border-[#eee] pb-[15px]">
                                        <h3 class="gi-sidebar-title font-semibold tracking-[0] relative text-[#4b5966] w-full flex justify-between font-Poppins text-[17px] leading-[1.2]">Tags</h3>
                                    </div>
                                    <div class="gi-tag-block gi-sb-block-content mt-[15px]">

                                        @php
                                            // Ambil semua tag dari semua produk
                                            $allTags = [];

                                            foreach ($products as $product) {
                                                $tagsArray = explode(',', $product->tags);
                                                foreach ($tagsArray as $tag) {
                                                    $cleanTag = trim($tag);
                                                    if (!empty($cleanTag)) {
                                                        $allTags[] = $cleanTag;
                                                    }
                                                }
                                            }

                                            // Hapus duplikat dan acak
                                            $uniqueTags = array_unique($allTags);
                                            shuffle($uniqueTags);
                                            $randomTags = array_slice($uniqueTags, 0, 10);
                                        @endphp

                                        @foreach ($randomTags as $tag)
                                            <a href="{{ request()->fullUrlWithQuery(['tag' => $tag]) }}"
                                                class="gi-btn-2 transition-all duration-[0.3s] ease-in-out my-[2px] py-[3px] px-[8px] inline-flex flex-row flex-wrap capitalize font-light text-[13px] tracking-[0.02rem] bg-[#5caf90] text-[#fff] text-center rounded-[5px] hover:bg-[#4b5966] hover:text-[#fff]">
                                                {{ $tag }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Shop section End -->

@endsection
