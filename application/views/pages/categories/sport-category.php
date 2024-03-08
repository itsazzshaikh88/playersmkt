 <!-- Section Title -->
 <style>
     .player-ranking .info-player {
         background: #f7f7f7 !important;
     }

     .player-ranking .info-player ul {
         border: 1px solid #1dd19b !important;
     }

     .player-ranking .info-player ul li .position {
         color: #26282b !important;
     }

     .player-ranking .info-player ul li a {
         color: #26282b !important;
     }

     .player-ranking .info-player ul li .points {
         color: #26282b !important;
     }

     .paddings {
         padding: 25px 0 !important;
     }
    

 </style>
 <div class="section-title" style="background:url(img/slide/1.jpg)">
     <div class="container">
         <div class="row">
             <div class="col-md-1">
                 <h1>Sports</h1>
             </div>
             <div class="col-md- align-self-center">
                 <i class="bi bi-caret-right-fill abcd"></i>
             </div>
             <div class="col-md-2">
                 <h1>Cricket</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <div class="breadcrumbs float-left">
                     <ul>
                         <li>
                             <h4><a href="sports/history">View Sports History</a></h4>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Section Title -->
 <!-- Section Area - Content Central -->
 <section class="content-info">

     <!-- Nav Filters -->
     <!-- <div class="portfolioFilter">
         <div class="container">
             <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5>
             <a href="#" data-filter="*" class="current">Show All</a>
             <a href="#" data-filter=".forward">Forward</a>
             <a href="#" data-filter=".defender">Defender</a>
             <a href="#" data-filter=".midfielder">Midfielder</a>
             <a href="#" data-filter=".goalkeeper">Goalkeeper</a>
         </div>
     </div> -->
     <!-- End Nav Filters -->

     <!-- Schedules and Stats For Player -->
     <div class="default-section paddings">
         <div class="container">


             <div class="row">

                 <div class="col-md-12">
                     <h3 class="clear-title">Players</h3>
                 </div>

                 <!-- Top player -->
                 <div class="col-lg-4">
                     <div class="player-ranking">
                         <h3>New</h3>
                         <div class="info-player text-black">
                             <ul>
                                 <?php
                                    foreach ($players as $play) :

                                        if (isset($play['photo'])) {
                                            $profile = $play['photo'];
                                        } else {
                                            $profile = 'images/default-listing.png';
                                        }
                                    ?>
                                     <li>
                                         <span class="position">
                                             <?= $play['id'] ?>
                                         </span>
                                         <a href="players/profile/details?p-id=<?= $play['player_id'] ?>&id=<?= $play['id']?>&source=listing">
                                             <img src="<?= $profile ?>" alt="">
                                             <?= $play['player_id'] ?>
                                         </a>
                                         <span class="points home-list">
                                             <?= $play['sport_name'] ?>
                                         </span>
                                     </li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                         <?php if (count($players) >= 10) : ?>
                             <div class="">
                                 <a href="players/find" class="btn btn-sm btn-primary text-white">See All</a>
                             </div>
                         <?php endif; ?>
                     </div>
                 </div>
                 <!-- End Top player -->
                 <!-- Top player -->
                 <div class="col-lg-4">
                     <div class="player-ranking">
                         <h3>Most Searched</h3>
                         <div class="info-player text-black">
                             <ul>
                                 <?php
                                    foreach ($players as $play) :

                                        if (isset($play['photo'])) {
                                            $profile = $play['photo'];
                                        } else {
                                            $profile = 'images/default-listing.png';
                                        }
                                    ?>
                                     <li>
                                         <span class="position">
                                             <?= $play['id'] ?>
                                         </span>
                                         <a href="players/profile/details?p-id=<?= $play['player_id'] ?>&id=<?= $play['id']?>&source=listing">
                                             <img src="<?= $profile ?>" alt="">
                                             <?= $play['player_id'] ?>
                                         </a>
                                         <span class="points home-list">
                                             <?= $play['sport_name'] ?>
                                         </span>
                                     </li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                         <?php if (count($players) >= 10) : ?>
                             <div class="">
                                 <a href="players/find" class="btn btn-sm btn-primary text-white">See All</a>
                             </div>
                         <?php endif; ?>
                     </div>
                 </div>
                 <!-- End Top player -->
                 <!-- Top player -->
                 <div class="col-lg-4">
                     <div class="player-ranking">
                         <h3>Top</h3>
                         <div class="info-player text-black">
                             <ul>
                                 <?php
                                    foreach ($players as $play) :

                                        if (isset($play['photo'])) {
                                            $profile = $play['photo'];
                                        } else {
                                            $profile = 'images/default-listing.png';
                                        }
                                    ?>
                                     <li>
                                         <span class="position">
                                             <?= $play['id'] ?>
                                         </span>
                                         <a href="players/profile/details?p-id=<?= $play['player_id'] ?>&id=<?= $play['id']?>&source=listing">
                                             <img src="<?= $profile ?>" alt="">
                                             <?= $play['player_id'] ?>
                                         </a>
                                         <span class="points home-list">
                                             <?= $play['sport_name'] ?>
                                         </span>
                                     </li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                         <?php if (count($players) >= 10) : ?>
                             <div class="">
                                 <a href="players/find" class="btn btn-sm btn-primary text-white">See All</a>
                             </div>
                         <?php endif; ?>
                     </div>
                 </div>
                 <!-- End Top player -->
                
             </div>
         </div>
     </div>
     <!-- Schedules and Stats End For Player -->

     <!-- Schedules and Stats For Club -->
     <div class="default-section paddings">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <h3 class="clear-title">Clubs</h3>
                 </div>

                 <!-- Top player -->
                 <div class="col-lg-4">
                     <div class="player-ranking">
                         <h3>New</h3>
                         <div class="info-player text-black">
                             <ul>
                                 <?php
                                    foreach ($club_details as $clubs) :

                                        if (isset($clubs['photo'])) {
                                            $profile = $clubs['photo'];
                                        } else {
                                            $profile = 'img/bydefaultclub.png';
                                        }
                                    ?>
                                     <li>
                                         <span class="position">
                                             <?= $clubs['id'] ?>
                                         </span>
                                         <a href="clubs/profile/<?= $clubs['id'] ?>">
                                             <img src="<?= $profile ?>" alt="">
                                             <?= $clubs['club_id'] ?>
                                         </a>
                                         <span class="points home-list text-green">
                                         <?= $clubs['sport_name'] ?>
                                         </span>
                                     </li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                         <?php if (count($club_details) >= 10) : ?>
                             <div class="">
                                 <a href="clubs/find" class="btn btn-sm btn-primary text-white">See All</a>
                             </div>
                         <?php endif; ?>
                     </div>
                 </div>
                 <!-- End Top player -->
                 <!-- Top player -->
                 <div class="col-lg-4">
                     <div class="player-ranking">
                         <h3>Most Searched</h3>
                         <div class="info-player">
                             <ul>
                                 <?php
                                    foreach ($club_details as $clubs) :

                                        if (isset($clubs['photo'])) {
                                            $profile = $clubs['photo'];
                                        } else {
                                            $profile = 'img/bydefaultclub.png';
                                        }
                                    ?>
                                     <li>
                                         <span class="position">
                                             <?= $clubs['id'] ?>
                                         </span>
                                         <a href="clubs/profile/<?= $clubs['id'] ?>">
                                             <img src="<?= $profile ?>" alt="">
                                             <?= $clubs['club_id'] ?>
                                         </a>
                                         <span class="points home-list text-green">
                                         <?= $clubs['sport_name'] ?>
                                         </span>
                                     </li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                         <?php if (count($club_details) >= 10) : ?>
                             <div class="">
                                 <a href="clubs/find" class="btn btn-sm btn-primary text-white">See All</a>
                             </div>
                         <?php endif; ?>
                     </div>
                 </div>
                 <!-- End Top player -->
                 <!-- Top player -->
                 <div class="col-lg-4">
                     <div class="player-ranking">
                         <h3>Top</h3>
                         <div class="info-player">
                             <ul>
                                 <?php
                                    foreach ($club_details as $clubs) :

                                        if (isset($clubs['photo'])) {
                                            $profile = $clubs['photo'];
                                        } else {
                                            $profile = 'img/bydefaultclub.png';
                                        }
                                    ?>
                                     <li>
                                         <span class="position">
                                             <?= $clubs['id'] ?>
                                         </span>
                                         <a href="clubs/profile/<?= $clubs['id'] ?>">
                                             <img src="<?= $profile ?>" alt="">
                                             <?= $clubs['club_id'] ?>
                                         </a>
                                         <span class="points home-list text-green">
                                         <?= $clubs['sport_name'] ?>
                                         </span>
                                     </li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                         <?php if (count($club_details) >= 10) : ?>
                             <div class="">
                                 <a href="clubs/find" class="btn btn-sm btn-primary text-white">See All</a>
                             </div>
                         <?php endif; ?>
                     </div>
                 </div>
                 <!-- End Top player -->
             </div>
         </div>
     </div>
     <!-- Schedules and Stats End For Club -->

 </section>
 <!-- End Section Area -  Content Central -->