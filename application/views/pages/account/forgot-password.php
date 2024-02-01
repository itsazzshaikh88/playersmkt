<?php
function display_param($param)
{
	if (isset($_GET[$param])) {
		return $_GET[$param];
	} else {
		return '';
	}
}
?>
<style>
	.card,
	.card-body {
		border-radius: 0px !important;
		box-shadow: none !important;
		border: none !important;
	}
</style>
<div class="default-section mt-5 mb-5">
	<?php if ($email_sent) : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
									<h1 class="text-green">Reset Password Link Sent!</h1>
									<h3 class="mt-3">Hi, <?= str_replace("-", " ",display_param('account-name')) ?></h3>
									<h6 class="mt-3">
										Your <span class="text-green"><?= APP_NAME ?> </span>
										account password reset link has been sent on your registered email address.
									</h6>
									<h6>
										Reset your password and login to your account.
									</h6>
									<a href="login/player" class="mt-3 btn btn-primary btn-sm">Click here to Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
								</div>
								<div class="col-md-6">
									<div class="text-center mt-5">
										<img src="images/email-sent-table.jpg" class="img-fluid" alt="">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-7">
									<div class="text-center mt-5">
										<img src="images/forgot.jpg" class="img-fluid w-50" alt="">
									</div>
								</div>
								<div class="col-md-5">
									<h3 class="text-green">Forgot Password?</h3>
									<p class="text-black">
										Enter your email address below, and we'll send you instructions on how to reset your password.
									</p>
									<hr>
									<form action="account/forgot-password" method="post" id="form" onsubmit="validate()">
										<div class="form-group">
											<label for="" class="text-label">User Type <span class="text-danger">*</span></label>
											<input type="text" readonly value="<?= strtoupper($user_type) ?>" name="user_type" id="user_type" required autocomplete="off" class="form-control">
										</div>
										<div class="form-group">
											<label for="" class="text-label">Email Address <span class="text-danger">*</span></label>
											<input type="email" name="email" id="email" required autocomplete="off" class="form-control" placeholder="Enter Registered Email Address">
										</div>
										<div class="row mt-3 d-none" id="alert-container">
											<div class="col-md-12">
												<div class="alert alert-danger text-center" id="alert-message"></div>
											</div>
										</div>
										<div class="form-group mb-4">
											<button class="btn btn-primary w-100 btn-login" id="submit-btn">Send Password Reset Link</button>
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
			</div>
		</div>
	<?php endif; ?>
</div>
