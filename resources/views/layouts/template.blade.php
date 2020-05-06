<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @auth
        <meta name="userID" content="{{ auth()->user()->id }}">
    @endauth

    <title> Estate Mini </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        input{
            border-radius: 5px;
            width:60vw;
        }
    </style>
</head>
<body>
    @yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
