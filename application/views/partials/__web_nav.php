<!-- mainmenu-->
<nav class="mainmenu">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<style>
					.bg-success {
						background-color: #01d099 !important;
					}
				</style>
			</div>
			<div class="col-md-7">
				<!-- Menu-->
				<ul class="sf-menu float-right" id="menu">
					<?php if (!empty($this->user)) : ?>
						<li class="">
							<a href="<?= generatePanelLink($this->user, $this->usertype) ?>"><?= $this->lang->line('nav_my_profile') ?></a>
						</li>
					<?php endif; ?>
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
					<li class="current bg bg-success">
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