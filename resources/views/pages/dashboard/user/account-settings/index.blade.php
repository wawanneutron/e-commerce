@extends('layouts.dashboard')

@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
   >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">My Account</h2>
        <p class="dashboard-subtitle">Update your current profile</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="#">
              <div class="card">
                <div class="card-body">
                  <div
                    class="row mb-2"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Your Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressOne"
                          name="addressOne"
                          placeholder="Wawan setiawan"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Your Email</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressTwo"
                          name="addressTwo"
                          placeholder="palazo@gmail.com"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Address 1</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressOne"
                          name="addressOne"
                          placeholder="pleace input addres"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Address 2</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressTwo"
                          name="addressTwo"
                          placeholder="pleace input addres"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Province</label>
                        <select
                          name="province"
                          id="province"
                          class="form-control custom-select"
                        >
                          <option value="West Java">West Java</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">City</label>
                        <select
                          name="city"
                          id="city"
                          class="form-control custom-select"
                        >
                          <option value="Bandung">Bandung</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Postal Code</label>
                        <input
                          type="text"
                          name="postalcode"
                          id="Postal Code"
                          class="form-control"
                          placeholder="15720"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Country</label>
                        <input
                          type="text"
                          id="country"
                          name="country"
                          class="form-control"
                          placeholder="Indonesia"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Mobile</label>
                        <input
                          type="text"
                          id="mobile"
                          name="mobile"
                          class="form-control"
                          placeholder="+628 2020 11111"
                        />
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