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
    @include('includes.title')

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>

  <body class="dashboard-color-fixed">
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">

        {{-- sidebar --}}
        @include('includes.dashboard.sidebar')

        <!--pgae content -->
        <div id="page-content-wrapper">
          
          {{-- navbar --}}
          @include('includes.dashboard.navbar')

          {{-- alert --}}
          @include('includes.dashboard.alert')
          
          {{-- content --}}
          @yield('content')
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
