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
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img
                  src="/images/categories-gedgets.svg"
                  alt="gedget"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Gadgets</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img
                  src="/images/categories_furnitures.svg"
                  alt="gedget"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Furniture</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img
                  src="/images/categories-makeup.svg"
                  alt="gedget"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Make Up</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img
                  src="/images/categories-sneakers.svg"
                  alt="gedget"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Sneaker</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img
                  src="/images/categories-tools.svg"
                  alt="gedget"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Tools</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img
                  src="/images/categories-babyes.svg"
                  alt="gedget"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div>
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
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image1.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image2.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Orange Bogotta</p>
            </div>
            <div class="product-price">
              <p>$94,509</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image3.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image4.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image5.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image6.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="700"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image7.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="800"
        >
          <a href="{{ route('details') }}" class="componet-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="background-image: url('/images/image8.jpg')"
              ></div>
            </div>
            <div class="product-text">
              <p>Apple Watch 4</p>
            </div>
            <div class="product-price">
              <p>$890</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection