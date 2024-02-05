<style>
	.link-img {
		height: 300px;
	}
</style>
<div class="default-section mb-5 mt-5">
	<?php
	if ($link_expired) :
	?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/link.png" class="link-img" alt="">
				</div>
				<div class="col-md-6 mt-5">
					<h1 class="text-danger">Oopps ..</h1>
					<h3>Account Verification Link Has Been Expired.</h3>
					<a href="<?= base_url() ?>" class="btn btn-sm btn-primary mt-3">Click to Go to Homepage <i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
		<?php
	else :
		if ($club_detail == []) :
		?>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
						<img src="images/player.png" class="link-img" alt="">
					</div>
					<div class="col-md-6 mt-5">
						<h1 class="text-danger">Invalid Account</h1>
						<h3>Account is not matched with Account Verification Token</h3>
						<a href="<?= base_url() ?>" class="btn btn-sm btn-primary mt-3">Click to Go to Homepage <i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<?php
		else :
			if ($is_verified) : ?>
				<div class="container">
					<div class="row">
						<div class="col-md-5 text-center">
							<img src="images/verify.png" class="link-img" alt="">
							<h3 class="text-green">Account Verified Successfully!</h3>
						</div>
						<div class="col-md-7">

							<h2>Congratulations, <span class="text-green"><?= "$club_detail[club_name]" ?></span></h2>

							<p style="font-size: 16px;">
								Your <?= APP_NAME ?> account has been successfully verified. Welcome to our vibrant sports community! You're now ready to dive into the world of opportunities and connections that <?= APP_NAME ?> has to offer.
							</p>

							<h4 class="font-weight-bold">What's Next <i class="fa-solid fa-angles-right"></i> </h4>
							<ul>
								<li><span class="font-weight-bold text-green">Explore Opportunities:</span> Showcase your talent and explore exciting opportunities within our global sports network.</li>
								<li><span class="font-weight-bold text-green">Connect with Clubs:</span> Engage with clubs actively seeking players with your skills. Make connections that can shape your sports career.</li>
								<li><span class="font-weight-bold text-green">Complete Your Profile:</span> Enhance your presence on <?= APP_NAME ?> by completing your profile. Add details, achievements, and showcase the best of your sports journey.</li>
							</ul>
							<div class="text-center">
								<a href="login/club" class="btn btn-sms btn-primary mt-3 w-50">Click to Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php endif;
			if ($already_verified) :
			?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center">
							<img src="images/verify.png" class="link-img" alt="">
						</div>
						<div class="col-md-6 mt-5">
							<h1 class="text-green"><i class="fa-solid fa-certificate"></i> Account Verified</h1>
							<h4>Your <?= APP_NAME ?> Account is Already Verified. Click Below link to login to your account.</h4>
							<a href="login/player" class="btn btn-sm btn-primary mt-3 w-50">Click to Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
</div>
