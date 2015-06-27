@extends('layouts.master')

<head>
@section ('title') Commercial &amp; Residential
@stop
</head>

@section('comred')

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- sidebar start -->
						<aside class="col-md-3">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Send us a message</h3>
									<div class="separator"></div>
									<div class="alert alert-success hidden" id="MessageSent3">
										We have received your message, we will contact you very soon.
									</div>
									<div class="alert alert-danger hidden" id="MessageNotSent3">
										Oops! Something went wrong please refresh the page and try again.
									</div>
									<form role="form" id="sidebar-form">
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

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-9">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Commercial & Residential Services</h1>
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
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg text-muted footer-top clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="owl-carousel clients">
								<div class="client">
									<a href="#"><img src="images/client-1.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-2.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-3.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-4.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-5.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-6.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-7.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-8.png" alt=""></a>
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
									<div class="logo-footer"><img id="logo-footer" src="images/logo_red_footer.png" alt=""></div>
									<div class="row">
										<div class="col-sm-6">
											<p>Lorem ipsum dolor sit amet, consect tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
											<ul class="social-links circle">
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
										<div class="col-sm-6">
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
												<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
												<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
												<li><i class="fa fa-envelope-o pr-10"></i> info@idea.com</li>
											</ul>
										</div>
									</div>
									<a href="page-about.html" class="link"><span>Read More</span></a>
								</div>
							</div>
							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-2">
								<div class="footer-content">
									<h2>Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="index.html">Home</a></li>
											<li class="active"><a href="blog-right-sidebar.html">Blog</a></li>
											<li><a href="portfolio-3col.html">Portfolio</a></li>
											<li><a href="page-about.html">About</a></li>
											<li><a href="page-contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 col-md-offset-1">
								<div class="footer-content">
									<h2>Latest Projects</h2>
									<div class="gallery row">
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-1.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-2.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-3.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-4.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-5.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-6.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-7.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-8.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="images/gallery-9.jpg" alt="">
												<a href="portfolio-item.html" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
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
								<p>Copyright © 2014 iDea by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>. All Rights Reserved</p>
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
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="index.html">Home</a></li>
											<li><a href="page-about.html">About</a></li>
											<li><a href="blog-right-sidebar.html">Blog</a></li>
											<li><a href="portfolio-3col.html">Portfolio</a></li>
											<li><a href="page-contact.html">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->
@stop
