<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96466916-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-96466916-3');
    </script>
    
    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{url('/public/libraries/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/libraries/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('/public/libraries/colorbox/example1/colorbox.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('/public/libraries/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/libraries/bootstrap-fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/css/superlist.css')}}" rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/public/img/favicon.png') }}">

    <base href="http://www.procorpainting.ca/">
    <meta name="revisit-after" content="7 days">
    <meta name="robots" content="all">
    <meta http-equiv="expires" content="0">
    <meta name="distribution" content="Global">
    <meta name="copyright" content="procorpainting.com">
    <meta name="expires" content="never">
    <meta name="author" content="ManuIrrazabal">
    <meta name="doc-type" content="web page">
    <link rel="canonical" href="{{ $rel_canonical }}">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $meta_description }}">
    <meta name="keywords" content="{{ $meta_keywords }}">
    <meta property="og:url" content="{{ $rel_canonical }}">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">
    <meta property="og:title" content="{{ $title }}">
</head>

<body class="">
<div class="page-wrapper">
    @include('frontend.header-top')


