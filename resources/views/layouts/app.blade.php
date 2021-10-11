<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="/{{url('assets/fontawesome/css/all.css')}}" rel="stylesheet">
    <!--load all styles -->
    <link href="{{url('assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{url('assets/fontawesome/css/brands.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/arsitek/Pe-icon-7-stroke.css')}}">
    <link href="{{url('assets/fontawesome/css/solid.css')}}" rel="stylesheet">
    <style>
        body {
            background-color: #000058 !important;
        }

        #header {
            text-align: center;
            color: white;
            font-size: 24px;
            font-weight: 500;
            position: relative;
        }

        #header p {
            line-height: 2;
            margin-bottom: 0;
        }

        .header-left {
            position: absolute;
            width: 80px;
            left: 5%;
        }

        .header-right {
            position: absolute;
            width: 80px;
            right: 5%;
        }

        @media only screen and (max-width: 768px) {
            body {
                padding-left: 10px;
                padding-right: 10px;
            }

            #header .first {
                padding-top: 130px;
            }

            .header-left {
                width: 70px;
            }

            .header-right {
                width: 70px;
            }
        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="pt-5">
        <div id="header">
            <img class="header-left" src="https://seeklogo.com/images/D/dishub-logo-8BBAFD2277-seeklogo.com.png" alt="">
            <img class="header-right" src="https://www.kla.id/wp-content/uploads/2018/03/LOGO-KABUPATEN-SAMBAS.png" alt="">
            <p class="first">LAYANAN PENGADUAN PENERANGAN JALAN UMUM</p>
            <p>KABUPATEN SAMBAS</p>

        </div>

        <main class="py-4">
            @yield('content')

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            @stack('scripts')
        </main>
    </div>
</body>

</html>
