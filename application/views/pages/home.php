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
						<h2>Explore Featured <span class="text-resalt">Players</span></h2>
						<p>Dive into our curated showcase of exceptional players. Discover their unique talents, stories, and achievements as we bring you the best in the world of sports.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Info Resalt-->
		<div class="container padding-top">
			<div class="row portfolioContainer" style="position: relative; height: 1501.22px;">

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 forward" style="position: absolute; left: 0px; top: 0px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/1.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								13
							</span>
							<h4>
								Cristiano Ronaldo
								<span>Forward</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 defender" style="position: absolute; left: 325px; top: 0px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/2.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								10
							</span>
							<h4>
								Lionel Messi
								<span>Defender</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 midfielder" style="position: absolute; left: 650px; top: 0px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/3.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Neymar
								<span>Midfielder</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 goalkeeper" style="position: absolute; left: 975px; top: 0px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/4.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Luis Suárez
								<span>Goalkeeper</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 midfielder" style="position: absolute; left: 0px; top: 500px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/5.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Gareth Bale
								<span>Midfielder</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 goalkeeper" style="position: absolute; left: 325px; top: 500px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/6.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Sergio Agüero
								<span>Goalkeeper</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 forward" style="position: absolute; left: 650px; top: 500px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/1.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								13
							</span>
							<h4>
								Cristiano Ronaldo
								<span>Forward</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 defender" style="position: absolute; left: 975px; top: 500px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/2.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								10
							</span>
							<h4>
								Lionel Messi
								<span>Defender</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 midfielder" style="position: absolute; left: 0px; top: 1000px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/3.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Neymar
								<span>Midfielder</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 goalkeeper" style="position: absolute; left: 325px; top: 1000px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/4.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Luis Suárez
								<span>Goalkeeper</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 midfielder" style="position: absolute; left: 650px; top: 1000px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/5.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Gareth Bale
								<span>Midfielder</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

				<!-- Item Player -->
				<div class="col-xl-3 col-lg-4 col-md-6 goalkeeper" style="position: absolute; left: 975px; top: 1000px;">
					<div class="item-player">
						<div class="head-player">
							<img src="img/players/6.jpg" alt="location-team">
							<div class="overlay"><a href="single-player.html">+</a></div>
						</div>
						<div class="info-player">
							<span class="number-player">
								2
							</span>
							<h4>
								Sergio Agüero
								<span>Goalkeeper</span>
							</h4>
							<ul>
								<li>
									<strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span>
								</li>
								<li><strong>MATCHES:</strong> <span>90</span></li>
								<li><strong>AGE:</strong> <span>28</span></li>
							</ul>
						</div>
						<a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Item Player -->

			</div>
		</div>
		<!-- End Info Resalt-->

		<div class="container">
			<div class="row justify-content-center padding-top">
				<a href="players/find/all" class="btn-iw">Explore All Players</a>
				<a href="clubs/find/all" class="btn-iw outline skin">View All Clubs</a>
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
						<p>Subscribe to our newsletter and stay in the loop with the latest in sports recruitment, player showcases, and exciting opportunities. Join our community to receive exclusive updates, featured player spotlights, and insights into the evolving world of sports.
						</p>
					</div>
					<form id="newsletterForm" action="app/newsletter" method="POST" onsubmit="subscribe_to_newsletter()">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input class="form-control" placeholder="Enter Your Name" name="name" type="text" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input class="form-control" placeholder="Enter Your Email" name="email" type="email" required="required">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="submit" id="submit-btn" name="subscribe">SIGN UP</button>
									</span>
								</div>
							</div>
						</div>
						<div class="row mt-3 d-none" id="alert-container">
							<div class="col-md-12">
								<div class="alert alert-danger" id="alert-message"></div>
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
