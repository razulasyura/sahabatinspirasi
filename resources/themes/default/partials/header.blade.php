<!-- header section -->
<header class="xs-header header-transparent">
	<div class="container">
		<nav class="xs-menus">
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a href="{{ url('index') }}" class="nav-logo">
					<img src="{{ Theme::asset('assets/images/logo.png') }}" alt="">
				</a>
			</div><!-- .nav-header END -->
			<div class="nav-menus-wrapper row">
				<div class="xs-logo-wraper col-lg-2 xs-padding-0">
					<a class="nav-brand" href="{{ url('index') }}">
						<img src="{{ Theme::asset('assets/images/logo.png') }}" alt="">
					</a>
				</div><!-- .xs-logo-wraper END -->
				<div class="col-lg-7">
					<ul class="nav-menu">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('team') }}">Team</a>
							<ul class="nav-dropdown">
								<li><a href="{{ url('team') }}">Team</a></li>
								<li><a href="{{ url('#') }}">Volunteer</a></li>
							</ul>
                        </li>
						<!-- <li><a href="causes.html">Causes</a></li> -->
						<li><a href="{{ url('event') }}">Events</a>
							<ul class="nav-dropdown">
								<li><a href="{{ url('event') }}">Event</a></li>
								<li><a href="{{ url('event_detail') }}">Event Detail</a></li>
							</ul>
						</li>
						<li><a href="#">Blog</a>
							<ul class="nav-dropdown">
								<li><a href="#">Blog</a></li>
								<li><a href="#">Blog single</a></li>
							</ul>
                        </li>
                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
						<li><a href="{{ url('contact') }}">Contact</a></li>
					</ul><!-- .nav-menu END -->
				</div>
				<div class="xs-navs-button d-flex-center-end col-lg-3">
					<a href="https://docs.google.com/forms/u/4/d/1F9nECdgyu7xO6jkGTd2XmJ0l6-sYajHIxA9Am7qsPQ8/edit?usp=drive_web" class="btn btn-primary" target="_blank">
						<span class="badge"><i class="fa fa-heart"></i></span> Join Now
					</a>
				</div><!-- .xs-navs-button END -->
			</div><!-- .nav-menus-wrapper .row END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div><!-- .container end -->
</header><!-- End header section -->