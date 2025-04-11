
@extends('landing.layouts.app')

@section('page_title', 'Groceria | Belanja Online dengan Ceria!')

@section('content')
    <!-- Slider Section -->
    @include('landing.parts.hero')

    <!-- Kategori Produk Section -->
    @include('landing.parts.category-product')

    <!-- Produk Section -->
    @include('landing.parts.product')
    
    <!-- Hero 3 Section -->
    @include('landing.parts.hero3')
    
    <!-- Service Section -->
    @include('landing.parts.service')

@endsection

