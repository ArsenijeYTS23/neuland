

	<div class="post_container clearfix">
            @if($program->serie->episode)
            @foreach($program->serie->episode->take($load) as $episode)

		<div class="box box-horizontal">

	<div class="actions">
            <div class="wat">
		<div class="button-group">
			@if(Auth::user())
			@if(Auth::user() && !Auth::user()->userWatchLater->where('video_id',$episode->id)->where('type',$episode->type)->first())
                        <button id="akt{{$episode->id.'-'.$episode->type}}"   class="watch_later akt" value="{{$episode->id}} {{$episode->type}}" type="button">
                          	<span class="icon-watch_later"></span><span>Watch Latter</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                              @else
                              <button id="dont{{$episode->id.'-'.$episode->type}}"  class="watch_later user-watch_later dont" value="{{$episode->id}} {{$episode->type}}" type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			 @endif
                         @else
                         <button  class="watch_later" type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			@endif
                
                         
                         
                       @if(Auth::user())
                        @if(!Auth::user()->userLike->where('video_id',$episode->id)->where('type',$episode->type)->first())
			<button id="lajk{{$episode->id.'-'.$episode->type}}" class="like lajk" value="{{$episode->id}} {{$episode->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$episode->id.'-'.$episode->type}}"></span>{{ $episode->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @else
                        <button id="unlajk{{$episode->id.'-'.$episode->type}}" class="like user-like unlajk" value="{{$episode->id}} {{$episode->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$episode->id.'-'.$episode->type}}">you and </span>{{ $episode->totalLikes-1 }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                        @else
                          <button class="like" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">{{ $episode->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                        @endif
                         
                         
                         
                         
                         
			
			<!-- validate actions only mobile -->
			<button class="js-hide-mobile-actions hidden-md hidden-lg hidden-xl">
				<span>Confirm</span>
			</button>
			
		</div>
            </div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	
	<!-- toggle actions only mobile -->
	<div class="mobile-actions hidden-md hidden-lg hidden-xl">
		<button class="show_actions"><span class="icon-more"></span></button>
	</div>
	

	<a href="{{ url('episode/'.$episode->id) }}">
	
		<div class="visu">
			<img src="{{asset($episode->episodeThumb.'thumb.jpg')}}" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		

		<div class="content">

			

			<div class="title">{{ $episode->title }}</div>
		</div>
		
		<div class="details">
			
			Episode <strong>{{ $episode->number }}</strong></span>
		</div>
		
		
	
	</a>

</div>
            @endforeach
            @endif

		

		

		

		<div class="box box-horizontal locked">

	<div class="actions">
		<div class="button-group">
			
			<button class="watch_later">
				<span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			

			<button class="like ">
				<span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">244</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>

			
		</div>
		<div class="action-overlay js-hide-mobile-actions hidden-md hidden-lg hidden-xl"></div>

	</div>

	

	
	<div>
		<div class="visu">
			<img src="{{asset('assets/img/content/content_12.jpg')}}" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		

		<div class="content">

			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>06</strong></span>
		</div>
		
		
	</div>
	

</div>
	</div>
                 @if($program->serie->episode && count($program->serie->episode)>=$next)  
                 
	<div class="actions actions-loadmore clearfix text-center">
		<a href="{{ url('program/'.$program->id.'/'.$next.'#episodes') }}" class="button buton-small">Load more</a>
	</div>
                 @endif

