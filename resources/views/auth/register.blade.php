@extends('layouts.auth')

@section('content')

<!--page-login -->
<div class="page-content page-auth" id="register">
  <section class="section-store-auth" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center justify-content-center row-login">
        <div class="col-lg-4 col-md-6">
          <h2>
            Memulai untuk jual beli <br />
            dengan cara terbaru
          </h2>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label for="">Full Name</label>
              <input id="name" 
                v-model="name"
                type="text" 
                class="form-control 
                @error('name') is-invalid @enderror" 
                name="name" value="{{ old('name') }}" 
                required 
                autocomplete="name" 
                autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="form-group">
              <label for="">Email Address</label>
              <input id="email"
                v-model="email"
                type="email" 
                class="form-control 
                @error('email') is-invalid @enderror" 
                name="email" value="{{ old('email') }}" 
                required 
                autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input id="password" 
                type="password" 
                class="form-control 
                @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="form-group">
              <label for="">Confirm Password</label>
              <input id="password-confirm" 
                type="password" 
                class="form-control
                @error('password-confirm') is-invalid @enderror" 
                name="password_confirmation" 
                required 
                autocomplete="new-password">
                  @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="form-group mt-3">
              <label>Store</label>
              <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
              <div
                class="custom-control custom-radio custom-control-inline"
              >
                <input
                  type="radio"
                  class="custom-control-input"
                  name="is_store_open"
                  id="openStoreTrue"
                  v-model="is_store_open"
                  :value="true"
                />
                <label for="openStoreTrue" class="custom-control-label"
                  >iya, boleh</label
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
                  v-model="is_store_open"
                  :value="false"
                />
                <label for="openStoreFalse" class="custom-control-label"
                  >Enggak, maksih</label
                >
              </div>
            </div>
            <div class="form-group" v-if="is_store_open">
              <label for="">Nama Toko</label>
              <input id="store_name" 
                v-model="store_name"
                type="text" 
                class="form-control 
                @error('store_name') is-invalid @enderror" 
                name="store_name" value="{{ old('store_name') }}" 
                required 
                autocomplete="store_name" 
                autofocus>
                  @error('store_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="formg-group" v-if="is_store_open">
              <label for="">Category</label>
              <select
                name="categories_id"
                id="category"
                class="custom-select form-control"
              >
                <option value="" disabled>Select Category</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select> 
            </div>
            <div class="btn-register">
              <button type="submit" class="btn btn-success btn-block mt-4"
                >Sign Up Now
              </button>
              <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-3"
                >Back to Sign in</a
              >
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
      Vue.use(Toasted);
      
      var register = new Vue({
        el: "#register",

        mounted() {
          AOS.init();
          this.$toasted.error(
            "Maaf, tampaknya email yang anda masukan sudah terdaftar di sistem kami.",
            {
              position: "top-center",
              className: "rounded",
              duration: 3000,
            }
          );
        },
        data: {
          name: "Wawan Setiawan",
          email: "wawanneutron1331@gmail.com",
          password: "",
          is_store_open: true,
          store_name: "",
        },
      });
    </script>
@endpush
