@extends('layouts.dashboard')
@section('alert')
@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">{{ $product->name }}</h2>
        <p class="dashboard-subtitle">Product Details</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('update-product', $product->id) }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input
                          type="text"
                          class="form-control @error('name') is-invalid @enderror"
                          name="name"
                          value="{{ $product->name }}"
                        />
                        @error('name')
                          <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="storeName">Price</label>
                        <input
                          name="price"
                          type="number"
                          class="form-control @error('price') is-invalid @enderror"
                          value="{{ $product->price }}"
                        />
                          @error('price')
                            <span class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select
                          name="categories_id"
                          id=""
                          class="form-control"
                          >
                          <option value="{{ $product->categories_id }}" selected>{{ $product->category->name }}</option>
                          @foreach ($categories as $category) 
                            <option value="{{ $category->categories_id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Descriptions</label>
                        <textarea id="editor"
                          name="description" 
                          class="@error('description') is-invalid @enderror">
                          {!! $product->description !!}
                        </textarea>
                          @error('description')
                            <span class="invalid-feedback">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 text-right mt-3">
                      <button
                        type="submit"
                        class="btn btn-block btn-success px-5"
                      >
                        Save Now
                      </button>
                    </div>
                  </div>
                </form>
                <div class="row">
                  <div class="col-12">
                      <div class="row mt-5">
                        @foreach ($product->galleries as $gallery)
                          <div
                            class="col-md-4 col-lg-3 col-sm-4 col-6 mb-4"
                            >
                            <div class="gallery-container">
                              <img
                                src="{{ Storage::url($gallery->photos) ?? '' }}"
                                alt=""
                                class="w-100"
                                />
                                <a href="{{ route('destroy-product', $gallery->id) }}" class="delete-gallery">
                                <img src="{{ url('/images/ic_remove.svg') }}" alt="" />
                              </a>
                            </div>
                          </div>
                          @endforeach
                          <div class="col-12 mt-2 was-validated">
                            <form action="{{ route('upload-gallery-product', $product->id) }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="products_id" value="{{ $product->id }}">
                              <div class="custom-file mb-3">
                                <input
                                  type="file"
                                  name="photos"
                                  class="custom-file-input"
                                  id="validatedCustomFile"
                                  required  
                                  multiple
                                  onchange="form.submit()"
                                />
                                <button
                                  class="custom-file-label btn-block @error('photos') is-invalid @enderror"
                                  for="validatedCustomFile"
                                >
                                  Add photo...
                                </button>
                                  @error('photos')
                                    <span class="invalid-feedback">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                <div class="invalid-feedback">
                                  Pick photo on your file...
                                </div>
                              </div>
                            </form>
                          </div>
                      </div>
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
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor");
  </script>
@endpush