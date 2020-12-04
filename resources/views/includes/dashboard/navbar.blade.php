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
        <ul class="navbar-nav ml-auto d-none d-md-flex">
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
            <div class="dropdown-menu text-black-50">
              <a href="/index.html" class="dropdown-item mb-2"> Home</a>
              <a href="/login.html" class="dropdown-item text-black-50"
                >Logout</a
              >
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
        <ul class="navbar-nav d-block d-lg-none d-md-none">
          <li class="nav-item">
            <a href="#" class="nav-link"> Hi, Wawan </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-inline-block"> Home </a>
          </li>
          <hr />
          <li class="nav-item">
            <a href="/login.html" class="nav-link d-inline-block">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>