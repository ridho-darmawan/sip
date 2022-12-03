
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <style>
         .avatar {
  width: 110px;
  /* margin-top: -60px; */
  overflow: hidden;
  border: 3px solid #fff;
  border-radius: 50%;
}
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Suistanable Income Project</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/templatemo-host-cloud.css')}}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/owl.css')}}">
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('homepage')}}"><h2>SIP</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{route('homepage')}}">Beranda
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('faq-home') ? 'active' : '' }}" href="{{route('faq.homepage')}}">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('jenjang-karir') ? 'active' : '' }}" href="{{route('jenjang-karir')}}">Jenjang Karir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('laporan') ? 'active' : '' }}" href="{{route('laporan')}}">Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('testimonial') ? 'active' : '' }}" href="{{route('testimonial')}}">Testimonial</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
              <li><a href="{{route('login')}}">Masuk</a></li>
              <li><a href="{{route('register')}}">Daftar</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->

    @yield('content')



    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>Host Cloud is provided by TemplateMo for free of charge. Anyone can download and use this CSS Bootstrap template for commercial purposes.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Hosting Plans</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Basic Cloud 5X</a></li>
                <li><a href="#">Cloud VPS 10X</a></li>
                <li><a href="#">Advanced Cloud</a></li>
                <li><a href="#">Custom Designs</a></li>
                <li><a href="#">Special Solutions</a></li>
              </ul>
            </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Cloud Hosting Platform</a></li>
                <li><a href="#">Light Speed Zone</a></li>
                <li><a href="#">Content Delivery Network</a></li>
                <li><a href="#">Customer Support</a></li>
                <li><a href="#">Latest News</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">010-020-0560</a></li>
                <li>Email: <a href="#">mail@company.com</a></li>
                <li>Support: <a href="#">support@company.com</a></li>
                <li>Website: <a href="#">www.company.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 Cloud Hosting Company
				- Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('template/assets/js/custom.js')}}"></script>
    <script src="{{ asset('template/assets/js/owl.js')}}"></script>
    <script src="{{ asset('template/assets/js/accordions.js')}}"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
