<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>@yield('title', 'Stylexpo')</title>
  <!-- SEO Meta
    ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- CSS
    ================================================== -->

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}" >  
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.theme.default.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/fotorama.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}" > 
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}" > 
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}" >
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"> 
  <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">
</head>
@yield('body opening')
  
  @include('includes.header')  
  
  @yield('banner') 

  @yield('bread crumb')
  
  <!-- CONTAIN START -->
  @yield('content')
  <!-- CONTAINER END -->

  @include('includes.newsletter') 

  @include('includes.footer')
   
<script src={{ asset('js/jquery-1.12.3.min.js') }}></script> 
<script src={{ asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') }}></script>
<script src={{ asset('js/bootstrap.min.js') }}></script>  
<script src={{ asset('js/jquery.downCount.js') }}></script>
<script src={{ asset('js/jquery-ui.min.js') }}></script> 
<script src={{ asset('js/fotorama.js') }}></script>
<script src={{ asset('app.js') }}></script>
<script src={{ asset('js/jquery.magnific-popup.js') }}></script> 
<script src={{ asset('js/owl.carousel.min.js') }}></script>  
<script src={{ asset('js/custom.js') }}></script>

@yield('script')

</body>
</html>
