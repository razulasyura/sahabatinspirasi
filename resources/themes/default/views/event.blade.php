@extends('layouts.master')
@section('content')

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('{{ Theme::asset('assets/images/backgrounds/event_bg.jpg') }}')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Events</h2>
			<p>Tumbuh Bersama Untuk Bersama</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="#" class="color-white"> Home /</a> Events</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
	<!-- video popup section section -->
	<section class="xs-content-section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="xs-popular-item xs-box-shadow">
					<div class="xs-item-header">

						<img src="{{ Theme::asset('assets/images/causes/causes_1.jpg') }}" alt="">
					</div><!-- .xs-item-header END -->
					<div class="xs-item-content">
						<ul class="xs-simple-tag xs-mb-20">
							<li><a class="color-light-red" href="">Charity</a></li>
						</ul>

						<a href="#" class="xs-post-title xs-mb-30">Charity Fun Education</a>
									
						<span class="xs-separetor"></span>
						
						<div class="row xs-margin-0">
							<div class="xs-round-avatar">
								<img src="{{ Theme::asset('assets/images/avatar/avatar_si.jpg') }}" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Sahabat Inpirasi</a>
							</div>
						</div>
					</div><!-- .xs-item-content END -->
				</div><!-- .xs-popular-item END -->
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="xs-popular-item xs-box-shadow">
					<div class="xs-item-header">
						<img src="{{ Theme::asset('assets/images/causes/causes_2.jpg') }}" alt="">
					</div><!-- .xs-item-header END -->
					<div class="xs-item-content">
						<ul class="xs-simple-tag xs-mb-20">
							<li><a class="color-purple" href="">Charity</a></li>
						</ul>

						<a href="#" class="xs-post-title xs-mb-30">Jejak Langkah Dari Pelosok Negeri</a>
						<span class="xs-separetor"></span>
						
						<div class="row xs-margin-0">
							<div class="xs-round-avatar">
								<img src="{{ Theme::asset('assets/images/avatar/avatar_si.jpg') }}" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Sahabat Inpirasi</a>
							</div>
						</div>
					</div><!-- .xs-item-content END -->
				</div><!-- .xs-popular-item END -->
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="xs-popular-item xs-box-shadow">
					<div class="xs-item-header">

						<img src="{{ Theme::asset('assets/images/causes/causes_3.jpg') }}" alt="">
					</div><!-- .xs-item-header END -->
					<div class="xs-item-content">
						<ul class="xs-simple-tag xs-mb-20">
							<li><a class="color-blue" href="">Social</a></li>
						</ul>

						<a href="#" class="xs-post-title xs-mb-30">Ngider Bareng Sahabat Inspirasi</a>
						
						<span class="xs-separetor"></span>
						
						<div class="row xs-margin-0">
							<div class="xs-round-avatar">
								<img src="{{ Theme::asset('assets/images/avatar/avatar_si.jpg') }}" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Sahabat Inpirasi</a>
							</div>
						</div>
					</div><!-- .xs-item-content END -->
				</div><!-- .xs-popular-item END -->
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="xs-popular-item xs-box-shadow">
					<div class="xs-item-header">

						<img src="{{ Theme::asset('assets/images/causes/causes_4.jpg') }}" alt="">
					</div><!-- .xs-item-header END -->
					<div class="xs-item-content">
						<ul class="xs-simple-tag xs-mb-20">
							<li><a class="color-burntOrange" href="">Charity</a></li>
						</ul>

						<a href="#" class="xs-post-title xs-mb-30">Social Youth Camp For Kids Cancer Care</a>

						<span class="xs-separetor"></span>
						
						<div class="row xs-margin-0">
							<div class="xs-round-avatar">
								<img src="{{ Theme::asset('assets/images/avatar/avatar_si.jpg') }}" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Sahabat Inpirasi</a>
							</div>
						</div>
					</div><!-- .xs-item-content END -->
				</div><!-- .xs-popular-item END -->
			</div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>	<!-- End video popup section section -->
</main>
@stop