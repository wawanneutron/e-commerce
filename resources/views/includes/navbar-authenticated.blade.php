@extends('includes.app')

@section('content')
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
  <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/images/logo.svg" alt="logo" class="logo" />
      </a>
      <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
      >
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="/index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                  <a href="/categories.html" class="nav-link"
                      >Categories</a
                  >
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Rewards</a>
              </li>
          </ul>
          <!--desktop menu -->
          <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item dropdown">
                  <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                  >
                      <img
                          src="/images/user_pc.jpg"
                          alt="user"
                          class="rounded-circle mr-2 profile-picture shadow"
                      />
                      Hi, Wawan
                  </a>
                  <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item">
                          Dashboard</a
                      >
                      <a
                          href="/dashboard-account.html"
                          class="dropdown-item"
                          >Settings</a
                      >
                      <hr />
                      <a href="/" class="dropdown-item">Logout</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block mt-2">
                      <img
                          src="/images/shopping_empety.svg"
                          alt="chart empety"
                      />
                  </a>
              </li>
          </ul>
          <!-- mobile menu -->
          <ul class="navbar-nav d-block d-lg-none">
              <li class="nav-item">
                  <a href="#" class="nav-link"> Hi, Wawan </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block">
                      Chart
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>
@endsection