<!-- footer 2-->
<footer id="footer" class="footer-2">
	<!-- Footer Top-->
	<div class="top-footer"></div>
	<!-- End Footer Top-->

	<!-- Links Footer-->
	<div class="links-footer">
		<div class="container">
			<div class="row">

				<!-- Column Links -->
				<div class="col-lg-3 col-md-7 col-sm-7">
					<div class="info-links">
						<h5>About Us</h5>
						<ul class="rows">
							<li><a>We are a team of dedicated professionals passionate about serving our clients in the marketing industry. Our goal is to provide innovative solutions and exceptional service to help businesses thrive in today's competitive landscape.</a></li>

						</ul>
					</div>
				</div>
				<!-- End Column Links -->

				<!-- Column Links -->
				<div class="col-lg-3 col-md-7 col-sm-7">
					<div class="info-links">
						<h5>Last Posts</h5>
						<ul class="rows">
							<li><a href="#">Breaking Records</a></li>
							<li>
								<p style="margin-bottom: 0rem !important;">The unstoppable force of <b>Azim Shaikh</b> continues to redefine greatness, setting new benchmarks and inspiring athletes worldwide.</p>
							</li>
						</ul>

						<ul class="rows">
							<li><a href="#">Injury Update</a></li>
							<li>
								<p style="margin-bottom: 0rem !important;"><b>Ansari Kamran</b> sidelined temporarily due to a minor injury, but remains optimistic about their swift return to the field.</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Column Links -->

				<!-- Column Links -->
				<div class="col-lg-3 col-md-5 col-sm-5">
					<div class="info-links">
						<h5>Quick Links</h5>
						<ul>
							<li><a href="about-us">About Us</a></li>
							<li><a href="players/find">Players</a></li>
							<li><a href="clubs/find">Clubs</a></li>
							<li><a href="contact-us">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<!-- End Column Links -->

				<!-- Column Links -->
				<div class="col-lg-3 col-md-5 col-sm-5">
					<h5>Contact Dtails</h5>
					<ul>
						<li> <a href=""> <i class="bi bi-geo-alt"></i> Tset </a> </li>
						<li> <a href=""> <i class="bi bi-telephone"></i> +28 4596871265 </a> </li>
						<li> <a href=""> <i class="bi bi-envelope"></i> testing25@yahoo.com </a> </li>
						<li> <a href=""> <i class="bi bi-globe"></i> Abcdefg.com </a> </li>
					</ul>
				</div>
				<!-- End Column Links -->

			</div>
		</div>
	</div>
	<!-- End Links Footer-->
	<!-- footer Down-->
	<div class="footer-down">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					$start_year = "2023";
					$year = date('Y');
					$copyright_year = $start_year === $year ? $year : "$start_year - $year";
					?>
					<p>&copy; <?= $copyright_year ?> <?= APP_NAME ?> . All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
	<!-- footer Down-->
</footer>
<!-- End footer 2-->

</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- jQuery local-->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- popper.js-->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- bootstrap.min.js-->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- required-scripts.js-->
<script type="text/javascript" src="assets/js/theme-scripts.js"></script>
<!-- theme-main.js-->
<script type="text/javascript" src="assets/js/theme-main.js"></script>
<!-- ======================= End JQuery libs =========================== -->

<!-- User Defined Script  -->
<script>
	const base_url = "<?= base_url() ?>";
	const player_base_url = "<?= PLAYER_APP_URL ?>";
	const club_base_url = "<?= CLUB_APP_URL ?>";
</script>
<script src="assets/js/app.js"></script>

<!-- Dynamic Scripts  -->
<?php
if (isset($scripts) && !empty($scripts)) :
	foreach ($scripts as $script) :
?>
		<script src="<?= $script ?>"></script>
<?php
	endforeach;
endif;
?>
</body>

</html>