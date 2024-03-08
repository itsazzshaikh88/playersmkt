<!-- section-hero-posts-->
<style>
	.heart {
		width: 100px;
		height: 100px;
		background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;
		background-position: 0 0;
		cursor: pointer;
		transition: background-position 1s steps(28);
		transition-duration: 0s;
	}

	.heart.is-active {
		transition-duration: 1s;
		background-position: -2800px 0;
	}

	.stage {
		position: relative;
		top: 100%;
		left: 100%;
		transform: translate(-50%, -50%);
	}
</style>
<div class="hero-header">
	<!-- Hero Slider-->
	<div id="hero-slider" class="hero-slider">

	</div>
	<!-- End Hero Slider-->
</div>
<!-- End section-hero-posts-->

<!-- Section Area - Content Central -->
<section class="content-info">
	<!-- White Section About -->
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

	<!-- player and club listing  -->
	<div class="default-section paddings">
		<div class="container">
			<div class="row">
				<!-- Club Ranking -->
				<div class="col-lg-4">
					<div class="club-ranking">
						<h3><a href="/clubs/new"><?= $this->lang->line('recent_club_label') ?></a></h3>
						<div class="info-ranking">
							<ul>
								<?php
								foreach ($club_details as $clubs) :

									if (isset($clubs['photo'])) {
										$profile = $clubs['photo'];
									} else {
										$profile = 'img/bydefaultclub.png';
									}
								?>
									<li>
										<span class="position">
											<?= $clubs['id'] ?>
										</span>
										<a href="clubs/profile/details?c-id=<?= $clubs['club_id'] ?>&id=<?= $clubs['id'] ?>&source=listing">
											<img src="<?= $profile ?>" alt="">
											<?= $clubs['club_id'] ?>
										</a>
										<span class="points home-list text-green">
											<?= $clubs['sport_name'] ?>
										</span>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<?php if (count($club_details) >= 10) : ?>
							<div class="">
								<a href="clubs/find/new" class="btn btn-sm btn-primary text-white">See More +</a>
							</div>
						<?php endif; ?>

					</div>
				</div>
				<!-- End Club Ranking -->

				<!-- recent-results -->
				<div class="col-lg-4">
					<div class="recent-results">
						<h3><a href="javascript:void(0)"><?= $this->lang->line('recent_result_label') ?></a></h3>
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
						<h3><a href="players/new"><?= $this->lang->line('recent_player_label') ?></a></h3>
						<div class="info-player">
							<ul>
								<?php
								foreach ($player_Fetch as $play) :

									if (isset($play['photo'])) {
										$profile = $play['photo'];
									} else {
										$profile = 'images/default-listing.png';
									}

								?>
									<li>
										<span class="position">
											<?= $play['id'] ?>
										</span>
										<a href="players/profile/details?p-id=<?= $play['player_id'] ?>&id=<?= $play['id'] ?>&source=listing">
											<img src="<?= $profile ?>" alt="">
											<?= $play['player_id'] ?>
										</a>
										<span class="points home-list text-green">
											<?= $play['sport_name'] ?>
										</span>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<?php if (count($player_Fetch) >= 10) : ?>
							<div class="">
								<a href="players/find/new" class="btn btn-sm btn-primary text-white">See More +</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<!-- End Top player -->
			</div>
		</div>
	</div>
	<!-- Schedules and Stats End  -->


	<!-- Sports Categories  -->
	<div class="dark-section paddings-big">
		<div class="scale">
			<div class="skewmask-block"></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5 padding-top">
					<h2><?= $this->lang->line('categorie_label') ?></h2>
					<p class="lead">
						<?= $this->lang->line('categorie_info') ?>
					</p>
					<div class="text-right">
						<a href="sports/categories">
							<h3 class="text-green text-underline"> <?= $this->lang->line('categories_explore') ?><span><i class="bi bi-arrow-right-circle"></i></span></h3>
						</a>
					</div>
				</div>



				<div class="col-lg-7">
					<div class="row">

						<?php foreach ($sport_details as $sports) : ?>

							<div class="col-md-6 col-xl-4">
								<a href="sports/categories/cricket?sport-id=<?= $sports['sr_no'] ?>">
									<div class="item-boxed-img small" style="background: url(<?= $sports['cover_image'] ?>);">
										<h4><?= $sports['sport_name'] ?> </h4>
									</div>
								</a>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sports Categories End -->

	<!-- Today chengas -------------------------------- Ansari kamran -------------------------------------  -->
	<!-- Explore featured News -->
	<div class="default-section paddings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center padding-bottom">
						<h2>Explore Featured <span class='text-resalt'> News </span></h2>
						<p>Dive into our curated showcase of exceptional news. Discover their unique talents, stories, and achievements as we bring you the best in the world of news.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Info Resalt-->
		<div class="container">
			<div class="row">
				<!--Item Club News -->
				<div class="col-lg-3 col-xl-3">
					<div class="panel-box">
						<div class="titles no-margin">
							<h4><a href="#">World football's dates.</a></h4>
						</div>
						<a href="#"><img src="img/blog/1.jpg" alt=""></a>
						<div class="row">
							<div class="info-panel">
								<p>Fans from all around the world can apply for 2018 FIFA World Cup™ tickets as the first window of sales.</p>
							</div>
						</div>
					</div>
				</div>
				<!--End Item Club News -->

				<!--Item Club News -->
				<div class="col-lg-3 col-xl-3">
					<div class="panel-box">
						<div class="titles no-margin">
							<h4><a href="#">Mbappe’s year to remember</a></h4>
						</div>
						<a href="#"><img src="img/blog/2.jpg" alt=""></a>
						<div class="row">
							<div class="info-panel">
								<p>Tickets may be purchased online by using Visa payment cards or Visa Checkout. Visa is the official.</p>
							</div>
						</div>
					</div>
				</div>
				<!--End Item Club News -->

				<!--Item Club News -->
				<div class="col-lg-3 col-xl-3">
					<div class="panel-box">
						<div class="titles no-margin">
							<h4><a href="#">Egypt are one family</a></h4>
						</div>
						<a href="#"><img src="img/blog/3.jpg" alt=""></a>
						<div class="row">
							<div class="info-panel">
								<p>Successful applicants who have applied for supporter tickets and conditional supporter tickets will.</p>
							</div>
						</div>
					</div>
				</div>
				<!--End Item Club News -->

				<!--Item Club News -->
				<div class="col-lg-3 col-xl-3">
					<div class="panel-box">
						<div class="titles no-margin">
							<h4><a href="#">World football's dates.</a></h4>
						</div>
						<a href="#"><img src="img/blog/1.jpg" alt=""></a>
						<div class="row">
							<div class="info-panel">
								<p>Fans from all around the world can apply for 2018 FIFA World Cup™ tickets as the first window of sales.</p>
							</div>
						</div>
					</div>
				</div>
				<!--End Item Club News -->
			</div>
			<!--End Items Club News -->
		</div>
		<!-- End Info Resalt-->

		<!-- <div class="container">
			<div class="row justify-content-center padding-top">
				<a href="News" class="btn-iw outline skin">Explore All News</a>
			</div>
		</div> -->

	</div>
	<!-- End Gray Section -->
	<!-- Today chengas -------------------------------- Ansari kamran -------------------------------------  -->

	<!-- Explore featured players -->
	<div class="default-section paddings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center padding-bottom">
						<h2><?= $this->lang->line('explore_featured') ?></h2>
						<p><?= $this->lang->line('explore_featured_info') ?></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Info Resalt-->
		<div class="container padding-top">
			<div class="row portfolioContainer" style="position: relative; height: 1501.22px;">

				<!-- Item Player -->
				<?php $index = 0;

				foreach ($Player_details as $players) :
					$is_subscribed = true;
				?>
					<div class="col-xl-3 col-lg-4 col-md-6 defender" id="D<?= ++$index ?>">
						<div class="item-player">
							<div class="head-player">
								<img src="images/default-listing.png" alt="location-team">
							</div>
							<div class="info-player">
								<span class="number-player">
									<div class="stage">
										<?php $heart = $players['wishlist'] == 'added' ? 'UnHeart' : 'Heart' ?>
										<div class="heart <?= $players['wishlist'] == 'added' ? 'is-active' : '' ?>" id="heart<?= $index ?>" onclick="<?= $heart ?>('<?= $index ?>','<?= $players['id'] ?>','<?= $usertype ?>')">
										</div>
									</div>
								</span>
								<h4>
									<?= $players['player_id'] ?>
									<span><?= $players['sport_name'] ?></span>
								</h4>
								<ul>
									<li>
										<strong><?= $this->lang->line('nationality') ?> :</strong> <span>
											<?= $players['country'] ?> </span>
									</li>
									<li><strong><?= $this->lang->line('matches') ?> :</strong> <span><?= $players['gender'] == '' ? '-': $players['gender'] ?></span></li>
									<?php
									$dob = $players['date_of_birth'];
									$today = new DateTime();
									$birthdate = new DateTime($dob);
									$interval = $today->diff($birthdate);
									$age =$interval->y;
									?>
									<li><strong><?= $this->lang->line('age') ?> :</strong> <span><?=$age?></span></li>
								</ul>
							</div>
							<!-- <?php if ($is_subscribed) : ?> -->
							<a href="players/profile/details?p-id=<?= $players['player_id'] ?>&id=<?= $players['id'] ?>&source=listing" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<!-- <?php else : ?>
								<a href="#" class="btn">Subscribe Please <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<?php endif; ?> -->
						</div>
					</div>
				<?php
				endforeach;
				?>
				<!-- End Item Player -->

			</div>
		</div>
		<!-- End Info Resalt-->

		<div class="container">
			<div class="row justify-content-center padding-top">
				<a href="players/find/all" class="btn-iw"><?= $this->lang->line('explore_all_player') ?></a>
				<a href="clubs/find/all" class="btn-iw outline skin"><?= $this->lang->line('explore_all_club') ?></a>
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
						<h2><?= $this->lang->line('email_lable') ?></h2>
						<p><?= $this->lang->line('email_info') ?></p>
					</div>
					<form id="newsletterForm" action="app/newsletter" method="POST" onsubmit="subscribe_to_newsletter()">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input class="form-control" placeholder="<?= $this->lang->line('subscrib_email') ?>" name="name" type="text" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input class="form-control" placeholder="<?= $this->lang->line('subscrib_pass') ?>" name="email" type="email" required="required">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="submit" id="submit-btn" name="subscribe"><?= $this->lang->line('sing_up') ?></button>
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