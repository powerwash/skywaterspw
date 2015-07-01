@extends('layouts.master')

<head>
@section ('title') Car Wash &amp; Detailing
@stop
</head>


@section('carwash')
	<!-- header start classes:
				fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
				 dark: dark header version e.g. <header class="header dark clearfix">
			================ -->
<header class="header fixed clearfix">
<div class="container">
	<div class="row"></div>
		<div class="col-md-3">

			<!-- header-left start -->
			<!-- ================ -->
			<div class="header-left clearfix">

				<!-- logo -->
				<div class="logo">
					<a href="{{{ action('HomeController@showHome')}}}"><img id="logo" src="images/SWLogo.png" alt="iDea"></a>
				</div>

				<!-- name-and-slogan -->
				<div class="site-slogan">
					Clean &amp; Powerful
				</div>
			</div>	
		</div>		

		<div class="col-md-9">

			<!-- header-right start -->
			<!-- ================ -->
			<div class="header-right clearfix">

				<!-- main-navigation start -->
				<!-- ================ -->
				<div class="main-navigation animated">

					<!-- navbar start -->
					<!-- ================ -->
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">

							<!-- Toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<a href="{{{action('HomeController@showHome')}}}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a href="{{{ action('HomeController@showComred')}}}" class="dropdown-toggle" data-toggle="dropdown">Residentional/Commercial</a>
											</li>
											<li class="dropdown">
												<a href="{{{ action('HomeController@showCarwash')}}}" class="dropdown-toggle" data-toggle="dropdown">Car Wash/Detailing</a>
											</li>
											<li class="dropdown">
											</li>
											<li class="dropdown">
											</li>
										</ul>
									</li>
									<!-- mega-menu start -->
									<li class="dropdown active mega-menu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Who We Are</a>
									</li>
									<!-- mega-menu end -->
								</ul>
							</div>

						</div>
					</nav>
					<!-- navbar end -->

				</div>
				<!-- main-navigation end -->

			</div>
			<!-- header-right end -->

		</div>
	</div>
