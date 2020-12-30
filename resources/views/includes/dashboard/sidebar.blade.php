<!-- sidebar -->
  <div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <a href="{{ route('dashboard') }}">
        <img src="/images/dashboard_store_logo.svg" alt="" class="my-3" />
      </a>
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}"
        >Dashboard</a
      >
      <a
        href="{{ route('dashboard-product') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard/product*','dashboard/create-product')) ? 'active' : '' }}"  
        >My Products</a
      >
      <a
        href="{{ route('dashboard-transactions') }}"
        class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions', 'dashboard/transaction-details*')) ? 'active' : '' }}"
        >Transactions</a
      >
      <a
        href="{{ route('store-settings') }}"
        class="list-group-item list-group-item-action {{ request()->is('dashboard/store-settings') ? 'active' : '' }}"
        >Store Settings</a
      >
      <a
        href="{{ route('account-settings') }}"
        class="list-group-item list-group-item-action {{ request()->is('dashboard/account-settings') ? 'active' : '' }}"
        >My Account</a
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