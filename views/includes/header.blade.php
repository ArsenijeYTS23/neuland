<!DOCTYPE html>
<html>
        <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Neuland.Tv">
        <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1, minimum-scale=1">
        
        <title>Neuland.Tv</title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" />
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />


        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white">
		<meta name="apple-mobile-web-app-title" content="Neuland.Tv">

		<meta name="mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-status-bar-style" content="white">
		<meta name="mobile-web-app-title" content="Neuland.Tv">
	
		<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicon/apple-icon-57x57.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicon/apple-icon-60x60.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicon/apple-icon-72x72.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicon/apple-icon-76x76.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicon/apple-icon-114x114.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicon/apple-icon-120x120.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicon/apple-icon-144x144.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicon/apple-icon-152x152.png?v=1')}}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicon/apple-icon-180x180.png?v=1')}}">
		<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/img/favicon/android-icon-192x192.png?v=1')}}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon/favicon-32x32.png?v=1')}}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon/favicon-96x96.png?v=1')}}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon/favicon-16x16.png?v=1')}}">
		<link rel="manifest" href="{{asset('assets/img/favicon/manifest.json')}}">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=1">
		<meta name="theme-color" content="#ffffff">



        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 

    </head>

    <body class="loading">

        <!-- Header -->
        <header>
	<div class="container-fluid">


		<div class="row">
			<div class="col-md-12">

				<nav class="navbar">

					<!-- Navbar header -->
					<div class="navbar-header">

						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
						aria-expanded="false">
						
						
							Menu
							<span class="icon-arrow-bottom"></span>
							<span class="icon-close"></span>
						</button>

						
						<a class="navbar-brand" href="{{ url('/') }}">Neuland.tv</a>
						
						
					</div>
					
					
					@if(Auth::user())
					<div class="navbar-profile">
						<a href="{{ url('user') }}">
							<span class="notification">2</span>
							<span class="profile-picture-container">
								<img src="{{asset('assets/img/content/profile_picture.jpg')}}" alt="">
							</span>
						</a>
					</div>
					@else
                                          <div class="navbar-connexion hidden-xs">
                                           <button type="button" class="button button-small" data-dismiss="modal" data-toggle="modal"
                                                       data-target="#modal-log_in">
                                                         Log in
                                           </button>
                                          <a href="#" type="button" class="button button-small" data-dismiss="modal">
                                           Register
                                           </a>
                                          </div>
                                        @endif

					

					<!-- Navbar collapse -->
					<div class="collapse navbar-collapse" id="navbar">
						
						
						<!-- Navbar search -->
						<ul class="nav navbar-search navbar-left">
							<li>
								<form class="search_form" method="GET" action="search.html">
									<input type="text" placeholder="Search" id="search_input" name="search">
									<button type="reset" class="icon-close"></button>
									<button type="submit"><span class="icon icon-magnifier"></span></button>
								</form>
							</li>
						</ul>
						

						<!-- Navbar nav -->
						<ul class="nav navbar-nav">
							
							<li >
								<a href="{{ url('programs') }}">
									<span>Programs</span>
									<span class="icon-arrow-right"></span>
								</a>
							</li>
							<li >
								<a href="tv.html">
									<span>TV</span>
									<span class="icon-arrow-right"></span>
								</a>
							</li>
							<li >
								<a href="{{url('experiences')}}">
									<span>Experiences</span>
									<span class="icon-arrow-right"></span>
								</a>
							</li>
							
							
							{{--<li class="language dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
								aria-expanded="false">
									<span class="caret"></span> EN
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">FR</a></li>
									<li><a href="#">DE</a></li>
									<li><a href="#">NL</a></li>
									<li><a href="#">IT</a></li>
									<li><a href="#">ES</a></li>
								</ul>
							</li>--}}
						</ul>

					</div>
					
				</nav>

			</div>
		</div>


	</div>
</header>