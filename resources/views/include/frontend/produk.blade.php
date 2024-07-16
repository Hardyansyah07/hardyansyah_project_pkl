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
   <link rel="stylesheet" href="{{asset('frontend/assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}">
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
  @include('include.frontend.header')
   <!-- header-area-end -->
   <!-- sidebar-menu-area -->
   @include('include.frontend.sidebar')
   <!-- sidebar-menu-area-end -->
   <!-- main-area-start -->
   <main>
      <!-- product-filter-area-start -->
      <div class="product-filter-area pt-65 pb-80">
         <div class="container">
            <div class="product-filter-content mb-40">
               <div class="row align-items-center">
                  <div class="col-sm-6">
                     <div class="product-item-count">
                        <span><b><h2> Products </h2></b></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                        @foreach($produk as $item)
                        <div class="col">
                            <div class="tpproduct pb-15 mb-30">
                                <div class="tpproduct__thumb p-relative">
                                    <a href="{{url('/shop')}}">
                                        <img src="{{asset('/images/produk/' . $item->gambar)}}" style="height: 250px;" alt="product-thumb">
                                    </a>
                                    <div class="tpproduct__thumb-action">
                                        <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                        <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                        <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="tpproduct__content">
                                    <h3 class="tpproduct__title"><a href="shop-details.html">{{ $item->nama_produk }}</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                        <div class="tpproduct__priceinfo-list">
                                            <span>{{ $item->harga }}</span>
                                        </div>
                                        <div class="tpproduct__cart">
                                            <a href="#"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="basic-pagination text-center">
                     <nav>
                        <ul>
                           <li>
                              <a href="shop.html">
                                 <i class="fal fa-long-arrow-left"></i>
                              </a>
                           </li>
                           <li>
                              <a href="shop.html">01</a>
                           </li>
                           <li>
                              <span class="current">02</span>
                           </li>
                           <li>
                              <a href="shop.html">- - -</a>
                           </li>
                           <li>
                              <a href="shop.html">07</a>
                           </li>
                           <li>
                              <a href="shop.html">08</a>
                           </li>
                           <li>
                              <a href="shop.html">
                                 <i class="fal fa-long-arrow-right"></i>
                              </a>
                           </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
          </div>
      </div>
      <!-- product-filter-area-end -->

   </main>
   <!-- main-area-end -->

   <!-- footer-area-start -->
   <footer>
      <div class="footer-area secondary-footer black-bg-2 pt-65">
         <div class="container">
            <div class="main-footer pb-15 mb-30">
               <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="footer-widget footer-col-1 mb-40">
                        <div class="footer-logo mb-30">
                           <a href="index.html" style="color: green; font-size: 200%;">Craft Corner</a>
                        </div>
                        <div class="footer-content">
                           <p>Elegant pink origami design three <br> dimensional view and decoration co-exist. <br>
                              Great for adding a decorative touch to <br> any room’s decor.</p>
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
                              <li><a href="contact.html">Delivery Infomation</a></li>
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
                  <div class="col-lg-3 col-md-8">
                     <div class="footer-widget footer-col-5 mb-40">
                        <h4 class="footer-widget__title mb-30">Popular Keywords</h4>
                        <div class="footer-widget__links keyword">
                           <a href="shop.html">Makeup</a>
                           <a href="shop.html">Dresses For Girls</a>
                           <a href="shop.html">T-Shirts</a>
                           <a href="shop.html">Sandals</a>
                           <a href="shop.html">Headphones</a>
                           <a href="shop.html">Baby dolls</a>
                           <a href="shop.html">Blazers</a>
                           <a href="shop.html">For Men</a>
                           <a href="shop.html">Handbags</a>
                           <a href="shop.html">Ladies Watches</a>
                           <a href="shop.html">Bags</a>
                           <a href="shop.html">Sport Shoes</a>
                           <a href="shop.html">Reebok Shoes</a>
                           <a href="shop.html">Puma Shoes</a>
                           <a href="shop.html">Boxers</a>
                           <a href="shop.html">Wallets</a>
                           <a href="shop.html">Tops</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-cta pb-20">
               <div class="row justify-content-between">
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
         <div class="footer-copyright black-bg-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-7 col-md-5">
                     <div class="footer-copyright__content">
                        <span>Copyright 2022 <a href="index.html">©CraftCorner</a>. All rights reserved. Powered by <a
                              href="https://themeforest.net/user/theme_pure/portfolio">Theme_Pure</a>.</span>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-5 col-md-7">
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
   <script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
   <script src="{{asset('frontend/assets/js/meanmenu.js')}}"></script>
   <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>