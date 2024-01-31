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
				<div class="col-lg-2 col-md-5 col-sm-5">
					<div class="info-links">
						<h5>Organisation</h5>
						<ul>
							<li><a href="#">Volunteers</a></li>
							<li><a href="#">Committees</a></li>
							<li><a href="#">Official Documents</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<!-- End Column Links -->

				<!-- Column Links -->
				<div class="col-lg-4 col-md-7 col-sm-7">
					<div class="info-links">
						<h5>Groups</h5>
						<ul class="columns">
							<li><a href="#">GROUP A</a></li>
							<li><a href="#">GROUP B</a></li>
							<li><a href="#">GROUP C</a></li>
							<li><a href="#">GROUP D</a></li>
							<li><a href="#">GROUP E</a></li>
							<li><a href="#">GROUP F</a></li>
							<li><a href="#">GROUP G</a></li>
							<li><a href="#">GROUP H</a></li>
						</ul>
					</div>
				</div>
				<!-- End Column Links -->

				<!-- Column Links -->
				<div class="col-lg-2 col-md-5 col-sm-5">
					<div class="info-links">
						<h5>Interest Links</h5>
						<ul>
							<li><a href="#">Statistics</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Qualifiers</a></li>
							<li><a href="#">Ticketing</a></li>
						</ul>
					</div>
				</div>
				<!-- End Column Links -->

				<!-- Column Links -->
				<div class="col-lg-4 col-md-7 col-sm-7">
					<div class="info-links">
						<h5>Organisation</h5>
						<ul class="columns">
							<li><a href="#">NIZHNY NOVGOROD</a></li>
							<li><a href="#">SAINT PETERSBURG</a></li>
							<li><a href="#">EKATERINBURG</a></li>
							<li><a href="#">MOSCOW</a></li>
							<li><a href="#">KAZAN</a></li>
							<li><a href="#">KALININGRAD</a></li>
							<li><a href="#">VOLGOGRAD</a></li>
							<li><a href="#">ROSTOV-ON-DON</a></li>
						</ul>
					</div>
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
