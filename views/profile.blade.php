<!DOCTYPE html>
<html>
        <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Neuland.Tv">
        <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1, minimum-scale=1">
        
        <title>Neuland.Tv</title>

        <!-- FAVICON -->
        <link rel="icon" href="assets/img/favicon.ico" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />


        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white">
		<meta name="apple-mobile-web-app-title" content="Neuland.Tv">

		<meta name="mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-status-bar-style" content="white">
		<meta name="mobile-web-app-title" content="Neuland.Tv">
	
		<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png?v=1">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png?v=1">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png?v=1">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png?v=1">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png?v=1">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png?v=1">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png?v=1">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png?v=1">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png?v=1">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png?v=1">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png?v=1">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png?v=1">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png?v=1">
		<link rel="manifest" href="assets/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=1">
		<meta name="theme-color" content="#ffffff">



        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/swiper.min.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/main.css" />

        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 

    </head>

    <body>

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

						
						<a class="navbar-brand" href="index.blade.php">Neuland.tv</a>
						
						
					</div>
					
					
					<!-- Navbar profile -->
					<div class="navbar-profile">
						<a href="profile.html">
							<span class="notification">2</span>
							<span class="profile-picture-container">
								<img src="assets/img/content/profile_picture.jpg" alt="">
							</span>
						</a>
					</div>
					

					

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
								<a href="programs.html">
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
								<a href="experiences.html">
									<span>Experiences</span>
									<span class="icon-arrow-right"></span>
								</a>
							</li>
							
							
							<li class="language dropdown">
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
							</li>
						</ul>

					</div>
					
				</nav>

			</div>
		</div>


	</div>
</header>

        <!-- Main -->
        <div class="main">
            <div class="container">

                <div class="profile">


                    <div class="row">
                        <div class="col-md-2">

                            <!-- Nav profile -->
                            <ul class="nav nav-tabs nav-profile js-history_nav-tabs">
	<li>
		<a href="#liked_content" aria-controls="liked_content" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Liked content
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#watch_later" aria-controls="watch_later" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Watch later
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#preferences" aria-controls="preferences" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Preferences
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#faq" aria-controls="faq" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			FAQ
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#edit_profile" aria-controls="edit_profile" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Edit Profile
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li class="hidden-md hidden-lg">
		<a href="#notifications">
			<span class="icon-arrow-left"></span>
			Notifications
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="login.html">
			<span class="icon-log_out"></span>
			Log out
			<span class="icon-arrow-right"></span>
		</a>
	</li>
</ul>

                        </div>
                        <div class="col-md-7">

                            <!-- Tab profile -->
                            <div class="tab-content tab-profile">

                                <!-- Tab profile liked content -->
                                <div class="tab-pane fade" id="liked_content">

	<!-- Title -->
	<div class="title">
		<h5>Liked content</h5>
	</div>

	<!-- Nav profile videos -->
	<ul class="nav nav-profile-videos">
	<li>
		<button class="js-playAll"><span class="icon-play"></span>Play all</button>
	</li>
	<li>
		<form action="">
			<span class="select_label"><span class="icon-filter"></span><span>Sort by</span></span>
			<div class="select-wrapper select-wrapper-filter">
				<select>
					<option>recent</option>
					<option>old</option>
					<option>popular</option>
				</select>
			</div>
		</form>
	</li>
</ul>

	
	<div class="post_container clearfix">
		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">220</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_01.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>

		<!-- article -->
		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">154</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-article.html">
	
		<div class="visu">
			<img src="assets/img/content/content_07.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-article_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-mixitup.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-mixitup.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">41</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_02.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-mixitup.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-mixitup.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>01</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">56</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_03.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>16</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">475</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_08.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-c2c.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-c2c.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>01</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">477</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_04.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>03</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">75</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_05.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>04</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">123</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_06.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>05</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like user-like">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">73</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_09.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-c2c.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-c2c.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>05</strong></span>
		</div>
		
		
	
	</a>

</div>
	</div>

	<div class="actions actions-loadmore clearfix text-center">
		<a href="#" class="button buton-small">Load more</a>
	</div>

