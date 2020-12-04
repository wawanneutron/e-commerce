@extends('layouts.dashboard')

@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Shirup Marzan</h2>
        <p class="dashboard-subtitle">Product Details</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input
                          type="text"
                          class="form-control"
                          value="Shirup marzan"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="storeName">Price </label>
                        <input
                          type="number"
                          class="form-control"
                          value="876"
                        />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select
                          name="category"
                          id=""
                          class="form-control"
                        >
                          <option value="">Shipping</option>
                          <option value="">Electronic</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Descriptions</label>
                        <textarea name="editor"></textarea>
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
                  <div class="row">
                    <div class="col-12">
                      <div class="row mt-5">
                        <div
                          class="col-md-4 col-lg-3 col-sm-4 col-6 mb-4"
                        >
                          <div class="gallery-container">
                            <img
                              src="/images/product-card-1.png"
                              alt=""
                              class="w-100"
                            />
                            <a href="#" class="delete-gallery">
                              <img src="/images/ic_remove.svg" alt="" />
                            </a>
                          </div>
                        </div>
                        <div
                          class="col-md-4 col-lg-3 col-sm-4 col-6 mb-4"
                        >
                          <div class="gallery-container">
                            <img
                              src="/images/product-card-2.png"
                              alt=""
                              class="w-100"
                            />
                            <a href="#" class="delete-gallery">
                              <img src="/images/ic_remove.svg" alt="" />
                            </a>
                          </div>
                        </div>
                        <div
                          class="col-md-4 col-lg-3 col-sm-4 col-6 mb-4"
                        >
                          <div class="gallery-container">
                            <img
                              src="/images/product-card-3.png"
                              alt=""
                              class="w-100"
                            />
                            <a href="#" class="delete-gallery">
                              <img src="/images/ic_remove.svg" alt="" />
                            </a>
                          </div>
                        </div>
                        <div
                          class="col-md-4 col-lg-3 col-sm-4 col-6 mb-4"
                        >
                          <div class="gallery-container">
                            <img
                              src="/images/product-card-5.png"
                              alt=""
                              class="w-100"
                            />
                            <a href="#" class="delete-gallery">
                              <img src="/images/ic_remove.svg" alt="" />
                            </a>
                          </div>
                        </div>
                        <div class="col-12 mt-2 was-validated">
                          <div class="custom-file mb-3">
                            <input
                              type="file"
                              class="custom-file-input"
                              id="validatedCustomFile"
                              required
                              multiple
                            />
                            <button
                              class="custom-file-label btn-block"
                              for="validatedCustomFile"
                            >
                              Add photo...
                            </button>
                            <div class="invalid-feedback">
                              Pick photo on your file...
                            </div>
                          </div>
                        </div>
                      </div>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor");
  </script>
@endpush