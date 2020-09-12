    @extends('template')
    @section('content')

		@if($giantBlog)
		<div class="main">

			<!-- Back -->
			<div class="back">
				<a href="javascript:history.go(-1)" class="icon-close"></a>
			</div>

			<div class="container">

				<div class="programs-article">


					<div class="row">
						<div class="col-md-12">

							<!-- Title -->
							<div class="title">
								<a href="{{ url('program/'.$giantBlog->giant->program->id) }}">
									<img src="{{asset('assets/img/content/logo-freethebass-black.png')}}" alt="Free the bass">
								</a>
								<h2>
									<a href=""><span class="icon-arrow-left-large disabled"></span></a>
									<span>{{ $giantBlog->title }}</span> 
									<a href=""><span class="icon-arrow-right-large"></span></a>
								</h2>
							</div>

						</div>
					</div>


					<div class="row">
						<div class="col-md-12">

							<!-- Text -->
							<div class="text">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-md-offset-2">

										<p><span class="first_character">L</span>{{ substr($giantBlog->blog1deo,0,224) }}</p>
										<p>{{ substr($giantBlog->blog1deo,224,191) }}</p>

									</div>
									<div class="col-sm-6 col-md-4">

										<p>{{ substr($giantBlog->blog1deo,415,225) }}</p>
										<p>{{ substr($giantBlog->blog1deo,640,191) }}</p>

									</div>
								</div>
							</div> 

						</div>
					</div>


					<div class="row">
						<div class="col-md-12">

							@if($giantBlog->giantBlogPhoto)
                                                         
							<div class="swiper swiper-container-programs-article photoswipe-gallery">
                                                          
								<div class="swiper-wrapper">
                                                                      @foreach($giantBlog->giantBlogPhoto as $giantBlogPhoto)
									<div class="swiper-slide">
										<a href="{{asset($giantBlogPhoto->photo.'photo.jpg')}}" data-size="1140x790">
											<img src="{{asset($giantBlogPhoto->photo.'thumb.jpg')}}" alt="">
										</a>
									</div>
                                                                     @endforeach
									
									
									
									
									
								</div>
                                                           

								<!-- Add Arrows -->
								<div class="swiper-button-next"><span class="icon-arrow-right-large"></span></div>
								<div class="swiper-button-prev"><span class="icon-arrow-left-large"></span></div>

								<!-- Add Pagination -->
								<div class="swiper-pagination-programs-article"></div>

							</div>
                                                           
                                                        @endif
						</div>
					</div>

					<div class="row">
						 <div class="col-md-8 col-md-offset-2">

							<!-- Subtitle -->
							<div class="subtitle">
								<h3><strong>Lorem warm-up</strong><span>Ipsum dolores us meetep</span></h3>
							</div>

						</div>
					</div>


					<div class="row">
						<div class="col-md-12">

							<!-- Text -->
							<div class="text">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-md-offset-2">

										<p>Lorem ipsoulor sit amet, consecter adipiscing elit. Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim. Donec non fringilla tellus, non maximus nunc. Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</p>
										<p>Adipiscing elit dolor sit amet, consectetur us adipiscing elit. Aenean vel lacus nec turpis auctor porta. Quisque non diam ligula. Suspendisse feugiat, purus vel volutpat tempus conspiratour.</p>

									</div>
									<div class="col-sm-6 col-md-4">

										<p>Lorem ipsoulor sit amet, consecter adipiscing elit. Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim. Donec non fringilla tellus, non maximus nunc. Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</p>
										<p>Lorem ipsoulor sit amet</p>
										<ul>
											<li>Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim.</li>
											<li>Donec non fringilla tellus, non maximus nunc.</li>
											<li>Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</li>
										</ul>

									</div>
								</div>
							</div> 

						</div>
					</div>

					
					<div class="row">
						<div class="col-md-12">

							<!-- Banner -->
							<div class="banner-episode">
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
			data-autoplay="0"
			class="neulandVideo23player"
			data-src="//neulandtv.videomarketingplatform.co/15020911.ihtml/player.html?token=b6a6b2bac71dbf090b0d1c109a93cfdc&source=embed&photo%5fid=15020831&autoPlay=0"
			frameborder="0"
			border="0"
			scrolling="no"
			allowfullscreen="0"
			mozallowfullscreen="0"
			webkitallowfullscreen="0">  
		</iframe>

	</div>

	

	

	
	<!-- Player overlay -->
	<div class="player-overlay" style="background-image:url({{asset('assets/img/content/trueImage')}})">

		<div class="content-box">
			
			<h6>Coming up Next</h6>

			<div class="countdown">
				<input type="text" class="knob" value="0">
				<a href="programs-episode.html" class="button button-play">
					<span class="icon-play-stripped"></span>
				</a>
			</div>

			<h3>The 5 golden rules that every warm up dj</h3>
			<h6>
			
			Episode <strong>02</strong></h6>

			<button type="button" class="button button-white button-restart">
				Restart
			</button>

		</div>

	</div>
	

	
	<!-- Player overlay -->
	<div class="article-overlay">

		<div class="content" style="background-image:url({{asset('assets/img/content/article-banner-visu.jpg')}})">
			
			<div class="content-box">
				<img src="{{asset('assets/img/content/logo-freethebass.png')}}" alt="Free the bass">

				<a href="#" class="button button-play button-start">
					<span class="icon-play-stripped"></span>
				</a> 

				<span>Watch now</span>
				<h6>
				
				Episode <strong>02</strong></h6>
				<span class="time">Time 35:25</span>
			</div>

		</div>

	</div>
	

	

