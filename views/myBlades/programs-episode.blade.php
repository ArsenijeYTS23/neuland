        
@extends('template')
@section('content')
        

        <div class="main">
            @if($episode)

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
                              <button class="watch_later"  type="button">
                                <span class="icon-watch_later"></span><span>Watch Later</span>
				<span class="icon-validate hidden-md hidden-lg hidden-xl check-icon"></span>
			</button>
                               @endif
                         
                         
                         
                         
                         
			
			<button class="share">
				<span class="icon-share"></span>Share
			</button>
			
                         
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
			
			Episode <strong>{{ $episode->number }}</strong></h6>

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
                                <a href="{{ url('program/'.$episode->serie->program->id) }}">
                                    <img src="{{ asset($episode->serie->program->logo.'logo.png') }}" alt="Free the bass">
                                </a>
                                <h3>{{ $episode->title }}<span class="cutWord">Joy and Miley George</span></h3>
                                <h5>
                                    @if($episode->previous)
                                    <a href="{{ url('episode/'.$episode->previous) }}"><span class="icon-arrow-left-large "></span></a>
                                    @else
                                    <a ><span class="icon-arrow-left-large disabled"></span></a>
                                    @endif
                                        <!-- Season <strong>01</strong> - --> 
                                        Episode <strong>{{ $episode->number }}</strong>
                                        @if($episode->next)
                                    <a href="{{ url('episode/'.$episode->next) }}"><span class="icon-arrow-right-large"></span></a>
                                        @else
                                    <a ><span class="icon-arrow-right-large disabled"></span></a>
                                    @endif
                                </h5>
                            </div>

                            <!-- Text -->
                            <div class="text">

                                <p>Lorem ipsoulor sit amet, consecter adipiscing elit. Aliquam elit elit, facilisis id quam vitae, pharetra tincidunt enim. Donec non fringilla tellus, non maximus nunc. Nulla facilisi. Vestibulum feugiat massa at massa lacinia.</p>
                                <p>{{ $episode->desciption }}</p>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
@endif
        </div>

    @stop