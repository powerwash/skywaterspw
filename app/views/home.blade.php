@extends('layouts.master')
<head>
@section('title')Home
@stop
</head>
@section('dashboard')
	<body class="front no-trans">
		
			<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center title">Services</h1>
							<div class="separator"></div>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="row grid-space-20">
								<div class="col-sm-12 col-md-4 col-md-push-4">
									<img src="images/section-image-5.png" alt="" class="object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="0">
								</div>
								<div class="col-sm-6 col-md-4 col-md-pull-4">
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<a href="{{{ action('HomeController@showComred')}}}"><i class="fa fa-building-o"></i></a>
										</div>
										<div class="body">
											<h2>Commercial &amp; Residential</h2>
											<p>Voluptatem ad provident non veritatis.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<a href="{{{ action('HomeController@showCarwash')}}}"><i class="fa fa-car"></i></a>
										</div>
										<div class="body">
											<h2>Car Wash &amp;<br> Detailing</h2>
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

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container default-bg">

				<!-- main start -->
				<!-- ================ -->
				<div class="main">
					<div class="container">
						<div class="call-to-action">
							<div class="row">
								<div class="col-md-8">
									<h1 class="title text-center">We offer more possibilities to meet your every need.</h1>
								</div>
								<div class="col-md-4">
									<div class="text-center">
										<a href="#" class="btn btn-white btn-lg">Something</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main end -->

			</section>
			<!-- main-container end -->

			@section('about')
			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
				<div class="container">
					<h1 id ="about" class="text-center">Who We Are</h1>
					<div class="separator"></div>
					<p class="lead text-center">Lorem ipsum dolor sit amet. Maiores, odio ut deleniti doloremque ad at praesentium<br> laudantium molestias similique. Quisquam incidunt ut laboriosam.</p>
					<br>
					<div class="row">
						<div class="col-md-6">
							<img src="images/section-image-4.png" alt="">
							<div class="space hidden-md hidden-lg"></div>
						</div>
						<div class="col-md-6">
							<p class="space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum, illo quaerat provident doloribus consequuntur saepe, id quas animi vel ad eligendi adipisci.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
			@stop
			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">
				<div class="container">

					<h2 class="title">Our Team</h2>
					<div class="separator-2"></div>

					<div class="row grid-space-20">
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1 white-bg team-member">
								<div class="overlay-container">
									<img src="images/team-member-1.jpg" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<h3>Jane Doe</h3>
								CEO
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1 white-bg team-member">
								<div class="overlay-container">
									<img src="images/team-member-2.jpg" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<h3>John Doe</h3>
								CTO
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1 white-bg team-member">
								<div class="overlay-container">
									<img src="images/team-member-3.jpg" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<h3>Anne Smith</h3>
								Project Manager
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1 white-bg team-member">
								<div class="overlay-container">
									<img src="images/team-member-4.jpg" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<h3>Margaret Manson</h3>
								Developer
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

			

			

		{{-- 	<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg text-muted footer-top clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="owl-carousel clients">
								<div class="client">
									<a href="#"><img src="/images/client-1.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="/images/client-2.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="/images/client-3.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="i/mages/client-4.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="/images/client-5.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="/images/client-6.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="/images/client-7.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="/images/client-8.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<blockquote class="inline">
								<p class="margin-clear">Design is not just what it looks like and feels like. Design is how it works.</p>	
								<footer><cite title="Source Title">Steve Jobs </cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<!-- section end --> --}}

			

		</div>
		<!-- page-wrapper end -->
@stop