</div>

                                <!-- Tab profile watch later -->
                                <div class="tab-pane fade" id="watch_later">

	<!-- Title -->
	<div class="title">
		<h5>Watch later</h5>
	</div>

	<!-- Nav profile videos -->
	<ul class="nav nav-profile-videos">
	<li>
		<button class="js-playAll"><span class="icon-play"></span>Play all</button>
	</li>
	<li>
		<form action="">
			<span class="select_label"><span class="icon-filter"></span><span>Sort by</span></span>
			<div class="select-wrapper select-wrapper-filter">
				<select>
					<option>recent</option>
					<option>old</option>
					<option>popular</option>
				</select>
			</div>
		</form>
	</li>
</ul>

	
	<div class="post_container clearfix">
		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like ">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">220</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_01.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like ">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">220</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_02.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-mixitup.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-mixitup.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like ">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">220</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_03.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>

		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like ">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">220</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_04.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-freethebass.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>
		
		<div class="box box-horizontal ">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like ">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">220</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="programs-episode.html">
	
		<div class="visu">
			<img src="assets/img/content/content_05.jpg" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				<img src="assets/img/content/logo-c2c.png" alt="Speaker freakers">
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				<img src="assets/img/content/logo-c2c.png" alt="Speaker freakers">
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>
	</div>

	<div class="actions actions-loadmore clearfix text-center">
		<a href="#" class="button buton-small">Load more</a>
	</div>

</div>

                                <!-- Tab profile preferences -->
                                <div class="tab-pane tab-pane-preferences fade" id="preferences">

	<div class="row">
		<div class="col-lg-10">

			<!-- Title -->
			<div class="title">
				<h5>Send me notifications when</h5>
			</div>

			<!-- Form -->
			<form>

				<div class="row">
					<div class="col-md-12">
						<p>There is new content on Neuland TV.</p>
						<label class="switch">
							<input type="checkbox">
							<div class="slider"></div>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p>There is new content in a program I am following</p>
						<label class="switch">
							<input type="checkbox" checked>
							<div class="slider"></div>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<p>There is a new video in a program I am following</p>
						<label class="switch">
							<input type="checkbox">
							<div class="slider"></div>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<p>There are new tickets available</p>
						<label class="switch">
							<input type="checkbox" checked>
							<div class="slider"></div>
						</label>
					</div>
				</div>

			</form>
		</div>
	</div>
	
</div>

                                <!-- Tab profile faq -->
                                <div class="tab-pane tab-pane-faq fade" id="faq">

	<div class="row">
		<div class="col-lg-10">

			<!-- Title -->
			<div class="title">
				<h5>Frequently asked questions</h5>
			</div>

			<button class="question" type="button" data-toggle="collapse" data-target="#collapseQuestion1" aria-expanded="false" aria-controls="collapseQuestion1">
			  	<h6>Lorem ipsum dolor sit amet consectetur adipiscing?</h6>
			</button>
			<div class="collapse" id="collapseQuestion1">
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
			</div>

			<button class="question" type="button" data-toggle="collapse" data-target="#collapseQuestion2" aria-expanded="false" aria-controls="collapseQuestion2">
			  	<h6>Lorem ipsum dolor sit amet consectetur adipiscing?</h6>
			</button>
			<div class="collapse" id="collapseQuestion2">
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
			  
			</div>
			
			<button class="question" type="button" data-toggle="collapse" data-target="#collapseQuestion3" aria-expanded="false" aria-controls="collapseQuestion3">
			  	<h6>Lorem ipsum dolor sit amet consectetur adipiscing?</h6>
			</button>
			<div class="collapse" id="collapseQuestion3">
			 
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
			 
			</div>

			<!-- Form -->
			<form>
				<h6>Contact Us</h6>

				<span class="icon-phone"></span>0800 111 111

				<span class="separator">or</span>

				<label for="issue">
					<span>Select your issue</span>
					<div class="select-wrapper">
						<select>
							<option>issue 1</option>
							<option>issue 2</option>
							<option>issue 3</option>
						</select>
					</div>
				</label>

				<label for="message">
					<textarea rows="5" id="message" placeholder="Type your message here"></textarea>
				</label>

				<div class="action">
					<input type="submit" value="Send" class="button">
				</div>

			</form> 
			
		</div>
	</div>

