<!-- Header -->
<header class="header_section miyami-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">

            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}"
                     alt="Miyami Restaurant"
                     style="height:70px;width:auto;">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">

                <!-- Navigation -->
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('menu') }}">
                            Menu
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('home') }}#about">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('home') }}#contact">
                            Contact
                        </a>
                    </li>

                </ul>

                <!-- Right Side -->
                <div class="user_option">

                    <!-- Cart -->
                    <a href="#"
                       class="cart_link"
                       title="Cart">
                        <i class="fa fa-shopping-cart"
                           aria-hidden="true"></i>
                    </a>

                    <!-- Phone -->
                    <a href="tel:0772226665"
                       class="user_link"
                       title="Call Us">
                        <i class="fa fa-phone"
                           aria-hidden="true"></i>
                    </a>

                    <!-- Location -->
                    <a href="{{ route('home') }}#contact"
                       class="user_link"
                       title="Location">
                        <i class="fa fa-map-marker"
                           aria-hidden="true"></i>
                    </a>

                    @guest

                        <!-- Sign Up -->
                        <a href="{{ route('register') }}"
                           class="order_online">
                            Sign Up
                        </a>

                        <!-- Sign In -->
                        <a href="{{ route('login') }}"
                           class="signin_btn">
                            Sign In
                        </a>

                    @endguest

                    @auth

                        <!-- User -->
                        <a href="#"
                           class="user_link"
                           title="{{ Auth::user()->name }}">
                            <i class="fa fa-user"
                               aria-hidden="true"></i>
                        </a>

                        <!-- Logout -->
                        <form method="POST"
                              action="{{ route('logout') }}"
                              class="logout-form">
                            @csrf

                            <button type="submit"
                                    class="signin_btn">
                                Logout
                            </button>
                        </form>

                    @endauth

                </div>

            </div>

        </nav>
    </div>
</header>
<!-- End Header -->