</div>
							</div>   

						</div>
					</div>


					<div class="row">
						<div class="col-md-12">

							<!-- Text -->
							<div class="text">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-md-offset-2">

										<p>Lorem ipsoulor sit amet, consecter adipiscing elit. Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim. Donec non fringilla tellus, non maximus nunc. Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</p>
										<p>Adipiscing elit dolor sit amet, consectetur us adipiscing elit. Aenean vel lacus nec turpis auctor porta. Quisque non diam ligula. Suspendisse feugiat, purus vel volutpat tempus conspiratour.</p>

									</div>
									<div class="col-sm-6 col-md-4">

										<p>Lorem ipsoulor sit amet, consecter adipiscing elit. Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim. Donec non fringilla tellus, non maximus nunc. Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</p>
										<p>Adipiscing elit dolor sit amet, consectetur us adipiscing elit. Aenean vel lacus nec turpis auctor porta. Quisque non diam ligula. Suspendisse feugiat, purus vel volutpat tempus conspiratour.</p>

									</div>
								</div>
							</div> 

						</div>
					</div>


					<div class="row">
						 <div class="col-md-6 col-md-offset-3">

							<!-- Quote -->
							<div class="quote">
								<p>« Quisque non diam ligula. Suspendisse feugiat, purus vel volutpat tempus conspiratour. »</p>
							</div>

						</div>
					</div>


					<div class="row">
						 <div class="col-md-6 col-md-offset-3">

							<!-- Credits -->
							<div class="credits">
                                                            
                                                            
                                                            
		  <div class="wat">
                      
                           @if(Auth::user())
                        @if(!Auth::user()->userLike->where('video_id',$giantBlog->id)->where('type',$giantBlog->type)->first())
			<button id="lajk{{$giantBlog->id.'-'.$giantBlog->type}}" class="like lajk" value="{{$giantBlog->id}} {{$giantBlog->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$giantBlog->id.'-'.$giantBlog->type}}"></span>{{ $giantBlog->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @else
                        <button id="unlajk{{$giantBlog->id.'-'.$giantBlog->type}}" class="like user-like unlajk" value="{{$giantBlog->id}} {{$giantBlog->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$giantBlog->id.'-'.$giantBlog->type}}">you and </span>{{ $giantBlog->totalLikes-1 }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                        @else
                          <button class="like" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">{{ $giantBlog->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                        @endif
                           
                       
                        </div>
                                                            
                                                            
                                                            
                                                            
								<span class="author">by Lorem ipsoulor</span>
								<span class="date">October 31st 2016</span>
							</div>

						</div>
					</div>


				</div>

			</div>

		</div>

		@include('includes.giantBlogFooter')

@endif
@stop