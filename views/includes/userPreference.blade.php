<div class="tab-pane tab-pane-preferences fade" id="preferences">

	<div class="row">
		<div class="col-lg-10">

			<!-- Title -->
			<div class="title">
				<h5>Send me notifications when</h5>
			</div>

			<!-- Form -->
			<form>

				<div class="row">
					<div class="col-md-12">
						<p>There is new Episode</p>
						<label class="switch">
                                                    <input id="episode" class="izaberi" value="{{ Auth::id().' episode' }}" type="checkbox">
							<div class="slider"></div>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p>There is new Video task by local giant</p>
						<label class="switch">
							<input type="checkbox" checked>
							<div class="slider"></div>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<p>There is a blog by local giant</p>
						<label class="switch">
							<input type="checkbox">
							<div class="slider"></div>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<p>There are new tickets available</p>
						<label class="switch">
							<input type="checkbox" checked>
							<div class="slider"></div>
						</label>
					</div>
				</div>

			</form>
		</div>
	</div>
	
</div>