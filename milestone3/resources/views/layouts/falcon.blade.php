<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ucfirst(env('APP_NAME'))}} {{ isset($title) ? ' | '.ucfirst($title):''}}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/illustrations/logo.png")}}">
    <link rel="manifest" href="{{asset("assets/img/favicons/manifest.json")}}">
    <meta name="msapplication-TileImage" content="{{asset("assets/img/favicons/mstile-150x150.png")}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="{{asset("assets/js/config.navbar-vertical.js")}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset("assets/lib/perfect-scrollbar/perfect-scrollbar.css")}}" rel="stylesheet">
    <link href="{{asset("assets/lib/datatables-bs4/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css")}}" rel="stylesheet">
    <link href="{{asset("assets/lib/leaflet/leaflet.css")}}" rel="stylesheet">
    <link href="{{asset("assets/lib/leaflet.markercluster/MarkerCluster.css")}}" rel="stylesheet">
    <link href="{{asset("assets/lib/leaflet.markercluster/MarkerCluster.Default.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/theme-dark.css")}}" rel="stylesheet">

  </head>

  <body>
      <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
           @include('layouts.side-navbar')

            <div class="content">
                
                @include('layouts.top-navbar')

                @yield('content')
                
                @include('layouts.footer')
            </div>


        </div>
  </body>
      <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script> -->
    <script src="{{asset("assets/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/lib/@fortawesome/all.min.js")}}"></script>
    <script src="{{asset("assets/lib/stickyfilljs/stickyfill.min.js")}}"></script>
    <script src="{{asset("assets/lib/sticky-kit/sticky-kit.min.js")}}"></script>
    <script src="{{asset("assets/lib/is_js/is.min.js")}}"></script>
    <script src="{{asset("assets/lib/lodash/lodash.min.js")}}"></script>
    <script src="{{asset("assets/lib/perfect-scrollbar/perfect-scrollbar.js")}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="{{asset("assets/lib/chart.js/Chart.min.js")}}"></script>
    <script src="{{asset("assets/lib/datatables/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/lib/datatables-bs4/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/lib/datatables.net-responsive/dataTables.responsive.js")}}"></script>
    <script src="{{asset("assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js")}}"></script>
    <script src="{{asset("assets/lib/leaflet/leaflet.js")}}"></script>
    <script src="{{asset("assets/lib/leaflet.markercluster/leaflet.markercluster.js")}}"></script>
    <script src="{{asset("assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js")}}"></script>
    <script src="{{asset("assets/js/apis.js")}}"></script>
    <script src="{{asset("assets/js/theme.js")}}"></script>

  </body>

</html>