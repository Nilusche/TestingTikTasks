<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Webpage Title -->
    <title>Testing</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="/css/card.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="loginstyle/fonts/icomoon/style.css">

    <link rel="stylesheet" href="loginstyle/css/owl.carousel.min.css">
    <link rel="stylesheet" href="loginstyle/css/bootstrap.min.css">
    <link rel="stylesheet" href="loginstyle/css/style.css">
</head>
<body>
    @yield('content')

    <script>
        var swiper = new Swiper('.blog-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        mousewheel: {
            invert: false,
        },
        // autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination',
            clickable: true,
        }
        });
    </script>
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="loginstyle/js/jquery-3.3.1.min.js"></script>
    <script src="loginstyle/js/popper.min.js"></script>
    <script src="loginstyle/js/bootstrap.min.js"></script>
    <script src="loginstyle/js/main.js"></script>
</body>
</html>