</div>

                                <!-- Tab profile edit profile -->
                                <div class="tab-pane tab-pane-edit_profile fade" id="edit_profile">

	<div class="row">
		<div class="col-md-10">

					
			<!-- Title -->
			<div class="title">
				<h5>My profile</h5>
				<button class="js-edit-profile"><span class="icon-edit"></span>Edit</button>
			</div>

			<!-- Form -->
			<form class="edit_profile_form">

				<div class="row">
					<div class="col-sm-3">
						<div class="profile-picture-field">
							<span class="profile-picture-container">
								<img src="assets/img/content/profile_picture.jpg" alt="">
							</span>
							<button type="button" class="button-edit-text editPictureButton" data-toggle="modal" data-target="#modal-profile_picture"><span class="icon-edit"></span></button>
						</div>
					</div>

					<div class="col-sm-9">
						
						<div class="row">
							<div class="col-sm-6">

								<label for="firstname">
									<span>Name</span>
									<input id="firstname" name="firstname" type="text" value="Anakin" data-default="Anakin" disabled>
								</label>

							</div>
							<div class="col-sm-6">
								<label for="email">

									<span>Email or Mobile</span>
									<input id="email" name="email" type="text" value="asky@gmail.com" data-default="asky@gmail.com" disabled>
						
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">

								<label for="language">
									<span>Language</span>
									<div class="select-wrapper disabled">
										<select disabled data-default="en">
											<option selected value="en">English</option>
											<option value="fr">Francais</option>
										</select>
									</div>
								</label>

							</div>
							<div class="col-sm-6">

								<label for="password">
									<span>Pin code</span>
									<input id="password" name="password" type="password" value="passwordTest" data-default="passwordTest" disabled>
								</label>

								<label for="showPin" class="checkbox">                           
									<input id="showPin" name="showPin" value="showPin" type="checkbox" disabled>
									<span>Show pin code</span>                               
								</label>

							</div>
						</div>

					</div>

				</div>
				
				<div class="row">
					
				</div>

				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">

						<div class="action">
							<button class="button" type="reset">Cancel</button>
							<button type="submit" class="button" disabled>Save</button>
						</div>
						
					</div>
				</div>

			</form>

		</div>
	</div>
	
</div>

                            </div>
                        </div>
                        <div class="col-md-3">

                            <!-- Notifications -->
                            <div class="notifications" id="notifications">

	<div class="title">
		<h6>Notifications</h6>
	</div>

	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>There is a new episode available in Speaker Freakers. Watch it now!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>

	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>The Speaker Freakers experience is about to end, sure you don’t want to give it a try?</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>You can now enjoy a whole new experience in Warm Up!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>A new series has been added. Discover Home Grown now!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>You added an episode of Home Grown, why don’t you take a look at this episode as well?</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>You can now enjoy a whole new experience in Warm Up!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item empty_message">
		<div class="text">
			<p>You don't have any notifications</p>
		</div>
	</div>

</div>

                        </div>
                    </div>


                </div>
                
            </div>
        </div>

        <!-- Modal profile picture -->
        <div class="modal modal-profile_picture fade" id="modal-profile_picture">
	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span class="icon-close"></span>
				</button>
				<h1 class="modal-title">Your profile picture</h1>
			</div>

			<div class="modal-body">
				<p>Upload an existing image from your computer or take a new picture right here, right now.</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="button button-plus" data-dismiss="modal">
					Upload an image
				</button>
				<button type="button" class="button button-black button-profil_picture" data-dismiss="modal">
					Take a picture
				</button>
			</div>

		</div>

	</div>
