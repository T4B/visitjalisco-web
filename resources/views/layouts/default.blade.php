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
@env('production')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-103780114-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-103780114-4');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '402332357117350');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=402332357117350&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
@endenv
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
