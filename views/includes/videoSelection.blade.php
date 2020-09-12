  <div class="videos_selection subnavigationAffixLimit">

                    <!-- Nav videos selection -->
                    <div class="subnavigationAffix">
	
</div>

                    <div class="container">

                        <!-- Tab videos selection -->
                        <div class="tab-content tab-videos_selection">

                            <!-- Tab videos selection new -->
                            <div class="tab-pane active fade active in" id="video_selection-new">

	<div class="title">
		<h4>What's hot</h4>
	</div>

	<div class="post_container clearfix">
            @if($hotest)
              @foreach($hotest as $hot)

		<div class="box box-horizontal ">

	<div class="actions">
            <div class="wat">
		<div class="button-group">
                    @if(Auth::user())
			@if(!Auth::user()->userWatchLater->where('video_id',$hot->id)->where('type',$hot->type)->first())
                        <button id="akt{{$hot->id.'-'.$hot->type}}"   class="watch_later akt" value="{{$hot->id}} {{$hot->type}}" type="button">
                          	<span class="icon-watch_later"></span><span>Watch Latter</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                              @else
                              <button id="dont{{$hot->id.'-'.$hot->type}}"  class="watch_later user-watch_later dont" value="{{$hot->id}} {{$hot->type}}" type="button">
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
                        @if(!Auth::user()->userLike->where('video_id',$hot->id)->where('type',$hot->type)->first())
			<button id="lajk{{$hot->id.'-'.$hot->type}}" class="like lajk" value="{{$hot->id}} {{$hot->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$hot->id.'-'.$hot->type}}"></span>{{ $hot->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @else
                        <button id="unlajk{{$hot->id.'-'.$hot->type}}" class="like user-like unlajk" value="{{$hot->id}} {{$hot->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$hot->id.'-'.$hot->type}}">you and </span>{{ $hot->totalLikes-1 }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                        @else
                          <button class="like" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">{{ $hot->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
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
	
        @if($hot->type=='episode')
	<a href="{{ url('episode/'.$hot->id) }}">
	  @elseif($hot->type=='giantBlog')
        <a href="{{ url('giantBlog/'.$hot->id) }}">
            @else
            <a href="{{ url('giantVideoTask/'.$hot->id) }}">
            @endif
		<div class="visu">
                    
			<img src="{{ asset($hot->episodeThumb.'thumb.jpg') }}" alt="">
		</div>
		<div class="cat-icon">
			<span class="icon-video_bold"></span>
		</div>

		
			<div class="logo hidden-xl hidden-lg hidden-md">
                            @if($hot->serie)
				<img src="{{asset($hot->serie->program->logo.'logo.png')}}" alt="Speaker freakers">
                                @elseif($hot->giant)
				<img src="{{asset($hot->giant->program->logo.'logo.png')}}" alt="Speaker freakers">
                                @endif
			</div>
		

		<div class="content">

			
			<div class="logo hidden-sm hidden-xs">
				 @if($hot->serie)
				<img src="{{asset($hot->serie->program->logo.'logo.png')}}" alt="Speaker freakers">
                                @elseif($hot->giant)
				<img src="{{asset($hot->giant->program->logo.'logo.png')}}" alt="Speaker freakers">
                                @endif
			</div>
			

			<div class="title">{{ $hot->title }}</div>
		</div>
		
		<div class="details">
			@if($hot->type=='episode')
			<strong>{{ $hot->serie->program->title }}</strong>/Episode <strong>{{ $hot->number }}</strong></span>
                           @elseif($hot->type=='giantBlog')
                         <strong>Blog</strong>  {{ $hot->giant->name }} <strong>{{ $hot->giant->lastname }}</strong></span>
                             @elseif($hot->type=='giantVideoTask')
                        <strong>Video task by</strong>  {{ $hot->giant->name }} <strong>{{ $hot->giant->lastname }}</strong></span>
                         @endif
		</div>
		
		
	
	</a>

</div>
            @endforeach
            @endif

		

		
		

		

		
	</div>
	
</div>
                            
                      
	

</div>
	</div>

</div>
                    
                    

                

              