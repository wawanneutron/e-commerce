@extends('layouts.dashboard')

@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Create New Product</h2>
        <p class="dashboard-subtitle">Create your own product</p>
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
                        <label for="storeName">Product Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="storeName">Price </label>
                        <input type="number" class="form-control" />
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
                    <div class="col-md-12 col-lg-6 was-validated">
                      <div class="form-group">
                        <label for="">Thumbnails</label>
                        <div class="custom-file mb-3">
                          <input
                            type="file"
                            class="custom-file-input"
                            id="validatedCustomFile"
                            required
                          />
                          <label
                            class="custom-file-label"
                            for="validatedCustomFile"
                            >Choose file...</label
                          >
                          <div class="invalid-feedback">
                            Example invalid custom file feedback
                          </div>
                          <p class="text-muted">
                            You can select more than one file
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 text-right mt-5">
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor");
  </script>
@endpush