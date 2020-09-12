

	
     
	<div class="swiper swiper-container-programs-giants">
		<div class="swiper-wrapper">
                    
                         @foreach($program->giant as $giant)
			<div class="swiper-slide">

				<div class="row">
					<div class="col-md-3 col-md-offset-1">
					
						<div class="title">
							<h2><strong>{{ $giant->name }}</strong>{{ $giant->lastname }}</h2>
						</div>
			
						<div class="text">

							<p>{{ $giant->description }}</p>

						</div>
					</div>
					<div class="col-md-7">
						<img src="{{asset($giant->giantThumb)}}" alt="">
					</div>
				</div>

			</div>
			@endforeach
			

		</div>

		<!-- Add Arrows -->
		<div class="swiper-button-next"><span class="icon-arrow-right-large"></span></div>
		<div class="swiper-button-prev"><span class="icon-arrow-left-large"></span></div>

		<!-- Add Pagination -->
		<div class="swiper-pagination-programs-giants"></div>
	</div>

	@include('includes.programGiantsVideos')

