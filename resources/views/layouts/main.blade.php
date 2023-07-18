<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Senjani Photography</title>
 
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('rettro-main/assets/img/favicon.ico')}}">
    
    <!-- CSS here -->
    
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('rettro-main/assets/css/style.css') }}">
</head>
<body style=" overflow-x: hidden;">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('storage/post-image/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('storage/post-image/logo.png') }}" style="width:150px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                         <div class="main-menu black-menu menu-bg-white d-none d-lg-block">
                            <div class="hamburger hamburger--collapse">
                               <div class="hamburger-box">
                                  <div class="hamburger-inner"></div>
                              </div>
                          </div>
                          <nav class="hamburger-menu">
                           <ul id="navigation">
                              <li><a href="/">Home</a></li>
                              <li><a href="/profil">About</a></li>
                              <li><a href="/galery-home">Portfolio</a></li>
                              <li><a href="/cek">Package</a></li>
                              @if(Auth::check()&& auth()->user()->level == "Customer")
                             {{--  <li><a href="/create">Pemesanan</a></li> --}}
                              <li><a href="/riwayat">Riwayat</a></li>
                              <li><a href="/rekeningbayar">Rekening</a></li>
                              @endif
                             
                           
                            @if(Auth::check()&& auth()->user()->level == "Customer")
                              <li>  <form action="/logout" method="POST">
                                        @csrf
                                        <button class="border-btn get-btn">Logout</button>
                                    </form>
                                </li>
                                @else
                               <li> <a href="login-home">Login / Daftar</a>  </li>
                                @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Header End -->
</header>
<main>
    <!-- Start slider -->
 

      @yield('container')
 
</main>
<footer>
 <div class="footer-wrappper">
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-footer-caption mb-50 text-center">
                        <!-- logo -->
                        <div class="footer-logo mb-25">
                            <a href="/"><img src="{{ asset('storage/post-image/logo2.png') }}" style="width:200px" alt=""></a>
                        </div>
                        <!-- meNU -->
                        <div class="main-menu2">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/profil">About</a></li>
                                    <li><a href="/galery">Portfolio</a></li>
                                    <li><a href="/paket">Package</a></li> 
                                </ul>
                            </nav>
                        </div>
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Senjani Photography</a>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End-->
  </div>
</footer>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{ asset('rettro-main/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('rettro-main/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('rettro-main/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('rettro-main/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('rettro-main/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/animated.headline.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{ asset('rettro-main/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('rettro-main/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{ asset('rettro-main/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('rettro-main/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{ asset('rettro-main/assets/js/contact.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/jquery.form.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/mail-script.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('rettro-main/assets/js/plugins.js')}}"></script>
<script src="{{ asset('rettro-main/assets/js/main.js')}}"></script>

</body>
</html>