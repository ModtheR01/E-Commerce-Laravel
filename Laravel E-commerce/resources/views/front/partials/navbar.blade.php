        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form action="" class="site-block-top-search">
                                <span class="icon icon-search2"></span>
                                <input type="text" class="form-control border-0" placeholder="Search">
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="#" class="js-logo-clone">Shoppers</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons ">
                                <ul class="site-menu js-clone-nav d-none d-md-block ">
                                    {{-- <a href="{{ route('front.cart') }}">
                                        <i class="fa-solid fa-cart-shopping text-info"></i>
                                        <span class="count">0</span>
                                    </a> --}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-user p-0.5 text-info"></i> <!-- Bootstrap icon for person -->
                                            @auth
                                                <span class="text-info">{{ Auth::user()->name }}</span>
                                            @else
                                                <span class="text-info">Guest</span>
                                            @endauth
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end "
                                            aria-labelledby="navbarDropdownMenuLink">
                                            @guest
                                                <li><a class="dropdown-item" href="{{ route('login') }}"><i
                                                            class="fa-solid fa-right-to-bracket text-info"></i> <span class="text-info">Login</span></a></li>
                                                <li><a class="dropdown-item" href="{{ route('register') }}"><i
                                                            class="fa-solid fa-registered text-info"></i> <span class="text-info">Register</span></a>
                                                </li>
                                            @else

                                                @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator')
                                                    <li><a class="dropdown-item" href="{{ route('dashboard.home') }}">
                                                            <i class="fa-solid fa-gauge-high text-info"></i> <span class="text-info">Dashboard</span>
                                                        </a>
                                                    </li>
                                                @endif
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <i class="fa-solid fa-right-from-bracket text-info"></i> <span class="text-info">Logout</span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @endguest
                                        </ul>
                                    </li>
                                    @auth
                                    @if (auth()->user()->user_type == 'customer')
                                    <li><a href="#"><span class="icon icon-heart-o text-info"></span></a></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping text-info"></i>
                                            {{-- <span class="count">0</span> --}}
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                    @endif
                                    @endauth
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="has-children @yield('home-active')">
                            <a href="{{ route('front.index') }}">{{  __('website/nav.home')}}</a>
                            <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                                <li class="has-children">
                                    <a href="#">Sub Menu</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children @yield('about-active')">
                            <a href="{{ route('front.about') }}">{{ __('website/nav.about') }}</a>
                            {{-- <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                            </ul> --}}
                        </li>
                        <li class="@yield('shop-active')"><a href="{{ route('front.shop') }}">{{ __('website/nav.shop') }}</a></li>
                        <li class="@yield('catalogue-active')"><a href="#">{{ __('website/nav.catalogue') }}</a></li>
                        <li class="@yield('newarrivals-active')"><a href="#">{{ __('website/nav.new_arrivales') }}</a></li>
                        <li class="@yield('contact-active')"><a href="{{ route('front.contact') }}">{{ __('website/nav.contact') }}</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
