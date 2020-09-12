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
					<img src="{{asset('assets/img/logo-horizontal-white.png')}}">
				</div>

			</div>
		</div>


	</div>
</footer>

        <!-- Health Warning -->
        <div class="health_warning">
	<img src="{{asset('assets/img/health_warning.jpg')}}" alt="Smoking kills"/>
</div>

        <!-- Modal pin -->
        <div class="modal modal-pin fade" id="modal-pin">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span class="icon-close"></span>
                </button>
                <h1 class="modal-title">Enter your pin code</h1>
            </div>

            <div class="modal-body">

                <form class="keyboard">  
                    <div class="form-group">
                        <label for="pin">
                            <input id="pinCodeInput" name="pin" type="password" placeholder="1243" maxlength="6">
                        </label>
                    </div>
                    <button type="button" value="1">1</button>
                    <button type="button" value="2">2</button>
                    <button type="button" value="3">3</button>
                    <button type="button" value="4">4</button>
                    <button type="button" value="5">5</button>
                    <button type="button" value="6">6</button>
                    <button type="button" value="7">7</button>
                    <button type="button" value="8">8</button>
                    <button type="button" value="9">9</button>
                    <button type="button" value="0">0</button>
                    <button type="reset">C</button>
                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="button button-small" data-dismiss="modal" data-toggle="modal" data-target="#modal-sign_in">
                    Log in
                </button>
                <a href="#">
                    Forgotten pin
                </a>
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
<script type="text/javascript" src="{{asset('assets/js/vendors/modernizr-custom.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/vendors/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendors/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendors/swiper.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendors/GlueFrame.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendors/photoswipe.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendors/photoswipe-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendors/jquery.knob.min.js')}}"></script>
<!-- endbuild -->

<!-- build:js assets/js/neuland.min.js -->
<script type="text/javascript" src="{{asset('assets/js/neulandVideo23player.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/onCanPlayThrough.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/cutWord.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/substringText.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scrollTo.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/photoswipe.jquery.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/neulandUtils.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/BrowserDetect.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pinCode.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/globalOnScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/multipleVideoController.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/profilePageNavigation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pagesHeight.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/swipersHome.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/swipersPrograms.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/swipersExperiences.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/useImgAsBackgroundWithVideoMask.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/handleBoxButtonInteraction.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/handleVideoOverlayInteraction.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/handleArticleOverlayInteraction.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrapTabHistory.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/handleNotificationsInteraction.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/searchFormInteraction.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/handleSharePanelInteraction.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/doubleModalBugFix.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/programFilterButtonBehavior.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editProfileFeature.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/loadingHome.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/videoBanner.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/affixedNavigation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

<!-- Initialization -->
<script type="text/javascript" src="{{asset('assets/js/init.js')}}"></script>

<!-- endbuild -->
 <script type="text/javascript">
                    
                                 $(document).ready(function(){
                                     
                          $('.follow').on('click', '.user',function(e) {
                              
                                var task_id = $(this).val();
                                 e.preventDefault();
                                // alert();
                              var rew=("fa" + task_id);
                               document.getElementById(rew).className = "button button-small button-follow active aktivan";
                                  $.ajax({
                                 url: 'http://localhost/neuland/public/userFollowProgram/'+task_id,
                                 type: 'get',
                             
                               });
                                    });
    
                               
                              $('.follow').on('click', '.aktivan',function(e) {
                                   e.preventDefault();
                                    var task_id = $(this).val();
                           //  alert();
                           
                               var rew=("fa" + task_id);
                               document.getElementById(rew).className = "button button-small button-follow user";
                                 $.ajax({
                                     url: 'http://localhost/neuland/public/userUnfollowProgram/'+task_id,
                                  type: 'get',
                                  
                                      });
                                     });
                                     
                                     
                                     
                              $('.wat').on('click', '.akt',function(e) {
                                   e.preventDefault();
                                    var task_id = $(this).val().split(" ");
                          //   alert(task_id[1]);
                              var rew=("akt" + task_id[0]+'-'+task_id[1]);
                              var wer=("dont" + task_id[0]+'-'+task_id[1]);
                            //  alert(rew);
                            
                               document.getElementById(rew).className = "watch_later user-watch_later dont";
                               document.getElementById(rew).id = wer;
                                  $.ajax({
                                     url: 'http://localhost/neuland/public/userWatchLater/'+task_id[0]+'/'+task_id[1],
                                  type: 'get'
                                  
                                      });
                                     });
                                     
                                     
                                     
                              $('.wat').on('click', '.dont',function(e) {
                                   e.preventDefault();
                                    var task_id = $(this).val().split(" ");
                           //  alert(task_id[1]);
                              var rew=("akt" + task_id[0]+'-'+task_id[1]);
                              var wer=("dont" + task_id[0]+'-'+task_id[1]);
                           
                            
                               document.getElementById(wer).className = "watch_later akt";
                                document.getElementById(wer).id = rew;
                                  $.ajax({
                                     url: 'http://localhost/neuland/public/userDontWatchLater/'+task_id[0]+'/'+task_id[1],
                                  type: 'get'
                                  
                                      });
                                     });
                                     
                                     
                              $('.wat').on('click', '.lajk',function(e) {
                                   e.preventDefault();
                                    var task_id = $(this).val().split(" ");
                           //  alert(task_id[1]);
                              var rew=("lajk" + task_id[0]+'-'+task_id[1]);
                              var wer=("unlajk" + task_id[0]+'-'+task_id[1]);
                         //  alert('lajk');
                                document.getElementById(rew).className = "like user-like unlajk";
                                document.getElementById(rew).id = wer;
                                  document.getElementById('you'+task_id[0]+'-'+task_id[1]).innerHTML ="you and ";
                            
                                  $.ajax({
                                     url: 'http://localhost/neuland/public/userLike/'+task_id[0]+'/'+task_id[1],
                                  type: 'get'
                                  
                                      });
                                     });
                                     
                              $('.wat').on('click', '.unlajk',function(e) {
                                   e.preventDefault();
                                    var task_id = $(this).val().split(" ");
                           //  alert(task_id[1]);
                              var rew=("lajk" + task_id[0]+'-'+task_id[1]);
                              var wer=("unlajk" + task_id[0]+'-'+task_id[1]);
                         //  alert('lajk');
                                document.getElementById(wer).className = "like lajk";
                                document.getElementById(wer).id = rew;
                                  document.getElementById('you'+task_id[0]+'-'+task_id[1]).innerHTML ="";
                            
                                  $.ajax({
                                     url: 'http://localhost/neuland/public/userUnLike/'+task_id[0]+'/'+task_id[1],
                                  type: 'get'
                                  
                                      });
                                     });
                                     
                              $('.switch').on('change', '.izaberi',function(e) {
                                   e.preventDefault();
                                   var task_id = $(this).val().split(" ");
                                    document.getElementById(task_id[1]).className = "odustani";
                                 document.getElementById(wer).className = "like lajk";
                                  $.ajax({
                                     url: 'http://localhost/neuland/public/userSetPreference/'+task_id[0]+'/'+task_id[1],
                                  type: 'get'
                                  
                                      });

                                     });
                                     
                                     
                                   });            
                            
                            </script>
                            

    </body>
</html>