<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="agency, architecture, building, business, construction, corporate, engineering, factory, handyman, industry, painter, plumber, real estate, renovation">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="description" content="ConstructZilla: A Complete Construction Company, Renovation Agency, Architect Agency to create business website, Builders to show building portfolio. Templates is designed for Big and Small both types of Construction companies.">
    <meta property="og:title" content="ConstructZilla : Construction, Renovation & Building HTML Template With RTL">
    <meta property="og:description" content="ConstructZilla: A Complete Construction Company, Renovation Agency, Architect Agency to create business website, Builders to show building portfolio. Templates is designed for Big and Small both types of Construction companies.">
    <meta property="og:image" content="https://constructzilla.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <!-- Meta  end-->

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- PAGE TITLE HERE -->
    <title>Design & Build </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/skin/skin-6.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templete.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">
    <!-- REVOLUTION SLIDER CSS END -->
</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    @include('partials.header')

    <div class="page-content">
        @yield('content')
    </div>

    @include('partials.footer')

    <button class="scroltop fa fa-arrow-up style4"></button>
</div>

<!-- JavaScript -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('assets/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('assets/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('assets/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('assets/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('assets/plugins/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('assets/plugins/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script><!-- Perfect Scrollbar -->
<script src="{{ asset('assets/plugins/masonry/isotope.pkgd.min.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('assets/plugins/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- LIGHTGALLERY -->
<script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<script src="{{ asset('assets/js/rev.slider.js') }}"></script>
<script>
jQuery(document).ready(function() {
    'use strict';
    dz_rev_slider_6();
}); /*ready*/
</script>
</body>
</html>