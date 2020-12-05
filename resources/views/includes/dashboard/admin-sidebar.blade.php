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
        class="list-group-item list-group-item-action"
        >Dashboard</a
      >
      <a
        href="#"
        class="list-group-item list-group-item-action"  
        >Products</a
      >
      <a
        href="#"
        class="list-group-item list-group-item-action"  
        >Categories</a
      >
      <a
        href="#"
        class="list-group-item list-group-item-action"
        >Transactions</a
      >
      <a
        href="{{ route('account-settings') }}"
        class="list-group-item list-group-item-action"
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