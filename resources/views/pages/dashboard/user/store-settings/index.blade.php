@extends('layouts.dashboard')

@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Store Settings</h2>
        <p class="dashboard-subtitle">Make store that profitable</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="#">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="storeName">Store Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="formg-group">
                        <label for="">Category</label>
                        <select
                          name="category"
                          id="category"
                          class="custom-select form-control"
                        >
                          <option value="">Select Category</option>
                          <option value="">Electronic</option>
                          <option value="">Tshrert</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mt-3">
                        <label>Store Status</label>
                        <p class="text-muted">
                          Apakah saat ini toko Anda buka?
                        </p>
                        <div
                          class="custom-control custom-radio custom-control-inline"
                        >
                          <input
                            type="radio"
                            class="custom-control-input"
                            name="is_store_open"
                            id="openStoreTrue"
                          />
                          <label
                            for="openStoreTrue"
                            class="custom-control-label"
                            >Buka</label
                          >
                        </div>
                        <div
                          class="custom-control custom-radio custom-control-inline"
                        >
                          <input
                            type="radio"
                            class="custom-control-input"
                            name="is_store_open"
                            id="openStoreFalse"
                          />
                          <label
                            for="openStoreFalse"
                            class="custom-control-label"
                            >Sementara Tutup</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5"
                      >
                        Save Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection