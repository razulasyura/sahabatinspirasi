@extends('layouts.master')
@section('content')
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('{{ Theme::asset('assets/images/backgrounds/team_bg.jpg') }}')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Our Team</h2>
			<p>Tumbuh Bersama Untuk Bersama</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="#" class="color-white"> Home /</a> Team</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
	<!-- team section -->
	<section class="xs-section-padding">
	<div class="container">
		<div class="row">
            @foreach($team as $row)
			<div class="col-md-6 col-lg-3">
				<div class="xs-single-team xs-mb-50">
					<img src="{{ Theme::asset('assets/images/team/'.$row->file) }}" alt="">
					<div class="xs-team-content">
						<h4>Kak {{$row->name}}</h4>
						<small>{{$row->title}}</small>
						<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
							<path class="fill-{{$row->style}}" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
						</svg>
					</div><!-- .xs-team-content END -->
				</div><!-- .xs-single-team END -->
            </div>
            @endforeach
		</div><!-- .row END -->
	</div><!-- .container end -->
</section>	<!-- End team section -->

</main>
@stop