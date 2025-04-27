@extends('admin.layouts.seller-layouts')

@section('page_title', 'Beranda | Groceria')
@section('content')

<div class="content">
        <div class="pb-5">
          <div class="row g-4">
            <div class="col-12 col-xxl-6">
              <div class="mb-8">
                <h2 class="mb-2">Beranda Groceria</h2>
                <h5 class="text-body-tertiary fw-semibold">Halo {{$user->name}}, semangat terus yaa!</h5>
              </div>
              <div class="row align-items-center g-4">
                  <div class="col-12 col-md-auto">
                      <div class="d-flex align-items-center">
                          <span class="fa-stack" style="min-height: 46px;min-width: 46px;">
                              <span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light" data-fa-transform="down-4 rotate--10 left-4"></span>
                              <span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success" data-fa-transform="up-4 right-3 grow-2"></span>
                              <span class="fa-stack-1x fa-solid fa-star text-success" data-fa-transform="shrink-2 up-8 right-6"></span>
                          </span>
                          <div class="ms-3">
                              <h4 class="mb-0">{{ $status_counts['selesai'] }} Order</h4>
                              <p class="text-body-secondary fs-9 mb-0">Selesai</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-auto">
                      <div class="d-flex align-items-center">
                          <span class="fa-stack" style="min-height: 46px;min-width: 46px;">
                              <span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light" data-fa-transform="down-4 rotate--10 left-4"></span>
                              <span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning" data-fa-transform="up-4 right-3 grow-2"></span>
                              <span class="fa-stack-1x fa-solid fa-pause text-warning" data-fa-transform="shrink-2 up-8 right-6"></span>
                          </span>
                          <div class="ms-3">
                              <h4 class="mb-0">{{ $status_counts['dalam perjalanan'] }} Order</h4>
                              <p class="text-body-secondary fs-9 mb-0">Dalam Perjalanan</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-auto">
                      <div class="d-flex align-items-center">
                          <span class="fa-stack" style="min-height: 46px;min-width: 46px;">
                              <span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light" data-fa-transform="down-4 rotate--10 left-4"></span>
                              <span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger" data-fa-transform="up-4 right-3 grow-2"></span>
                              <span class="fa-stack-1x fa-solid fa-xmark text-danger" data-fa-transform="shrink-2 up-8 right-6"></span>
                          </span>
                          <div class="ms-3">
                              <h4 class="mb-0">{{ $status_counts['proses'] }} Order Baru</h4>
                              <p class="text-body-secondary fs-9 mb-0">Dalam Proses</p>
                          </div>
                      </div>
                  </div>
              </div>
              <hr class="bg-body-secondary mb-6 mt-4" />
              <div class="row flex-between-center mb-4 g-3">
                <div class="col-auto">
                    <h3>Total penjualan</h3>
                  </div>
                  <div class="col-8 col-sm-4">
                      <select class="form-select form-select-sm" id="select-gross-revenue-month">
                          <option value="2022-03">Mar 1 - 31, 2022</option>
                          <option value="2022-04">Apr 1 - 30, 2022</option>
                          <option value="2022-05">May 1 - 31, 2022</option>
                          <!-- Add more months as needed -->
                      </select>
                  </div>
              </div>

              <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>

              <script>
                  // Tangani perubahan bulan/tahun
                  document.getElementById('select-gross-revenue-month').addEventListener('change', function() {
                      let selectedMonth = this.value;
                      // Kirim ke server untuk mengambil data berdasarkan bulan
                      fetch(`/dashboard/sales/${selectedMonth}`)
                          .then(response => response.json())
                          .then(data => {
                              // Update chart atau tampilkan data yang diterima
                              updateSalesChart(data); // Panggil fungsi untuk update chart dengan data baru
                          });
                  });

                  function updateSalesChart(data) {
                      // Misalkan kita menggunakan ECharts untuk chart
                      var myChart = echarts.init(document.getElementById('echart-total-sales-chart'));
                      var option = {
                          xAxis: {
                              type: 'category',
                              data: data.dates // Array tanggal dalam bulan
                          },
                          yAxis: {
                              type: 'value'
                          },
                          series: [{
                              data: data.sales, // Array penjualan
                              type: 'line'
                          }]
                      };
                      myChart.setOption(option);
                  }
              </script>
              </div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 border-y">
          <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
            <div class="row align-items-end justify-content-between pb-5 g-3">
              <div class="col-auto">
                <h3>Review Terbaru</h3>
              </div>
            </div>
            <div class="table-responsive mx-n1 px-1 scrollbar">
              <table class="table fs-9 mb-0 border-top border-translucent">
              <thead>
  <tr>
    <th class="sort white-space-nowrap align-middle" scope="col"></th>
    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
    <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER</th>
    <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
    <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
  </tr>
</thead>
<tbody class="list" id="table-latest-review-body">
  @foreach ($reviews as $review)
    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
      <td class="align-middle product white-space-nowrap py-0">
        <a class="d-block rounded-2 border border-translucent" href="#">
          {{-- Optional: Tambahkan gambar produk jika tersedia --}}
          <img src="{{ asset('storage/products/' . $review->product->image) }}" alt="product-img" width="53" />
          </a>
      </td>
      <td class="align-middle product white-space-nowrap">
        <a class="fw-semibold" href="#">
          {{ $review->product->name ?? 'Produk tidak ditemukan' }}
        </a>
      </td>
      <td class="align-middle customer white-space-nowrap">
        <a class="d-flex align-items-center text-body" href="#">
          <h6 class="mb-0 ms-3 text-body">
            {{ $review->user->name ?? 'User tidak ditemukan' }}
          </h6>
        </a>
      </td>
      <td class="align-middle rating white-space-nowrap fs-10">
        @for ($i = 1; $i <= 5; $i++)
          <span class="fa fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}"></span>
        @endfor
      </td>
      <td class="align-middle review" style="min-width:350px;">
        <p class="fs-9 fw-semibold text-body-highlight mb-0">
          {{ $review->comment ?? '-' }}
        </p>
      </td>
    </tr>
  @endforeach
</tbody>

              </table>
            </div>
            <div class="row align-items-center py-1">
              <div class="pagination d-none"></div>
              <div class="col d-flex fs-9">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less</a>
              </div>
              <div class="col-auto d-flex">
                <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
              </div>
            </div>
          </div>
        </div>
        
@endsection