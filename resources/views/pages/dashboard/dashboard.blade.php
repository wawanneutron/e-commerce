@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
      </div>
      <div class="dashboard-content">
        <!-- data statistik -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Customers</div>
                <div class="dashboard-card-subtitle">15,209</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Revenues</div>
                <div class="dashboard-card-subtitle">$931,290</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Transactions</div>
                <div class="dashboard-card-subtitle">22,309,399</div>
              </div>
            </div>
          </div>
        </div>
        <!-- list transactions -->
        <div class="row mt-5">
          <div class="col-12">
            <h5 class="mb-3">Recent Transactions</h5>
          </div>
        </div>
        <div class="row mt-0">
          <div class="col-12 col-sm-6 col-md-12 col-lg-12 mt-2">
            <a
              href="{{ route('dashboard-transactions-details') }}"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img
                      src="/images/ic_dashboard_product.png"
                      alt=""
                      class="img-list"
                    />
                  </div>
                  <div class="col-md-3 col-lg-3">Shirup Marzzan</div>
                  <div class="col-md-3 col-lg-3">Fajrin Tri S</div>
                  <div class="col-md-3 col-lg-3">12 Januari, 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/ic_dashboard_arrow_right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-12 col-lg-12 mt-2">
            <a
              href="{{ route('dashboard-transactions-details') }}"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img
                      src="/images/ic_dashboard_product2.png"
                      alt=""
                      class="img-list"
                    />
                  </div>
                  <div class="col-md-3 col-lg-3">Shirup Marzzan</div>
                  <div class="col-md-3 col-lg-3">Fajrin Tri S</div>
                  <div class="col-md-3 col-lg-3">12 Januari, 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/ic_dashboard_arrow_right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-12 col-lg-12 mt-2">
            <a
              href="{{ route('dashboard-transactions-details') }}"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img
                      src="/images/ic_dashboard_product3.png"
                      alt=""
                      class="img-list"
                    />
                  </div>
                  <div class="col-md-3 col-lg-3">Shirup Marzzan</div>
                  <div class="col-md-3 col-lg-3">Fajrin Tri S</div>
                  <div class="col-md-3 col-lg-3">12 Januari, 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/ic_dashboard_arrow_right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection