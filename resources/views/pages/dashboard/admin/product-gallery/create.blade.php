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
      <h2 class="dashboard-title">Dashboard Product Gallery</h2>
      <p class="dashboard-subtitle">Cretae Product Gallery</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('dashboard-gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Product</label>
                  <select name="products_id" class=" custom-select">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                  </select>
                    @error('products_id')
                      <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="">Photo Product</label>
                  <input type="file" multiple name="photos" class="form-control @error('photos') is-invalid @enderror">
                    @error('photos')
                      <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                </div>
                <div class="form-group mt-4 text-right mb-5">
                  <button type="submit" class="btn btn-success px-5">Save</button>
                </div>
              </form>
            </div>
            <div class="col-lg-6" style="margin-top: -50px; margin-bottom: 50px;">
              <div class="alert alert-info">
                <span class="mt-2 text-muted text-small">setiap product harus menambahkan 4 photo product</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

