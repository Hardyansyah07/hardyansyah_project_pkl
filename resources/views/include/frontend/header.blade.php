<header>
   <div class="header-top space-bg">
      <div class="container">
         <div class="row">
            <div class="col-12">
            </div>
         </div>
      </div>
   </div>
   <div class="logo-area mt-30 d-none d-xl-block">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3">
               <div class="logo">
                  <a href="{{url('/')}}"><p style="color: green; font-size: 200%;">Craft Corner</p></a>
               </div>
            </div>
            <div class="col-xl-10 col-lg-9">
               <div class="header-meta-info d-flex align-items-center justify-content-between">
                  <div class="header-search-bar">
                     <form action="#">
                        <div class="search-info p-relative">
                           <button class="header-search-icon"><i class="fal fa-search"></i></button>
                           <input type="text" placeholder="Search products...">
                        </div>
                     </form>
                  </div>
                  <div class="header-meta header-language d-flex align-items-center">
                     <div class="header-meta__lang">
                        
                     </div>
                     <div class="header-meta__value mr-15">
                        
                     </div>
                     <div class="header-meta__social d-flex align-items-center ml-25">
    <button class="header-cart p-relative tp-cart-toggle d-flex align-items-center">
        <i class="fal fa-shopping-cart"></i>
        <span class="tp-product-count">2</span>
    </button>
            @guest
                <a href="{{route('login')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Login</span>
               </a>
               <a href="{{route('register')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Register</span>
               </a>
               @else
   <li class="dropdown notification-list topbar-dropdown d-flex align-items-center ms-3">
    <a class="nav-link dropdown-toggle nav-user me-0" style="color: black;" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{asset('backend/assets/images/users/user-11.jpg')}}" alt="user-image" class="rounded-circle" style="width: 50px; height: 50px;">
        <span class="pro-user-name ms-1" style="color: black;">
         @if (Auth::check())
         {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
            
         @else
              <i class="mdi mdi-chevron-down"></i>
         @endif
            
        </span>
    </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>

            <!-- item-->
               <a href="{{ url('/profile') }}" class="dropdown-item-center notify-item-center">
                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                <span>My Account</span>
               </a>
               <div class="dropdown-divider"></div>
                <a class="dropdown-item-center notify-item-center nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
        </div>
    </li>
</div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="main-menu-area mt-20 d-none d-xl-block">
      <div class="for-megamenu p-relative">
         <div class="container">
            <div class="row align-items-center">
               
               <div class="col-xl-7 col-lg-6">
                  <div class="main-menu">
                     <nav id="mobile-menu">
                        <ul>
                           <li class="">
                              <a href="{{url('/')}}">Home</a>
                           </li>
                           <li class="">
                              <a href="{{url('/produk')}}">Product</a>
                           </li>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3">
                  <div class="menu-contact">
                     <ul>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- header-xl-sticky-area -->
<div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-2 col-lg-3">
            <div class="logo">
               <a href="{{url('/')}}"><p style="color: green; font-size: 200%;">Craft Corner</p></a>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6">
            <div class="main-menu">
               
            </div>
         </div>
         <div class="col-xl-4 col-lg-9">
            <div class="header-meta-info d-flex align-items-center justify-content-end">
               <div class="header-meta__search-5 ml-25">
                  <div class="header-search-bar-5 nav-hhh">
                     <form action="#">
                        <div class="search-info-5 p-relative">
                           <button class="header-search-icon-5"><i class="fal fa-search"></i></button>
                           <input type="text" placeholder="Search products...">
                        </div>
                     </form>
                  </div>
               </div>
               @guest
                <a href="{{route('login')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Login</span>
               </a>
               <a href="{{route('register')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Register</span>
               </a>
               @else
   <li class="dropdown notification-list topbar-dropdown d-flex align-items-center ms-3">
    <a class="nav-link dropdown-toggle nav-user me-0" style="color: black;" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{asset('backend/assets/images/users/user-11.jpg')}}" alt="user-image" class="rounded-circle" style="width: 50px; height: 50px;">
        <span class="pro-user-name ms-1" style="color: black;">
         @if (Auth::check())
         {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
            
         @else
              <i class="mdi mdi-chevron-down"></i>
         @endif
            
        </span>
    </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>

            <!-- item-->
               <a href="{{ url('/profile') }}" class="dropdown-item-center notify-item-center">
                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                <span>My Account</span>
               </a>
               <div class="dropdown-divider"></div>
                <a class="dropdown-item-center notify-item-center nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
        </div>
    </li>
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
               <a href="{{url('/')}}"><p style="color: green; font-size: 200%;">Craft Corner</p></a>
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
                  @guest
                <a href="{{route('login')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Login</span>
               </a>
               <a href="{{route('register')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Register</span>
               </a>
               @else
   <li class="dropdown notification-list topbar-dropdown d-flex align-items-center ms-3">
    <a class="nav-link dropdown-toggle nav-user me-0" style="color: black;" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{asset('backend/assets/images/users/user-11.jpg')}}" alt="user-image" class="rounded-circle" style="width: 50px; height: 50px;">
        <span class="pro-user-name ms-1" style="color: black;">
         @if (Auth::check())
         {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
            
         @else
              <i class="mdi mdi-chevron-down"></i>
         @endif
            
        </span>
    </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>

            <!-- item-->
               <a href="{{ url('/profile') }}" class="dropdown-item-center notify-item-center">
                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                <span>My Account</span>
               </a>
               <div class="dropdown-divider"></div>
                <a class="dropdown-item-center notify-item-center nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
        </div>
    </li>
</div>
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
               <a href="{{url('/')}}"><p style="color: green; font-size: 200%;">Craft Corner</p></a>
            </div>
         </div>
         <div class="col-3">
                     @guest
                <a href="{{route('login')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Login</span>
               </a>
               <a href="{{route('register')}}" class="dropdown-item-center notify-item-center br">
                  <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                  <span>Register</span>
               </a>
               @else
   <li class="dropdown notification-list topbar-dropdown d-flex align-items-center ms-3">
    <a class="nav-link dropdown-toggle nav-user me-0" style="color: black;" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{asset('backend/assets/images/users/user-11.jpg')}}" alt="user-image" class="rounded-circle" style="width: 50px; height: 50px;">
        <span class="pro-user-name ms-1" style="color: black;">
         @if (Auth::check())
         {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
            
         @else
              <i class="mdi mdi-chevron-down"></i>
         @endif
            
        </span>
    </a>
        <div class="dropdown-menu dropdown-menu-end profile-dropdown">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>

            <!-- item-->
               <a href="{{ url('/profile') }}" class="dropdown-item-center notify-item-center">
                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                <span>My Account</span>
               </a>
               <div class="dropdown-divider"></div>
                <a class="dropdown-item-center notify-item-center nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
        </div>
    </li>
</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- header-md-lg-area -->
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
                     <img src="{{asset('frontend/assets/img/product/home-one/product-1.jpg')}}" alt="">
                     <div class="tpcart__del">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                     </div>
                  </div>
                  <div class="tpcart__content">
                     <span class="tpcart__content-title"><a href="shop-details.html">Miko Wooden Bluetooth Speaker</a>
                     </span>
                     <div class="tpcart__cart-price">
                        <span class="quantity">1 x</span>
                        <span class="new-price">$162.80</span>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="tpcart__item">
                  <div class="tpcart__img">
                     <img src="{{asset('frontend/assets/img/product/home-one/product-3.jpg')}}" alt="">
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
         </ul>
      </div>
      <div class="tpcart__checkout">
         <div class="tpcart__total-price d-flex justify-content-between align-items-center">
            <span> Subtotal:</span>
            <span class="heilight-price"> $300.00</span>
         </div>
         <div class="tpcart__checkout-btn">
            <a class="tpcart-btn mb-10" href="{{url('/cart')}}">View Cart</a>
            <a class="tpcheck-btn" href="{{url('/checkout')}}">Checkout</a>
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