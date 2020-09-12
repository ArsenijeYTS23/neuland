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
		<form action="{{ url('user') }}">
			<span class="select_label"><span class="icon-filter"></span><span>Sort by</span></span>
			<div class="select-wrapper select-wrapper-filter">
				<select name='sort' onchange="this.form.submit();">
					<option value='created_at' {!! ($sortiraj=='created_at') ? 'selected': '' !!}>recent</option>
					<option value='old' {!! ($sortiraj=='old') ? 'selected': '' !!}>old</option>
					<option value='totalLikes' {!! ($sortiraj=='totalLikes') ? 'selected': '' !!}>popular</option>
				</select>
			</div>
		</form>
	</li>
</ul>

	
	<div class="post_container clearfix">
            @foreach($liked as $like)
		<div class="box box-horizontal ">

	<div class="actions">
		<div class="wat">
		<div class="button-group">
                    @if(Auth::user())
			@if(!Auth::user()->userWatchLater->where('video_id',$like->id)->where('type',$like->type)->first())
                        <button id="akt{{$like->id.'-'.$like->type}}"   class="watch_later akt" value="{{$like->id}} {{$like->type}}" type="button">
                          	<span class="icon-watch_later"></span><span>Watch Latter</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                              @else
                              <button id="dont{{$like->id.'-'.$like->type}}"  class="watch_later user-watch_later dont" value="{{$like->id}} {{$like->type}}" type="button">
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
                        @if(!Auth::user()->userLike->where('video_id',$like->id)->where('type',$like->type)->first())
			<button id="lajk{{$like->id.'-'.$like->type}}" class="like lajk" value="{{$like->id}} {{$like->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$like->id.'-'.$like->type}}"></span>{{ $like->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @else
                        <button id="unlajk{{$like->id.'-'.$like->type}}" class="like user-like unlajk" value="{{$like->id}} {{$like->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$like->id.'-'.$like->type}}">you and </span>{{ $like->totalLikes-1 }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                        @else
                          <button class="like" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">{{ $like->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
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
	

	<a href="{{ url($like->type.'/'.$like->id) }}">
	
		<div class="visu">
			<img src="{{ asset($like->episodeThumb.'thumb.jpg') }}" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
                            @if($like->serie!=null)
				<img src="{{ url($like->serie->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @elseif($like->giant->giantBlog)
				<img src="{{ url($like->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @else
				<img src="{{ url($like->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @endif
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				  @if($like->serie)
				<img src="{{ url($like->serie->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @elseif($like->giant->giantBlog)
				<img src="{{ url($like->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
                                @else
				<img src="{{ url($like->giant->program->logo.'logo.png') }}" alt="Speaker freakers">
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