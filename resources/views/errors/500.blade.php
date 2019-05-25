<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{url('/public/libraries/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/libraries/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('/public/libraries/colorbox/example1/colorbox.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('/public/libraries/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/libraries/bootstrap-fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/css/superlist.css')}}" rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/public/img/favicon.png') }}">

    <title>Procor - 500 - Internal Server Error</title>
</head>

<body class="">
<div class="page-wrapper">
    <header class="header">
	    <div class="header-wrapper">
	        <div class="container">
	            <div class="header-inner">
	                <div class="header-logo">
	                    <a href="{{ url('/') }}">
	                        <img src="{{ url('public/img/procor-logo-web-.png') }}" alt="Logo" width="150"> 
	                    </a>
	                </div><!-- /.header-logo -->

	                <div class="header-content">
	                    <div class="header-bottom">
	                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
	                            <li><a href="{{ url('/') }}">Home <i class="fa"></i></a></li>
	                            <li ><a href="{{ url('/our-services') }}">Our Services <i class="fa"></i></a></li>
	                            <li ><a href="{{ url('/projects') }}">Our Projects <i class="fa"></i></a></li>
	                            <li ><a href="{{ url('/about-us') }}">About Us<i class="fa"></i></a></li>
	                            <li ><a href="{{ url('/contact-us') }}">Contact<i class="fa"></i></a></li>
	                        </ul>

	                        
	                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
	                            <span class="sr-only">Toggle navigation</span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                        </button>

	                    </div><!-- /.header-bottom -->
	                </div><!-- /.header-content -->
	            </div><!-- /.header-inner -->
	        </div><!-- /.container -->
	    </div><!-- /.header-wrapper -->
	</header><!-- /.header -->

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                	<div class="caution">
    					<h1 style="color: #eb0404;">500</h1>
    					<h2>Internal Server Error</h2>
					</div><!-- /.page-header -->
                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

   @php
	$data =[
        'copyright_year' => date('Y'),
    ]
   @endphp
   @include('frontend.footer', $data)


