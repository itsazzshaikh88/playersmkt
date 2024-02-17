<div class="default-section paddings">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-7 d-flex justify-content-center align-items-start">
				<div class="text-center d-flex justify-content-center align-items-start">
					<img src="images/login-club.png" class="img-fluid " alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border-radius-none custom-login-card">
					<div class="card-body border-radius-none">
						<h3 class="text-green"><?= $this->lang->line('club_login_lable')?></h3>
						<small class="text-black"><?= $this->lang->line('club_contant')?></small>
						<hr>
						<form action="login/club" method="post" id="form" onsubmit="validate()">
							<div class="form-group">
								<label for="" class="text-label"><?= $this->lang->line('club_email')?> <span class="text-danger">*</span></label>
								<input type="email" name="email" id="email" required autocomplete="off" class="form-control" placeholder="<?= $this->lang->line('club_registered_email')?>">
							</div>
							<div class="form-group">
								<label for="" class="text-label"><?= $this->lang->line('club_pass')?> <span class="text-danger">*</span></label>
								<input type="password" name="password" id="password" required autocomplete="off" class="form-control" placeholder="<?= $this->lang->line('club_registered_pass')?>">
							</div>
							<div class="form-group">
								<label for="" class="text-label"><input type="checkbox" name="remember_me" id="remember_me"> <?= $this->lang->line('club_remember')?> </label>
							</div>
							<div class="row mt-3 d-none" id="alert-container">
								<div class="col-md-12">
									<div class="alert alert-danger text-center" id="alert-message"></div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary w-100 btn-login" id="submit-btn"><?= $this->lang->line('club_login_know')?></button>
							</div>
							<div class="text-right">
								<a href="account/forgot-password?user-type=club"><?= $this->lang->line('club_forgot')?></a>
							</div>
							<div class="or-div text-center">
								<span class="text-black"><?= $this->lang->line('club_or')?></span>
							</div>
							<div class="form-group">
								<a href="register/club" class=""><span class="text-black"><?= $this->lang->line('club_dont_have')?></span> <span class="text-green"><?= $this->lang->line('club_create_account')?></span></a>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>

</div>
