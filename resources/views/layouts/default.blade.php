<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="fb:app_id"      content="{{ env('FACEBOOK_CLIENT_ID') }}" />
    <meta property="og:url"         content="{{ url()->full() }}" />
    <meta property="og:type"        content="@yield('og.type', 'website')" />
    <meta property="og:title"       content="@yield('og.title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('og.description', 'Visit Jalisco')" />
    <meta property="og:image"       content="@yield('og.image', asset('/images/og.jpg'))" />

    <meta name="description"  content="@yield('description', 'Visit Jalisco')">

    <title>@section('title'){{ config('app.name') }} @show </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Montserrat|Noto+Serif+SC:300,400,500,900|Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@yield('css')
</head>
<body class="visitjalisco-@yield('page-name', 'default') overflow-hidden">
<div id="app">
@include('partials.header')
@yield('content')
@include('partials.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
@yield('js')
</body>
</html>
