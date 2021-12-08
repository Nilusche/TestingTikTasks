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
    
</head>
<body>
    @yield('content')
</body>
</html>
