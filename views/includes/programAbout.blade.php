

	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<!-- Title -->
			<div class="title">
				<h2>
					{!! $program->thumbTitle !!}
				</h2>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<!-- Text -->
			<div class="text">

				<p><span class="first_character">{{ substr($program->description, -strlen($program->description),1) }}</span>{{ str_split($program->description, 136)[0] }}</p>
				<p>{{ str_split($program->description, 136)[1]  }}</p>
					
			</div> 

		</div>
	</div>

