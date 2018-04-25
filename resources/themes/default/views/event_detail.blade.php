@extends('layouts.master')
@section('content')

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('{{ Theme::asset('assets/images/backgrounds/event_bg.jpg') }}')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Events</h2>
			<p>Ngider Bareng Sahabat Inspirasi</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="#" class="color-white"> Home /</a> Events</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
	<!-- event single section -->
	<section class="xs-content-section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="xs-event-banner">
					<img src="{{ Theme::asset('assets/images/event/event-banner.jpg') }}" alt="">
				</div>
				<div class="row">
					<div class="col-lg-8 xs-event-wraper">
						<div class="xs-event-content">
							<h4>Event Detalis</h4>
							<p>Ngider Bareng Sahabat Inpirasi ini dilakukan di Dua Kota Besar yaitu Jakarta dan Malang. Selanjutnya, Pembagian Nasi Bungkus di wilayah Kampung Melayu (Jakarta) dilakukan sejak 06:00 WIB.</p>

							<p>Dan pembagian nasi bungkus di area malang juga dilakukan pada hari yang sama yaitu pada hari sabtu, 17 Februari 2018. Dengan dresscode yang telah ditentukan sebelumnya yaitu berwarna Merah.</p>

							<p><b>Donasi Special Untuk Nenek di Manggarai</b> Donasi spesial ini kami berikan untuk Nenek Manggarai beserta ke-empat cucunya karena nenek ini berjuang sendiri untuk menghidupi ke-empat cucunya yang masih kecil dengan segala keterbatasan fisik dan materi yang ada namun beliau tetap tidak menyerah</p>
							
							<p>Karena Hidup Bukan Hanya Untuk Mati Tapi Untuk Menjadi Lebih Berarti</p>
						</div>
						
					
						
					</div>
					<div class="col-lg-4">
					<!-- <div class="xs-countdown-timer timer-style-2 xs-mb-30" data-countdown="2020/02/07"></div> -->
					<div class="xs-event-schedule-widget">
						<h3 class="widget-title">Event Sponsor</h3>
						<ul class="xs-event-sponsor clearfix">
							<li><a href="#"><img src="{{ Theme::asset('assets/images/partner/client_5.png') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ Theme::asset('assets/images/partner/client_4.png') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ Theme::asset('assets/images/partner/client_3.png') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ Theme::asset('assets/images/partner/client_1.png') }}" alt=""></a></li>
						</ul>
					</div>
						<!-- .xs-event-schedule-widget END -->						
						<!-- End horizontal tab -->
					</div>
				</div>
			</div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>	<!-- End event single section -->
</main>

@stop