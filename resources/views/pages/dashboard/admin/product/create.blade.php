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
      <h2 class="dashboard-title">Dashboard Product</h2>
      <p class="dashboard-subtitle">Cretae Product</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('dashboard-products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Name product</label>
                  <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Pemilik Product</label>
                  <select name="users_id" class=" custom-select">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
                    @error('users_id')
                      <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="">Category Product</label>
                  <select name="categories_id" class=" custom-select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                    @error('categories_id')
                      <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="">Harga Product</label>
                  <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group mt-4 text-right">
                  <button type="submit" class="btn btn-success px-5">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endpush
