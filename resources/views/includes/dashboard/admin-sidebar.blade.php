<!-- sidebar -->
  <div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <a href="{{ route('dashboard') }}">
        <img src="{{ url('/images/admin.svg') }}" alt="" class="my-3" width="70px;" />
      </a>
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('admin-dashboard') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/dashboard')) ? 'active' : '' }}"
        >Dashboard</a
      >
      <a
        href="{{ route('dashboard-products.index') }}"
        class="list-group-item list-group-item-action {{ request()->is('admin/dashboard-products', 'admin/dashboard-products/create', 'admin/dashboard-products/{id}/edit') ? 'active' : '' }}"  
        >Products</a
      >
      <a
        href="{{ route('dashboard-category.index') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/dashboard-category', 'admin/dashboard-category/create', 'admin/dashboard-category/{id}/edit')) ? 'active' : '' }}"  
        >Categories</a
      >
      <a
        href="#"
        class="list-group-item list-group-item-action"
        >Transactions</a
      >
      <a
        href="{{ route('account-user.index') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/account-user', 'admin/account-user/create')) ? 'active' : '' }}"
        >Users</a
      >
    </div>
  </div>

@push('addon-script')
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
@endpush