<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Craft Corner</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/logo/favicon.png')}}">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/spacing.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
   </head>
   <body>

      <!-- preloader -->
      <div id="preloader">
         <div class="preloader">
             <span></span>
             <span></span>
         </div>
     </div>
     <!-- preloader end  -->

      <!-- Scroll-top -->
         <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
         </button>
      <!-- Scroll-top-end-->

      <!-- header-area-start -->

      <!-- header-area-end -->

      <!-- header-md-lg-area -->
        @include('include.frontend.header')
      <!-- header-md-lg-area -->

      <!-- sidebar-menu-area -->
      @include('include.frontend.sidebar')
      <!-- sidebar-menu-area-end -->

      <!-- header-cart-start -->
      <!-- header-cart-end -->

      <!-- main-area-start -->
      <main>
        @yield('content')
      </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
      <footer>
         <div class="footer-area theme-bg pt-65">
            <div class="container">
               <div class="main-footer pb-15 mb-30">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-1 mb-40">
                           <div class="footer-logo mb-30">
                              <a href="index.html" style="color: green; font-size: 200%;">Craft Corner</a>
                           </div>
                           <div class="footer-content">
                              <p>Elegant pink origami design three <br> dimensional view and decoration co-exist. <br> Great for adding a decorative touch to <br> any room’s decor.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-2 ml-30 mb-40">
                           <h4 class="footer-widget__title mb-30">Information</h4>
                           <div class="footer-widget__links">
                              <ul>
                                 <li><a href="#">Custom Service</a></li>
                                 <li><a href="#">FAQs</a></li>
                                 <li><a href="track.html">Ordering Tracking</a></li>
                                 <li><a href="contact.html">Contacts</a></li>
                                 <li><a href="#">Events</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-3 mb-40">
                           <h4 class="footer-widget__title mb-30">My Account</h4>
                           <div class="footer-widget__links">
                              <ul>
                                 <li><a href="#">Delivery Information</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Discount</a></li>
                                 <li><a href="#">Custom Service</a></li>
                                 <li><a href="#">Terms & Condition</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget footer-col-4 mb-40">
                           <h4 class="footer-widget__title mb-30">Social Network</h4>
                           <div class="footer-widget__links">
                              <ul>
                                 <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                 <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                 <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li>
                                 <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="footer-widget footer-col-5 mb-40">
                           <h4 class="footer-widget__title mb-30">Get Newsletter</h4>
                           <p>Get on the list and get 10% off your first order!</p>
                           <div class="footer-widget__newsletter">
                              <form action="#">
                                 <input type="email" placeholder="Enter email address">
                                 <button class="footer-widget__fw-news-btn tpsecondary-btn">Subscribe Now<i class="fal fa-long-arrow-right"></i></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer-cta pb-20">
                  <div class="row justify-content-between align-items-center">
                     <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-cta__contact">
                           <div class="footer-cta__icon">
                              <i class="far fa-phone"></i>
                           </div>
                           <div class="footer-cta__text">
                              <a href="tel:0123456">980. 029. 666. 99</a>
                              <span>Working 8:00 - 22:00</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                        <div class="footer-cta__source">
                           <div class="footer-cta__source-content">
                              <h4 class="footer-cta__source-title">Download App on Mobile</h4>
                              <p>15% discount on your first purchase</p>
                           </div>
                           <div class="footer-cta__source-thumb">
                              <a href="#"><img src="{{asset('frontend/assets/img/footer/f-google.jpg')}}" alt="google"></a>
                              <a href="#"><img src="{{asset('frontend/assets/img/footer/f-app.jpg')}}" alt="app"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-copyright footer-bg">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-7 col-md-5 col-sm-12">
                        <div class="footer-copyright__content">
                           <span>Copyright 2022 <a href="index.html">©CraftCorner</a>. All rights reserved. Powered by <a href="https://themeforest.net/user/theme_pure/portfolio">Theme_Pure</a>.</span>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-5 col-md-7 col-sm-12">
                        <div class="footer-copyright__brand">
                           <img src="{{asset('frontend/assets/img/footer/f-brand-icon-01.png')}}" alt="footer-brand">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer-area-end -->



      <!-- JS here -->
      <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
      <script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
      <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/swiper-bundle.js')}}"></script>
      <script src="{{asset('frontend/assets/js/slick.js')}}"></script>
      <script src="{{asset('frontend/assets/js/magnific-popup.js')}}"></script>
      <script src="{{asset('frontend/assets/js/nice-select.js')}}"></script>
      <script src="{{asset('frontend/assets/js/counterup.js')}}"></script>
      <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
      <script src="{{asset('frontend/assets/js/isotope-pkgd.js')}}"></script>
      <script src="{{asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{asset('frontend/assets/js/countdown.js')}}"></script>
      <script src="{{asset('frontend/assets/js/ajax-form.js')}}"></script>
      <script src="{{asset('frontend/assets/js/meanmenu.js')}}"></script>
      <script src="{{asset('frontend/assets/js/jquery.knob.js')}}"></script>
      <script src="{{asset('frontend/assets/js/main.js')}}"></script>
   </body>
</html>