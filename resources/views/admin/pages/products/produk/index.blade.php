@extends('admin.layouts.admin-layouts')

@section('page_title', 'Products | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
  <div class="mb-9">
    <div class="row g-3 mb-4">
      <div class="col-auto">
        <h2 class="mb-0">Products</h2>
      </div>
    </div>
    <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div style="display: flex; align-items: center; gap: 10px;">
            <div class="search-box">
                <form class="position-relative" method="GET" action="{{ route('products.index') }}">
                    <input 
                        class="form-control search-input search" 
                        type="search" 
                        name="search" 
                        placeholder="Search products" 
                        aria-label="Search" 
                        value="{{ request('search') }}" 
                    />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
            <button type="button"
                    style="font-family: 'Arial', sans-serif; font-size: 14px; padding: 5px 10px; color: #333; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 6px;"
                    onclick="window.location='{{ route('products.index') }}'">
                <i class="fas fa-arrows-rotate" style="margin-right: 5px;"></i>
            </button>
            </div>
            
            <div class="flex flex-wrap items-center gap-1">
                <button class="btn btn-success rounded-1">
                    <span class="fas fa-arrow-right-from-bracket me-2"></span>Publish
                </button>
                <button class="btn btn-warning rounded-1">
                    <span class="fas fa-arrow-right-to-bracket me-2"></span>Draft
                </button>
                <button class="btn btn-danger rounded-1">
                    <span class="fas fa-trash me-2"></span>Delete
                </button>
                <button class="btn btn-primary rounded-1" onclick="window.location='{{ route('products.create') }}'">
                    <span class="fas fa-plus me-2"></span>Add
                </button>
                <button class="btn btn-link text-body px-2" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fas fa-ellipsis-v"></span> 
                </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</a></li>
                  </ul>
            </div>
        </div>
    </div>

      <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
        <div class="table-responsive scrollbar mx-n1 px-1">
          <table class="table fs-9 mb-0">
          <thead>
            <tr>
              <th class="white-space-nowrap fs-9 align-middle ps-0 text-start" style="max-width:20px; width:18px;">
                <div class="form-check mb-0 fs-8">
                  <input class="form-check-input" id="selectAll" type="checkbox" data-bulk-select='{"body":"products-table-body"}' />
                </div>
              </th>
              <th class="align-middle ps-2 text-center" style="width:70px;">IMAGE</th>
              <th class="align-middle ps-2 text-center" style="width:350px;">PRODUCT NAME</th>
              <th class="align-middle ps-2 text-center" style="width:150px;">PRICE</th>
              <th class="align-middle ps-2 text-center" style="width:150px;">CATEGORY</th>
              <th class="align-middle ps-2 text-center" style="width:150px;">STATUS</th>
              <th class="align-middle ps-2 text-center" style="width:250px;">TAGS</th>
              <th class="align-middle ps-2 text-center" style="width:50px;">ACTION</th>
            </tr>
          </thead>
            <tbody class="list" id="products-table-body">
              @foreach ($products as $product)
              <tr class="position-static">
                <td class="fs-9 align-middle">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" value="{{ $product->id }}"></div>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap py-0">
                  <a class="d-block border border-translucent rounded-2" href="../landing/product-details.html">
                    <img src="../../../assets/img/products/1.png" alt="" width="53" /></a>
                </td>
                <td class="product align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0" href="../landing/product-details.html">
                    {{ Str::limit($product->name, 80) }}
                  </a>
                </td>
                <td class="price align-middle text-center white-space-nowrap fw-bold text-body-tertiary ps-4">
                    ${{ number_format($product->price, 2) }}
                </td>
                <td class="category align-middle text-center white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                    {{ $product->category->name }}
                </td>
                <td class="align-middle text-center">
                    <span class="btn btn-outline-{{ $product->status == 'published' ? 'success' : ($product->status == 'draft' ? 'warning' : 'success') }} rounded-1">
                        {{ ucfirst($product->status) }}
                    </span>
                </td>
                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                  <a class="text-decoration-none"><span class="badge badge-tag me-2 mb-2">{{ $product->tags }}</span></a>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                  <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                      <a class="dropdown-item" >View</a>
                      <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">Edit</a>
                      <div class="dropdown-divider"></div>
                      <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger">Remove</button>
                      </form>                    
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
    <div class="col-auto d-flex">
        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body">
            Menampilkan {{ $products->firstItem() }} - {{ $products->lastItem() }} dari {{ $products->total() }} data
        </p>
    </div>

    <div class="col-auto d-flex">
        <!-- Tombol Prev -->
        <button class="page-link {{ $products->onFirstPage() ? 'disabled' : '' }}" data-list-pagination="prev"
            onclick="window.location='{{ $products->previousPageUrl() }}'">
            <span class="fas fa-chevron-left"></span>
        </button>

        <!-- Pagination Number -->
        <ul class="mb-0 pagination">
            @for ($i = 1; $i <= $products->lastPage(); $i++)
                <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>

        <!-- Tombol Next -->
        <button class="page-link pe-0 {{ $products->hasMorePages() ? '' : 'disabled' }}" data-list-pagination="next"
            onclick="window.location='{{ $products->nextPageUrl() }}'">
            <span class="fas fa-chevron-right"></span>
        </button>
    </div>
</div>

      </div>
    </div>
  </div>

<script>
    // Menghandle checkbox

       document.getElementById('selectAll').onclick = function() {
           const checkboxes = document.querySelectorAll('.form-check-input');
           checkboxes.forEach((checkbox) => {
               checkbox.checked = this.checked;
           });
       };

       function getSelectedServices() {
           return Array.from(document.querySelectorAll('.form-check-input:checked')).map(cb => cb.value);
       }

       function performAction(url, ids) {
           // Kirim request AJAX ke server
           fetch(url, {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json',
                   'X-CSRF-TOKEN': '{{ csrf_token() }}'
               },
               body: JSON.stringify({ ids: ids })
           }).then(response => {
               if (response.ok) {
                   location.reload(); // Refresh klien setelah berhasil
               } else {
                   alert('Terjadi kesalahan. Silakan coba lagi.');
               }
           });
       }
</script>

@endsection
