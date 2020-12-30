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
            <form action="{{ route('account-update') }}" id="locations" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Address 1</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressOne"
                          name="address_one"
                          placeholder="pleace input addres"
                          value="{{ $item->address_one }}"
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
                          name="address_two"
                          placeholder="pleace input addres"
                          value="{{ $item->address_two }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Province</label>
                        <p class=" text-muted">{{ App\Models\Province::find($item->provinces_id)->name ?? 'not address' }}</p>
                        <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model="provinces_id">
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select>
                        <select v-else class="form-control"></select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">City</label>
                        <p class="text-muted">{{ App\Models\Regency::find($item->regencies_id)->name ?? 'not address' }}</p>
                        <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model="regencies_id">
                          <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
                        </select>
                        <select v-else class="form-control"></select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Postal Code</label>
                        <input
                          type="text"
                          name="zip_code"
                          id="Postal Code"
                          class="form-control"
                          placeholder="15720"
                          value="{{ $item->zip_code }}"
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
                          value="{{ $item->country }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Mobile</label>
                        <input
                          type="text"
                          id="mobile"
                          name="phone_number"
                          class="form-control"
                          placeholder="+628 2020 11111"
                          value="{{ $item->phone_number }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5 mt-4 mb-3"
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
    <script src="{{ url('/vendor/vue/vue.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          AOS.init();
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
              .then(function(response){
                self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function(response){
                self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function(val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          }
        }
      });
    </script>
@endpush