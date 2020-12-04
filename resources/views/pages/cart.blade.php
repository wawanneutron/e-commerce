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
                <tr>
                  <td style="width: 30%" class="align-middle">
                    <img
                      src="/images/pic_detail1.jpg"
                      alt=""
                      class="cart-image w-100"
                    />
                  </td>
                  <td style="width: 30%" class="align-middle">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Wawan setiawan</div>
                  </td>
                  <td style="width: 25%" class="align-middle">
                    <div class="product-title">$29,112</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 30%" class="align-middle">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%">
                    <img
                      src="/images/pic_detail3.jpg"
                      alt=""
                      class="cart-image w-100"
                    />
                  </td>
                  <td style="width: 30%" class="align-middle">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Fajrin</div>
                  </td>
                  <td style="width: 25%" class="align-middle">
                    <div class="product-title">$43,112</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 30%" class="align-middle">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%" class="align-middle">
                    <img
                      src="/images/pic_detail5.jpg"
                      alt=""
                      class="cart-image w-100"
                    />
                  </td>
                  <td style="width: 30%" class="align-middle">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Amel</div>
                  </td>
                  <td style="width: 25%" class="align-middle">
                    <div class="product-title">$26,112</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 30%" class="align-middle">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
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
              <select name="province" id="province" class="form-control">
                <option value="West Java">West Java</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">City</label>
              <select name="city" id="city" class="form-control">
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
            <div class="product-title"><span>$392,409</span></div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3 mb-4">
            <a href="{{ route('success') }}" class="btn btn-success px-4 btn-block"
              >Checkout Now</a
            >
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection