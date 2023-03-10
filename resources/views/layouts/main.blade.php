<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta
            name="description"
            content="Responsive HTML Admin Dashboard Template based on Bootstrap 5"
        />
        <meta name="author" content="NobleUI" />
        <meta
            name="keywords"
            content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
        />

        <!-- Icon -->
        <link rel="icon" href="{{ url('assets/images/ia.png') }}" />

        <title>Sistem Informasi Audit</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <!-- End fonts -->

        <!-- core:css -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendors/core/core.css') }}"
        />
        <!-- endinject -->

        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}"
        />
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')
            }}"
        />
        <!-- endinject -->

        <!-- Layout styles -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/demo1/style.css') }}"
        />
        <!-- End layout styles -->

        <link
            rel="shortcut icon"
            href="{{ asset('assets/images/favicon.png') }}"
        />

        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}"
        />
        <!-- End plugin css for this page -->

        <!-- DataTable -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css'
                )
            }}"
        />
        <!-- end datatable -->

        <link
            rel="stylesheet"
            href="../../../assets/vendors/flatpickr/flatpickr.min.css"
        />
        <link
            rel="stylesheet"
            href="../../../assets/vendors/prismjs/themes/prism.css"
        />
    </head>
    <body>
        @yield('body')

        <!-- core:js -->
        <script src="../assets/vendors/core/core.js"></script>
        <!-- endinject -->

        <!-- Plugin js for this page -->
        <script src="../assets/vendors/flatpickr/flatpickr.min.js"></script>
        <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="../assets/vendors/feather-icons/feather.min.js"></script>
        <script src="../assets/js/template.js"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
        <script src="../assets/js/dashboard-light.js"></script>
        <!-- End custom js for this page -->

        <!-- Plugin js for this page -->
        <script src="../../../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
        <!-- End plugin js for this page -->

        <!-- Custom js for this page -->
        <script src="../../../assets/js/sweet-alert.js"></script>
        <!-- End custom js for this page -->

        <script src="../../../assets/vendors/flatpickr/flatpickr.min.js"></script>
        <script src="../../../assets/js/flatpickr.js"></script>

        <script src="../../../assets/vendors/prismjs/prism.js"></script>
        <script src="../../../assets/vendors/clipboard/clipboard.min.js"></script>
    </body>
</html>
