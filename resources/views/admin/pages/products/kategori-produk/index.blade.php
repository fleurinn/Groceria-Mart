@php
    if (auth()->user()->role_id == 1) {
        $layout = 'admin.layouts.admin-layouts';
    } elseif (auth()->user()->role_id == 2) {
        $layout = 'admin.layouts.seller-layouts';
    } elseif (auth()->user()->role_id == 4) {
        $layout = 'admin.layouts.courier-layouts';
    } else {
        $layout = 'admin.layouts.default-layouts'; // fallback
    }
@endphp

@extends($layout)

@section('page_title', 'Products | Groceria')
@section('content')


@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
</script>
@endif
<!-- MAIN CONTENT -->
<div class="content">
  <div class="mb-9">
    <div class="row g-3 mb-4">
      <div class="col-auto">
        <h2 class="mb-0">Category Products</h2>
      </div>
    </div>
    <div id="categoryproducts" data-list='{"valueNames":["categoryproduct","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
      <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div class="search-box">
              <form class="position-relative" method="GET" action="{{ route('category-products.index') }}">
                <input 
                  class="form-control search-input search" 
                  type="search" 
                  name="search" 
                  placeholder="Search category products" 
                  aria-label="Search" 
                  value="{{ request('search') }}" 
                />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <button type="button"
              style="font-family: 'Arial', sans-serif; font-size: 14px; padding: 5px 10px; color: #333; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 6px;"
              onclick="window.location='{{ route('category-products.index') }}'">
              <i class="fas fa-arrows-rotate" style="margin-right: 5px;"></i>
            </button>
          </div>
          
          <div class="flex flex-wrap items-center gap-1">
            <button id="publikButton" class="btn btn-success rounded-1">
              <span class="fas fa-arrow-right-from-bracket me-2"></span>Publish
            </button>
            <button id="draftButton" class="btn btn-warning rounded-1">
              <span class="fas fa-arrow-right-to-bracket me-2"></span>Draft
            </button>
            <button id="deleteButton" class="btn btn-danger rounded-1">
              <span class="fas fa-trash me-2"></span>Delete
            </button>
            <button class="btn btn-primary rounded-1" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
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
                    <input class="form-check-input" id="selectAll" type="checkbox" data-bulk-select='{"body":"category-products-table-body"}' />
                  </div>
                </th>
                <th class="align-middle ps-2 text-center">IMAGE</th>
                <th class="align-middle ps-2 text-center" style="width:300px;">CATEGORY PRODUCT NAME</th>
                <th class="align-middle ps-2 text-center">STATUS</th>
                <th class="align-middle ps-2 text-center">ACTION</th>
              </tr>
            </thead>
            <tbody class="list" id="products-table-body">
              @forelse ($categoryproducts as $categoryproduct)
              <tr class="position-static">
                <td class="fs-9 align-middle">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" value="{{ $categoryproduct->id }}"></div>
                </td>
                <td class="align-middle text-center pt-2 pb-1" style="vertical-align: middle;">
                  <a 
                    href="../landing/product-details.html"
                    class="d-inline-block border border-translucent rounded-2 overflow-hidden"
                    style="width: 60px; height: 60px;"
                  >
                    <img 
                      src="{{ asset('storage/categoryproducts/' . $categoryproduct->image) }}" 
                      alt="" 
                      class="w-100 h-100" 
                      style="object-fit: cover;" 
                    />
                  </a>
                </td>

                <td class="categoryproduct align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0" href="../landing/product-details.html">
                    {{ Str::limit($categoryproduct->name, 80) }}
                  </a>
                </td>
                <td class="align-middle text-center">
                  <span class="btn btn-outline-{{ $categoryproduct->status == 'publish' ? 'success' : 'warning' }} rounded-1">
                    {{ ucfirst($categoryproduct->status) }}
                  </span>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                      <span class="fas fa-ellipsis-h fs-10"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                      <a class="dropdown-item" >View</a>
                      <a class="dropdown-item edit-category" 
                        data-id="{{ $categoryproduct->id }}" 
                        data-name="{{ $categoryproduct->name }}" 
                        data-description="{{ $categoryproduct->description }}" 
                        data-status="{{ $categoryproduct->status }}">
                        Edit
                      </a>
                      <div class="dropdown-divider"></div>
                      <form id="delete-form-{{ $categoryproduct->id }}" action="{{ route('category-products.destroy', $categoryproduct->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="dropdown-item text-danger" onclick="deleteRecord({{ $categoryproduct->id }})">Remove</button>
                      </form>                   
                    </div>
                  </div>
                </td>
              </tr>
              @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data kategori ditemukan.</td>
                </tr>
            @endforelse
            </tbody>
          </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
          <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body">
                  Menampilkan {{ $categoryproducts->firstItem() }} - {{ $categoryproducts->lastItem() }} dari {{ $categoryproducts->total() }} data
              </p>
          </div>

          <div class="col-auto d-flex">
              <!-- Tombol Prev -->
              <a class="page-link {{ $categoryproducts->onFirstPage() ? 'disabled' : '' }}" 
                href="{{ $categoryproducts->previousPageUrl() }}" 
                aria-label="Previous">
                  <span class="fas fa-chevron-left"></span>
              </a>

              <!-- Pagination Number -->
              <ul class="mb-0 pagination">
                  @for ($i = 1; $i <= $categoryproducts->lastPage(); $i++)
                      <li class="page-item {{ $categoryproducts->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $categoryproducts->url($i) }}">{{ $i }}</a>
                      </li>
                  @endfor
              </ul>

              <!-- Tombol Next -->
              <a class="page-link {{ $categoryproducts->hasMorePages() ? '' : 'disabled' }}" 
                href="{{ $categoryproducts->nextPageUrl() }}" 
                aria-label="Next">
                  <span class="fas fa-chevron-right"></span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal untuk Create Category -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategoryModalLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('category-products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="categoryName" name="name">
                        @error('name')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                        @enderror  
                    </div>
                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="categoryImage" name="image" accept="image/*">
                        @error('image')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="categoryDescription" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="categoryStatus" class="form-label">Status</label>
                        <select class="form-select  @error('status') is-invalid @enderror" id="categoryStatus" name="status">
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                        @error('status')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal untuk Edit Category -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editCategoryForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="editCategoryId" name="id">
                    <div class="mb-3">
                        <label for="editCategoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="editCategoryName" name="name">
                        @error('name')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="editCategoryImage" class="form-label">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="editCategoryImage" name="image" accept="image/*">
                        <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
                        @error('image')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="editCategoryDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editCategoryDescription" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editCategoryStatus" class="form-label">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="editCategoryStatus" name="status">
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                        @error('status')
                          <span class="invalid-feedback" role="alert"  style="color: red;">
                              {{ $message }}
                          </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script modal edit -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".edit-category").forEach(button => {
            button.addEventListener("click", function () {
                const categoryId = this.getAttribute("data-id");
                const categoryName = this.getAttribute("data-name");
                const categoryDescription = this.getAttribute("data-description");
                const categoryStatus = this.getAttribute("data-status");

                // Isi nilai ke dalam input form
                document.getElementById("editCategoryId").value = categoryId;
                document.getElementById("editCategoryName").value = categoryName;
                document.getElementById("editCategoryDescription").value = categoryDescription;
                document.getElementById("editCategoryStatus").value = categoryStatus;

                // Set form action ke route update Laravel
                const form = document.getElementById("editCategoryForm");
                form.action = `/dashboard/category-products/${categoryId}`;

                // Tampilkan modal
                const editModal = new bootstrap.Modal(document.getElementById("editCategoryModal"));
                editModal.show();
            });
        });
    });
