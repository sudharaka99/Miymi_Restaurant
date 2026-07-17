<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="MiyaMi Restaurant - Fresh Food Every Day">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon"
          href="{{ asset('images/favicon.png') }}"
          type="image/png">

    <title>MiyMi Restaurant</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet"
          type="text/css"
          href="{{ asset('css/bootstrap.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet"
          type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Nice Select -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/responsive.css') }}">

    @stack('styles')
</head>

<body>

    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')


    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Isotope JS -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>

    <!-- Nice Select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')

</body>

</html>