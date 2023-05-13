<!doctype html>
<html lang="en">
  <head>
    <title>LuxuryHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

    <!-- Pannellum library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.css"
    integrity="sha512-UoT/Ca6+2kRekuB1IDZgwtDt0ZUfsweWmyNhMqhG4hpnf7sFnhrLrO0zHJr2vFp7eZEvJ3FN58dhVx+YMJMt2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body>

    <!-- header -->
    <header role="banner">

      <nav class="navbar navbar-expand-md navbar-dark bg-light ">
        <div class="container">
          <a class="navbar-brand" href="{{ route('homepage') }}"><img style="height: 50px" src="/imgblade/Logo2.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light " id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0 d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link {{(Route::currentRouteName()=='homepage') ? 'active': ''}}" href="{{ route('homepage') }}">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{(Route::currentRouteName()=='rooms' ) ? 'active': ''}}" href="rooms.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('ui.rooms')}}</a>
                <div class="dropdown-menu mt-1" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ route('rooms') }}">{{__('ui.viewall')}}</a>
                  <a class="dropdown-item" href="rooms.html">Presidential Room</a>
                  <a class="dropdown-item" href="rooms.html">Luxury Room</a>
                  <a class="dropdown-item" href="rooms.html">Deluxe Room</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link {{(Route::currentRouteName()=='about') ? 'active': ''}}" href="{{ route('about') }}">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{(Route::currentRouteName()=='contactUs') ? 'active': ''}}" href="{{ route('contactUs') }}">{{__('ui.contactus')}}</a>
              </li>

              <li class="nav-item">
                <p class="my-0 py-0" style="margin: 0px 7px 0px 7px; color:rgba(255, 255, 255, 0.5)">|</p>
              </li>

              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('ui.language')}}</a>
                <div class="dropdown-menu mt-1" aria-labelledby="dropdown04">
                  <a class="dropdown-item  px-3" href="rooms.html">
                    <form action="{{route('setLocale', 'it')}}" class="d-inline  m-0 p-0" method="post">
                      @csrf
                      <button type="submit bg-transparent m-0 p-0" style="border: 0px; background:transparent">IT</button>
                    </form>
                  </a>
                  <a class="dropdown-item  px-3" href="rooms.html">
                    <form action="{{route('setLocale', 'en')}}" class="d-inline  m-0 p-0" method="post">
                      @csrf
                      <button type="submit bg-transparent m-0 p-0" style="border: 0px; background:transparent">EN</button>
                    </form>
                  </a>
                  <a class="dropdown-item  px-3" href="rooms.html">
                    <form action="{{route('setLocale', 'es')}}" class="d-inline  m-0 p-0" method="post">
                      @csrf
                      <button type="submit bg-transparent m-0 p-0" style="border: 0px; background:transparent">ES</button>
                    </form>
                  </a>
                </div>
              </li>

               <li class="nav-item cta">
                <a class="nav-link mt-0 {{(Route::currentRouteName()=='booking') ? 'active': ''}}" href="{{ route('booking') }}"><span>{{__('ui.booknow')}}</span></a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    {{$slot}}

    {{-- google maps --}}
    <div id="map"></div>

    {{-- footer --}}
    <footer class="site-footer">
      <div class="container containerfooter">
        <div class="row mb-sm-0 mb-5">
          <div class="col-md-4">
            <h3>{{__('ui.phonesupport')}}</h3>
            <p>24/7 {{__('ui.callusnow')}}</p>
            <p class="">+39 333 747 8964</p>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <h3>{{__('ui.hereweare')}}</h3>
            <p>Via vittorio veneto 25/c</p>
            <p>70131, Bari</p>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <h3>{{__('ui.connectwhithus')}}</h3>
            <p>{{__('ui.newsletter')}}</p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>

            </form>
          </div>
        </div>

      </div>
    </footer>
    {{-- end footer --}}

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.js"
    integrity="sha512-EmZuy6vd0ns9wP+3l1hETKq/vNGELFRuLfazPnKKBbDpgZL0sZ7qyao5KgVbGJKOWlAFPNn6G9naB/8WnKN43Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    {{-- google maps --}}
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTAn5NqBCBcaL2Sw-VNdc5koj8dBWjMsU&callback=initMap"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <script>
      $('#arrival_date, #departure_date').datepicker({});
    </script>



    <script src="js/main.js"></script>
    </body>
</html>