@extends('template')
@section('content')
        

      

        <!-- Main -->
        <div class="main">
            <div class="container">

                <div class="programs">

                    <div class="row">
                        @if($programs)
                        @foreach($programs as $program)
                        <div class="col-md-4 follow">
                            @if(Auth::user())
                             @if(!$program->user->where('id',Auth::user()->id)->first())
                             <button   type="button" id="fa{{$program->id}}" class="button button-small button-follow user" value="{{ $program->id }}">
	                            <span class="icon-checked"></span>
	                              <span class="icon-close"></span>
	                               <span class="text">
		                         <span>Follow</span>
		                         <span>Following</span>
		                         <span>Unfollow</span>
	                              </span>
                            </button>
                             @else
                             <button   type="button" id="fa{{$program->id}}" class="button button-small button-follow active aktivan" value="{{ $program->id }}">
	                            <span class="icon-checked"></span>
	                              <span class="icon-close"></span>
	                               <span class="text">
		                         <span>Follow</span>
		                         <span>Following</span>
		                         <span>Unfollow</span>
	                              </span>
                            </button>
                         @endif
                         @endif
                            <!-- Nav programs item -->
                            <a href="{{ url('program/'.$program->id) }}">

	<!-- Visu -->
	<div class="visu">
		<div class="hidden-sm hidden-xs">
			<img src="{{ asset($program->programThumb.'thumb.jpg') }}" alt="Speaker Freakers">
		</div>
		<div class="hidden-md hidden-lg">
			<img src="{{ asset($program->programThumb.'thumb.jpg') }}" alt="Speaker Freakers">
		</div>
		<div class="overlay"></div>
	</div>

	<!-- Content -->
	<div class="content">

		<h6>
			 @if($program->serie && $program->serie->episode->first())
                	<strong>{{ count($program->serie->episode) }}</strong> Episodes
                        @endif
                        
		</h6>

		<img src="{{asset(preg_replace('/\s+/', '', $program->logo.'logo.png'))}}" alt="Speaker Freakers">

		<div class="text">
			<h5>{!! $program->thumbTitle  !!}</h5>
			<p>{{ $program->thumbDescription }}</p>
		</div>

		<button href="#" class="button button-play">
			<span class="icon-play-stripped"></span>
		</button>    
		@if($program->updated)
		<p class="last_update">Last update on  <strong> {{ $program->updated->format('jS \\of F Y') }} </strong>{{ $program->updated->format('l') }}</p>
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
@stop
       