</script>


<!-- alert delete -->
  <script>
    function deleteRecord(productId) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Anda tidak akan dapat mengembalikannya!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form DELETE
                document.getElementById('delete-form-' + productId).submit();
            }
        });
    }
  </script>

<!-- alert checkbox delete -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("deleteButton").addEventListener("click", function () {
            deleteSelectedRecords();
        });

        // Tampilkan alert sukses setelah reload
        const successType = localStorage.getItem('bulkActionSuccess');
        if (successType) {
            let messages = {
                delete: { title: 'Dihapus!', text: 'Data berhasil dihapus.', icon: 'success' },
                publish: { title: 'Dipublish!', text: 'Data berhasil dipublish.', icon: 'success' },
                draft: { title: 'Didraft!', text: 'Data berhasil didraft.', icon: 'success' }
            };
            Swal.fire({
                title: messages[successType].title,
                text: messages[successType].text,
                icon: messages[successType].icon,
                confirmButtonText: 'OK'
            });
            localStorage.removeItem('bulkActionSuccess');
        }
    });

    function deleteSelectedRecords() {
        let ids = getSelectedServices();
        if (ids.length === 0) {
            Swal.fire({
                title: 'Pilih data terlebih dahulu!',
                text: 'Silakan pilih klien untuk dihapus.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data yang dipilih akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                performAction('/dashboard/category-products/bulk-delete', ids);
                localStorage.setItem('bulkActionSuccess', 'delete');
                location.reload();
            }
        });
    }
</script>

<!-- alert checkbox publish -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("publikButton").addEventListener("click", function () {
            publishSelectedRecords();
        });
    });

    function publishSelectedRecords() {
        let ids = getSelectedServices();
        if (ids.length === 0) {
            Swal.fire({
                title: 'Pilih data terlebih dahulu!',
                text: 'Silakan pilih klien untuk dipublish.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data yang dipilih akan dipublish!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#B8D576',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Publish!'
        }).then((result) => {
            if (result.isConfirmed) {
                performAction('/dashboard/category-products/bulk-publish', ids);
                localStorage.setItem('bulkActionSuccess', 'publish');
                location.reload();
            }
        });
    }
</script>

<!-- alert checkbox draft -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("draftButton").addEventListener("click", function () {
            draftSelectedRecords();
        });
    });

    function draftSelectedRecords() {
        let ids = getSelectedServices();
        if (ids.length === 0) {
            Swal.fire({
                title: 'Pilih data terlebih dahulu!',
                text: 'Silakan pilih klien untuk didraft.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data yang dipilih akan didraft!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#FBA518',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Draft!'
        }).then((result) => {
            if (result.isConfirmed) {
                performAction('/dashboard/category-products/bulk-draft', ids);
                localStorage.setItem('bulkActionSuccess', 'draft');
                location.reload();
            }
        });
    }
</script>

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