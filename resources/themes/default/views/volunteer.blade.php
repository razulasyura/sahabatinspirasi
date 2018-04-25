@extends('layouts.master')
@section('content')
<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('{{ Theme::asset('assets/images/backgrounds/volunteer-bg.jpg') }}')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Volunteer</h2>
			<p>Tumbuh Bersama Untuk Bersama</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="#" class="color-white"> Home /</a> Volunteer</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">

	<!-- box promo section -->
	<section class="xs-children-section">
	<div class="container">
		<div class="xs-heading row xs-mb-60">
			<div class="col-md-6 mx-auto text-center">
			</div>
        </div><!-- .row end -->
		<div class="row">
            @foreach($data as $row)
			<div class="col-lg-3 col-md-6">
				<div class="xs-single-children">
					<img src="{{ Theme::asset('assets/images/childrens/'.$row->file) }}" alt="">
					<div class="xs-children-details">
						<a href="#">{{$row->name}}</a>
						<h4>{{$row->title}}</h4>
					</div><!-- .xs-children-details END -->
				</div><!-- .xs-single-children END -->
            </div>
            @endforeach
		</div>
		{{-- <div class="xs-height-separetor"></div> --}}
		
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>	<!-- End box promo section -->

</main>
@stop