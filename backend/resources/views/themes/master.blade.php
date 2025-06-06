<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- jsvectormap css -->
    <link href="{{ asset('asset/velzon/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('asset/velzon/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('asset/velzon/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('asset/velzon/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('asset/velzon/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('asset/velzon/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('asset/velzon/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="layout-wrapper">

        @include('themes.header')
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width: 100px; height: 100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">
                                    Are you sure you want to remove this
                                    Notification ?
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                                Yes, Delete It!
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        @include('themes.menu')
        <div class="vertical-overlay"></div>
        <div class="main-content">

            @yield('content')

            @include('themes.footer')
        </div>

    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('asset/velzon/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/velzon/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('asset/velzon/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('asset/velzon/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('asset/velzon/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('asset/velzon/assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('asset/velzon/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('asset/velzon/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('asset/velzon/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('asset/velzon/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('asset/velzon/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('asset/velzon/assets/js/app.js') }}"></script>
</body>

</html>
