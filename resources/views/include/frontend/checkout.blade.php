<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Ninico -  Minimal eCommerce HTML Template</title>
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
   <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/spacing.css')}}">
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
   <header>
      <div class="header-top space-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-8 col-lg-12 col-md-12">
               </div>
               <div class="col-xl-4 d-none d-xl-block">
                  <div class="headertoplag d-flex align-items-center justify-content-end">
                     <div class="headertoplag__lang">
                        <ul>
                           <li>
                              <a href="#">
                                 English
                                 <span><i class="fal fa-angle-down"></i></span>
                              </a>
                              <ul class="header-meta__lang-submenu">
                                 <li>
                                    <a href="#">Arabic</a>
                                 </li>
                                 <li>
                                    <a href="#">Spanish</a>
                                 </li>
                                 <li>
                                    <a href="#">Mandarin</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <div class="menu-top-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mainmenuarea d-none d-xl-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-9">
                  <div class="mainmenu d-flex align-items-center">
                     <div class="mainmenu__search">
                        <form action="#">
                           <div class="mainmenu__search-bar p-relative">
                              <button class="mainmenu__search-icon"><i class="fal fa-search"></i></button>
                              <input type="text" placeholder="Search products...">
                           </div>
                        </form>
                     </div>
                     <div class="mainmenu__main d-flex align-items-center p-relative">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="has-dropdown">
                                    <a href="{{url('/')}}">Home</a>
                                    <ul class="submenu">
                                       <li><a href="index.html">Wooden  Home</a></li>
                                       <li><a href="index-2.html">Fashion Home</a></li>
                                       <li><a href="index-3.html">Furniture Home</a></li>
                                       <li><a href="index-4.html">Cosmetics Home</a></li>
                                       <li><a href="index-5.html">Food Grocery</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="shop.html">Shop</a>
                                    <ul class="submenu">
                                       <li><a href="shop.html">Shop</a></li>
                                       <li><a href="shop-2.html">Shop 2</a></li>
                                       <li><a href="shop-details.html">Shop Details </a></li>
                                       <li><a href="shop-details-2.html">Shop Details 2</a></li>
                                       <li><a href="shop-location.html">Shop Location</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="sign-in.html">Sign In</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                       <li><a href="wishlist.html">Wishlist</a></li>
                                       <li><a href="track.html">Product Track</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown has-megamenu">
                                    <a href="about.html">Pages</a>
                                    <ul class="submenu mega-menu">
                                       <li>
                                          <a class="mega-menu-title">Page layout</a>
                                          <ul>
                                             <li><a href="shop.html">Shop filters v1</a></li>
                                             <li><a href="shop-2.html">Shop filters v2</a></li>
                                             <li><a href="shop-details.html">Shop sidebar</a></li>
                                             <li><a href="shop-details-2.html">Shop Right sidebar</a></li>
                                             <li><a href="shop-location.html">Shop List view</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a class="mega-menu-title">Page layout</a>
                                          <ul>
                                             <li><a href="about.html">About</a></li>
                                             <li><a href="cart.html">Cart</a></li>
                                             <li><a href="checkout.html">Checkout</a></li>
                                             <li><a href="sign-in.html">Sign In</a></li>
                                             <li><a href="sign-in.html">Log In</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a class="mega-menu-title">Page type</a>
                                          <ul>
                                             <li><a href="track.html">Product Track</a></li>
                                             <li><a href="wishlist.html">Wishlist</a></li>
                                             <li><a href="error.html">404 / Error</a></li>
                                             <li><a href="coming-soon.html">Coming Soon</a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                       <li><a href="blog.html">Blog</a></li>
                                       <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="contact.html">Contact</a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="mainmenu__logo">
                           <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3">
                  <div class="header-meta d-flex align-items-center justify-content-end">
                     <div class="header-meta__value mr-15">
                        <select>
                           <option>USD</option>
                           <option>YEAN</option>
                           <option>EURO</option>
                        </select>
                     </div>
                     <div class="header-meta__social d-flex align-items-center ml-25">
                        <button class="header-cart p-relative tp-cart-toggle">
                           <i class="fal fa-shopping-cart"></i>
                           <span class="tp-product-count">2</span>
                        </button>
                        <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->

   <!-- header-xl-sticky-area -->
   <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3">
               <div class="logo">
                  <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="main-menu">
                  <ul>
                     <li class="has-dropdown">
                        <a href="index.html">Home</a>
                        <ul class="submenu">
                           <li><a href="index.html">Wooden  Home</a></li>
                           <li><a href="index-2.html">Fashion Home</a></li>
                           <li><a href="index-3.html">Furniture Home</a></li>
                           <li><a href="index-4.html">Cosmetics Home</a></li>
                           <li><a href="index-5.html">Food Grocery</a></li>
                        </ul>
                     </li>
                     <li class="has-dropdown">
                        <a href="shop.html">Shop</a>
                        <ul class="submenu">
                           <li><a href="shop.html">Shop</a></li>
                           <li><a href="shop-2.html">Shop 2</a></li>
                           <li><a href="shop-details.html">Shop Details </a></li>
                           <li><a href="shop-details-2.html">Shop Details 2</a></li>
                           <li><a href="shop-location.html">Shop Location</a></li>
                           <li><a href="cart.html">Cart</a></li>
                           <li><a href="sign-in.html">Sign In</a></li>
                           <li><a href="checkout.html">Checkout</a></li>
                           <li><a href="wishlist.html">Wishlist</a></li>
                           <li><a href="track.html">Product Track</a></li>
                        </ul>
                     </li>
                     <li class="has-dropdown has-megamenu">
                        <a href="about.html">Pages</a>
                        <ul class="submenu mega-menu">
                           <li>
                              <a class="mega-menu-title">Page layout</a>
                              <ul>
                                 <li><a href="shop.html">Shop filters v1</a></li>
                                 <li><a href="shop-2.html">Shop filters v2</a></li>
                                 <li><a href="shop-details.html">Shop sidebar</a></li>
                                 <li><a href="shop-details-2.html">Shop Right sidebar</a></li>
                                 <li><a href="shop-location.html">Shop List view</a></li>
                              </ul>
                           </li>
                           <li>
                              <a class="mega-menu-title">Page layout</a>
                              <ul>
                                 <li><a href="about.html">About</a></li>
                                 <li><a href="cart.html">Cart</a></li>
                                 <li><a href="checkout.html">Checkout</a></li>
                                 <li><a href="sign-in.html">Sign In</a></li>
                                 <li><a href="sign-in.html">Log In</a></li>
                              </ul>
                           </li>
                           <li>
                              <a class="mega-menu-title">Page type</a>
                              <ul>
                                 <li><a href="track.html">Product Track</a></li>
                                 <li><a href="wishlist.html">Wishlist</a></li>
                                 <li><a href="error.html">404 / Error</a></li>
                                 <li><a href="coming-soon.html">Coming Soon</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="has-dropdown">
                        <a href="blog.html">Blog</a>
                        <ul class="submenu">
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                     </li>
                     <li><a href="contact.html">Contact</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-xl-4 col-lg-9">
               <div class="header-meta-info d-flex align-items-center justify-content-end">
                  <div class="header-meta__social  d-flex align-items-center">
                     <button class="header-cart p-relative tp-cart-toggle">
                        <i class="fal fa-shopping-cart"></i>
                        <span class="tp-product-count">2</span>
                     </button>
                     <a href="sign-in.html"><i class="fal fa-user"></i></a>
                     <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                  </div>
                  <div class="header-meta__search-5 ml-25">
                     <div class="header-search-bar-5">
                        <form action="#">
                           <div class="search-info-5 p-relative">
                              <button class="header-search-icon-5"><i class="fal fa-search"></i></button>
                              <input type="text" placeholder="Search products...">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header-xl-sticky-end -->

   <!-- header-md-lg-area -->
   <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 d-flex align-items-center">
               <div class="header-canvas flex-auto">
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
               <div class="logo">
                  <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
               </div>
            </div>
            <div class="col-lg-9 col-md-8">
               <div class="header-meta-info d-flex align-items-center justify-content-between">
                  <div class="header-search-bar">
                     <form action="#">
                        <div class="search-info p-relative">
                           <button class="header-search-icon"><i class="fal fa-search"></i></button>
                           <input type="text" placeholder="Search products...">
                        </div>
                     </form>
                  </div>
                  <div class="header-meta__social d-flex align-items-center ml-25">
                     <button class="header-cart p-relative tp-cart-toggle">
                        <i class="fal fa-shopping-cart"></i>
                        <span>2</span>
                     </button>
                     <a href="sign-in.html"><i class="fal fa-user"></i></a>
                     <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-3 d-flex align-items-center">
               <div class="header-canvas flex-auto">
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
            </div>
            <div class="col-6">
               <div class="logo text-center">
                  <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
               </div>
            </div>
            <div class="col-3">
               <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                  <div class="header-meta m-0 d-flex align-items-center">
                     <div class="header-meta__social d-flex align-items-center">
                        <button class="header-cart p-relative tp-cart-toggle">
                           <i class="fal fa-shopping-cart"></i>
                           <span>2</span>
                        </button>
                        <a href="sign-in.html"><i class="fal fa-user"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header-md-lg-area -->

   <!-- sidebar-menu-area -->
   <div class="tpsideinfo">
      <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
      <div class="tpsideinfo__search text-center pt-35">
         <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
         <form action="#">
            <input type="text" placeholder="Search Products...">
            <button><i class="fal fa-search"></i></button>
         </form>
      </div>
      <div class="tpsideinfo__nabtab">
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
               <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
               <div class="tpsidebar-categories">
                  <ul>
                     <li><a href="shop.html">Furniture</a></li>
                     <li><a href="shop.html">Wooden</a></li>
                     <li><a href="shop.html">Lifestyle</a></li>
                     <li><a href="shop-2.html">Shopping</a></li>
                     <li><a href="track.html">Track Product</a></li>
                  </ul>
               </div>
            </div>
            </div>
      </div>
      <div class="tpsideinfo__account-link">
         <a href="sign-in.html"><i class="fal fa-user"></i> Login / Register</a>
      </div>
      <div class="tpsideinfo__wishlist-link">
         <a href="wishlist.html" target="_parent"><i class="fal fa-heart"></i> Wishlist</a>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- sidebar-menu-area-end -->

   <!-- header-cart-start -->
   <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="{{asset('frontend/assets/img/banner/banner-2-03.jpg')}}" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$138.00</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="{{asset('frontend/assets/img/banner/banner-2-04.jpg')}}" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Purab Enormous Miranda Bottle</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$162.8</span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tpcart__checkout">
               <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                  <span> Subtotal:</span>
                  <span class="heilight-price"> $300.00</span>
               </div>
               <div class="tpcart__checkout-btn">
                  <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                  <a class="tpcheck-btn" href="checkout.html">Checkout</a>
               </div>
            </div>
         </div>
         <div class="tpcart__free-shipping text-center">
            <span>Free shipping for orders <b>under 10km</b></span>
         </div>
      </div>
   </div>
   <div class="cartbody-overlay"></div>
   <!-- header-cart-end -->

   <!-- main-area-start -->
   <main>

      <!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="{{asset('frontend/assets/img/banner/breadcrumb-01.jpg')}}">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="index.html">Home</a></span>
                        <span>Checkout</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Checkout Page</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- coupon-area start -->
      <section class="coupon-area pt-80 pb-30 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="coupon-accordion">
                     <!-- ACCORDION START -->
                     <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                     <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                           <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                 sit amet ipsum luctus.</p>
                           <form action="#">
                                 <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text" />
                                 </p>
                                 <p class="form-row-last">
                                    <label>Password <span class="required">*</span></label>
                                    <input type="text" />
                                 </p>
                                 <p class="form-row">
                                    <button class="tp-btn tp-color-btn" type="submit">Login</button>
                                    <label>
                                       <input type="checkbox" />
                                       Remember me
                                    </label>
                                 </p>
                                 <p class="lost-password">
                                    <a href="#">Lost your password?</a>
                                 </p>
                           </form>
                        </div>
                     </div>
                     <!-- ACCORDION END -->
               </div>
            </div>
            <div class="col-md-6">
               <div class="coupon-accordion">
                     <!-- ACCORDION START -->
                     <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                     <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                           <form action="#">
                                 <p class="checkout-coupon">
                                    <input type="text" placeholder="Coupon Code" />
                                    <button class="tp-btn tp-color-btn" type="submit">Apply Coupon</button>
                                 </p>
                           </form>
                        </div>
                     </div>
                     <!-- ACCORDION END -->
               </div>
            </div>
         </div>
      </div>
      </section>
      <!-- coupon-area end -->

      <!-- checkout-area start -->
      <section class="checkout-area pb-50 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
            <form action="#">
               <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                           <h3>Billing Details</h3>
                           <div class="row">
                                 <div class="col-md-12">
                                    <div class="country-select">
                                       <label>Country <span class="required">*</span></label>
                                       <select>
                                             <option value="volvo">United States</option>
                                             <option value="saab">Algeria</option>
                                             <option value="mercedes">Canada</option>
                                             <option value="audi">Germany</option>
                                             <option value="audi2">England</option>
                                             <option value="audi3">Qatar</option>
                                             <option value="audi5">Dominican Republic</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>First Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Last Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Company Name</label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Address <span class="required">*</span></label>
                                       <input type="text" placeholder="Street address" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Town / City <span class="required">*</span></label>
                                       <input type="text" placeholder="Town / City" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>State / County <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Postcode / Zip <span class="required">*</span></label>
                                       <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Email Address <span class="required">*</span></label>
                                       <input type="email" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Phone <span class="required">*</span></label>
                                       <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                       <input id="cbox" type="checkbox" />
                                       <label>Create an account?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                       <p>Create an account by entering the information below. If you are a returning
                                             customer please login at the top of the page.</p>
                                       <label>Account password <span class="required">*</span></label>
                                       <input type="password" placeholder="password" />
                                    </div>
                                 </div>
                           </div>
                           <div class="different-address">
                                 <div class="ship-different-title">
                                    <h3>
                                       <label>Ship to a different address?</label>
                                       <input id="ship-box" type="checkbox" />
                                    </h3>
                                 </div>
                                 <div id="ship-box-info">
                                    <div class="row">
                                       <div class="col-md-12">
                                             <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                   <option value="volvo">bangladesh</option>
                                                   <option value="saab">Algeria</option>
                                                   <option value="mercedes">Afghanistan</option>
                                                   <option value="audi">Ghana</option>
                                                   <option value="audi2">Albania</option>
                                                   <option value="audi3">Bahrain</option>
                                                   <option value="audi4">Colombia</option>
                                                   <option value="audi5">Dominican Republic</option>
                                                </select>
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="order-notes">
                                    <div class="checkout-form-list">
                                       <label>Order Notes</label>
                                       <textarea id="checkout-mess" cols="30" rows="10"
                                             placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="your-order mb-30 ">
                           <h3>Your order</h3>
                           <div class="your-order-table table-responsive">
                                 <table>
                                    <thead>
                                       <tr>
                                          <th class="product-name">Product</th>
                                          <th class="product-total">Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="cart_item">
                                             <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">$165.00</span>
                                             </td>
                                       </tr>
                                       <tr class="cart_item">
                                             <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">$50.00</span>
                                             </td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr class="cart-subtotal">
                                             <th>Cart Subtotal</th>
                                             <td><span class="amount">$215.00</span></td>
                                       </tr>
                                       <tr class="shipping">
                                             <th>Shipping</th>
                                             <td>
                                                <ul>
                                                   <li>
                                                         <input type="radio" name="shipping"/>
                                                         <label>
                                                            Flat Rate: <span class="amount">$7.00</span>
                                                         </label>
                                                   </li>
                                                   <li>
                                                         <input type="radio" name="shipping"/>
                                                         <label>Free Shipping:</label>
                                                   </li>
                                                </ul>
                                             </td>
                                       </tr>
                                       <tr class="order-total">
                                             <th>Order Total</th>
                                             <td><strong><span class="amount">$215.00</span></strong>
                                             </td>
                                       </tr>
                                    </tfoot>
                                 </table>
                           </div>
                           <div class="payment-method">
                              <div class="accordion" id="checkoutAccordion">
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="checkoutOne">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                       Direct Bank Transfer
                                       </button>
                                    </h2>
                                    <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="paymentTwo">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                       Cheque Payment
                                       </button>
                                    </h2>
                                    <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Please send your cheque to Store Name, Store Street, Store Town, Store
                                       State / County, Store
                                       Postcode.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="paypalThree">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                       PayPal
                                       </button>
                                    </h2>
                                    <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Pay via PayPal; you can pay with your credit card if you don’t have a
                                       PayPal account.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="order-button-payment mt-20">
                                 <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place order</button>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </form>
         </div>
      </section>
      <!-- checkout-area end -->

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
                              <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo-white.png')}}" alt="logo"></a>
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
                           <span>Copyright 2022 <a href="index.html">©Ninico</a>. All rights reserved. Powered by <a
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
