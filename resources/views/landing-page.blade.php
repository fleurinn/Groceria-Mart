
@extends('landing.layouts.app')

@section('page_title', 'Groceria | Belanja Online dengan Ceria!')

@section('content')
    <!-- Slider Section -->
    @include('landing.parts.hero')

    <!-- Kategori Produk Section -->
    @include('landing.parts.category-product')

    <!-- Flash Sale Section -->
    @include('landing.parts.flash-sale')
    
    <!-- Hero 2 Section -->
    @include('landing.parts.hero2')

    <!-- Produk Section -->
    @include('landing.parts.product')
    
    <!-- Hero 3 Section -->
    @include('landing.parts.hero3')
    
    <!-- Service Section -->
    @include('landing.parts.service')

@endsection

