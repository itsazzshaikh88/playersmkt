<!-- Section Title -->
<div class="section-title-team">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/clubs-logos/col_logo.png" alt="">
                    </div>

                    <div class="col-md-9">
                        <h1><?= $club_details['club_name'] ?></h1>
                        <ul class="general-info">
                            <li>
                                <h6><strong>Foundation:</strong> </h6>
                                <p class="text-white"><b> <?= isset($club_info['founded_at']) ? $club_info['founded_at'] : '' ?> </b></p>
                            </li>
                            <li>
                                <h6><strong>President:</strong> </h6>
                                <p class="text-white"><b> <?= isset($club_info['president']) ? $club_info['president'] : '' ?> </b></p>
                            </li>
                            <li>
                                <h6><strong>Manager:</strong> </h6>
                                <p class="text-white"><b> <?= isset($club_info['manager']) ? $club_info['manager'] : '' ?> </b></p>
                            </li>
                            <li>
                                <h6><strong>Total Titles:</strong> </h6>
                                <p class="text-white"><b> <?= isset($club_info['total_titles']) ? $club_info['total_titles'] : '' ?> </b></p>
                            </li>
                            <li>
                                <h6><strong>Location:</strong> </h6>
                                <p class="text-white"><b> <?= isset($club_info['gmap_location']) ? $club_info['gmap_location'] : '' ?> </b></p>
                            </li>
                            <!-- <li><h6><strong>Personal Web:</strong> </h6> <p class="text-white"><b>  </b></p></li> -->
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image-team" style="background:url(img/clubs-teams/colombia.jpg);"></div>
</div>
<!-- End Section Title -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <!-- Single Team Tabs -->
    <div class="single-team-tabs">
        <div class="container">
            <div class="row">
                <!-- Left Content - Tabs and Carousel -->
                <div class="col-xl-12 col-md-12">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#overview" data-toggle="tab">Profile</a></li>
                        <li><a href="#squad" data-toggle="tab">Posts</a></li>
                        <li><a href="#fixtures" data-toggle="tab">News</a></li>
                        <!-- <li><a href="#results" data-toggle="tab">RESULTS</a></li>
                        <li><a href="#stats" data-toggle="tab">STATS</a></li> -->
                    </ul>
                    <!-- End Nav Tabs -->
                </div>

                <div class="col-lg-9 padding-top-mini">
                    <!-- Content Tabs -->
                    <div class="tab-content">
                        <!-- Tab One - overview -->
                        <div class="tab-pane active" id="overview">

                            <div class="panel-box padding-b">
                                <div class="titles">
                                    <h4>Colombia national football team</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-4">
                                        <img src="img/clubs-teams/single-team.jpg" alt="">
                                    </div>

                                    <div class="col-lg-12 col-xl-8">
                                        <p>The Colombia national football team (Spanish: Selección de fútbol de Colombia) represents Colombia in international football competitions and is overseen by the Colombian Football Federation. It is a member of the CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3] The team are nicknamed Los Cafeteros due to the coffee production in their country.</p>

                                        <p>Since the mid-1980s, the national team has been a symbol fighting the country's negative reputation. This has made the sport popular and made the national team a sign of nationalism, pride and passion for many Colombians worldwide.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Items Club News -->
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="clear-title">Latest Club News</h3>
                                </div>

                                <!--Item Club News -->
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">World football's dates.</a></h4>
                                        </div>
                                        <a href="#"><img src="img/blog/1.jpg" alt=""></a>
                                        <div class="row">
                                            <div class="info-panel">
                                                <p>Fans from all around the world can apply for 2018 FIFA World Cup™ tickets as the first window of sales.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <!--Item Club News -->
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Mbappe’s year to remember</a></h4>
                                        </div>
                                        <a href="#"><img src="img/blog/2.jpg" alt=""></a>
                                        <div class="row">
                                            <div class="info-panel">
                                                <p>Tickets may be purchased online by using Visa payment cards or Visa Checkout. Visa is the official.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <!--Item Club News -->
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Egypt are one family</a></h4>
                                        </div>
                                        <a href="#"><img src="img/blog/3.jpg" alt=""></a>
                                        <div class="row">
                                            <div class="info-panel">
                                                <p>Successful applicants who have applied for supporter tickets and conditional supporter tickets will.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->
                            </div>
                            <!--End Items Club News -->


                            <!--Items Club video -->
                            <div class="row no-line-height">
                                <div class="col-md-12">
                                    <h3 class="clear-title">Latest Club Videos</h3>
                                </div>

                                <!--Item Club News -->
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Eliminatory to the world.</a></h4>
                                        </div>
                                        <iframe class="video" src="https://www.youtube.com/embed/Ln8rXkeeyP0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <!--Item Club News -->
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Colombia classification</a></h4>
                                        </div>
                                        <iframe class="video" src="https://www.youtube.com/embed/Z5cackyUfgk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <!--Item Club News -->
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">World Cup goal</a></h4>
                                        </div>
                                        <iframe class="video" src="https://www.youtube.com/embed/hW3hnUoUS0k" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->
                            </div>
                            <!--End Items Club video -->

                            <!--Sponsors CLub -->
                            <!-- <div class="row no-line-height">
                                              <div class="col-md-12">
                                                  <h3 class="clear-title">Sponsors Club</h3>
                                              </div>
                                        </div> -->
                            <!--End Sponsors CLub -->

                            <!-- <ul class="sponsors-carousel">
                                            <li><a href="#"><img src="img/sponsors/1.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/sponsors/2.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/sponsors/3.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/sponsors/4.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/sponsors/5.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/sponsors/3.png" alt=""></a></li>
                                        </ul> -->

                        </div>
                        <!-- Tab One - overview -->

                        <!-- Tab Two - squad -->
                        <div class="tab-pane" id="squad">

                            <style>
                                .post {
                                    width: 100%;
                                    height: 336px !important;
                                    border: 0;
                                }
                            </style>

                            <!--Items Club video -->
                            <div class="row no-line-height">

                                <div class="col-md-12">
                                    <h3 class="clear-title">Latest Club Videos</h3>
                                </div>

                            </div>
                            <!--End Items Club video -->

                            <!--Items Club video -->
                            <div class="row no-line-height">
                                <div class="col-lg-2 col-xl-2">
                                </div>

                                <!--Item Club News -->
                                <div class="col-lg-8 col-xl-8">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Eliminatory to the world.</a></h4>
                                        </div>
                                        <iframe class="video post" src="https://www.youtube.com/embed/Ln8rXkeeyP0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <div class="col-lg-2 col-xl-2">
                                </div>
                            </div>
                            <!--End Items Club video -->

                            <!--Items Club video -->
                            <div class="row no-line-height">
                                <div class="col-lg-2 col-xl-2">
                                </div>

                                <!--Item Club News -->
                                <div class="col-lg-8 col-xl-8">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Colombia classification</a></h4>
                                        </div>
                                        <iframe class="video post" src="https://www.youtube.com/embed/Z5cackyUfgk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <div class="col-lg-2 col-xl-2">
                                </div>
                            </div>
                            <!--End Items Club video -->

                            <!--Items Club video -->
                            <div class="row no-line-height">
                                <div class="col-lg-2 col-xl-2">
                                </div>

                                <!--Item Club News -->
                                <div class="col-lg-8 col-xl-8">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">The Day that COLOMBIA Classifies WORLDCUP 16 YEARS AFTER !!!</a></h4>
                                        </div>
                                        <iframe class="video post" src="https://www.youtube.com/embed/hW3hnUoUS0k" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                                <!--End Item Club News -->

                                <div class="col-lg-2 col-xl-2">
                                </div>
                            </div>
                            <!--End Items Club video -->

                        </div>
                        <!-- End Tab Two - squad -->

                        <!-- Tab Theree - fixtures -->
                        <div class="tab-pane" id="fixtures">

                            <!--Items Club News -->
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="clear-title">Latest Club News</h3>
                                </div>

                                <div class="panel-box padding-b">
                                    <div class="titles">
                                        <h4>Colombia national football team</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-4">
                                            <img src="img/clubs-teams/single-team.jpg" alt="">
                                        </div>

                                        <div class="col-lg-12 col-xl-8">
                                            <p>The Colombia national football team (Spanish: Selección de fútbol de Colombia) represents Colombia in international football competitions and is overseen by the Colombian Football Federation. It is a member of the CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3] The team are nicknamed Los Cafeteros due to the coffee production in their country.</p>

                                            <p>Since the mid-1980s, the national team has been a symbol fighting the country's negative reputation. This has made the sport popular and made the national team a sign of nationalism, pride and passion for many Colombians worldwide.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-xl-4">
                                            <img src="img/blog/1.jpg" alt="">
                                        </div>

                                        <div class="col-lg-12 col-xl-8">
                                            <p>The Colombia national football team (Spanish: Selección de fútbol de Colombia) represents Colombia in international football competitions and is overseen by the Colombian Football Federation. It is a member of the CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3] The team are nicknamed Los Cafeteros due to the coffee production in their country.</p>

                                            <p>Since the mid-1980s, the national team has been a symbol fighting the country's negative reputation. This has made the sport popular and made the national team a sign of nationalism, pride and passion for many Colombians worldwide.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-xl-4">
                                            <img src="img/clubs-teams/colombia.jpg" alt="">
                                        </div>

                                        <div class="col-lg-12 col-xl-8">
                                            <p>The Colombia national football team (Spanish: Selección de fútbol de Colombia) represents Colombia in international football competitions and is overseen by the Colombian Football Federation. It is a member of the CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3] The team are nicknamed Los Cafeteros due to the coffee production in their country.</p>

                                            <p>Since the mid-1980s, the national team has been a symbol fighting the country's negative reputation. This has made the sport popular and made the national team a sign of nationalism, pride and passion for many Colombians worldwide.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Items Club News -->

                        </div>
                        <!-- End Tab Theree - fixtures -->

                        <!-- Tab Theree - results -->
                        <div class="tab-pane" id="results">
                            <div class="recent-results results-page">
                                <div class="info-results">
                                    <ul>
                                        <li>
                                            <span class="head">
                                                Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/esp.png" alt="">
                                                    Spain
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Rusia Vs Colombia <span class="date">30 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/rusia.png" alt="">
                                                    Rusia
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/colombia.png" alt="">
                                                    Colombia
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/esp.png" alt="">
                                                    Spain
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/esp.png" alt="">
                                                    Spain
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Theree - results -->

                        <!-- Tab Theree - stats -->
                        <div class="tab-pane" id="stats">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="stats-info">
                                        <ul>
                                            <li>
                                                Matches Played
                                                <h3>866</h3>
                                            </li>

                                            <li>
                                                Wins
                                                <h3>328</h3>
                                            </li>

                                            <li>
                                                Losses
                                                <h3>317</h3>
                                            </li>

                                            <li>
                                                Goals
                                                <h3>1,188</h3>
                                            </li>

                                            <li>
                                                Goals Conceded
                                                <h3>1,170</h3>
                                            </li>

                                            <li>
                                                Clean Sheets
                                                <h3>226</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Attack</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Goals <span>1,188</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Per Match <span>1.37</span></p>
                                            </li>
                                            <li>
                                                <p>Shots <span>4,621</span></p>
                                            </li>
                                            <li>
                                                <p>Shooting Accuracy % <span>32%</span></p>
                                            </li>
                                            <li>
                                                <p>Penalties Scored <span>30</span></p>
                                            </li>
                                            <li>
                                                <p>Big Chances Created <span>293</span></p>
                                            </li>
                                            <li>
                                                <p>Hit Woodwork <span>107</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Team Play</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Passes <span>140,417</span></p>
                                            </li>
                                            <li>
                                                <p>Passes Per Match <span>162.14</span></p>
                                            </li>
                                            <li>
                                                <p>Pass Accuracy % <span>76%</span></p>
                                            </li>
                                            <li>
                                                <p>Crosses <span>8,148</span></p>
                                            </li>
                                            <li>
                                                <p>Cross Accuracy % <span>22%</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Defence</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Clean Sheets <span>226</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Conceded <span>1,170</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Conceded Per Match <span>1.35</span></p>
                                            </li>
                                            <li>
                                                <p>Saves <span>392</span></p>
                                            </li>
                                            <li>
                                                <p>Tackles <span>7,438</span></p>
                                            </li>
                                            <li>
                                                <p>Tackle Success % <span>75%</span></p>
                                            </li>
                                            <li>
                                                <p>Blocked Shots <span>1,208</span></p>
                                            </li>
                                            <li>
                                                <p>Interceptions <span>5,334</span></p>
                                            </li>
                                            <li>
                                                <p>Clearances <span>11,436</span></p>
                                            </li>
                                            <li>
                                                <p>Headed Clearance <span>3,710</span></p>
                                            </li>
                                            <li>
                                                <p>Aerial Battles/Duels Won <span>25,401</span></p>
                                            </li>
                                            <li>
                                                <p>Errors Leading To Goal <span>59</span></p>
                                            </li>
                                            <li>
                                                <p>Own Goals <span>27</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>
                            </div>

                        </div>
                        <!-- End Tab Theree - stats -->
                    </div>
                    <!-- Content Tabs -->
                </div>

                <!-- Side info single team-->
                <div class="col-lg-3 padding-top-mini">
                    <!-- Diary -->

                    <!-- Attack -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4><i class="fa fa-calendar"></i>Info</h4>
                        </div>
                        <ul class="list-panel">
                            <li>
                                <p>Clean Sheets <span>226</span></p>
                            </li>
                            <li>
                                <p>Goals Conceded <span>1,170</span></p>
                            </li>
                            <li>
                                <p>Goals Conceded Per Match <span>1.35</span></p>
                            </li>
                            <li>
                                <p>Saves <span>392</span></p>
                            </li>
                            <li>
                                <p>Tackles <span>7,438</span></p>
                            </li>
                            <li>
                                <p>Tackle Success % <span>75%</span></p>
                            </li>
                            <li>
                                <p>Blocked Shots <span>1,208</span></p>
                            </li>
                            <li>
                                <p>Interceptions <span>5,334</span></p>
                            </li>
                            <li>
                                <p>Clearances <span>11,436</span></p>
                            </li>
                            <li>
                                <p>Headed Clearance <span>3,710</span></p>
                            </li>
                            <li>
                                <p>Aerial Battles/Duels Won <span>25,401</span></p>
                            </li>
                            <li>
                                <p>Errors Leading To Goal <span>59</span></p>
                            </li>
                            <li>
                                <p>Own Goals <span>27</span></p>
                            </li>
                        </ul>
                    </div>
                    <!-- End Attack -->

                    <!-- End Diary -->

                    <!-- Video presentation -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Presentation</h4>
                        </div>
                        <!-- Locations Video -->
                        <div class="row">
                            <iframe src="https://www.youtube.com/embed/AfOlAUd7u4o" class="video"></iframe>
                            <div class="info-panel">
                                <h4>Rio de Janeiro</h4>
                                <p>Lorem ipsum dolor sit amet, sit amet, consectetur adipisicing elit, elit, incididunt ut labore et dolore magna aliqua sit amet, consectetur adipisicing elit,</p>
                            </div>
                        </div>
                        <!-- End Locations Video -->
                    </div>
                    <!-- End Video presentation-->

                    <!-- Widget Text-->
                    <!-- <div class="panel-box">
                                    <div class="titles no-margin">
                                        <h4>Widget Image</h4>
                                    </div>
                                    <img src="img/slide/1.jpg" alt="">
                                    <div class="row">
                                       <div class="info-panel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  ut sit amet, consectetur adipisicing elit, labore et dolore.</p>
                                       </div>
                                    </div>
                                </div> -->
                    <!-- End Widget Text-->
                </div>
                <!-- end Side info single team-->

            </div>
        </div>
    </div>
    <!-- Single Team Tabs -->


</section>
<!-- End Section Area -  Content Central -->