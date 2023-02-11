<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Go-Auction - {{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="/assets/petugas/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['/assets/petugas/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/petugas/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/petugas/css/atlantis.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="/assets/petugas/css/dashboard.css">
</head>

<body>
    @include('sweetalert::alert')

    <div class="wrapper">
        <div class="main-header">
            @include('components.dashboard.logo-header')

            @include('components.dashboard.navbar')
        </div>

        @include('components.dashboard.sidebar')

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold text-uppercase">{{ $header }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="/assets/petugas/js/core/jquery.3.2.1.min.js"></script>
    <script src="/assets/petugas/js/core/popper.min.js"></script>
    <script src="/assets/petugas/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/petugas/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/assets/petugas/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="/assets/petugas/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="/assets/petugas/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="/assets/petugas/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="/assets/petugas/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="/assets/petugas/js/plugin/datatables/datatables.min.js"></script>

    <!-- Sweet Alert -->
    <script src="/assets/petugas/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="/assets/petugas/js/atlantis.min.js"></script>

    <!-- My JS -->
    <script src="/assets/petugas/js/dashboard.js"></script>
</body>

</html>
