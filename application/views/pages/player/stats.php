 <!-- Section Title -->
 <div class="section-title single-player" style="background:url(img/slide/3.jpg)">
     <div class="container">
         <div class="row">
             <div class="col-md-8">

             </div>


         </div>
     </div>
 </div>
 <!-- End Section Title -->
 <style>
     p {
         margin-bottom: 0rem !important;

     }

     .panel-box .list-panel li {
         margin: 0px 0 !important;
     }
 </style>
 <!-- Section Area - Content Central -->
 <section class="content-info">

     <!-- Single Team Tabs -->
     <div class="single-player-tabs">
         <div class="container">
             <div class="row">
                 <!-- Side info single team-->
                 <div class="col-lg-4 col-xl-3">

                     <div class="item-player single-player">
                         <div class="head-player">
                             <?php if (isset($Personal_info['photo'])) {
                                    $profile = $Personal_info['photo'];
                                } else {
                                    $profile = 'images/default-listing.png';
                                } ?>
                             <img src="<?= $profile ?>" alt="location-team">
                         </div>
                         <div class="info-player">
                             <span class="number-player">
                                 10
                             </span>
                             <h4>
                                 <?= $Player_details['player_id'] ?>
                                 <span>Forward</span>
                             </h4>
                             <ul class="list-panel">
                                 <li>
                                     <p>Weight <span><?= isset($Personal_info['weight']) ?></span></p>
                                 </li>
                                 <li>
                                     <p>Height <span><?= isset($Personal_info['height']) ?></span></p>
                                 </li>
                                 <li>
                                     <p>Gender <span><?= isset($Personal_info['gender']) ?></span></p>
                                 </li>
                             </ul>

                         </div>
                     </div>

                     <!-- Personal Info -->
                     <div class="panel-box">
                         <div class="titles no-margin">
                             <h4><i class="fa fa-link"></i>Links</h4>
                         </div>
                         <ul class="list-panel" id="myTab">
                             <li>
                                 <p><a href="players/profile/<?= $Player_details['id'] ?>/details">Profile</a></p>
                             </li>
                             <li>
                                 <p><a href="players/profile/<?= $Player_details['id'] ?>/posts">Posts</a></p>
                             </li>
                             <li>
                                 <p><a href="players/profile/<?= $Player_details['id'] ?>/stats">Stats</a></p>
                             </li>

                         </ul>
                     </div>
                     <!-- End Personal Info -->

                 </div>
                 <!-- end Side info single team-->

                 <div class="col-lg-8 col-xl-9">
                     <!-- Nav Tabs -->
                     <ul class="nav nav-tabs">
                         <!-- <li class="active"><a data-toggle="tab">Overview</a></li> -->
                         <!-- <li><a data-toggle="tab">CAREER</a></li> -->
                         <!-- <li><a data-toggle="tab">STATS</a></li> -->
                     </ul>
                     <!-- End Nav Tabs -->

                     <!-- Content Tabs -->
                     <div class="tab-content">

                         <div class="row">

                             <div class="col-md-12">
                                 <h3 class="clear-title">Stats</h3>
                             </div>
                             <div class="col-md-12">
                                 <div class="tab-pane" id="stats">

                                     <div class="row">
                                         <div class="col-lg-12">
                                             <div class="stats-info">
                                                 <ul>
                                                     <li>
                                                         Appearances
                                                         <h3>50</h3>
                                                     </li>

                                                     <li>
                                                         Goals
                                                         <h3>10</h3>
                                                     </li>

                                                     <li>
                                                         Wins
                                                         <h3>16</h3>
                                                     </li>

                                                     <li>
                                                         Losses
                                                         <h3>5</h3>
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
                                                         <p>Goals <span>60</span></p>
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



                             <!-- Tab Theree - stats -->



                         </div>

                     </div>
                     <!-- Content Tabs -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Single Team Tabs -->


 </section>
 <!-- End Section Area -  Content Central -->