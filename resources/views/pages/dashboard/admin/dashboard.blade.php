@extends('layouts.admin-dashboard')
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
                <div class="dashboard-card-subtitle">{{ $customer }}</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Revenues</div>
                <div class="dashboard-card-subtitle">Rp. {{ number_format($revenue) }}</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Transactions</div>
                <div class="dashboard-card-subtitle">{{ $transaction }}</div>
              </div>
            </div>
          </div>
        </div>
        <!-- list transactions -->
        
      </div>
    </div>
  </div>
@endsection