<!-- navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="{{ url('/images/logo.svg') }}" alt="logo" class="logo" />
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
            <li class="nav-item active">
              <a href="{{ route('home') }}" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('categories') }}" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Rewards</a>
            </li>
            @guest
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
              </li>
              <li class="nav-item">
                <a
                  href="{{ route('login') }}"
                  class="btn btn-success nav-link px-4 text-white"
                  >Sign In</a
                >
              </li>
            @endguest
          </ul>
          @auth
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
                            src="{{ url('/images/user_pc.jpg') }}"
                            alt="user"
                            class="rounded-circle mr-2 profile-picture shadow"
                        />
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">
                            Dashboard</a
                        >
                        <a
                            href="{{ route('account-settings') }}"
                            class="dropdown-item"
                            >Settings</a
                        >
                        <hr />
                        <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" 
                          class="dropdown-item">
                          Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                  <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      @php
                          $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                      @endphp
                      @if ($carts > 0)
                        <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                          <img src="/images/ic_cart_filed.svg" alt="chart empety" />
                          <div class="card-badge">{{ $carts }}</div>
                        </a>
                      @else
                        <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                          <img
                          src="{{ url('/images/shopping_empety.svg') }}"
                          alt="chart empety"
                          />
                        </a>
                      @endif
                  </a>
                </li>
            </ul>
            <!-- mobile menu -->
            <ul class="navbar-nav d-block d-lg-none">
                  <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                  >
                      <img
                          src="{{ url('/images/user_pc.jpg') }}"
                          alt="user"
                          class="rounded-circle mr-2 profile-picture shadow"
                      />
                      {{-- cart mobile --}}
                      <img
                            src="{{ url('/images/shopping_empety.svg') }}"
                            alt="chart empety"
                        />
                      <span class="ml-3">{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu">
                      <a href="{{ route('cart') }}" class="dropdown-item">
                          Cart</a
                      >
                      <a href="{{ route('dashboard') }}" class="dropdown-item">
                          Dashboard</a
                      >
                      <a
                          href="{{ route('account-settings') }}"
                          class="dropdown-item"
                          >Settings</a
                      >
                      <hr />
                      <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" 
                        class="dropdown-item">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                  </div>
              </li>   
            </ul>
          @endauth
        </div>
      </div>
    </nav>