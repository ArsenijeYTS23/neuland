<div class="video-banner iframe-loading">

	<div class="video-action">
		<button class="js-close-banner">
			<span class="icon-close"></span>
		</button>
	</div>

	<div class="video">

		<iframe
			data-muted="true"
			class="neulandVideo23banner"
			data-src="//neulandtv.videomarketingplatform.co/15029995.ihtml/player.html?token=b6a6b2bac71dbf090b0d1c109a93cfdc&source=embed&photo%5fid=15020831&autoPlay=1"
			frameborder="0"
			border="0"
			scrolling="no"
			allowfullscreen="0"
			mozallowfullscreen="0"
			webkitallowfullscreen="0">  
		</iframe>

	</div>

	<div class="content">
		<div class="container">

			<div class="row">
			
				
				
				
				<div class="col-md-12 text-center">

					<!-- Button follow -->
	                <button class="button button-small button-follow">
	<span class="icon-checked"></span>
	<span class="icon-close"></span>
	<span class="text">
		<span>Follow</span>
		<span>Following</span>
		<span>Unfollow</span>
	</span>
</button>
                                         @if($program)
					<img src="{{asset(preg_replace('/\s+/', '', $program->logo.'logo.png'))}}">
                                        @endif
					<div class="actions js-open-banner">
						<button class="button button-play">
							<span class="icon-play-stripped"></span>
						</button>
						<span>Watch trailer</span>
					</div>

				</div>
				

			</div>

		</div>
	</div>
	

</div>