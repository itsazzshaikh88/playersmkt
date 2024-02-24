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
     .post {
         width: 100%;
         height: 336px !important;
         border: 0;
     }

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
                                     <p><?= $this->lang->line('weight') ?> <span><?= isset($Personal_info['weight']) ? $Personal_info['weight'] : '' ?></span></p>
                                 </li>
                                 <li>
                                     <p><?= $this->lang->line('height') ?> <span><?= isset($Personal_info['height']) ? $Personal_info['height'] : '' ?></span></p>
                                 </li>
                                 <li>
                                     <p><?= $this->lang->line('gender') ?> <span><?= isset($Personal_info['gender']) ? $Personal_info['gender'] : '' ?></span></p>
                                 </li>
                             </ul>

                         </div>
                     </div>

                     <!-- Personal Info -->
                     <div class="panel-box">
                         <div class="titles no-margin">
                             <h4><i class="fa fa-link"></i><?= $this->lang->line('links') ?></h4>
                         </div>
                         <ul class="list-panel" id="myTab">
                         <li>
                                 <p><a href="players/profile/details?p-id=<?= $Player_details['player_id'] ?>&id=<?= $Player_details['id']?>&source=listing"><?= $this->lang->line('profile') ?> </a></p>
                             </li>
                             <li>
                                 <p><a href="players/profile/posts?p-id=<?= $Player_details['player_id'] ?>&id=<?= $Player_details['id']?>&source=listing"><?= $this->lang->line('post') ?> </a></p>
                             </li>
                             <li>
                                 <p><a href="players/profile//stats?p-id=<?= $Player_details['player_id'] ?>&id=<?= $Player_details['id']?>&source=listing"><?= $this->lang->line('status') ?> </a></p>
                             </li>
                         </ul>
                     </div>
                     <!-- End Personal Info -->

                 </div>
                 <!-- end Side info single team-->

                 <div class="col-lg-8 col-xl-9">
                     <!-- Nav Tabs -->
                     <ul class="nav nav-tabs">
                         <li class="active"><a><?= $this->lang->line('posts') ?> </a></li>
                     </ul>
                     <!-- End Nav Tabs -->

                     <!-- Content Tabs -->
                     <div class="tab-content">

                         <!--Items Club video -->
                         <div class="row no-line-height">

                             <div class="col-md-12">
                                 <h3 class="clear-title"><?= $this->lang->line('posts') ?></h3>
                             </div>

                         </div>
                         <!--End Items Club video -->

                         <!--Items Club video -->
                         <div class="row no-line-height">
                             <div class="col-lg-2 col-xl-2">
                             </div>

                             <div class="col-lg-8 col-xl-8">
                                 <div class="panel-box">
                                     <div class="titles no-margin">
                                         <h4><a href="#">Eliminatory to the world.</a></h4>
                                     </div>
                                     <iframe class="video post" src="https://www.youtube.com/embed/Ln8rXkeeyP0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                 </div>
                             </div>
                             <div class="col-lg-2 col-xl-2">
                             </div>
                         </div>
                         <!--End Items Club video -->

                         <!--Items Club video -->
                         <div class="row no-line-height">
                             <div class="col-lg-2 col-xl-2">
                             </div>

                             <div class="col-lg-8 col-xl-8">
                                 <div class="panel-box">
                                     <div class="titles no-margin">
                                         <h4><a href="#">Colombia classification</a></h4>
                                     </div>
                                     <iframe class="video post" src="https://www.youtube.com/embed/Z5cackyUfgk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                 </div>
                             </div>
                             <div class="col-lg-2 col-xl-2">
                             </div>
                         </div>
                         <!--End Items Club video -->

                         <!--Items Club video -->
                         <div class="row no-line-height">
                             <div class="col-lg-2 col-xl-2">
                             </div>

                             <div class="col-lg-8 col-xl-8">
                                 <div class="panel-box">
                                     <div class="titles no-margin">
                                         <h4><a href="#">The Day that COLOMBIA Classifies WORLDCUP 16 YEARS AFTER !!!</a></h4>
                                     </div>
                                     <iframe class="video post" src="https://www.youtube.com/embed/hW3hnUoUS0k" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                 </div>
                             </div>
                             <div class="col-lg-2 col-xl-2">
                             </div>
                         </div>
                         <!--End Items Club video -->


                     </div>
                     <!-- Content Tabs -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Single Team Tabs -->


 </section>
 <!-- End Section Area -  Content Central -->