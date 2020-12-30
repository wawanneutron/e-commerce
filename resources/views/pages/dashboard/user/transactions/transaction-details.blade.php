@extends('layouts.dashboard')
@section('alert')
@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
   >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <!-- breadcrumb -->
        <section
          class="store-breadcrumbs"
          data-aos="fade-down"
          data-aos-delay="200"
        >
          <h2 class="dashboard-title">#{{ $detailTransaction->code }}</h2>
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">Recent Transactions</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Product Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </section>
      </div>
      <div class="dashboard-content" id="transactionDetails">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img
                      src="{{ Storage::url($detailTransaction->product->galleries->first()->photos ?? '' ) }}"
                      alt=""
                      style="border-radius: 8px;"
                      class="w-100 mb-3"
                    />
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="row">
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Customer Name</div>
                        <div class="product-subtitle">
                          {{ $detailTransaction->transaction->user->name }}
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Product Name</div>
                        <div class="product-subtitle">
                          {{ $detailTransaction->product->name }}
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">
                          Date of Transaction
                        </div>
                        <div class="product-subtitle">
                          {{ $detailTransaction->created_at }}
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Payment Status</div>
                        <div class="product-subtitle text-danger">
                          {{ $detailTransaction->shipping_status }}
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Total Amount</div>
                        <div class="product-subtitle">Rp. {{ number_format($detailTransaction->transaction->total_price) }}</div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="product-title">Mobile</div>
                        <div class="product-subtitle">
                          {{ $detailTransaction->transaction->user->phone_number }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <form action="{{ route('dashboard-transactions-update', $detailTransaction->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-12 mt-4 mb-3">
                      <h5>Shipping Information</h5>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="product-title">Address I</div>
                      <div class="product-subtitle">
                        {{ $detailTransaction->transaction->user->address_one ?? 'not address' }}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="product-title">Address II</div>
                      <div class="product-subtitle">
                        {{ $detailTransaction->transaction->user->address_two  ?? 'not address'}}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">
                        {{ App\Models\Province::find($detailTransaction->transaction->user->provinces_id)->name ?? 'not address' }}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">
                        {{ App\Models\Regency::find($detailTransaction->transaction->user->regencies_id)->name ?? 'not address' }}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="product-title">Postal Code</div>
                      <div class="product-subtitle">
                        {{ $detailTransaction->transaction->user->zip_code }}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="product-title">Country</div>
                      <div class="product-subtitle">
                        {{ $detailTransaction->transaction->user->country }}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="product-title">Shipping Status</div>
                      <select
                        name="shipping_status"
                        id="status"
                        class="custom-select mt-2"
                        v-model="status"
                      >
                        <option value="UNPAID">Unpaid</option>
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>
                    <template v-if="status  == 'SHIPPING'">
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="product-title mb-2">Input Resi</div>
                        <input
                          type="text"
                          class="form-control"
                          name="resi"
                          v-model="resi"
                        />
                      </div>
                      <div class="col-12 col-md-4 col-md-4 col-lg-3 mt-2">
                        <button
                          type="submit"
                          class="btn btn-success mt-4 btn-block"
                        >
                          Update Resi
                        </button>
                      </div>
                    </template>
                  </div>
                  <div class="row">
                    <div class="col-12 text-right">
                      <button type="submit" class="btn btn-success mt-4">
                        Save Now
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "{{ $detailTransaction->shipping_status }}",
        resi: "{{ $detailTransaction->resi }}",
      },
    });
  </script>
@endpush