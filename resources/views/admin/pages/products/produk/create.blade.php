@extends('admin.layouts.admin-layouts')

@section('page_title', 'Product Create | Groceria')
@section('content')

<div class="content">

{{-- ✅ Menampilkan pesan error jika ada --}}
@include('admin.components.alert')

  <form class="mb-9" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-3 flex-between-end mb-5">
      <div class="col-auto">
        <h2 class="mb-2">Add a product</h2>
        <h5 class="text-body-tertiary fw-semibold">Orders placed across your store</h5>
      </div>
      <div class="col-auto">
        <a href="{{ route('products.index') }}" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0">Cancel</a>
        <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-12 col-xl-8">
      <div class="mb-6">
        <h4 class="mb-3">Product Title</h4>
        <input class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" type="text" name="name"  placeholder="Tulis nama produk di sini..." />
          @error('name')
             <span class="invalid-feedback" role="alert"  style="color: red;">
                 {{ $message }}
             </span>
          @enderror
      </div>  

        <div class="mb-6">
          <h4 class="mb-3">Product Description</h4>
          <textarea class="tinymce" name="description" data-tinymce='{"height":"15rem","placeholder":"Tulis deskripsi di sini...","license_key":"gpl"}'></textarea>
        </div>

        <div class="mb-6">
        <h4 class="mb-3">Display images</h4>
        <input type="file" name="image" id="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror">
          @error('image')
              <span class="invalid-feedback" role="alert"  style="color: red;">
                  {{ $message }}
              </span>
          @enderror
        </div>
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
              <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false">
                <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span>
                <span class="d-none d-sm-inline">Additional</span>
              </a>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="tab-content py-3 ps-sm-4 h-100">
              <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                <h4 class="mb-3 d-sm-none">Pricing</h4>
                <div class="row g-3">
                  <div class="col-12 col-lg-6">
                    <h5 class="mb-2 text-body-highlight">Regular price</h5>
                    <input type="number" placeholder="Tulis tanpa menggunakan koma/titik" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" placeholder="$$$">
                      @error('price')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                      @enderror
                  </div>
                  <div class="col-12 col-lg-6">
                    <h5 class="mb-2 text-body-highlight">Discount price</h5>
                    <input type="number" step="0.01" class="form-control" name="discount" placeholder="diskon dalam bentuk '%'">
                  </div>
                </div>
              </div>
              <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                <div class="d-flex flex-column h-100">
                  <h5 class="mb-3 text-body-highlight">Add to Stock</h5>
                  <div class="row g-3 flex-1 mb-4">
                    <div class="col-sm">
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" placeholder="Juliskan jumlah stock produk"name="stock" id="stock" value="{{ old('stock') }}">
                      @error('stock')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                      @enderror
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
              <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                <div class="mb-3">
                    <h5 class="mb-2 text-body-highlight">Color</h5>
                    <input type="text" class="form-control" placeholder="Black, Pink, Red, White" name="color">
                    </div>
                <div class="mb-3">
                    <h5 class="mb-2 text-body-highlight">Dimension</h5>
                    <input type="text" class="form-control" placeholder="35 × 30 × 7 cm" name="dimension">
                    </div>
                <div class="mb-1">
                    <h5 class="mb-2 text-body-highlight">weight</h5>
                    <input type="text" class="form-control" placeholder="500 g"name="weight">
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-xl-4">
        <div class="row g-2">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-body">
                <h4 class="card-title mb-4">Organize</h4>
                <div class="row gx-3">
                  <div class="col-12 mb-4">
                    <div class="d-flex flex-wrap mb-2">
                      <h5 class="mb-0 text-body-highlight me-2">Category</h5>
                    </div>
                    <select class="form-select @error('category_product_id') is-invalid @enderror" id="category_product_id" name="category_product_id">
                      <option selected disabled>Pilih Kategori</option>
                      @foreach($categories as $category)
                        @if($category->status !== 'draft')
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('category_product_id')
                              <span class="invalid-feedback" role="alert"  style="color: red;">
                                  {{ $message }}
                              </span>
                      @enderror
                  </div>
                  <div class="col-12 mb-4">
                    <div class="d-flex flex-wrap mb-2">
                      <h5 class="mb-0 text-body-highlight me-2">Status</h5>
                    </div>
                    <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                      <option selected disabled>Pilih Status</option>
                      <option value="draft">Draft</option>
                      <option value="publish">Published</option>
                    </select>
                    @error('status')
                            <span class="invalid-feedback" role="alert"  style="color: red;">
                                {{ $message }}
                            </span>
                    @enderror
                  </div>
                  <div class="col-12 mb-4">
                    <h5 class="mb-2">Tags</h5>
                    <input type="text" class="form-control" name="tags" id="tags-input" placeholder="Pisahkan dengan koma ( , )" oninput="updateTags()">
                    <div id="tags-display" class="mt-2"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Varian</h4>
              <div class="swiper mySwiper">
                <div class="swiper-wrapper" id="variant-container"></div>
              </div>
              
              <button type="button" id="add-variant" class="btn btn-phoenix-primary w-100">Tambah Varian</button>
              <div id="pagination" class="mt-2"></div>
            </div>
          </div>
        </div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  let variantCount = 0;
  const maxVariants = 10;

  const swiper = new Swiper('.mySwiper', {
    navigation: {
      nextEl: '#next-variant',
      prevEl: '#prev-variant'
    },
    spaceBetween: 10,
    slidesPerView: 1,
    allowTouchMove: false,
    observer: true,
    observeParents: true
  });

  document.getElementById('add-variant').addEventListener('click', () => {
    if (variantCount < maxVariants) {
      const index = variantCount;
      variantCount++;

      const variantHTML = `
        <div class="swiper-slide" data-index="${index}">
          <div class="variant-item mb-3">
            <div class="d-flex justify-content-between mb-3 align-items-center">
              <button type="button" class="nav-variant-prev me-2 border-0 bg-transparent fs-8">
                &lt;
              </button>
              <h5 class="mb-0 flex-grow-1 text-center">Option ${variantCount}</h5>
              <div class="d-flex align-items-center">
                <button type="button" class="nav-variant-next me-2 border-0 bg-transparent fs-8">
                  &gt;
                </button>
                <button type="button" class="remove-variant border-0 bg-transparent fs-8" style="cursor:pointer; color: red;">×</button>
              </div>
            </div>
            <input type="text" name="variants[${index}][name]" class="form-control mb-2" placeholder="Nama varian">
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" name="variants[${index}][image]">
            </div>
            <textarea name="variants[${index}][description]" class="form-control mb-2" placeholder="Deskripsi"></textarea>
            <input type="number" step="0.01" name="variants[${index}][price]" class="form-control mb-2" placeholder="Harga">
            <input type="number" step="0" name="variants[${index}][discount]" class="form-control mb-2" placeholder="Diskon [%]">
            <input type="number" name="variants[${index}][stock]" class="form-control mb-2" placeholder="Stok">
          </div>
        </div>`;

      const container = document.getElementById('variant-container');
      container.insertAdjacentHTML('beforeend', variantHTML);
      swiper.update();
      swiper.slideTo(variantCount - 1);
      updatePagination();
    }
  });

  // Remove variant
  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('remove-variant')) {
      const slide = e.target.closest('.swiper-slide');
      if (slide) {
        slide.remove();
        swiper.update();
        variantCount--;
        updatePagination();
      }
    }
  });

  // Navigasi antar variant slide dari tombol dalam varian
  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('nav-variant-prev')) {
      swiper.slidePrev();
    }

    if (e.target.classList.contains('nav-variant-next')) {
      swiper.slideNext();
    }
  });

  function updatePagination() {
    const pagination = document.getElementById('pagination');
    if (pagination) {
      pagination.textContent = `Variants: ${variantCount}/${maxVariants}`;
    }
  }

  function updateTags() {
    const tags = document.getElementById('tags-input').value.split(',').map(t => t.trim()).filter(t => t);
    document.getElementById('tags-display').innerHTML = tags.map(t =>
      `<span class="badge bg-primary me-1">${t}</span>`
    ).join('');
  }
</script>



<script>
        document.addEventListener('DOMContentLoaded', function () {
            const alerts = document.querySelectorAll('.error-message');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 5000); // 5 detik
            });
        });
</script>
@endsection
