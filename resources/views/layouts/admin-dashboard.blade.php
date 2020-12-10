<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    {{-- title --}}
    @include('includes.admin-title')

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.admin-style')
    @stack('addon-style')
  </head>

  <body class="dashboard-color-fixed">
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">

        {{-- sidebar --}}
        @include('includes.dashboard.admin-sidebar')

        <!--pgae content -->
        <div id="page-content-wrapper">
          {{-- alert --}}
          @include('includes.dashboard.alert')
          
          {{-- navbar --}}
          @include('includes.dashboard.admin-navbar')
          
          {{-- content --}}
          @yield('content')
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.admin-script')
    @stack('addon-script')
  </body>
</html>
