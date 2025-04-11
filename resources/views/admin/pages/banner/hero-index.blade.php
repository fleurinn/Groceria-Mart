@extends('admin.layouts.admin-layouts')

@section('page_title', 'Banner | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif


  <div class="mb-9">
    <div class="row g-3 mb-4">
      <div class="col-auto">
        <h2 class="mb-0">Banners</h2>
      </div>
    </div>
    <div id="sliders" data-list='{"valueNames":["image","title","description","categoryproducts_id","status"],"page":10,"pagination":true}'>
      <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div class="search-box">
              <form class="position-relative" method="GET" action="{{ route('slider.index') }}">
                <input 
                  class="form-control search-input search" 
                  type="search" 
                  name="search" 
                  placeholder="Search banner" 
                  aria-label="Search" 
                  value="{{ request('search') }}" 
                />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <button type="button"
              style="font-family: 'Arial', sans-serif; font-size: 14px; padding: 5px 10px; color: #333; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 6px;"
              onclick="window.location='{{ route('slider.index') }}'">
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
            <button class="btn btn-primary rounded-1" data-bs-toggle="modal" data-bs-target="#createSliderModal">
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
                    <input class="form-check-input" id="selectAll" type="checkbox" data-bulk-select='{"body":"slider-table-body"}' />
                  </div>
                </th>
                <th class="align-middle ps-2 text-center" style="width:70px;">GAMBAR</th>
                <th class="align-middle ps-2 text-center" style="width:350px;">JUDUL</th>
                <th class="align-middle ps-2 text-center" style="width:350px;">DESKRIPSI</th>
                <th class="align-middle ps-2 text-center" style="width:350px;">KATEGORI</th>
                <th class="align-middle ps-2 text-center" style="width:150px;">STATUS</th>
                <th class="align-middle ps-2 text-center" style="width:50px;">AKSI</th>
              </tr>
            </thead>
            <tbody class="list" id="products-table-body">
              @foreach ($sliders as $slider)
              <tr class="position-static">
                <td class="fs-9 align-middle">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" value="{{ $slider->id }}"></div>
                </td>
                <td class="align-middle white-space-nowrap py-0">
                  <a class="d-block border border-translucent rounded-2">
                    <img src="{{ asset('storage/sliders/' . $slider->image) }}" alt="" width="53" /></a>
                </td>
                <td class="align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0">
                    {{ Str::limit($slider->title, 80) }}
                  </a>
                </td>
                <td class="align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0">
                    {{ Str::limit($slider->description, 80) }}
                  </a>
                </td>
                <td class="align-middle ps-4">
                  <a class="fw-semibold line-clamp-3 mb-0">
                    {{ ($slider->categoryproducts_id) }}
                  </a>
                </td>
                <td class="align-middle text-center">
                  <span class="btn btn-outline-{{ $categoryproduct->status == 'Aktif' ? 'success' : 'warning' }} rounded-1">
                    {{ ucfirst($slider->status) }}
                  </span>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                      <span class="fas fa-ellipsis-h fs-10"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                      <a class="dropdown-item" >View</a>
                      <a class="dropdown-item edit-slider" 
                        data-id="{{ $slider->id }}" 
                        data-image="{{ $slider->image }}"
                        data-title="{{ $slider->title }}" 
                        data-description="{{ $slider->description }}"
                        data-categoryproducts="{{ $slider->categoryproducts_id }}" 
                        data-status="{{ $slider->status }}">
                        Edit
                      </a>
                      <div class="dropdown-divider"></div>
                      <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?');">Remove</button>
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
                  Menampilkan {{ $sliders->firstItem() }} - {{ $sliders->lastItem() }} dari {{ $sliders->total() }} data
              </p>
          </div>

          <div class="col-auto d-flex">
              <!-- Tombol Prev -->
              <a class="page-link {{ $sliders->onFirstPage() ? 'disabled' : '' }}" 
                href="{{ $sliders->previousPageUrl() }}" 
                aria-label="Previous">
                  <span class="fas fa-chevron-left"></span>
              </a>

              <!-- Pagination Number -->
              <ul class="mb-0 pagination">
                  @for ($i = 1; $i <= $sliders->lastPage(); $i++)
                      <li class="page-item {{ $sliders->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $sliders->url($i) }}">{{ $i }}</a>
                      </li>
                  @endfor
              </ul>

              <!-- Tombol Next -->
              <a class="page-link {{ $sliders->hasMorePages() ? '' : 'disabled' }}" 
                href="{{ $sliders->nextPageUrl() }}" 
                aria-label="Next">
                  <span class="fas fa-chevron-right"></span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal untuk Create Category -->
<div class="modal fade" id="createSliderModal" tabindex="-1" aria-labelledby="createSliderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createSliderModalLabel">Add New Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sliderTitle" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="sliderTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="sliderImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="sliderImage" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="sliderDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="sliderDescription" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="sliderCategoryproducts" class="form-label">Kategori</label>
                        <select class="form-select" id="sliderCategoryproducts" name="categoryproducts_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sliderStatus" class="form-label">Status</label>
                        <select class="form-select" id="sliderStatus" name="status" required>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal untuk Edit Slider -->
<div class="modal fade" id="editSliderModal" tabindex="-1" aria-labelledby="editSliderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSliderModalLabel">Edit Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editSliderForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="editSliderId" name="id">
                    <div class="mb-3">
                        <label for="editSliderTitle" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="editSlidertitle" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="editSliderImage" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="editSliderImage" name="image" accept="image/*">
                        <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
                    </div>
                    <div class="mb-3">
                        <label for="editSliderDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editSliderDescription" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editSliderCategoryproducts" class="form-label">Status</label>
                        <select class="form-select" id="editSliderCategoryproducts" name="categoryproducts_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editSliderStatus" class="form-label">Status</label>
                        <select class="form-select" id="editSliderStatus" name="status" required>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".edit-slider").forEach(button => {
            button.addEventListener("click", function () {
                const sliderId = this.getAttribute("data-id");
                const sliderTitle = this.getAttribute("data-title");
                const sliderDescription = this.getAttribute("data-description");
                const sliderCategoryproducts = this.getAttribute("data-categoryproducts_id");
                const sliderStatus = this.getAttribute("data-status");

                // Isi nilai ke dalam input form
                document.getElementById("editSliderId").value = sliderId;
                document.getElementById("editSliderTitle").value = sliderTitle;
                document.getElementById("editSliderDescription").value = sliderDescription;
                document.getElementById("editSliderCategoryproducts").value = sliderCategoryproducts_id;
                document.getElementById("editSliderStatus").value = sliderStatus;

                // Set form action ke route update Laravel
                const form = document.getElementById("editSliderForm");
                form.action = `/dashboard/slider/${sliderId}`;

                // Tampilkan modal
                const editModal = new bootstrap.Modal(document.getElementById("editSliderModal"));
                editModal.show();
            });
        });
    });
</script>

<script>
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        });
    }, 3000); // 3 detik
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