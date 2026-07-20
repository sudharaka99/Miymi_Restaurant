<div class="hero_area">
    <div class="bg-box">
        <img src="{{ asset('images/hero-bg.jpg') }}" alt="">
    </div>

    <!-- Header -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">

                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="Miyami Restaurant"
                         style="height:70px;width:auto;">
                </a>

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

                    <!-- Menu -->
                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item active">
                            <a class="nav-link"
                               href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                               href="#menu">
                                Menu
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                               href="#about">
                                About Us
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link"
                               href="#gallery">
                                Gallery
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link"
                               href="#contact">
                                Contact
                            </a>
                        </li>

                    </ul>

                    <!-- Right Side Icons -->
                    <div class="user_option">

                        <!-- Cart -->
                        <a href="#" class="cart_link" title="Cart">
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
                        <a href="#"
                        class="user_link"
                        title="Location">
                            <i class="fa fa-map-marker"
                            aria-hidden="true"></i>
                        </a>

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

                    </div>

                </div>
            </nav>
        </div>
    </header>

    <!-- Slider -->
    <section class="slider_section">
        <div id="customCarousel1"
             class="carousel slide"
             data-ride="carousel">

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">

                                <div class="detail-box">
                                    <h1>
                                        Miyami Restaurant
                                    </h1>

                                    <p>
                                        Fresh Food Every Day.
                                        Enjoy delicious food and beverages
                                        prepared with fresh ingredients.
                                    </p>

                                    <div class="btn-box">
                                        <a href="#menu"
                                           class="btn1">
                                            Explore Menu
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">

                                <div class="detail-box">
                                    <h1>
                                        Online Ordering
                                    </h1>

                                    <p>
                                        Order your favourite meals online
                                        and enjoy fast home delivery.
                                    </p>

                                    <div class="btn-box">
                                        <a href="#"
                                           class="btn1">
                                            Order Now
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">

                                <div class="detail-box">
                                    <h1>
                                        Reserve Your Table
                                    </h1>

                                    <p>
                                        Book your table online for family
                                        dinners and special occasions.
                                    </p>

                                    <div class="btn-box">
                                        <a href="#book"
                                           class="btn1">
                                            Book Table
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1"
                        data-slide-to="0"
                        class="active"></li>

                    <li data-target="#customCarousel1"
                        data-slide-to="1"></li>

                    <li data-target="#customCarousel1"
                        data-slide-to="2"></li>
                </ol>
            </div>

        </div>
    </section>

</div>