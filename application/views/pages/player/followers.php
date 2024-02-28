<style>
    .btn-sm,
    .btn-group-sm>.btn {
        padding: 0.2rem 0.2rem !important;
        font-size: 0.875rem !important;
        line-height: 1.1 !important;
        border-radius: 1.2rem !important;
    }
</style>
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
                           
                            <?php $onclick = $players['f_id'] != '' ? 'unfollowClub' : 'followClub' ?>
                            <button class="follow-btn btn-sm" data-club-name="<?= $players['id'] . '-' . 'P' ?>" id="follow-button<?= $index ?>" onclick="<?= $onclick ?>('P','<?= $players['id'] ?>','<?= $userid ?>','<?= $usertype ?>')"><?= $players['follow'] ?></button>
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

                    <a href="players/profile/details?p-id=<?= $players['player_id'] ?>&id=<?= $players['id'] ?>&source=listing" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                </div>
            </div>
        <?php
        endforeach;
        ?>
        <!-- End Item Player -->

    </div>
</div>