</div>

        <!-- Footer -->
        <footer>
	<div class="container">


		<div class="row">
			<div class="col-md-12">

				<!-- Registered Trade Mark -->
				<div class="registered_trade_mark">
					<p>Marlboro Neuland TV ® 2016</p>
				</div>

			</div>
		</div>


		<div class="row">
			<div class="col-sm-3">

				<!-- Actions -->
				<div class="actions">
					<a href="#" class="button button-white button-small">Newsletter sign&nbsp;up</a>
				</div>

			</div>
			<div class="col-sm-6">

				<!-- Sitemap -->
				<div class="sitemap">

					<div class="row">
						<div class="col-md-4">

							<div class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
								aria-expanded="false">
									Customer service&nbsp;<span class="icon-arrow-bottom"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Contact us</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>

						</div>
						<div class="col-md-4">

							<div class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
								aria-expanded="false">
									Corporate info&nbsp;<span class="icon-arrow-bottom"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">B2B</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Cookies</a></li>
								</ul>
							</div>

						</div>
						<div class="col-md-4">

							<div class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
								aria-expanded="false">
									Lorem ipsum&nbsp;<span class="icon-arrow-bottom"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Lorem ipsum</a></li>
								</ul>
							</div>
							
						</div>
					</div>
					
				</div>

			</div>
			<div class="col-sm-3">

				<!-- Logo -->
				<div class="logo">
					<img src="assets/img/logo-horizontal-white.png">
				</div>

			</div>
		</div>


	</div>
</footer>

        <!-- SCRIPTS -->
        <div class="neuland-loader">
	<div>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>

<!-- build:js assets/js/vendors/vendors.min.js -->

<!-- !important to keep modernizr in first position -->
<script type="text/javascript" src="assets/js/vendors/modernizr-custom.js"></script>

<script type="text/javascript" src="assets/js/vendors/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/vendors/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/vendors/swiper.jquery.min.js"></script>
<script type="text/javascript" src="assets/js/vendors/GlueFrame.js"></script>
<script type="text/javascript" src="assets/js/vendors/photoswipe.min.js"></script>
<script type="text/javascript" src="assets/js/vendors/photoswipe-ui.min.js"></script>
<script type="text/javascript" src="assets/js/vendors/jquery.knob.min.js"></script>
<!-- endbuild -->

<!-- build:js assets/js/neuland.min.js -->
<script type="text/javascript" src="assets/js/neulandVideo23player.jquery.js"></script>
<script type="text/javascript" src="assets/js/onCanPlayThrough.jquery.js"></script>
<script type="text/javascript" src="assets/js/cutWord.jquery.js"></script>
<script type="text/javascript" src="assets/js/substringText.jquery.js"></script>
<script type="text/javascript" src="assets/js/scrollTo.jquery.js"></script>
<script type="text/javascript" src="assets/js/photoswipe.jquery.js"></script>

<script type="text/javascript" src="assets/js/neulandUtils.js"></script>
<script type="text/javascript" src="assets/js/BrowserDetect.js"></script>
<script type="text/javascript" src="assets/js/pinCode.js"></script>
<script type="text/javascript" src="assets/js/globalOnScroll.js"></script>
<script type="text/javascript" src="assets/js/multipleVideoController.js"></script>
<script type="text/javascript" src="assets/js/profilePageNavigation.js"></script>
<script type="text/javascript" src="assets/js/pagesHeight.js"></script>
<script type="text/javascript" src="assets/js/swipersHome.js"></script>
<script type="text/javascript" src="assets/js/swipersPrograms.js"></script>
<script type="text/javascript" src="assets/js/swipersExperiences.js"></script>
<script type="text/javascript" src="assets/js/useImgAsBackgroundWithVideoMask.js"></script>
<script type="text/javascript" src="assets/js/handleBoxButtonInteraction.js"></script>
<script type="text/javascript" src="assets/js/handleVideoOverlayInteraction.js"></script>
<script type="text/javascript" src="assets/js/handleArticleOverlayInteraction.js"></script>
<script type="text/javascript" src="assets/js/bootstrapTabHistory.js"></script>
<script type="text/javascript" src="assets/js/handleNotificationsInteraction.js"></script>
<script type="text/javascript" src="assets/js/searchFormInteraction.js"></script>
<script type="text/javascript" src="assets/js/handleSharePanelInteraction.js"></script>
<script type="text/javascript" src="assets/js/doubleModalBugFix.js"></script>
<script type="text/javascript" src="assets/js/programFilterButtonBehavior.js"></script>
<script type="text/javascript" src="assets/js/editProfileFeature.js"></script>
<script type="text/javascript" src="assets/js/loadingHome.js"></script>
<script type="text/javascript" src="assets/js/videoBanner.js"></script>
<script type="text/javascript" src="assets/js/affixedNavigation.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

<!-- Initialization -->
<script type="text/javascript" src="assets/js/init.js"></script>

<!-- endbuild -->
        
    </body>
</html>