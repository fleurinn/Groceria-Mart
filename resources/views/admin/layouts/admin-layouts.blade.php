<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

  
<!-- Mirrored from prium.github.io/phoenix/v1.20.1/apps/e-commerce/admin/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Mar 2025 05:49:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('page_title', 'Groceria | Shop & Happy')</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/favicongroceria.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicongroceria.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicongroceria.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicongroceria.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/favicongroceria.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ asset('assets/css/vendor/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/vendor/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor/choices/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    @yield('head')
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
    
    <main class="main" id="top">

      <!-- SIDEBAR -->
      <nav class="navbar navbar-vertical navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages-->
                 <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('dashboard.admin') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Beranda</span></span></div>
                </a></div><!-- parent pages-->
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Aplikasi</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('profile-pengguna.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Data Penggguna</span></span></div>
                </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('slider.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Display Banner</span></span></div>
                </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('services.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Pesan Layanan</span></span></div>
                </a></div><!-- parent pages-->
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Toko Pusat</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-CRM">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="shop"></span></span><span class="nav-link-text">Product</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-CRM">
                      <li class="collapsed-nav-item-title d-none">Data Produk</li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">
                          <div class="d-flex align-items-center"><span class="nav-link-text">List Produk</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('category-products.index') }}">
                          <div class="d-flex align-items-center"><span class="nav-link-text">List Kategori Produk</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->

                <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('discount-vouchers.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="star"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Ulasan Produk</span></span></div>
                </a></div><!-- parent pages-->

                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-project-management">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text">Order</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management">
                      <li class="collapsed-nav-item-title d-none">Order</li>
                      <li class="nav-item"><a class="nav-link" href="../../project-management/create-new.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">List Order </span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../../project-management/project-list-view.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Detail Order </span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->

                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-travel-agency" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-travel-agency">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="briefcase"></span></span><span class="nav-link-text">Transaksi</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-travel-agency">
                      <li class="collapsed-nav-item-title d-none">Transaksi</li>
                      <li class="nav-item"><a class="nav-link" href="../../travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">List Transaksi</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../../travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Riwayat Transaksi</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Profil Akun</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->

                <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('profile-pengguna.show', Auth::user()->id) }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Profil</span></span></div>
                </a></div><!-- parent pages-->
                </li>
            </ul>
          </div>
        </div>
        <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>
      <!-- SIDEBAR  END -->

      <!-- HEADER -->
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../../../index.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="../../../assets/img/icons/favicongroceria.png" alt="groceria" width="27" />
                <h5 class="logo-text ms-2 d-none d-sm-block">Groceria</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
              @php $user = Auth::user(); @endphp
              <img class="rounded-circle" src="{{ asset('storage/users/' . $user->image) }}" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      @php $user = Auth::user(); @endphp
                      <img class="rounded-circle" src="{{ asset('storage/users/' . $user->image) }}" alt="" />
                    </div>
                    @php $user = Auth::user(); @endphp
                    <h6 class="mt-2 text-body-emphasis">{{$user->name}}</h6>
                  </div>
                </div>
                <div class="overflow-auto scrollbar" style="height:8rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="{{ route('dashboard') }}"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Account </a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <div class="px-3 py-3">
                      <form method="POST" action="{{ route('logout') }}" class="d-flex flex-center w-100">
                          @csrf
                          <button type="submit" class="btn btn-phoenix-secondary d-flex flex-center w-100" style="border: none; background: none; padding: 0; cursor: pointer;">
                              <span class="me-2" data-feather="log-out"></span>Sign out
                          </button>
                      </form>
                  </div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <!-- HEADER END -->

        @yield('content')

      <!-- FOOTER -->
      <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-body">Copyright <span class="d-none d-sm-inline-block"></span>&copy;<a class="mx-1" href="https://instagram/dhya.s0.com/">Groceria</a>all rights reserved. Powered by Groceria.</p>
            </div>
          </div>
        </footer>
      </div>
      <!-- FOOTER END -->
      </main>

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ asset('assets/css/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/is/is.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/list.js/list.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/choices/choices.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/phoenix.js') }}"></script>
<script src="{{ asset('assets/css/vendor/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('assets/css/vendor/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('assets/css/vendor/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
<script src="{{ asset('assets/css/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/js/ecommerce-dashboard.js') }}"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.20.1/apps/e-commerce/admin/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Mar 2025 05:49:46 GMT -->
</html>