@extends('landing.layouts.app')

@section('page_title', 'Groceria | Belanja Online dengan Ceria!')

@section('content')
    <!-- Slider Section -->
    <section class="slider">
        @include('landing.pages.slider.slider-index')
    </section>

    <!-- Kategori Produk Section -->
    <section class="category-product">
        @include('landing.pages.produk.category-product.categoryproduct-index')
    </section>

    <!-- Produk Section -->
    <section class="product">
        @include('landing.pages.produk.product.product-index')
    </section>
@endsection
