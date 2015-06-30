@extends('layouts.master')
<head>
@section('title')Home
@stop
</head>
@section('dashboard')

<style type="text/css">

#logo {
		width: 320px;
		margin-right: auto;
		margin-left: auto;

	}


</style>
	<body class="front no-trans">

			<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<img id="logo" src="images/SWLogo.png" alt="Skywater Power Washing">
							<p class="text-center" style="font-weight:bold">Choose your service.</p>
							<div class="row grid-space-20">
								<div class="col-sm-12 col-md-4 col-md-push-4">
									<img src="images/section-image-5.png" alt="" class="object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="0">
								</div>
								<div class="col-sm-6 col-md-4 col-md-pull-4">
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg fa-">
											<a href="{{{ action('HomeController@showComred')}}}"><i class="fa fa-building-o"></i></a>
										</div>
										<div class="body">
											<h1>Commercial &amp; Residential</h1>
											<p>Voluptatem ad provident non veritatis.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="box-style-3 left object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<a href="{{{ action('HomeController@showCarwash')}}}"><i class="fa fa-car"></i></a>
										</div>
										<div class="body">
											<h1>Car Wash &amp;<br> Detailing</h1>
											<p>Voluptatem ad provident non veritatis.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->
@stop