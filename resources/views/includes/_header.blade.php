<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Casa Almendra @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favico/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favico/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favico/favicon-16x16.png') }}">
        <link rel="manifest" href="{{asset('favico/site.webmanifest') }}">
        <link rel="mask-icon" href="{{asset('favico/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Permanent+Marker&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        
        <meta name="theme-color" content="#fafafa">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154785941-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-154785941-1');
        </script>
    </head>