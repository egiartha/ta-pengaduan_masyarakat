<!doctype html>
<html lang="en">
<style>
    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-responsive {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .dropdown-toggle:hover::after {
        display: inline-block !important;
        width: 0 !important;
        height: 0 !important;
        margin-left: .255em !important;
        vertical-align: .255em !important;
        content: "" !important;
        border-top: .3em solid !important;
        border-right: .3em solid transparent !important;
        border-bottom: 0 !important;
        border-left: .3em solid transparent !important;
        margin-bottom: 0 !important;
        padding-top: 0 !important;
    }

    .img-top {
        width: 30px;
        height: 30px;
        object-fit: cover;
        border-radius: 999px;
        margin-right: 10px;
    }

    .navbar-custom {
        background-color: rgba(22, 23, 67, 0%);
    }

    #intro {
        margin-top: -84px !important;
    }

    .navbar-brand-custom,
    .nav-link-custom {
        color: white !important;
    }

    @media only screen and (max-width: 768px) {
        .navbar-custom {
            background-color: rgba(22, 23, 67 100%) !important;
        }
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('assets/landing-page/css/style.css')}}">
    @yield('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="/{{url('assets/fontawesome/css/all.css')}}" rel="stylesheet">
    <!--load all styles -->
    <link href="{{url('assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{url('assets/fontawesome/css/brands.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/arsitek/Pe-icon-7-stroke.css')}}">
    <link href="{{url('assets/fontawesome/css/solid.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-custom navbar-dark">
        <div class="container">
            <a class="navbar-brand navbar-brand-custom" href="/">
                <img src="https://seeklogo.com/images/D/dishub-logo-8BBAFD2277-seeklogo.com.png" width="50" height="100%" class="d-inline-block align-center" alt="">
                DINAS PERHUBUNGAN
            </a>
            <button id="toggler" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" aria-current="page" href="{{url('/index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil Kami
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/visi')}}">Visi Misi</a>
                            <a class="dropdown-item" href="{{url('/tentang')}}">Kontak Kami</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lapor
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/lapor')}}">Lapor Dan Aspirasi</a>
                            <a class="dropdown-item" href="{{url('/data_laporan')}}">Data Laporan</a>
                        </div>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->foto_profil == '0')
                            <img src="{{url('assets/img/avatar.png')}}" alt="AdminLTE Logo" class="img-top">
                            @else
                            <img src="{{url('/database/foto_profil/'. Auth::user()->foto_profil)}}" alt="" class="img-top">
                            @endif
                            {{Auth::user()->nama}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/profil')}}">Profil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i> &nbsp;{{ __('Logout') }}
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('login') }}">
                            <i class="fas fa-sign-out-alt"></i> Login
                        </a>
                    </li>
                    @endif
            </div>
            </ul>
        </div>
        </div>
    </nav>

    <section id="intro">


        @yield('content')

        <footer>
            <!--==========================
    Footer
  ============================-->
            <footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 footer-info">
                                <h3>Dinas Perhubungan Kabupaten Sambas</h3>
                                <p>Pantang Pulang Sebelum Terang</p>
                            </div>

                            <div class="col-lg-4 col-md-6 footer-contact">
                                <h4>Contact Us</h4>
                                <p1>

                                    Jl. Pembangunan Sambas <br>
                                    Desa Dalam Kaum,br>
                                    Kecamatan Sambas<br>
                                    Kabupaten Sambas <br>
                                    Kalimantan Barat (79462)<br>
                                    <strong>Phone:</strong> +1 5589 55488 55 <br>
                                    <strong>Email:</strong> dishubsambas@gmail.com<br>
                                </p1>
                                <h4 style="margin-top: 20px;">Jam Kerja</h4>
                                <p1>
                                    Senin - Kamis: 08.00 - 16.00<br>
                                    Jum'at: 08.00 - 11.00
                                </p1>
                            </div>
                            <div class="col-lg-4 col-md-6 footer-contact">
                                <h4>FLLAJ SAMBAS</h4>
                                <p1>
                                    Forum Lalu Lintas dan Angkutan Jalan sebagaimana disebutkan pada Peraturan Pemerintah Republik Indonesia Nomor 37 Tahun 2011 Tentang Forum Lalu Lintas Dan Angkutan Jalan adalah wahana koordinasi antar instansi penyelenggara lalu lintas dan angkutan jalan.
                                </p1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        2021 &copy; Copyright <strong>Dishub Sambas</strong>. All Rights Reserved
                    </div>

                </div>
            </footer><!-- #footer -->
        </footer>

        @include('sweetalert::alert')


        <script type="text/javascript" src="{{url('assets/arsitek/scripts/main.js')}}"></script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
    if (window.location.pathname === '/index') {
        function EasyPeasyParallax() {
            let scrollPos = $(document).scrollTop();
            let targetOpacity = 1;
            scrollPos < 1000 ? targetOpacity = ((scrollPos * 100) / 10) / 2500 : targetOpacity;
            $('.navbar-custom').css({
                'background-color': 'rgba(22, 23, 67, ' + targetOpacity + ')'
            });
        };

        $(function() {
            $(window).scroll(function() {
                EasyPeasyParallax();
            });
        })
    } else {
        $('.navbar-custom').css({
            'background-color': 'rgba(22, 23, 67,1)'
        });
    }

    $('#toggler').click(function() {
        if ($(this).hasClass('collapsed')) {
            $('.navbar-custom').css({
                'background-color': 'rgba(22, 23, 67,1)'
            });
        }
    })
</script>
@stack('scripts')
</body>

</html>
