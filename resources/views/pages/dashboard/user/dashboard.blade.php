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
                <div class="dashboard-card-subtitle">{{ number_format($customer) }}</div>
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
                <div class="dashboard-card-subtitle">{{ number_format($transaction_count) }}</div>
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
            @forelse ($transaction_data as $transaction)
            <a
              href="{{ route('dashboard-transactions-details', $transaction->id) }}"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img
                      src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                      alt=""
                      class="img-list"
                    />
                  </div>
                  <div class="col-md-3 col-lg-3">{{ $transaction->product->name }}</div>
                  <div class="col-md-3 col-lg-3">{{ $transaction->product->user->name }}</div>
                  <div class="col-md-3 col-lg-3">{{ $transaction->created_at }}</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="{{ url('/images/ic_dashboard_arrow_right.svg') }}"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
            @empty
            <div class="alert alert-info mt-5">
              <p class=" text-center">You don't have recent transactions</p>
            </div>
            @endforelse
            <span>{{ $transaction_data->links() }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection