@extends('admin.layouts.admin-layouts')

@section('page_title', 'Product Edit | Groceria')
@section('content')

<!-- MAIN CONTENT -->
<div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="mb-9">
          <h2 class="mb-0">Order <span>#349</span></h2>
          <div class="d-sm-flex flex-between-center mb-3">
            <p class="text-body-secondary lh-sm mb-0 mt-2 mt-sm-0">Customer ID : <a class="fw-bold" href="#!"> 2364847</a></p>
            <div class="d-flex"><button class="btn btn-link pe-3 ps-0 text-body"><span class="fas fa-print me-2"></span>Print</button><button class="btn btn-link px-3 text-body"><span class="fas fa-undo me-2"></span>Refund</button>
              <div class="dropdown"><button class="btn text-body dropdown-toggle dropdown-caret-none ps-3 pe-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">More action<span class="fas fa-chevron-down ms-2"></span></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row g-5 gy-7">
            <div class="col-12 col-xl-8 col-xxl-9">
              <div id="orderTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                <div class="table-responsive scrollbar">
                  <table class="table fs-9 mb-0 border-top border-translucent">
                    <thead>
                      <tr>
                        <th class="sort white-space-nowrap align-middle fs-10" scope="col"></th>
                        <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;" data-sort="products">PRODUCTS</th>
                        <th class="sort align-middle ps-4" scope="col" data-sort="color" style="width:150px;">COLOR</th>
                        <th class="sort align-middle ps-4" scope="col" data-sort="size" style="width:300px;">SIZE</th>
                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="quantity" style="width:200px;">QUANTITY</th>
                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="total" style="width:250px;">TOTAL</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="order-table-body">
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/1.png" alt="" width="53" /></a></td>
                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Pure matte black</td>
                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">42</td>
                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$57</td>
                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">4</td>
                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$228</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/2.png" alt="" width="53" /></a></td>
                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Glossy black</td>
                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">XL</td>
                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$199</td>
                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">2</td>
                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$398</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/3.png" alt="" width="53" /></a></td>
                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Glossy black</td>
                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">L</td>
                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$600</td>
                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">1</td>
                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$600</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/4.png" alt="" width="53" /></a></td>
                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../landing/product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Gray</td>
                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">22</td>
                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$250</td>
                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">2</td>
                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$500</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/5.png" alt="" width="53" /></a></td>
                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Black</td>
                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">L</td>
                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$49</td>
                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">3</td>
                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$147</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/6.png" alt="" width="53" /></a></td>
                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../landing/product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Green Golden</td>
                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">Regular</td>
                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$65</td>
                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">2</td>
                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$130</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="d-flex flex-between-center py-3 border-bottom border-translucent mb-6">
                <p class="text-body-emphasis fw-semibold lh-sm mb-0">Items subtotal :</p>
                <p class="text-body-emphasis fw-bold lh-sm mb-0">$1690</p>
              </div>
              <div class="row gx-4 gy-6 g-xl-7 justify-content-sm-center justify-content-xl-start">
                <div class="col-12 col-sm-auto">
                  <h4 class="mb-5">Billing details</h4>
                  <div class="row g-4 flex-sm-column">
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="user" style="stroke-width:2.5;"></span>
                        <h6 class="mb-0">Customer</h6>
                      </div><a class="d-block fs-9 ms-4" href="#!">Shatinon Mekalan</a>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail" style="stroke-width:2.5;"></span>
                        <h6 class="mb-0">Email</h6>
                      </div><a class="d-block fs-9 ms-4" href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                    </div>
                    <div class="col-6 col-sm-12 order-sm-1">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="home" style="stroke-width:2.5;"></span>
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="ms-4">
                        <p class="text-body-secondary mb-0 fs-9">Shatinon Mekalan</p>
                        <p class="text-body-secondary mb-0 fs-9">Vancouver, British Columbia,<br class="d-none d-sm-block" />Canada</p>
                      </div>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Phone</h6>
                      </div><a class="d-block fs-9 ms-4" href="tel:+1234567890">+1234567890</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-auto">
                  <h4 class="mb-5">Shipping details</h4>
                  <div class="row g-4 flex-sm-column">
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Email</h6>
                      </div><a class="d-block fs-9 ms-4" href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Phone</h6>
                      </div><a class="d-block fs-9 ms-4" href="tel:+1234567890">+1234567890</a>
                    </div>
                    <div class="col-6 col-sm-12 order-sm-1">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="home" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="ms-4">
                        <p class="text-body-secondary mb-0 fs-9">Shatinon Mekalan</p>
                        <p class="text-body-secondary mb-0 fs-9">Vancouver, British Columbia <br />Canada</p>
                      </div>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="calendar" style="stroke-width:2.5;"></span>
                        <h6 class="mb-0">Shipping Date</h6>
                      </div>
                      <p class="mb-0 text-body-secondary fs-9 ms-4">12 Nov, 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-auto">
                  <h4 class="mb-5">Other details</h4>
                  <div class="row g-4 flex-sm-column">
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="shopping-bag" style="stroke-width:2.5;"></span>
                        <h6 class="mb-0">Gift order</h6>
                      </div>
                      <p class="mb-0 text-body-secondary fs-9 ms-4">Yes</p>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="package" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Wraping</h6>
                      </div>
                      <p class="mb-0 text-body-secondary fs-9 ms-4">Magic wrapper</p>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="file-text" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Recipient</h6>
                      </div>
                      <p class="mb-0 text-body-secondary fs-9 ms-4">Monjito Shiniga</p>
                    </div>
                    <div class="col-6 col-sm-12">
                      <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail" style="stroke-width:2.5;">  </span>
                        <h6 class="mb-0">Gift Meaasge</h6>
                      </div>
                      <div class="ms-4">
                        <p class="text-body-secondary fs-9 mb-0">Happy Birthday Shiniga <br />Lots of Love Buga Buga!!</p>
                        <p class="mb-0 text-body-secondary fs-9">Yours, <br />Mekalan</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4 col-xxl-3">
              <div class="row">
                <div class="col-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h3 class="card-title mb-4">Summary</h3>
                      <div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Items subtotal :</p>
                          <p class="text-body-emphasis fw-semibold">$691</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Discount :</p>
                          <p class="text-danger fw-semibold">-$59</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Tax :</p>
                          <p class="text-body-emphasis fw-semibold">$126.20</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Subtotal :</p>
                          <p class="text-body-emphasis fw-semibold">$665</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Shipping Cost :</p>
                          <p class="text-body-emphasis fw-semibold">$30</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top border-translucent border-dashed pt-4">
                        <h4 class="mb-0">Total :</h4>
                        <h4 class="mb-0">$695.20</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title mb-4">Order Status</h3>
                      <h6 class="mb-2">Payment status</h6><select class="form-select mb-4" aria-label="delivery type">
                        <option value="cod">Processing</option>
                        <option value="card">Canceled</option>
                        <option value="paypal">Completed</option>
                      </select>
                      <h6 class="mb-2">Fulfillment status</h6><select class="form-select" aria-label="delivery type">
                        <option value="cod">Unfulfilled</option>
                        <option value="card">Fulfilled</option>
                        <option value="paypal">Pending</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection