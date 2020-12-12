@extends('layouts.app')

@section('content')
  <!-- Page content -->
  <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div
              id="storeCarousel"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  class="active"
                  data-target="#storeCarousel"
                  data-slide-to="0"
                ></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/images/banner.jpg"
                    alt=""
                    class="d-block w-100"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="/images/banner2.jpg"
                    alt=""
                    class="d-block w-100"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="/images/banner3.jpg"
                    alt=""
                    class="d-block w-100"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
            {{-- variabel $incrementCategory for looping data-aos animations  --}}
            @php $incrementCategory = 0 @endphp
          @forelse ($categories as $category)
            <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="{{ $incrementCategory += 100 }}"
            >
              <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="{{ Storage::url($category->photo) }}"
                    alt="gedget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>
          @empty
           <div class="container">
              <div class="col-12 justify-content-center text-center alert alert-danger" data-aos="fade-up">
              <strong style="font-style: italic;">Categories not found</strong>
            </div>
           </div>
          @endforelse
        </div>
      </div>
    </section>
  </div>
  <!-- new products -->
  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>New Products</h5>
        </div>
      </div>
      <div class="row">
        @php $incrementProduct = 0 @endphp
        @forelse ($products as $product)
          <div
            class="col-6 col-md-3 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="{{ $incrementProduct += 100 }}"
            >
            <a href="{{ route('details', $product->slug) }}" class="componet-products d-block">
              <div class="products-thumbnail mb-2">
                <div
                  class="products-image"
                  style="
                    @if ($product->galleries->count())
                      background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                    @else
                      background-color: #eee
                    @endif
                  "
                ></div>
              </div>
              <div class="product-text">
                <p>{{ $product->name }}</p>
              </div>
              <div class="product-price">
                <p>@currency($product->price)</p>
              </div>
            </a>
          </div>
        @empty
            
        @endforelse
      </div>
    </div>
  </section>
@endsection