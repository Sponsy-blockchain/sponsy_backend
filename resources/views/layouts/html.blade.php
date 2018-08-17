<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPONSY').' | ' }}@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>
<body>
    @yield('header_sidebar')
    @yield('content')
    @yield('footer')
    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
