<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Neuland.Tv">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1, minimum-scale=1">

    <title>Neuland.Tv</title>

    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>


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
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png?v=1">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png?v=1">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png?v=1">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=1">
    <meta name="theme-color" content="#ffffff">


    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/swiper.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/main.css"/>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

</head>

<body class="login_page">

<!-- Header -->
<header>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">

                <nav class="navbar">

                    <!-- Navbar header -->
                    <div class="navbar-header">


                        <button type="button" class="navbar-toggle collapsed" data-toggle="modal"
                                data-target="#modal-not_logged">

                            Menu
                            <span class="icon-arrow-bottom"></span>
                            <span class="icon-close"></span>
                        </button>


                    </div>


                    <!-- Navbar connexion -->
                    <div class="navbar-connexion hidden-xs">
                        <button type="button" class="button button-small" data-dismiss="modal" data-toggle="modal"
                                data-target="#modal-log_in">
                            Log in
                        </button>
                        {{--<a href="#" type="button" class="button button-small" data-dismiss="modal">
                            Register
                        </a>--}}
                    </div>


                    <!-- Navbar collapse -->
                    <div class="collapse navbar-collapse" id="navbar">


                        <!-- Navbar nav -->
                        <ul class="nav navbar-nav">


                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal-not_logged">
                                    <span>Programs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal-not_logged">
                                    <span>TV</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal-not_logged">
                                    <span>Experiences</span>
                                </a>
                            </li>

                            {{--<li class="language dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
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

<!-- Main -->
<div class="main" data-toggle="modal" data-target="#modal-not_logged">

    <div class="container">

        <div class="login">

            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-1">

                    <!-- Title -->
                    <div class="title">
                        <h1><span class="cutWord shake line-left">Welcome</span></h1>
                        <h5>This website is for <br>legal age smokers in
                            <Country> only.
                        </h5>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <!-- Video preview -->
                    <div class="video-preview">

                        <div class="video ">


                            <!--
                                # twentythree video player // https://www.twentythree.net/

                                * 15020911.ihtml : the player ID (style it in video23 admin and find the id in editor)
                                * token : token of video
                                * id : id of the video
                                * neulandtv.videomarketingplatform.co/ : your site url
                                * autoplay : 0 || 1 ... 1 in this case
                            -->

                            <iframe
                                    data-autoplay="1"
                                    class="neulandVideo23player"
                                    data-src="//neulandtv.videomarketingplatform.co/15020911.ihtml/player.html?token=b6a6b2bac71dbf090b0d1c109a93cfdc&source=embed&photo%5fid=15020831&autoPlay=1"
                                    frameborder="0"
                                    border="0"
                                    scrolling="no"
                                    allowfullscreen="0"
                                    mozallowfullscreen="0"
                                    webkitallowfullscreen="0">
                            </iframe>

                        </div>


                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="post_container clearfix">

                        <div class="box box-horizontal ">

                            <div class="actions">
                                <div class="button-group">

                                    <button class="watch_later">
                                        <span class="icon-watch_later"></span><span>Watch Later</span>
                                        <span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
                                    </button>


                                    <button class="like ">
                                        <span class="icon-hand5"></span><span
                                                class="likeCount hidden-xs hidden-sm">542</span><span
                                                class="hidden-md hidden-lg hidden-xl">Like</span>
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
                                    <img src="assets/img/content/content_07.jpg" alt="">
                                </div>
                                <div class="cat-icon">
                                    <span class="icon-video_bold"></span>
                                </div>


                                <div class="content">


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


                                    <button class="like ">
                                        <span class="icon-hand5"></span><span
                                                class="likeCount hidden-xs hidden-sm">527</span><span
                                                class="hidden-md hidden-lg hidden-xl">Like</span>
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


                                <div class="content">


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
                                        <span class="icon-hand5"></span><span
                                                class="likeCount hidden-xs hidden-sm">569</span><span
                                                class="hidden-md hidden-lg hidden-xl">Like</span>
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


                                <div class="content">


                                    <div class="title">We Asked bands About Their Worst live Experiences</div>
                                </div>

                                <div class="details">

                                    Episode <strong>03</strong></span>
                                </div>


                            </a>

                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>

</div>

<!-- Modal login -->
<div class="modal modal-not_logged fade" id="modal-not_logged">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span class="icon-close"></span>
                </button>
                <h1 class="modal-title">Ooops!</h1>
            </div>

            <div class="modal-body">
                <p>Access to the awesome stuff on this website is restricted. Already a member? Sign in fast with your
                    credentials. Not a member? Don’t even try to register, this stuff is too hot to handle. Unless… you
                    really think you got what it takes?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="button button-small" data-dismiss="modal" data-toggle="modal"
                        data-target="#modal-log_in">
                    Log in
                </button>
                {{--<button type="button" class="button button-small" data-dismiss="modal">
                    Register
                </button>--}}
            </div>

        </div>

    </div>
</div>

<!-- Modal sign in -->
<div class="modal modal-log_in fade" id="modal-log_in">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span class="icon-close"></span>
                </button>
                <h1 class="modal-title">Log in</h1>
            </div>

            <form action="{{ route('postLogin') }}" method="post">

                {!! csrf_field() !!}

                <div class="modal-body">

                    <div class="form-group">
                        <label for="code">
                            <input id="code" name="code" type="text" placeholder="Enter your code here" value="123456">
                        </label>
                    </div>

                    {{--<div class="form-group form-group-radio">
                        <label class="checkbox">
                            <span>Gender:</span>
                        </label>
                        <label for="genderm" class="checkbox">
                            <input id="genderm" name="gender" value="m" type="radio" class="radio-inline">
                            <span>Male</span>
                        </label>
                        <label for="genderf" class="checkbox">
                            <input id="genderf" name="gender" value="f" type="radio" class="radio-inline">
                            <span>Female</span>
                        </label>
                    </div>--}}

                    <div class="form-group form-group-radio">
                        <label for="smokerover18" class="checkbox">
                            <input id="smokerover18" name="smokerover18" value="1" type="checkbox" checked>
                            <span>I accept that I'm a smoker and over 18</span>
                        </label>
                    </div>

                </div>

                <div class="modal-footer">

                    {{--<a href="{{ route('login') }}" class="button button-small">
                        SIGN IN
                    </a>--}}
                    <input type="submit" value="SIGN IN" class="button button-small">

                </div>

            </form>

        </div>

    </div>
</div>

<!-- Modal error -->
<div class="modal modal-error fade" id="modal-error">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span class="icon-close"></span>
                </button>
                <h1 class="modal-title">Ooops!</h1>
            </div>

            <div class="modal-body">
                <p>Something went wrong. Please try again later.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="button button-small" data-dismiss="modal">
                    OK
                </button>
            </div>

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

</body>
</html>