
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('/') }}admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('/') }}admin/images/favicon.png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    @include('admin.includes.navbar-top.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.includes.sidebar-left.sidebar')
      <!-- partial -->
       @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('/') }}admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{ asset('/') }}admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('/') }}admin/js/off-canvas.js"></script>

  <script src="{{ asset('/') }}admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('/') }}admin/js/dashboard.js"></script>
  <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>
