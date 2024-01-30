<!-- mainmenu-->
<nav class="mainmenu">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<!-- Menu-->
				<ul class="sf-menu float-right" id="menu">
					<li class="">
						<a href="about-us"><?= $this->lang->line('nav_about_us') ?></a>
					</li>
					<li class="">
						<a href="players/find"><?= $this->lang->line('nav_players') ?></a>
					</li>
					<li class="">
						<a href="clubs/find"><?= $this->lang->line('nav_clubs') ?></a>
					</li>
					<li class="">
						<a href="contact-us"><?= $this->lang->line('nav_contact_us') ?></a>
					</li>
					<li class="current">
						<a><?= $this->lang->line('nav_login') ?></a>
						<ul class="sub-current">
							<li>
								<a href="login/player"><?= $this->lang->line('nav_login_player') ?></a>
							</li>
							<li>
								<a href="login/club"><?= $this->lang->line('nav_login_club') ?></a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- End Menu-->
			</div>
		</div>
	</div>
</nav>
<!-- End mainmenu-->
