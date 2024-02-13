<!-- Header-->
<header>
	<!-- End headerbox-->
	<div class="headerbox">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<!-- Logo-->
				<div class="col">
					<div class="logo">
						<a href="<?= base_url() ?>" title="Playersmkt.com">
							<img src="img/logo.png" alt="Logo" class="logo_img">
						</a>
						<select class="language-dropdown ml-2" name="language_selector" id="language_selector" onchange="set_app_language(this)">
							<?php foreach ($supported_languages as $lang) : ?>
								<option <?= $current_language === $lang['abbrivation'] ? 'selected' : '' ?> value="<?= $lang['abbrivation'] ?>"><?= strtoupper($lang['abbrivation']) ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<!-- End Logo-->

				<!-- Adds Header-->
				<div class="col">
					<div class="adds">
						<a href="<?= base_url() ?>">
							<img src="img/adds/banner.jpg" alt="" class="img-responsive">
						</a>
					</div>

					<!-- Call Nav Menu-->
					<a class="mobile-nav" href="#mobile-nav"><i class="fa fa-bars"></i></a>
					<!-- End Call Nav Menu-->
				</div>
				<!-- End Adds Header-->
			</div>
		</div>
	</div>
	<!-- End headerbox-->
</header>
<!-- End Header-->

<?php

function generatePanelLink($user, $usertype)
{
	$panel_link = 'javascript:void(0)';
	if (!empty($user)) {
		if ($usertype == 'P')
			$panel_link = PLAYER_APP_URL;
		elseif ($usertype == 'C')
			$panel_link = CLUB_APP_URL;
	}
	return $panel_link;
}

// include web navbar
include_once '__web_nav.php';
// include mobile navbar
include_once '__mobile_nav.php';
?>
