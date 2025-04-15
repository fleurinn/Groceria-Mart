@extends('admin.layouts.admin-layouts')

@section('page_title', 'Profile Pengguna | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
        <div class="mb-9">
          <div class="row g-2 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Pengguna</h2>
            </div>
          </div>
          <div id="products" data-list='{"valueNames":["product","price","category  ","tags","vendor","time"],"page":10,"pagination":true}'>
          <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                  <div style="display: flex; align-items: center; gap: 10px;">
                  <div class="search-box">
                      <form class="position-relative" method="GET" action="{{ route('profile-pengguna.index') }}">
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
                          onclick="window.location='{{ route('profile-pengguna.index') }}'">
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
                      <button class="btn btn-primary rounded-1" onclick="window.location='{{ route('profile-pengguna.create') }}'">
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
              <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                <table class="table table-sm fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"customers-table-body"}' /></div>
                      </th>
                      <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">NAMA PENGGUNA</th>
                      <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">E-MAIL</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="total-orders" style="width:10%">ROLE</th>
                      <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">KOTA</th>
                      <th class="sort align-middle ps-7" scope="col" data-sort="city" style="width:25%;">KECAMATAN</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="last-seen" style="width:15%;">DESA</th>
                      <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:10%;min-width: 150px;">AKSI</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="customers-table-body">
                  @forelse ( $users as $user)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","city":"Budapest","totalOrders":89,"totalSpent":23987,"lastSeen":"34 min ago","lastOrder":"Dec 12, 12:56 PM"}' /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-body-emphasis" href="customer-details.html">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="{{ asset('storage/users/' . $user->image) }}" alt="" /></div>
                          <p class="mb-0 ms-3 text-body-emphasis fw-bold">{{ $user->first_name }} {{ $user->last_name }}</p>
                          </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">{{ $user->email }}</a></td>
                      <td class="align-middle white-space-nowrap fw-semibold text-end text-body-highlight">{{ $user->role->name }}</td>
                      <td class=" align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ 23987</td>
                      <td class="city align-middle white-space-nowrap text-body-highlight ps-7">Budapest</td>
                      <td class="last-seen align-middle white-space-nowrap text-body-tertiary text-end">34 min ago</td>
                      <td class="last-order align-middle white-space-nowrap text-body-tertiary text-end">Dec 12, 12:56 PM</td>
                    </tr>
                    @empty
                      <tr>
                          <td colspan="7" class="text-center">Tidak ada data pengguna ditemukan.</td>
                      </tr>
                  @endforelse
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection