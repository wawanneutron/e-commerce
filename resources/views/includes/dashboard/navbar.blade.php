<!-- navbar -->
  <nav
    class="navbar navbar-expand-md navbar-light navbar-store fixed-top"
    data-aos="fade-down"
    >
    <div class="container-fluid">
      <button
        class="btn btn-secondary d-md-none mr-auto mr-2"
        id="menu-toggle"
      >
        &laquo; Menu
      </button>
      <button
        class="navbar-toggler ml-auto"
        type="button"
        data-toggle="collapse"
        data-target="#navbarDashboard"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarDashboard">
        <!--desktop menu -->
        <ul class="navbar-nav ml-auto d-none d-md-flex ">
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
              Hi, {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu text-black-50">
              <a href="{{ route('home') }}" class="dropdown-item mb-2"> Home</a>
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
            <a href="#" class="nav-link d-inline-block mt-2">
              <img src="/images/ic_cart_filed.svg" alt="chart empety" />
              <div class="card-badge">3</div>
            </a>
          </li>
        </ul>
        <!-- mobile menu -->
        <ul class="navbar-nav d-block d-md-none mt-2 mb-2">
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
              Hi, {{ Auth::user()->name }}
              {{-- cart mobile --}}
              <div class="d-inline-block ml-2">
                <img src="/images/ic_cart_filed.svg" alt="chart empety" />
                <div class="card-badge">3</div>
              </div>
            </a>
            <div class="dropdown-menu">
              <a href="{{ route('cart') }}" class="dropdown-item">
                  Cart</a
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
      </div>
    </div>
  </nav>