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

		<header class="crm">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<a href="index.blade.php">
							<img src="assets/img/neuland_logo_52.png" alt="">
						</a>

					</div>
				</div>
			</div>
		</header>
		<!-- main -->
		<div class="crm main main-fullPage">
			<!-- Title -->
			<div class="title">
				<h1>
					<span>Oh Nooo !</span><br>
					<span class="cutWord">It won't be the same</span><br>
					<span>without you</span>
				</h1>
				<p>Is it because we are sending you too much stuff ?</p>
				<p>Tell us how often you want us to contact you:</p>
			</div>
			<form class="frequency" action="" method="">
				<fieldset>
					<input name="frequency" type="radio" value="once-a-week" checked>
					<label for="frequency">Once a week</label>
				</fieldset>
				<fieldset>
					<input name="frequency" type="radio" value="once-a-week">
					<label for="frequency">Every two weeks</label>
				</fieldset>
				<fieldset>
					<input name="frequency" type="radio" value="once-a-week">
					<label for="frequency">Monthly</label>
				</fieldset>
				<fieldset>
					<input name="frequency" type="radio" value="unsubscribe">
					<label for="frequency">Unsubscribe completely</label>
					<p>No one likes to say goodbye, so in case you change your mind,<br> we'll always be here with great stories to share.</p>
				</fieldset>
				<button type="button" class="button" name="button">Confirm</button>
			</form>
			<div class="modal">
				<div class="title">
					<h1>
						<span>Alright then!</span><br>
						<span>Your new settings</span><br>
						<span class="cutWord">Are saved</span><br>
					</h1>
				</div>
			</div>
		</div>
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
		<script type="text/javascript">
		// crm page specifics
		$('form.frequency button').click(function () {
			console.log("obj");
			$('.modal').fadeIn();
		});
		</script>
	</body>
</html>
