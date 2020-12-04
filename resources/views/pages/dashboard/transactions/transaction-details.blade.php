@extends('layouts.dashboard')

@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
   >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <!-- breadcrumb -->
        <section
          class="store-breadcrumbs"
          data-aos="fade-down"
          data-aos-delay="200"
        >
          <h2 class="dashboard-title">#STORE0839</h2>
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">Recent Transactions</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Product Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </section>
      </div>
      <div class="dashboard-content" id="transactionDetails">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img
                      src="/images/product-card-1.png"
                      alt=""
                      class="w-100 mb-3"
                    />
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="row">
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Customer Name</div>
                        <div class="product-subtitle">
                          Wawan Setiawan
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Product Name</div>
                        <div class="product-subtitle">
                          Shirup Marzzan
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">
                          Date of Transaction
                        </div>
                        <div class="product-subtitle">
                          12 Januari, 2020
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Payment Status</div>
                        <div class="product-subtitle text-danger">
                          Pending
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Total Amount</div>
                        <div class="product-subtitle">$280,409</div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Mobile</div>
                        <div class="product-subtitle">
                          +628 2020 11111
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mt-4 mb-3">
                    <h5>Shipping Information</h5>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="product-title">Address I</div>
                    <div class="product-subtitle">
                      Setra Duta Cemara
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="product-title">Address II</div>
                    <div class="product-subtitle">Blok B2 No. 34</div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="product-title">Province</div>
                    <div class="product-subtitle">West Java</div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="product-title">City</div>
                    <div class="product-subtitle">Bandung</div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="product-title">Postal Code</div>
                    <div class="product-subtitle">123999</div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="product-title">Country</div>
                    <div class="product-subtitle">Indonesia</div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-title">Shipping Status</div>
                    <select
                      name="status"
                      id="status"
                      class="custom-select mt-2"
                      v-model="status"
                    >
                      <option value="UNPAID">Unpaid</option>
                      <option value="PENDING">Pending</option>
                      <option value="SHIPPING">Shipping</option>
                      <option value="SUCCESS">Success</option>
                    </select>
                  </div>
                  <template v-if="status  == 'SHIPPING'">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="product-title mb-2">Input Resi</div>
                      <input
                        type="text"
                        class="form-control"
                        name="resi"
                        v-model="resi"
                      />
                    </div>
                    <div class="col-12 col-md-4 col-md-4 col-lg-3 mt-2">
                      <button
                        type="submit"
                        class="btn btn-success mt-4 btn-block"
                      >
                        Update Resi
                      </button>
                    </div>
                  </template>
                </div>
                <div class="row">
                  <div class="col-12 text-right">
                    <button type="submit" class="btn btn-success mt-4">
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "SHIPPING",
        resi: "BDO12308012132",
      },
    });
  </script>
@endpush