<!-- Info Resalt-->
<div class="container padding-top">
			<div class="row portfolioContainer" style="position: relative; height: 1501.22px;">

				<!-- Item Player -->
				<?php
				foreach ($Player_details as $players) :
					?>
						<div class="col-xl-3 col-lg-4 col-md-6 forward" style="position: absolute; left: 0px; top: 0px;">
						<div class="item-player">
                        <div class="head-player">
                            <img src="img/players/1.jpg" alt="location-team">
                            <div class="overlay"><a href="single-player.html">+</a></div>
                        </div>
                        <div class="info-player">
                            <span class="number-player">
                                13
                            </span>
                            <h4>
                                <?= $players['player_id'] ?>
                                <span>Forward</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt="">
                                        Colombia </span>
                                </li>
                                <li><strong>MATCHES:</strong> <span>90</span></li>
                                <li><strong>AGE:</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
						</div>
				<?php
				endforeach;
				?>
				<!-- End Item Player -->
			</div>
		</div>
		<!-- End Info Resalt-->