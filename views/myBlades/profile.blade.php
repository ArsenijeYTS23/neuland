  @extends('template')
  @section('content')  
  
  <div class="main">
            <div class="container">

                <div class="profile">


                    <div class="row">
                        <div class="col-md-2">

                            <!-- Nav profile -->
                            <ul class="nav nav-tabs nav-profile js-history_nav-tabs">
	<li>
		<a href="#liked_content" aria-controls="liked_content" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Liked content
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#watch_later" aria-controls="watch_later" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Watch later
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#preferences" aria-controls="preferences" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Preferences
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#faq" aria-controls="faq" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			FAQ
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
		<a href="#edit_profile" aria-controls="edit_profile" data-toggle="tab">
			<span class="icon-arrow-left"></span>
			Edit Profile
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li class="hidden-md hidden-lg">
		<a href="#notifications">
			<span class="icon-arrow-left"></span>
			Notifications
			<span class="icon-arrow-right"></span>
		</a>
	</li>
	<li>
                                        <a href="{{ url('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                               <span class="icon-log_out"></span>
                                                    Logout
                                               <span class="icon-arrow-right"></span>
                                        </a>

                                        <form id="logout-form" action="{{ url('logout') }}" method="post" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
	           </li>
               </ul>

                        </div>
                        <div class="col-md-7">

                            <!-- Tab profile -->
                            <div class="tab-content tab-profile">
                                
                                @include('includes.userLiked')
                                @include('includes.userWatchLater')
                                @include('includes.userPreference')
                                

                                   <div class="tab-pane tab-pane-faq fade" id="faq">

	<div class="row">
		<div class="col-lg-10">

			<!-- Title -->
			<div class="title">
				<h5>Frequently asked questions</h5>
			</div>

			<button class="question" type="button" data-toggle="collapse" data-target="#collapseQuestion1" aria-expanded="false" aria-controls="collapseQuestion1">
			  	<h6>Lorem ipsum dolor sit amet consectetur adipiscing?</h6>
			</button>
			<div class="collapse" id="collapseQuestion1">
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
			</div>

			<button class="question" type="button" data-toggle="collapse" data-target="#collapseQuestion2" aria-expanded="false" aria-controls="collapseQuestion2">
			  	<h6>Lorem ipsum dolor sit amet consectetur adipiscing?</h6>
			</button>
			<div class="collapse" id="collapseQuestion2">
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
			  
			</div>
			
			<button class="question" type="button" data-toggle="collapse" data-target="#collapseQuestion3" aria-expanded="false" aria-controls="collapseQuestion3">
			  	<h6>Lorem ipsum dolor sit amet consectetur adipiscing?</h6>
			</button>
			<div class="collapse" id="collapseQuestion3">
			 
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
			 
			</div>

			<!-- Form -->
			<form>
				<h6>Contact Us</h6>

				<span class="icon-phone"></span>0800 111 111

				<span class="separator">or</span>

				<label for="issue">
					<span>Select your issue</span>
					<div class="select-wrapper">
						<select>
							<option>issue 1</option>
							<option>issue 2</option>
							<option>issue 3</option>
						</select>
					</div>
				</label>

				<label for="message">
					<textarea rows="5" id="message" placeholder="Type your message here"></textarea>
				</label>

				<div class="action">
					<input type="submit" value="Send" class="button">
				</div>

			</form> 
			
		</div>
	</div>

</div>

                                <!-- Tab profile edit profile -->
                                <div class="tab-pane tab-pane-edit_profile fade" id="edit_profile">

	<div class="row">
		<div class="col-md-10">

					
			<!-- Title -->
			<div class="title">
				<h5>My profile</h5>
				<button class="js-edit-profile"><span class="icon-edit"></span>Edit</button>
			</div>

			<!-- Form -->
			<form class="edit_profile_form">

				<div class="row">
					<div class="col-sm-3">
						<div class="profile-picture-field">
							<span class="profile-picture-container">
								<img src="assets/img/content/profile_picture.jpg" alt="">
							</span>
							<button type="button" class="button-edit-text editPictureButton" data-toggle="modal" data-target="#modal-profile_picture"><span class="icon-edit"></span></button>
						</div>
					</div>

					<div class="col-sm-9">
						
						<div class="row">
							<div class="col-sm-6">

								<label for="firstname">
									<span>Name</span>
									<input id="firstname" name="firstname" type="text" value="Anakin" data-default="Anakin" disabled>
								</label>

							</div>
							<div class="col-sm-6">
								<label for="email">

									<span>Email or Mobile</span>
									<input id="email" name="email" type="text" value="asky@gmail.com" data-default="asky@gmail.com" disabled>
						
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">

								<label for="language">
									<span>Language</span>
									<div class="select-wrapper disabled">
										<select disabled data-default="en">
											<option selected value="en">English</option>
											<option value="fr">Francais</option>
										</select>
									</div>
								</label>

							</div>
							<div class="col-sm-6">

								<label for="password">
									<span>Pin code</span>
									<input id="password" name="password" type="password" value="passwordTest" data-default="passwordTest" disabled>
								</label>

								<label for="showPin" class="checkbox">                           
									<input id="showPin" name="showPin" value="showPin" type="checkbox" disabled>
									<span>Show pin code</span>                               
								</label>

							</div>
						</div>

					</div>

				</div>
				
				<div class="row">
					
				</div>

				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">

						<div class="action">
							<button class="button" type="reset">Cancel</button>
							<button type="submit" class="button" disabled>Save</button>
						</div>
						
					</div>
				</div>

			</form>

		</div>
	</div>
	
</div>

                            </div>
                        </div>
                        <div class="col-md-3">

                            <!-- Notifications -->
                            <div class="notifications" id="notifications">

	<div class="title">
		<h6>Notifications</h6>
	</div>

	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>There is a new episode available in Speaker Freakers. Watch it now!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>

	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>The Speaker Freakers experience is about to end, sure you don’t want to give it a try?</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>You can now enjoy a whole new experience in Warm Up!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>A new series has been added. Discover Home Grown now!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>You added an episode of Home Grown, why don’t you take a look at this episode as well?</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item">
		<a href="#">	
			<div class="visu">
				<span class="icon-notifications"></span>
			</div>
			<div class="text">
				<p>You can now enjoy a whole new experience in Warm Up!</p>
			</div>
		</a>
		<div class="close"><span class="icon-close"></span></div>
	</div>
	<div class="notification_item empty_message">
		<div class="text">
			<p>You don't have any notifications</p>
		</div>
	</div>

</div>

                        </div>
                    </div>


                </div>
                
            </div>
        </div>

        <!-- Modal profile picture -->
        <div class="modal modal-profile_picture fade" id="modal-profile_picture">
	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span class="icon-close"></span>
				</button>
				<h1 class="modal-title">Your profile picture</h1>
			</div>

			<div class="modal-body">
				<p>Upload an existing image from your computer or take a new picture right here, right now.</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="button button-plus" data-dismiss="modal">
					Upload an image
				</button>
				<button type="button" class="button button-black button-profil_picture" data-dismiss="modal">
					Take a picture
				</button>
			</div>

		</div>

	</div>
</div>
@stop
