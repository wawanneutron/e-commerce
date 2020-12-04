@extends('layouts.app')

@section('content')
  <div class="page-content page-details">
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
                  <li class="breadcrumb-item active">Product Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- gallery -->
      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].url"
                  alt=""
                  class="w-100 main-image"
                />
              </transition>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
              <div class="row justify-content-center">
                <div
                  class="col-5 col-md-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="200"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      alt=""
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- content-detail -->
      <div class="store-content-detail" data-aos="fade-up">
        <!-- judul-deskripsi-product -->
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Wawan setiawan</div>
                <div class="price">$1,409</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="{{ route('cart') }}"
                  class="btn btn-success px-4 text-white btn-block mt-2 mb-3"
                  >Add to Cart</a
                >
              </div>
            </div>
          </div>
        </section>
        <!-- deskripsi content product -->
        <section
          class="store-description"
          data-aos="fade-out"
          data-aos-delay="200"
        >
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quibusdam blanditiis voluptate obcaecati pariatur, minus
                  libero iusto distinctio corrupti, sed repellat nobis
                  repudiandae enim officiis, dolorum atque nemo! Consequatur,
                  eaque est. tempore aperiam modi tenetur illum, recusandae
                  consectetur animi. Quas exercitationem deleniti recusandae
                  aliquam. Animi optio non dolor in dignissimos? Sit, blanditiis
                  excepturi.
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                  porro fuga, eos nihil sint officia! Nam omnis nihil
                  repudiandae minus amet? Voluptatum quo sed provident quod a
                  qui neque voluptas? Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Cum architecto quia minima rerum adipisci
                  iste eaque dignissimos ut consequatur et culpa rem sunt dicta
                  nisi optio eos ipsa .
                </p>
              </div>
            </div>
          </div>
        </section>
        <!--review-product -->
        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="col-lg-8 mt-3 mb-3">
                  <h5>Customer Review (3)</h5>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/ic_testi1.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Fajrin Trisetiawati</h5>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Sunt commodi eveniet cupiditate iusto laborum esse,
                      accusamus consequuntur libero iure quibusdam?
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/ic_testi2.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Amelia</h5>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Repudiandae incidunt enim odit, commodi explicabo sit
                      dolorum nesciunt ea velit pariatur facere exercitationem
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/ic_testi3.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Putri</h5>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Consectetur, blanditiis! Lorem ipsum dolor sit amet.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>    
@endsection

@push('addon-script')
    <script src="{{ url('/vendor/vue/vue.js') }}"></script>
    <script>
      var Gallery = new Vue({
        el: "#gallery",

        mounted() {
          AOS.init();
        },

        data: {
          activePhoto: 0,
          photos: [
            {
              id: 1,
              url: "/images/pic_detail1.jpg",
            },
            {
              id: 2,
              url: "/images/pic_detail2.png",
            },
            {
              id: 3,
              url: "/images/pic_detail5.jpg",
            },
            {
              id: 4,
              url: "/images/pic_detail3.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush