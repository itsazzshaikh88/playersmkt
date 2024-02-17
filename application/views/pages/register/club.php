<div class="default-section mt-5 mb-5">
	<?php
	if (empty($player_detail)) :
	?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card border-radius-none custom-login-card">
						<div class="card-body border-radius-none">
							<h3 class="text-green">Club Registration</h3>
							<small class="text-black">
								Welcome to <span class="text-success"><?= APP_NAME ?></span>! By creating your club account, you'll gain access to a wide range of features tailored to meet your team's needs. Join our global network of clubs and unlock opportunities to connect with talented players, manage team activities, and showcase your achievements. Get started today and take your club to new heights!
							</small>
							<hr>
							<form id="form" onsubmit="submitForm()" method="post" action="register/player">
								<div class=" form-group row">
									<label class="control-label text-black col-sm-3">First Name <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Type your first name" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">Last Name <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Type your last name" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">Country Name <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<?php include 'partials/__countries.php' ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">City Name <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<input type="text" id="city" name="city" class="form-control" placeholder="Type City Name" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">Choose Your Sport <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<select id="sport_id" name="sport_id" class="form-control form-control-sm" required="">
											<option value="">Select Your Sport</option>
											<?php
											foreach ($sports as $sport) :
											?>
												<option value="<?= $sport['sr_no'] ?>"><?= $sport['sport_name'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">Email Address <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<input type="text" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">Choose Password <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<input type="password" id="password" name="password" class="form-control" placeholder="Choose Your Password" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label text-black col-sm-3">Confirm Password <span class="float-right">:</span> </label>
									<div class="col-sm-9">
										<input type="password" id="con_password" name="con_password" class="form-control" placeholder="Re-Enter Your Password" required>
									</div>
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary" id="submit-btn"> Register Your Account</button>
								</div>
								<div class="alert alert-danger d-none" id="message-container" tabindex="0">
									<p class="pb-0 mb-0" id="message-box"></p>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class=" text-center mt-5">
						<h5 class="mt-5 text-black">
							Ready to take your sports journey to new heights? Join <span class="text-green">PlayersMkt</span> by cerating your account. Showcase your talent, connect with clubs globally, and open doors to a world of exciting possibilities in the realm of sports.

						</h5>
						<img src="images/register.png" class="img-fluid" alt="">
					</div>
				</div>

			</div>
		</div>
	<?php
	else : ?>
		<div class="container paddings" style="background-color: #fff;">
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/email.png" class="img-fluid w-50" alt="">
				</div>
				<div class="col-md-6 p-5">
					<h3 class="text-green">Congratulations, <?= "$player_detail[first_name] $player_detail[last_name]"; ?></h3>
					<h5 class="mt-3">
						Welcome aboard! You've successfully registered with <span class="text-green">PlayersMkt</span>, and we're thrilled to have you here. Your journey to sports opportunities and connections starts here.
					</h5>
					<h5 class="mt-3">
						We've sent a verification link to your email address. Please check your inbox and click on the link to complete the registration process. This step ensures the security of your account and allows you to fully access all the features <span class="text-green">PlayersMkt</span> has to offer.
					</h5>
					<div class="text-center">
						<a class="btn btn-primary mt-5" href="login/player">Click Here To Login To Your Account</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

</div>