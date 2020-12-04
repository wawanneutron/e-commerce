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
        class="list-group-item list-group-item-action"
        >Dashboard</a
      >
      <a
        href="{{ route('dashboard-product') }}"
        class="list-group-item list-group-item-action"  
        >My Products</a
      >
      <a
        href="{{ route('dashboard-transactions') }}"
        class="list-group-item list-group-item-action"
        >Transactions</a
      >
      <a
        href="{{ route('store-settings') }}"
        class="list-group-item list-group-item-action"
        >Store Settings</a
      >
      <a
        href="{{ route('account-settings') }}"
        class="list-group-item list-group-item-action"
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