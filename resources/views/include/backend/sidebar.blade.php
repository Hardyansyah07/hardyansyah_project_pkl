<div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="24">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="24">
                                </span>
                            </a>
                        </div>

                        <ul id="side-menu">

                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('home') }}">
                                    <i data-feather="home"></i>
                                    <span class="badge bg-success rounded-pill float-end">9+</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('kategori.index') }}">
                                    <i data-feather="aperture"></i>
                                    <span> Kategori </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('produk.index')}}">
                                    <i data-feather="package"></i>
                                    <span> Produk </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('detail.index')}}">
                                    <i data-feather="activity"></i>
                                    <span> Detail Pesanan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('user.index')}}">
                                    <i data-feather="users"></i>
                                    <span> User </span>
                                </a>
                            </li>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>
