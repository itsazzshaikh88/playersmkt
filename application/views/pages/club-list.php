<section class="content-info" id="content_info">

    <div class="container padding-top">

        <div class="row portfolioContainer" id="club_list">
            <?php foreach ($club_details as $club) : ?>
                <div class="col-md-6 col-lg-4 col-xl-3 group-a">
                    <div class="item-team card">
                        <div class="head-team">
                            <img src="img/clubs-teams/arabia.jpg" alt="location-team">
                        </div>
                        <div class="info-team">
                            <span class="logo-team">
                                <img src="img/clubs-logos/arabia.png" alt="logo-team">
                            </span>
                            <h4><?= $club['club_name'] ?></h4>
                            <span class="location-team">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <?= $club['city'] ?>
                            </span>
                            <span class="group-team">
                                <i class="fas fa-volleyball-ball" aria-hidden="true"></i>
                                <?= $club['country'] ?>
                            </span>
                            <a href="#" class="btn"><i class="fa fa-user" aria-hidden="true"></i>
                                <?= $club['club_id'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>