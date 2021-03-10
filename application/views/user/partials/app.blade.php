<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Credia.id | Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ base_url('server/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ base_url('server/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ base_url('server/css/datatables/jquery.datatables.css')}}">
    <link rel="stylesheet" href="{{ base_url('server/css/datatables/button.css')}}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ base_url('server/css/style.css')}}">
    <link rel="stylesheet" href="{{ base_url('server/css/custom.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ base_url('server/images/favicon.png')}}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('user.partials.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('user.partials.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi mdi-home"></i>
                            </span>
                            Selamat datang di credia.id
                        </h3>
                    </div>
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('user.partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ base_url('server/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ base_url('server/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{ base_url('server/js/datatables/jquery.datatables.js')}}"></script>
    <script src="{{ base_url('server/js/datatables/button.datatables.js')}}"></script>
    <script src="{{ base_url('server/js/datatables/print.button.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    {{-- <script src="{{ base_url('server/js/off-canvas.js')}}"></script>
    <script src="{{ base_url('server/js/misc.js')}}"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ base_url('server/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    @yield('js')
</body>

</html>
