
<!-- Swiper banner -->
<div class="swiper swiper-container-banner">

    <div class="swiper-wrapper">
        @foreach($swipers as $swiper)
        @if($swiper->type=='episode')

        <div class="swiper-slide swiper-slide-episode" data-type-slug="episode" data-type="Episode">

            <div class="container">

                <div class="background" style="background-image:url({{ asset($swiper->episodeThumb.'poster.jpg') }})"></div>

                <div class="row">
                    <div class="col-md-6 col-details">

                        <!-- Details -->
                        <div class="details">
                            <a href="{{ url('episode/'.$swiper->id) }}" class="button button-play">
                                <span class="icon-play-stripped"></span>
                            </a>        
                        </div>

                    </div>
                    <div class="col-md-6 col-text">

                        <!-- Title -->
                        <div class="title">
                            <h5>
                                <span>Neuland infinium 2017</span>
                            </h5>
                            <h1>{!! $swiper->title  !!}</h1>
                            <h5>
                                <span>{{ $swiper->smallTxt }}</span>
                            </h5>
                        </div>

                        <a href="{{ url('episode/'.$swiper->id) }}" class="button button-large">Watch now</a>

                    </div>
                </div>
            </div>

        </div>
        @elseif($swiper->type=='giantVideoTask')

        <div class="swiper-slide swiper-slide-experience" data-type-slug="experience" data-type="Experience">

            <div class="container">

                <div class="background" style="background-image:url({{ asset($swiper->episodeThumb.'poster.jpg') }})"></div>

                <div class="row">
                    <div class="col-md-6 col-details">

                        <!-- Details -->
                        <div class="details">
                            <img src="assets/img/experiences/acoustica-visu.png">
                        </div>

                    </div>
                    <div class="col-md-6 col-text">

                        <!-- Title -->
                        <div class="title">
                            <h6>
                                <span style="background: black;"><img src="{{ asset(preg_replace('/\s+/', '', $swiper->giant->program->logo.'logo.png')) }}"></span>
                                <span>Presents</span>
                            </h6>
                            <h1><img src="assets/img/experiences/logo-acoustica.png"></h1>
                        </div>
                        <p>{{ $swiper->title }}</p>

                        <a href="{{ url('giantVideoTask/'.$swiper->id) }}" target="_BLANK" class="button button-large">Play now</a>

                    </div>
                </div>
            </div>

        </div>
        @elseif($swiper->type=='giantBlog')

        <div class="swiper-slide swiper-slide-podcast" data-type-slug="podcast" data-type="Podcast">

            <div class="container">

                <div class="background" style="background-image:url({{ asset($swiper->episodeThumb.'poster.jpg') }})"></div>

                <div class="row">
                    <div class="col-md-6 col-details">

                        <!-- Details -->
                        <div class="details"></div>

                    </div>
                    <div class="col-md-6 col-text">

                        <!-- Title -->
                        <div class="title">
                            <h5>
                                <span>Latest podcast on:</span>
                                &nbsp;<span style="background: black;"><img src="{{ asset(preg_replace('/\s+/', '', $swiper->giant->program->logo.'logo.png')) }}"></span>
                            </h5>
                            <h1>The taste of <span class="cutWord">Tokyo</span></h1>
                            <h5><span>{{ $swiper->title }}</span></h5>
                        </div>

                        <a href="{{ url('giantBlog/'.$swiper->id) }}" class="button button-large">Watch now</a>

                    </div>
                </div>
            </div>

        </div>
        @else

        <div class="swiper-slide swiper-slide-event" data-type-slug="event" data-type="Event">

            <div class="container">

                <div class="background" style="background-image:url({{ asset($swiper->episodeThumb.'poster.jpg') }})"></div>

                <div class="row">
                    <div class="col-md-6 col-details">

                        <!-- Details -->
                        <div class="details"></div>

                    </div>
                    <div class="col-md-6 col-text">

                        <!-- Title -->
                        <div class="title">
                            <h5>
                                <span>New Event in</span>
                                &nbsp;<span><img src="assets/img/content/logo-kraftwerk.png"></span>
                            </h5>
                            <h1>Are you up for the tate modern <span class="cutWord">Berlin Style?</span></h1>
                            <h5><span>friday 5th october 2016</span></h5>
                        </div>

                        <a href="#" class="button button-large">See Calendar</a>

                    </div>
                </div>
            </div>

        </div>


        @endif
        @endforeach

        
        
        <!-- Add Arrows -->
        <div class="swiper-button-next"><span class="icon-arrow-right-large"></span></div>
        <div class="swiper-button-prev"><span class="icon-arrow-left-large"></span></div>

        <!-- Add Pagination -->
        <div class="swiper-pagination-banner"></div>


    </div>
</div>

