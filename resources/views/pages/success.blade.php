@extends('layouts.success')

@section('content')
  <!-- succes -->
  <div class="page-content page-success">
    <section class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 col-md-8 text-center">
            <img src="/images/ic_success.svg" alt="" class="mb-4" />
            <h2>Transaction Processed!</h2>
            <p>
              Silahkan tunggu konfirmasi email dari kami dan kami akan
              menginformasikan resi secept mungkin!
            </p>
            <div>
              <a href="{{ route('dashboard') }}" class="btn btn-success w-50 mt-4"
                >My Dashboard</a
              >
            </div>
            <div>
              <a href="{{ route('home') }}" class="btn btn-signup w-50 mt-3"
                >Go to Shopping</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection