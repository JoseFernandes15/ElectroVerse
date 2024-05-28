<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>ElectroVerse</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="José Pedro Sampaio Fernandes">
    <meta name="keywords" content="Laravel, E-Commerce, WebApp, Web Application, Demo, Demo App, Demo Web App">
    <meta name="description" content="E-Commerce Demo Web Application built with Laravel 8">
    <link rel="icon" type="image/x-icon" href="/storage/images/logo.jpg">
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
    @vite('resources/css/vendor.css')
    @vite('resources/css/bootstrap.min.css')
    @vite('resources/css/shop.css')
    @vite('resources/css/swiper.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    @vite('resources/js/jquery-1.11.0.min.js')
    @vite('resources/js/script.js')
    @vite('resources/js/bootstrap.bundle.min.js')
    @vite('resources/js/bootstrap.js')

    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    </body>
</html>