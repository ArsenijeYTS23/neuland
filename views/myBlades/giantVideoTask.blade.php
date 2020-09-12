     @extends('template')
     @section('content') 
       

   
       <div class="main">

            <!-- Back -->
            <div class="back">
                <a href="javascript:history.go(-1)" class="icon-close"></a>
            </div>

            <div class="container">

                <div class="programs-episode">


                    <div class="row">
                        <div class="col-md-8 col-md-push-4">

                            <!-- Video -->
                            <div class="video-preview">

	<div class="video ">

		<div class="actions">
			<div class="wat">
                             @if(Auth::user())
			@if(Auth::user() && !Auth::user()->userWatchLater->where('video_id',$giantVideoTask->id)->where('type',$giantVideoTask->type)->first())
                        <button id="akt{{$giantVideoTask->id.'-'.$giantVideoTask->type}}"   class="watch_later akt" value="{{$giantVideoTask->id}} {{$giantVideoTask->type}}" type="button">
                          	<span class="icon-watch_later"></span><span>Watch Latter</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                              @else
                              <button id="dont{{$giantVideoTask->id.'-'.$giantVideoTask->type}}"  class="watch_later user-watch_later dont" value="{{$giantVideoTask->id}} {{$giantVideoTask->type}}" type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
			 @endif
                               @else
                              <button class="watch_later"  type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                               @endif
                         
                         
                         
                         
                         
			
			<button class="share">
				<span class="icon-share"></span>Share
			</button>
			
                         
                           @if(Auth::user())
                        @if(!Auth::user()->userLike->where('video_id',$giantVideoTask->id)->where('type',$giantVideoTask->type)->first())
			<button id="lajk{{$giantVideoTask->id.'-'.$giantVideoTask->type}}" class="like lajk" value="{{$giantVideoTask->id}} {{$giantVideoTask->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$giantVideoTask->id.'-'.$giantVideoTask->type}}"></span>{{ $giantVideoTask->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @else
                        <button id="unlajk{{$giantVideoTask->id.'-'.$giantVideoTask->type}}" class="like user-like unlajk" value="{{$giantVideoTask->id}} {{$giantVideoTask->type}}" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm"><span id="you{{$giantVideoTask->id.'-'.$giantVideoTask->type}}">you and </span>{{ $giantVideoTask->totalLikes-1 }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                         @endif
                        @else
                          <button class="like" type="button">
                            <span class="icon-hand5"></span><span class="likeCount hidden-xs hidden-sm">{{ $episode->totalLikes }}</span><span class="hidden-md hidden-lg hidden-xl">Like</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                        @endif
                           
                       
                          </div>
			
		</div>

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

	

	
	<!-- Share overlay -->
	<div class="share-overlay">

		<button type="button" class="close">
			<span class="icon-close"></span>
		</button>

		<h4>Invite a friend to watch this video</h4>

		<form>

			<label for="emailMobile">
				<input id="emailMobile" name="emailMobile" type="text" placeholder="Email or Mobile">
			</label>

			<label for="message">
				<textarea name="message" placeholder="Tell your friend why this video is awesome"></textarea>
			</label>

			<label for="conditions" class="checkbox">                           
				<input id="conditions" name="conditions" value="conditions" type="checkbox">
				<span>I confirm that I know this person in real life and that this person is a legal age smoker residing in <country>.</span>                               
			</label>

			<input type="submit" class="button button-white button-small" value="Send">

		</form>
		
	</div>
	

	
	<!-- Player overlay -->
	<div class="player-overlay" style="background-image:url(assets/img/content/programs-season1-poster.jpg)">

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
	

	

	

</div>

                        </div>
                        <div class="col-md-4 col-md-pull-8">

                            <!-- Title -->
                            <div class="title">
                                <a href="{{ url('program/'.$giantVideoTask->giant->program->id) }}">
                                    <img src="{{asset('assets/img/content/logo-freethebass-black.png')}}" alt="Free the bass">
                                </a>
                                <h3>{{ $giantVideoTask->title." " }}<span class="cutWord">{{ $giantVideoTask->giant->name }} {{ $giantVideoTask->giant->lastname }}</span></h3>
                                <h5 class="video">
                                    <a href="" class="disabled"><span class="icon-arrow-left-large"></span>Previous</a>
                                    <a href="">Next<span class="icon-arrow-right-large"></span></a>
                                </h5>
                            </div>

                            <!-- Text -->
                            <div class="text">

                                <p>Lorem ipsoulor sit amet, consecter adipiscing elit. Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim. Donec non fringilla tellus, non maximus nunc. Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</p>
                                <p>Adipiscing elit dolor sit amet, consectetur us adipiscing elit. Aenean vel lacus nec turpis auctor porta. Quisque non diam ligula. Suspendisse feugiat, purus vel volutpat tempus conspiratour.</p>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

       @stop