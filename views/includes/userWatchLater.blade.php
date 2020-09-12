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
				<select name='sortWl' onchange="this.form.submit();">
					<option value='created_at' {!! ($sortirajWl=='created_at') ? 'selected': '' !!}>recent</option>
					<option value='old' {!! ($sortirajWl=='old') ? 'selected': '' !!}>old</option>
					<option value='totalLikes' {!! ($sortirajWl=='totalLikes') ? 'selected': '' !!}>popular</option>
				</select>
			</div>
		</form>
	</li>
</ul>

	
	<div class="post_container clearfix">
            @foreach($watches as $watch)
		<div class="box box-horizontal ">

	<div class="actions">
		<div class="wat">
		<div class="button-group">
                    @if(Auth::user())
			@if(!Auth::user()->userWatchLater->where('video_id',$watch->id)->where('type',$watch->type)->first())
                        <button id="akt{{$watch->id.'-'.$watch->type}}"   class="watch_later akt" value="{{$watch->id}} {{$watch->type}}" type="button">
                          	<span class="icon-watch_later"></span><span>Watch Latter</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                              @else
                              <button id="dont{{$watch->id.'-'.$watch->type}}"  class="watch_later user-watch_later dont" value="{{$watch->id}} {{$watch->type}}" type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			 @endif
                         @else
                         <button   class="watch_later "  type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                         
                         
                         
                         
                         
                         
                       @if(Auth::user())
                        @if(!Auth::user()->userLike->where('video_id',$watch->id)->where('type',$watch->type)->first())
			<button id="lajk{{$watch->id.'-'.$watch->type}}" class="like lajk" value="{{$watch->id}} {{$watch->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$watch->id.'-'.$watch->type}}"></span>{{ $watch->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @else
                        <button id="unlajk{{$watch->id.'-'.$watch->type}}" class="like user-like unlajk" value="{{$watch->id}} {{$watch->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$watch->id.'-'.$watch->type}}">you and </span>{{ $watch->totalLikes-1 }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                        @else
                          <button class="like" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">{{ $watch->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
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
	

	<a href="{{ url($watch->type.'/'.$watch->id) }}">
	
		<div class="visu">
			<img src="{{ asset($watch->episodeThumb.'thumb.jpg') }}" alt="">
<!--			<img src="assets/img/content/content_01.jpg" alt="">-->
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
				 @if($watch->serie!=null)
				<img src="{{ url($watch->serie->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @elseif($watch->giant->giantBlog)
				<img src="{{ url($watch->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @else
				<img src="{{ url($watch->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @endif
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				 @if($watch->serie!=null)
				<img src="{{ url($watch->serie->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @elseif($watch->giant->giantBlog)
				<img src="{{ url($watch->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @else
				<img src="{{ url($watch->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @endif
			</div>
			

			<div class="title">We Asked bands About Their Worst live Experiences</div>
		</div>
		
		<div class="details">
			
			Episode <strong>02</strong></span>
		</div>
		
		
	
	</a>

</div>
@endforeach
		

		

		
		
		
	</div>

	<div class="actions actions-loadmore clearfix text-center">
		<a href="#" class="button buton-small">Load more</a>
	</div>

</div>