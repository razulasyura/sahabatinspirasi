@extends('layouts.master')
@section('content')

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('{{ Theme::asset('assets/images/backgrounds/gallery_bg.jpg') }}')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Photo Gallery</h2>
			<p>Tumbuh Bersama Untuk Bersama</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="#" class="color-white"> Home /</a> Gallery</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
<!-- portfolio section -->
<div class="xs-content-section-padding">
	<div class="container">
        <div class="xs-portfolio-grid">
		    <div class="xs-portfolio-grid-item">
				<a href="https://www.youtube.com/watch?v=coHSjx-T254" class="xs-video-popup xs-round-btn"><i class="fa fa-play"></i>
					<img src="{{ Theme::asset('assets/images/portfolio/gallery_8.jpg') }}" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
			<div class="xs-portfolio-grid-item">
				<a href="https://www.youtube.com/watch?v=coHSjx-T254" class="xs-video-popup xs-round-btn"><i class="fa fa-play"></i>
					<img src="{{ Theme::asset('assets/images/portfolio/gallery_9.jpg') }}" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
            </div><!-- .xs-portfolio-grid-item END -->
        </div>
	</div><!-- .container end -->
</div>	<!-- End portfolio section -->
</main>
@stop