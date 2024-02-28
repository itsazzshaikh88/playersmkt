<!-- End gray Section -->
<div class="default-section paddings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center padding-bottom">
                    <h2><?= $this->lang->line('explore_featured') ?></h2>
                    <p><?= $this->lang->line('explore_featured_info') ?></p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .heart {
            width: 100px;
            height: 100px;
            background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;
            background-position: 0 0;
            cursor: pointer;
            transition: background-position 1s steps(28);
            transition-duration: 0s;
        }

        .heart.is-active {
            transition-duration: 1s;
            background-position: -2800px 0;
        }

        .stage {
            position: relative;
            top: 100%;
            left: 100%;
            transform: translate(-50%, -50%);
        }
    </style>
    <!-- Info Resalt-->
    
    <div class="container padding-top">
        <div class="row portfolioContainer" style="position: relative; height: 1501.22px;">

            <!-- Item Player -->
            <?php $index = 0;

            foreach ($Player_details as $players) :
                $is_subscribed = true;
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6 defender" id="D<?= ++$index ?>">
                    <div class="item-player">
                        <div class="head-player">
                            <img src="images/default-listing.png" alt="location-team">

                        </div>
                        <div class="info-player">
                            <span class="number-player">
                                <div class="stage">
                                    <?php $heart = $players['wishlist'] == 'added' ? 'UnHeart' : 'Heart' ?>
                                    <div class="heart <?= $players['wishlist'] == 'added' ? 'is-active' : '' ?>" id="heart<?= $index ?>" onclick="<?= $heart ?>('<?= $index ?>','<?= $players['id'] ?>','<?= $usertype?>')">
                                    </div>
                                </div>
                                <!-- <?= $players['id'] ?> -->
                            </span>
                            <h4>
                                <?= $players['player_id'] ?>
                                <span>Defender</span>
                            </h4>
                            <ul>
                                <li>
                                    <strong><?= $this->lang->line('nationality') ?> :</strong> <span>
                                        <?= $players['country'] ?> </span>
                                </li>
                                <li><strong><?= $this->lang->line('matches') ?> :</strong> <span>90</span></li>
                                <li><strong><?= $this->lang->line('age') ?> :</strong> <span>28</span></li>
                            </ul>
                        </div>
                        <!-- <?php if ($is_subscribed) : ?> -->
                        <a href="players/profile/details?p-id=<?= $players['player_id'] ?>&id=<?= $players['id'] ?>&source=listing" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <!-- <?php else : ?>
								<a href="#" class="btn">Subscribe Please <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<?php endif; ?> -->
                    </div>
                </div>
            <?php
            endforeach;
            ?>
            <!-- End Item Player -->

        </div>
    </div>
    <!-- End Info Resalt-->

    <div class="container">
        <div class="row justify-content-center padding-top">
            <a href="players/find/all" class="btn-iw"><?= $this->lang->line('explore_all_player') ?></a>
            <a href="clubs/find/all" class="btn-iw outline skin"><?= $this->lang->line('explore_all_club') ?></a>
        </div>
    </div>

</div>
<!-- End Gray Section -->