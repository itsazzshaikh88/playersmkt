<!-- section-hero-posts-->
<div class="hero-header">
	<!-- Hero Slider-->
	<div id="hero-slider" class="hero-slider">
		<!-- Item Slide-->
		<div class="item-slider" style="background:url(img/slide/3.jpg);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="info-slider">
							<h1>Group Stage Breakdown</h1>
							<p>While familiar with fellow European nation France, Hareide admits that South American side Peru.</p>
							<a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Item Slide-->

		<!-- Item Slide-->
		<div class="item-slider" style="background:url(img/slide/2.jpg);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="info-slider">
							<h1>World Cup rivalries reprised</h1>
							<p>The outdoor exhibition on Manezhnaya Square comprises 11 figures that symbolise the main sites of interest.</p>
							<a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Item Slide-->

		<!-- Item Slide-->
		<div class="item-slider" style="background:url(img/slide/1.jpg);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="info-slider">
							<h1>Group Stage Breakdown</h1>
							<p>While familiar with fellow European nation France, Hareide admits that South American side Peru.</p>
							<a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Item Slide-->

	</div>
	<!-- End Hero Slider-->
</div>
<!-- End section-hero-posts-->

<!-- Section Area - Content Central -->
<section class="content-info">
	<!-- White Section -->
	<div class="white-section paddings">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 d-flex align-items-center">
					<img src="img/locations/1.jpg" alt="">
				</div>
				<div class="col-lg-7">
					<h4 class="subtitle">
						<?= $this->lang->line('about_we_label') ?>
					</h4>
					<?= $this->lang->line('about_we_content') ?>

					<div class="row">
						<div class="col-lg-6">
							<h5><?= $this->lang->line('our_mission_label') ?></h5>
							<p>
								<?= $this->lang->line('our_mission_content') ?>
							</p>
						</div>
						<div class="col-lg-6">
							<h5><?= $this->lang->line('our_vision_label') ?></h5>
							<p>
								<?= $this->lang->line('our_vision_content') ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End White Section -->

	<!-- Schedules and Stats  -->
	<div class="default-section paddings">
		<div class="container">
			<div class="row">
				<!-- Club Ranking -->
				<div class="col-lg-4">
					<div class="club-ranking">
						<h3><a href="/clubs/new">Recent Clubs</a></h3>
						<div class="info-ranking">
							<ul>
								<?php
								for ($clubs = 1; $clubs <= 10; $clubs++) :
								?>
									<li>
										<span class="position">
											<?= $clubs ?>
										</span>
										<a href="single-team.html">
											<img src="img/clubs-logos/rusia.png" alt="">
											Club name
										</a>
										<span class="points home-list text-green">
											Club Sports
										</span>
									</li>
								<?php endfor; ?>
							</ul>
						</div>
						<div class="">
							<a href="clubs/new" class="btn btn-sm btn-primary text-white">See More +</a>
						</div>
					</div>
				</div>
				<!-- End Club Ranking -->

				<!-- recent-results -->
				<div class="col-lg-4">
					<div class="recent-results">
						<h3><a href="javascript:void(0)">Recent Result</a></h3>
						<div class="info-results">
							<ul>
								<li>
									<span class="head">
										Portugal Vs Spain <span class="date">27 Jun 2017</span>
									</span>

									<div class="goals-result">
										<a href="single-team.html">
											<img src="img/clubs-logos/por.png" alt="">
											Portugal
										</a>

										<span class="goals">
											<b>2</b> - <b>3</b>
										</span>

										<a href="single-team.html">
											<img src="img/clubs-logos/esp.png" alt="">
											Spain
										</a>
									</div>
								</li>

								<li>
									<span class="head">
										Rusia Vs Colombia <span class="date">30 Jun 2017</span>
									</span>

									<div class="goals-result">
										<a href="single-team.html">
											<img src="img/clubs-logos/rusia.png" alt="">
											Rusia
										</a>

										<span class="goals">
											<b>2</b> - <b>3</b>
										</span>

										<a href="single-team.html">
											<img src="img/clubs-logos/colombia.png" alt="">
											Colombia
										</a>
									</div>
								</li>

								<li>
									<span class="head">
										Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
									</span>

									<div class="goals-result">
										<a href="single-team.html">
											<img src="img/clubs-logos/uru.png" alt="">
											Uruguay
										</a>

										<span class="goals">
											<b>2</b> - <b>3</b>
										</span>

										<a href="single-team.html">
											<img src="img/clubs-logos/por.png" alt="">
											Portugal
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end recent-results -->

				<!-- Top player -->
				<div class="col-lg-4">
					<div class="player-ranking">
						<h3><a href="players/new">Recent player</a></h3>
						<div class="info-player">
							<ul>
								<?php
								for ($players = 1; $players <= 10; $players++) :
								?>
									<li>
										<span class="position">
											<?= $players ?>
										</span>
										<a href="single-team.html">
											<img src="img/players/1.jpg" alt="">
											Cristiano R.
										</a>
										<span class="points home-list text-green">
											Player Sport
										</span>
									</li>
								<?php endfor; ?>
							</ul>
						</div>
						<div class="">
							<a href="players/new" class="btn btn-sm btn-primary text-white">See More +</a>
						</div>
					</div>
				</div>
				<!-- End Top player -->
			</div>
		</div>
	</div>
	<!-- Schedules and Stats End  -->

	<!-- Parallax Section - Testimonials -->
	<!-- 
	<div class="parallax-section parallax-total" style="background:url(img/slide/3.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="text-center padding-bottom">
						<h2>We have earned the trust of <span class="text-resalt">25,869</span> Club Members.</h2>
						<p>Duis non lorem porta, eros sit amet, tempor sem. semper a tempus et.</p>
					</div>

					<ul class="testimonials testimonials-carousel">
						<li>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque!.</p>
								<img src="img/testimonials/1.jpg" alt="">
								<strong>Federic Gordon</strong><a href="#">@iwthemes</a>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque!.</p>
								<img src="img/testimonials/2.jpg" alt="">
								<strong>Federic Gordon</strong><a href="#">@iwthemes</a>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque!.</p>
								<img src="img/testimonials/3.jpg" alt="">
								<strong>Federic Gordon</strong><a href="#">@iwthemes</a>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque!.</p>
								<img src="img/testimonials/4.jpg" alt="">
								<strong>Federic Gordon</strong><a href="#">@iwthemes</a>
							</blockquote>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    -->
	<!-- End Gray Section - Testimonials -->

	<!-- Sports Categories  -->
	<div class="dark-section paddings-big">
		<div class="scale">
			<div class="skewmask-block"></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5 padding-top">
					<h2>Sports Categories</h2>
					<p class="lead">
						Explore a world of talent and opportunities across diverse sports on PlayersMkt. From aspiring athletes to elite clubs, our platform brings together passion, skill, and potential, creating a global hub for sports enthusiasts to connect, discover, and succeed.
					</p>
					<div class="text-right">
						<a href="sports/categories">
							<h3 class="text-green text-underline">Explore All Categories <span><i class="bi bi-arrow-right-circle"></i></span></h3>
						</a>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="row">
						<div class="col-md-6 col-xl-4">
							<a href="sports/categories/cricket">
								<div class="item-boxed-img small" style="background: url(<?= FILES_URL . 'images/sport_images/cricket.avif' ?>);">
									<h4>Cricket </h4>
								</div>
							</a>
						</div>

						<div class="col-md-6 col-xl-4">
							<a href="sports/categories/football">
								<div class="item-boxed-img small" style="background: url(<?= FILES_URL . 'images/sport_images/football.jpg' ?>);">
									<h4>Football</h4>
								</div>
							</a>
						</div>

						<div class="col-md-6 col-xl-4">
							<a href="sports/categories/basketball">
								<div class="item-boxed-img small" style="background: url(<?= FILES_URL . 'images/sport_images/basketball.jpg' ?>);">
									<h4>Basketball</h4>
								</div>
							</a>
						</div>
						<div class="col-md-6 col-xl-4">
							<a href="sports/categories/hockey">
								<div class="item-boxed-img small" style="background: url(<?= FILES_URL . 'images/sport_images/hockey.jpg' ?>);">
									<h4>Hockey </h4>
								</div>
							</a>
						</div>

						<div class="col-md-6 col-xl-4">
							<a href="sports/categories/tennis">
								<div class="item-boxed-img small" style="background: url(<?= FILES_URL . 'images/sport_images/tennis.jpg' ?>);">
									<h4>Tennis</h4>
								</div>
							</a>
						</div>

						<div class="col-md-6 col-xl-4">
							<a href="sports/categories/badminton">
								<div class="item-boxed-img small" style="background: url(<?= FILES_URL . 'images/sport_images/badminton.avif' ?>);">
									<h4>Badminton</h4>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sports Categories End -->

	<!-- White Section -->
	
	
	
	<!-- End White Section -->

	<!-- End gray Section -->
	<div class="default-section paddings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center padding-bottom">
						<h2>We have a great community, <span class="text-resalt">JOIN</span> now.</h2>
						<p>Duis non lorem porta, eros sit amet, tempor sem. semper a tempus et.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Info Resalt-->
		<div id="ri-grid" class="ri-grid ri-grid-size-2">
			<img class="ri-loading-image" src="img/grid/loading.gif" alt="Image">
			<ul>
				<li><a href="#"><img src="img/grid/1.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/2.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/3.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/4.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/5.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/6.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/7.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/8.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/9.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/10.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/11.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/12.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/13.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/14.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/15.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/16.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/1.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/2.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/3.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/4.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/5.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/6.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/7.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/8.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/9.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/10.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/11.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/12.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/13.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/14.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/15.jpg" alt="Image"></a></li>
				<li><a href="#"><img src="img/grid/16.jpg" alt="Image"></a></li>
			</ul>
		</div>
		<!-- End Info Resalt-->

		<div class="container">
			<div class="row justify-content-center padding-top">
				<a href="single-team.html" class="btn-iw">Join Our Club</a>
				<a href="contact.html" class="btn-iw outline skin">Make Donation</a>
			</div>
		</div>

	</div>
	<!-- End Gray Section -->

	<!-- Newsletter -->
	<div class="section-newsletter no-margin">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>
						<p>Duis non lorem porta, eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
					</div>
					<form id="newsletterForm" action="http://html.iwthemes.com/sportscup/run/php/mailchip/newsletter-subscribe.php">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input class="form-control" placeholder="Your Name" name="name" type="text" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input class="form-control" placeholder="Your  Email" name="email" type="email" required="required">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="submit" name="subscribe">SIGN UP</button>
									</span>
								</div>
							</div>
						</div>
					</form>
					<div id="result-newsletter"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Newsletter -->
</section>
<!-- End Section Area -  Content Central -->
