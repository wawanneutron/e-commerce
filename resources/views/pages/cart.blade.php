@extends('layouts.app')

@section('content')
  <div class="page-content page-cart">
    <!-- breadcrumb -->
    <section
      class="store-breadcrumbs"
      data-aos="fade-down"
      data-aos-delay="200"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active">Cart</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- cart -->
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                @php
                    $totalPrice = 0
                @endphp
                @forelse ($carts as $cart)
                  <tr>
                    <td style="width: 30%" class="align-middle">
                      <img
                        @if ($cart->product->galleries->count())
                          src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                          alt=""
                          class="cart-image w-100"
                        @else
                          style="background-color: #eee;"
                        @endif
                      />
                    </td>
                    <td style="width: 30%" class="align-middle">
                      <div class="product-title">{{ $cart->product->name }}</div>
                      <div class="product-subtitle">{{ $cart->product->user->store_name }}</div>
                    </td>
                    <td style="width: 25%" class="align-middle">
                      <div class="product-title">Rp. {{ number_format($cart->product->price)}}</div>
                      <div class="product-subtitle">rupiah</div>
                    </td>
                    <td style="width: 30%" class="align-middle">
                      <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-remove-cart">
                          Remove
                        </button>
                      </form>
                    </td>
                  </tr>
                  @php
                      $totalPrice += $cart->product->price
                  @endphp
                @empty
                    <td colspan="100%">
                      <div class="alert alert-info mt-5">
                        <p class=" text-center">You don't have cart, please add to cart</p>
                      </div>
                    </td>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
        </div>
        <form action="" id="locations">
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
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
                <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model="provinces_id">
                  <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                </select>
                <select v-else class="form-control"></select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">City</label>
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
          
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
              <h2 class="mb-4">Payment Informations</h2>
            </div>
            <div class="col-4 col-md-2 mb-4">
              <div class="product-title">$10</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-2 mb-4">
              <div class="product-title">$280</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-3 mb-4">
              <div class="product-title">$520</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2 mb-4">
              <div class="product-title"><span>Rp {{ number_format($totalPrice) }}</span></div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3 mb-4">
              <a href="{{ route('success') }}" class="btn btn-success px-4 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </form>
      </div>
    </section>
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