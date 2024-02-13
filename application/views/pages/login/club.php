<div class="default-section paddings">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-4">
				<div class="card border-radius-none custom-login-card">
					<div class="card-body border-radius-none">
						<h3 class="text-green">Club Login</h3>

						<hr>
						<form action="login/club" method="post" id="form" onsubmit="validate()">
							<div class="form-group">
								<label for="" class="text-label">Email Address <span class="text-danger">*</span></label>
								<input type="email" name="email" id="email" required autocomplete="off" class="form-control" placeholder="Enter Registered Email Address">
							</div>
							<div class="form-group">
								<label for="" class="text-label">Password <span class="text-danger">*</span></label>
								<input type="password" name="password" id="password" required autocomplete="off" class="form-control" placeholder="Type Your Password ....">
							</div>
							<div class="form-group">
								<label for="" class="text-label"><input type="checkbox" name="remember_me" id="remember_me"> Remember Me </label>
							</div>
							<div class="row mt-3 d-none" id="alert-container">
								<div class="col-md-12">
									<div class="alert alert-danger text-center" id="alert-message"></div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary w-100 btn-login" id="submit-btn">Log In Now</button>
							</div>
							<div class="text-right">
								<a href="account/forgot-password?user-type=club">Forgot Password</a>
							</div>
							<div class="or-div text-center">
								<span class="text-black">OR</span>
							</div>
							<div class="form-group">

							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
