@extends('admin.layouts.courier-layouts')

@section('page_title', 'Beranda | Groceria')
@section('content')

<div class="content">
        <div class="pb-5">
          <div class="row g-4">
            <div class="col-12 col-xxl-6">
              <div class="mb-8 pt-5">
                <h2 class="mb-2">Beranda kurir</h2>
                <h5 class="text-body-tertiary pt-5 fw-semibold">Hi {{ $user->name }} 👋🏻👋🏻</h5>
              </div>
              <hr class="bg-body-secondary mb-6 mt-4" />
            </div>
          </div>
        </div>  

@endsection
