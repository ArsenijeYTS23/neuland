@extends('template')
@section('content')
 
		<!-- Main -->
		<div class="main">

			@include('includes.programTrailer')
			
			<div class="programs-season subnavigationAffixLimit">
				
				<!-- Nav programs -->
				<div class="subnavigationAffix">
	<div class="container">
		
		<ul class="nav nav-tabs nav-programs js-history_nav-tabs">
			<li>
				<a href="#aboutUs" data-toggle="tab">About</a>
			</li>
			<li>
				<a href="#episodes" data-toggle="tab">Episodes</a>
			</li>
			<li>
				<a href="#giants" data-toggle="tab">Giants</a>
			</li>
			<li>
				<a href="#experiences" data-toggle="tab">Experiences</a>
			</li>
		</ul>

	</div>
</div>
				
				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<!-- Tab programs -->
							<div class="tab-content tab-programs">
                                                            @if($program)
                                                            <div class="tab-pane tab-pane-aboutUs fade" id="aboutUs">
							        @if($program->description)
								@include('includes.programAbout')
                                                                @endif
                                                            </div>
                                                            
                                                            <div class="tab-pane fade" id="episodes">
								@if($program->serie)
								@include('includes.programEpisodes')
                                                                @endif
                                                            </div>

								<div class="tab-pane tab-pane-giants fade" id="giants">
                                                                @if($program->giant->first())   
								@include('includes.programGiants')
                                                                @endif
                                                                </div>
                                                            
                                                            
                                                                @endif

								<!-- Tab programs experiences -->
								<div class="tab-pane tab-pane-experiences fade" id="experiences">

	<div class="row">
        <div class="col-md-4">

            <a href="/../nld.tv.exp.stg/accoustica-start.html" target="_BLANK">

				<!-- Visu -->
				<div class="visu">
					<div class="hidden-sm hidden-xs">
						<img src="{{asset('assets/img/experiences/acoustica-box-visu.jpg')}}" alt="Acoustica">
					</div>
					<div class="hidden-md hidden-lg">
						<img src="{{asset('assets/img/experiences/acoustica-box-visu-mobile.jpg')}}" alt="Acoustica">
					</div>
					<div class="overlay"></div>
				</div>

				<!-- Content -->
				<div class="content">

					<img src="{{asset('assets/img/experiences/logo-acoustica.png')}}" alt="Acoustica">

					<button href="#" class="button">
						Play now
					</button>    
					
					<p class="details">Experience <strong>01</strong></p>

				</div>

			</a>

        </div>
        <div class="col-md-4">

            <a href="/../nld.tv.exp.stg/freequencies-start.html" target="_BLANK">

				<!-- Visu -->
				<div class="visu">
					<div class="hidden-sm hidden-xs">
						<img src="{{asset('assets/img/experiences/freequencies-box-visu.jpg')}}" alt="Freequencies">
					</div>
					<div class="hidden-md hidden-lg">
						<img src="{{asset('assets/img/experiences/freequencies-box-visu-mobile.jpg')}}" alt="Freequencies">
					</div>
					<div class="overlay"></div>
				</div>

				<!-- Content -->
				<div class="content">

					<img src="{{asset('assets/img/experiences/logo-freequencies.png')}}" alt="Freequencies">

					<button href="#" class="button">
						Play now
					</button>      
					
					<p class="details">Experience <strong>02</strong></p>

				</div>

			</a>

        </div>
        <div class="col-md-4">

            <a href="#" target="_BLANK" class="locked">

				<!-- Visu -->
				<div class="visu">
					<div class="hidden-sm hidden-xs">
						<img src="{{asset('assets/img/experiences/the_selector-box-visu.jpg')}}" alt="The selector">
					</div>
					<div class="hidden-md hidden-lg">
						<img src="{{asset('assets/img/experiences/the_selector-box-visu-mobile.jpg')}}" alt="The selector">
					</div>
					<div class="overlay"></div>
				</div>

				<!-- Content -->
				<div class="content">

					<img src="{{asset('assets/img/experiences/logo-the_selector.png')}}" alt="The selector">

					<button href="#" class="button">
						Play now
					</button>   
					
					<p class="details">Experience <strong>03</strong></p>

				</div>

			</a>

        </div>
    </div>

</div>



							</div>
						
						</div>
					</div>

				</div>
			</div>
			
		</div>

		<!-- Footer -->
		@stop