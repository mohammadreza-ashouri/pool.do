<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ucfirst(env('APP_NAME'))}} {{isset($type)?ucfirst($type):''}}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/illustrations/logo.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/favicons/favicon.ico")}}">
    <link rel="manifest" href="{{asset("assets/img/favicons/manifest.json")}}">
    <meta name="msapplication-TileImage" content="{{asset("assets/img/favicons/mstile-150x150.png")}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="{{asset("assets/js/config.navbar-vertical.js")}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset("assets/lib/perfect-scrollbar/perfect-scrollbar.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/theme-dark.css")}}" rel="stylesheet">

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center no-gutters">
          <div class="col-lg-8 col-xxl-5 py-3"><img class="bg-auth-circle-shape" src="{{asset("assets/img/illustrations/bg-shape.png")}}" alt="" width="250"><img class="bg-auth-circle-shape-2" src="{{asset("assets/img/illustrations/shape-1.png")}}" alt="" width="150">
            <div class="card overflow-hidden z-index-1">
              <div class="card-body p-0">
                <div class="row no-gutters h-100">
                  <div class="col-md-5 text-white text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url({{asset("assets/img/illustrations/half-circle.png")}});">
                      </div>
                      <!--/.bg-holder-->

                      <div class="z-index-1 position-relative"><a class="text-white mb-4 text-sans-serif font-weight-extra-bold fs-4 d-inline-block" href="../../index.html">{{env('APP_NAME')}}</a>
                        <p class="text-white opacity-75">{{env('app_content')}}</p>
                      </div>
                    </div>
                    <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                        @if(isset($type) && $type == 'login')
                        <p>Don't have an account?<br><a class="text-white text-underline" href="{{route('register')}}">Get started!</a></p>
                        @endif

                        @if(isset($type) && $type == 'register')
                        <p>Already have an account?<br><a class="text-white text-underline" href="{{route('login')}}">Login!</a></p>
                        @endif
                        <!-- <p class="mb-0 mt-4 mt-md-5 fs--1 font-weight-semi-bold text-white opacity-75">Read our <a class="text-underline text-white" href="#!">terms</a> and <a class="text-underline text-white" href="#!">conditions </a></p> -->
                    </div>
                  </div>
                  @yield('content')
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/lib/@fortawesome/all.min.js")}}"></script>
    <script src="{{asset("assets/lib/stickyfilljs/stickyfill.min.js")}}"></script>
    <script src="{{asset("assets/lib/sticky-kit/sticky-kit.min.js")}}"></script>
    <script src="{{asset("assets/lib/is_js/is.min.js")}}"></script>
    <script src="{{asset("assets/lib/lodash/lodash.min.js")}}"></script>
    <script src="{{asset("assets/lib/perfect-scrollbar/perfect-scrollbar.js")}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="{{asset("assets/js/theme.js")}}"></script>

  </body>

</html>