</div>
</header>
			<!-- header en

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">


						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-9">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Car Wash & Detailing</h1>
							<p>We offer a range of services for your home or business. Please browse our services located below to find out how we can help you and the price.</p>
							<!-- page-title end -->

							<!-- tabs start -->
							<div class="tabs-style-2">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa  fa-life-saver pr-10"></i>Services</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1">
										<!-- accordion start -->
										<div class="panel-group" id="accordion-faq">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i>Power washing services.
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse">
													<div class="panel-body">
														Enim, deleniti atque error corporis, laudantium consequuntur et ipsum velit, laboriosam sint inventore nam quo dolorum. Totam, facilis. Unde nobis cumque quam modi quia doloribus nesciunt eveniet, reprehenderit iste blanditiis ipsa, dolor nemo nulla harum quibusdam ipsum expedita explicabo obcaecati ab amet labore tempore sequi. Sed nam quidem tempore laboriosam ipsa perferendis officiis quos sapiente mollitia facilis earum, reprehenderit corporis eum dolore, ratione reiciendis expedita. Iste tenetur eos molestias dicta itaque adipisci cum laudantium aperiam atque, consequuntur, inventore possimus accusamus nisi a quaerat totam est aliquid alias amet id nulla quia illum illo. Quibusdam expedita omnis est hic, ipsum quo impedit! Facere voluptates repudiandae sunt quos inventore exercitationem quas distinctio ducimus vitae iure eos est, natus voluptatum! Odio totam ipsam natus sed, a, vel, corrupti molestiae magnam dicta officia eveniet temporibus perspiciatis aperiam aliquid cumque mollitia, quibusdam! Consequuntur eum aut aspernatur reprehenderit.
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseTwo" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i> Scrubbing services.
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body">
														Distinctio dolor assumenda optio a adipisci inventore culpa tempora molestias fuga cupiditate alias sint labore, quod minus iusto ad earum, vel nihil ipsum necessitatibus maxime facere? Corporis inventore, saepe placeat labore rerum assumenda repudiandae, eveniet aperiam dolor quibusdam porro nesciunt omnis voluptatum, perspiciatis. Doloremque perspiciatis quas sunt, similique modi facere a atque unde impedit assumenda accusantium vel animi iste omnis cupiditate amet quae ipsam repudiandae sint doloribus praesentium natus magnam et minima consequatur. Facilis corporis similique reiciendis officiis veritatis consectetur est rerum natus, hic illo molestiae voluptas numquam enim aut fugit possimus, ducimus ipsam quisquam, ab doloribus. Deleniti quam repudiandae eos, maxime commodi quas sit accusamus error eius. Ea temporibus eos, iusto!
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseThree" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i> Brush scrub service.
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse">
													<div class="panel-body">
														Excepturi illo labore architecto quasi maxime voluptas, laborum rerum non fuga. Sit rerum doloremque hic voluptas harum voluptatibus obcaecati ducimus atque magni, quod eius dolores commodi voluptates! Reiciendis porro magnam tempore ipsa obcaecati fuga earum unde libero, sapiente voluptatibus nemo exercitationem minus praesentium, itaque cupiditate qui assumenda quas quidem sed, nisi animi debitis quaerat. Quo magni incidunt enim aspernatur fugit rem blanditiis hic asperiores est. Dolor doloremque adipisci earum officiis soluta sapiente laboriosam! Optio aspernatur magni quas molestias temporibus quibusdam commodi ab, repellendus modi sapiente repudiandae perspiciatis molestiae, ea sint dolor consectetur aliquam delectus nisi minima officia vel tenetur quam pariatur, quidem? Voluptatem architecto quam nisi, molestiae saepe quo expedita odio corporis.
													</div>
												</div>
											</div>
										</div>
										<!-- accordion end -->
									</div>
									<div class="tab-pane fade" id="tab3">
										<!-- accordion start -->
										<div class="panel-group" id="accordion-faq-3">
											<div class="panel panel-default">

										</div>
										<!-- accordion end -->
									</div>
								</div>
							</div>
							<!-- tabs end -->
						</div>
						<!-- main end -->
					</div>
						<!-- sidebar start -->
						<aside class="col-md-3">
							<div class="sidebar">
								{{-- <div class="block clearfix"> --}}
									<h3 class="title">Send us a message</h3>
									<div class="separator"></div>
									<div class="alert alert-success hidden" id="MessageSent3">
										We have received your message, we will contact you very soon.
									</div>
									<div class="alert alert-danger hidden" id="MessageNotSent3">
										Oops! Something went wrong please refresh the page and try again.
									</div>
									<form id="sidebar-form" METHOD="POST" action="/php/email-sender.php">
										<div class="form-group has-feedback">
											<label for="name3">Name</label>
											<input type="text" class="form-control" id="name3" placeholder="Enter your name" name="name3">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
										<div class="form-group has-feedback">
											<label for="email3">Email address</label>
											<input type="email" class="form-control" id="email3" placeholder="Enter your email" name="email3">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
										<div class="form-group">
											<label>Category</label>
											<select class="form-control" id="category">
												<option value="Sales">Brushing</option>
												<option value="Support">Scrubbing</option>
												<option value="Lorem">Washer</option>
												<option value="Ipsum sit">Commercial</option>
												<option value="Dolor amet">Residential</option>
											</select>
										</div>
										<div class="form-group has-feedback">
											<label for="message3">Message</label>
											<textarea class="form-control" rows="4" id="message3" placeholder="" name="message3"></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
										<input type="submit" value="Submit" class="submit-button btn btn-default">
									</form>
								</div>
							</div>
						</aside>
						<!-- sidebar end -->
					</div>
				</div>
			</section>
			<!-- main-container end -->

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
			


			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><img id="logo-footer" src="images/SWLogo.png" alt="" width="200px" height="52px"></div>
									<div class="row">
										<div class="col-sm-6">
											<p>Lorem ipsum dolor sit amet, consect tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
										</div>
										<div class="col-sm-6">
											<ul class="list-icons">
											<li><i class="fa fa-phone pr-10"></i><a href="tel:1-210-665-1300">210 665 1300</a></li>
												<li><i class="fa fa-envelope-o pr-10"></i><a href="mailto:jc@skywaterspw.com">jc@skywaterspw.com</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="space-bottom hidden-lg hidden-xs"></div> --}}
							{{-- <div class="col-sm-6 col-md-2"> --}}
							<div class="col-sm-6 col-sm-2">
								<ul class="social-links circle">
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									{{-- <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li> --}}
								</ul>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Copyright © <?php echo date('Y') ?> by <a target="_blank" href="http://moredesignonline.com/">MoreDesign</a>. All Rights Reserved</p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default" role="navigation">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>  
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->


@stop

