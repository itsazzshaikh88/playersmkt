<style>
	.card,
	.card-body {
		border-radius: 0px !important;
		box-shadow: none !important;
		border: none !important;
	}
</style>
<div class="default-section mt-4 mb-5">
	<?php if (empty($player_detail)) : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
									<h1 class="text-warning">User Details Not Found</h1>
									<h3 class="mt-3">Hello Dear</h3>
									<h6 class="mt-3">
										Your <span class="text-green"><?= APP_NAME ?> </span>
										account details not found.
									</h6>
									<h6>
										Check your email and reset your account password from the link.
									</h6>
									<a href="login/player" class="mt-3 btn btn-primary btn-sm">Click here to Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
								</div>
								<div class="col-md-6">
									<div class="text-center mt-5">
										<img src="images/user-list.jpg" class="img-fluid w-50" alt="">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php else :
		if ($link_expired) :
		?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-6 text-center" id="content-container">
								<img src="images/alert-icon.png" alt="">
								<h1 class="text-warning">Oops!</h1>
								<h3 class="">Password Update Link Expired</h3>
								<p class="text-black">
									It seems the link to update your password has expired. No worries! For security, our links are time-sensitive. Please go ahead and initiate a new password reset request on our website. If you have any questions, feel free to reach out to our support team. We're here to help!
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		<?php else : ?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-4" id="content-container">
								<h3 class="text-green">Reset Account Password</h3>
								<p class="text-black">
									Choose strong password for your account.
								</p>
								<hr>
								<form action="account/update-password/<?= $player_detail['player_id'] ?>" method="post" id="form" onsubmit="validate()">
									<div class="form-group">
										<label for="" class="text-label">User Type <span class="text-danger">*</span></label>
										<input type="text" readonly value="<?= strtoupper($user_type) ?>" name="user_type" id="user_type" required autocomplete="off" class="form-control">
									</div>
									<div class="form-group">
										<label for="" class="text-label">New Password <span class="text-danger">*</span></label>
										<input type="password" name="password" id="password" required autocomplete="off" class="form-control" placeholder="Enter New Password">
										<input type="hidden" name="id" id="id" value="<?= $player_detail['id'] ?>">
										<input type="hidden" name="expiry_token" id="expiry_token" value="<?= $expiry_token ?>">
									</div>
									<div class="form-group">
										<label for="" class="text-label">Confirm Password <span class="text-danger">*</span></label>
										<input type="password" name="con_password" id="con_password" required autocomplete="off" class="form-control" placeholder="Re-enter your password">
									</div>
									<div class="row mt-3 d-none" id="alert-container">
										<div class="col-md-12">
											<div class="alert alert-danger text-center" id="alert-message"></div>
										</div>
									</div>
									<div class="form-group mb-4">
										<button class="btn btn-primary w-100 btn-login" id="submit-btn">Update Account Password</button>
									</div>
									<div class="or-div text-center">
										<span class="text-black">OR</span>
									</div>
									<div class="form-group">
										<a href="login/player" class=""><span class="text-black">Already have an account</span> <span class="text-green">Click to login</span></a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>
