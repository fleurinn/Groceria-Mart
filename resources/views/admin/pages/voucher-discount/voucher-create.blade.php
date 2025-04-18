@extends('admin.layouts.admin-layouts')

@section('page_title', 'Voucher Create | Groceria')
@section('content')

<div class="content">
    <form method="POST" action="{{ route('discount-vouchers.store') }}" enctype="multipart/form-data" class="mb-9">
        @csrf
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Add a product</h2>
              <h5 class="text-body-tertiary fw-semibold">Orders placed across your store</h5>
            </div>
            <div class="col-auto">
            <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button">Cancel</button>
            <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button></div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Judul Voucher</h4>
              <input class="form-control mb-5" name="title" type="text" placeholder="Write title here..." />
              <div class="mb-6">
                <h4 class="mb-3">Deskripsi Voucher</h4>
                <textarea class="tinymce" name="description" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
              </div>
              <h4 class="mb-3">Gambar Cover</h4>
              <input type="file" name="image" class="form-control mb-5" />
              <h4 class="mb-3">Inventory</h4>
                <div class="row g-0 border-top border-bottom">
                <div class="col-sm-4">
                    <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span>
                        <span class="d-none d-sm-inline">Pricing</span>
                    </a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span>
                        <span class="d-none d-sm-inline">Restock</span>
                    </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                        <h5 class="mb-3 text-body-highlight">Besaran Diskon (%)</h5>
                        <div class="row g-3 flex-1 mb-4">
                        <div class="col-sm">
                            <input class="form-control" name="discount_value" type="number" step="0.01" min="0" value="{{ old('discount_value') }}" placeholder="Contoh: 10" required>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                        <div class="d-flex flex-column h-100">
                        <div class="row g-3 flex-1 mb-4">            
                            <div class="col-12 col-lg-6">
                                <h5 class="mb-3 text-body-highlight">Tanggal Mulai</h5>
                                <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" required>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h5 class="mb-3 text-body-highlight">Tanggal Berakhir</h5>
                                <input type="date" class="form-control" name="end_date" value="{{ old('end_date') }}" required>
                            </div>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th style="width: 200px;"></th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organize</h4>
                      <div class="row gx-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Status</h5>
                            </div>
                            <select class="form-select" name="status" id="status" required>
                            <option selected disabled>Select Status</option>
                            <option value="draft">Draft</option>
                            <option value="publish">Published</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12" >
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Tipe Diskon</h5><a class="fw-bold fs-9" href="#!">Add new vendor</a>
                            </div>
                            <select name="discount_type" id="voucherType" class="form-select mb-3" required>
                                <option disabled selected value="">Pilih jenis</option>
                                <option value="global" {{ old('discount_type') == 'global' ? 'selected' : '' }}>Global</option>
                                <option value="spesific_product" {{ old('discount_type') == 'spesific_product' ? 'selected' : '' }}>Specific Product</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12" id="categorySelect" style="display: none;">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Kategori Produk</h5><a class="fw-bold fs-9" href="#!">Add new vendor</a>
                            </div>
                            <select name="category_product_id" class="form-select mb-3">
                                <option disabled selected value="">Pilih Kategori</option>
                                @foreach ($categoryProduct as $category)
                                  @if($category->status !== 'draft')
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endif    
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <h5 class="mb-2 text-body-highlight">Kode Diskon </h5>
                            <input type="text" id="discount_code" name="discount_code" class="form-control mb-xl-3" required>
                            <button type="button" onclick="generateDiscountCode()" style="padding: 8px 16px; background-color: #e6f0ff; border: 1px solid #80bdff; color: #004085; border-radius: 4px; cursor: pointer; font-size: 14px;">
                                Generate</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const voucherType = document.getElementById('voucherType');
    const categorySelect = document.getElementById('categorySelect');

    function toggleCategory() {
        if (voucherType.value === 'spesific_product') {
            categorySelect.style.display = 'block';
        } else {
            categorySelect.style.display = 'none';
        }
    }

    voucherType.addEventListener('change', toggleCategory);

    // Tunggu sedikit agar value dari Blade bisa terbaca dengan benar
    setTimeout(toggleCategory, 10);
});

function generateDiscountCode() {
    var randomString = Math.random().toString(36).substring(2, 10).toUpperCase();
    document.getElementById('discount_code').value = 'DISCOUNT-' +
        randomString;
}

</script>
@endsection
