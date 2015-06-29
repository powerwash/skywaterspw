@extends('layouts.master')

<head>
@section ('title') Car Wash &amp; Detailing
@stop
</head>

@section('carwash')

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
				</div>
			</section>
			<!-- main-container end -->


@stop