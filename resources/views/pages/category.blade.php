@extends('layouts.app')
@section('content')
  <!-- Page content -->
    <div class="page-content page-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
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
            <h5>All Products</h5>
          </div>
        </div>
        <div class="row">
          @php $incrementProducts = 0 @endphp 
          @forelse ($products as $product)
              <div
              class="col-6 col-md-3 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementProducts += 100 }}"
              >
              <a href="{{ route('details', $product->slug) }}" class="componet-products d-block">
                <div class="products-thumbnail">
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
            <div class="container">
              <div class="col-12 justify-content-center text-center alert alert-danger" data-aos="fade-up">
                <strong style="font-style: italic;">Products not found</strong>
              </div>
           </div>
          @endforelse
        </div>
      </div>
    </section>
@endsection

