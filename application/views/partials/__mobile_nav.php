<!-- Mobile Nav-->
<div id="mobile-nav">
	<!-- Menu-->
	<ul>
		<?php if (!empty($this->user)) : ?>
			<li>
				<a href="<?= generatePanelLink($this->user, $this->usertype) ?>">My Profile</a>
			</li>
		<?php endif; ?>
		<li>
			<a href="about-us"><?= $this->lang->line('nav_about_us') ?></a>
		</li>
		<li>
			<a href="players/find"><?= $this->lang->line('nav_players') ?></a>
		</li>
		<li>
			<a href="clubs/find"><?= $this->lang->line('nav_clubs') ?></a>
		</li>
		<li>
			<a href="contact-us"><?= $this->lang->line('nav_contact_us') ?></a>
		</li>


		<li>
			<a href="javascript:void(0)"><?= $this->lang->line('nav_login') ?></a>
			<ul>
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
<!-- End Mobile Nav-->
