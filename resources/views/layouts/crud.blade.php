<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Webpage Title -->
    <title>Testing</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="/css/crud.css">
    <link rel="stylesheet" href="/css/upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.css">
    @yield('css')
<body>
    @yield('content')
    <script src="https://kit.fontawesome.com/b90fa0e727.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
</body>
</html>
