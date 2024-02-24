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

     .aling {
         text-align: center !important;
         margin: 0 0 15px 0 !important;

     }

     .item-player {
         margin-bottom: 15px !important;
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
                                 <!-- <i class="bi bi-heart"></i> -->
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

                     <!-- buttons -->
                     <div class="aling">
                         <a class="btn btn-sm btn-primary" href="#!" role="button">
                         <i class="bi bi-person-add"></i></a>
                         <a class="btn btn-sm btn-primary" href="#!" role="button">
                         <i class="bi bi-file-earmark-plus-fill"></i></a>
                         <a class="btn btn-sm btn-primary" href="#!" role="button">
                         <i class="bi bi-person-add"></i>
                        </a>
                         <!-- <a href="#" class="btn btn-primary btn-sm">Followers</a>
                         <a href="#" class="btn btn-primary btn-sm">Wishlist</a>
                         <a href="#" class="btn btn-primary btn-sm">Followers</a> -->

                     </div>
                     <!-- End buttons -->

                     <!-- Links -->
                     <div class="panel-box">
                         <div class="titles no-margin">
                             <h4><i class="fa fa-link"></i><?= $this->lang->line('links') ?></h4>
                         </div>
                         <ul class="list-panel" id="myTab">
                             <li>
                                 <p><a href="players/profile/details?p-id=<?= $Player_details['player_id'] ?>&id=<?= $Player_details['id'] ?>&source=listing"><?= $this->lang->line('profile') ?> </a></p>
                             </li>
                             <li>
                                 <p><a href="players/profile/posts?p-id=<?= $Player_details['player_id'] ?>&id=<?= $Player_details['id'] ?>&source=listing"><?= $this->lang->line('post') ?> </a></p>
                             </li>
                             <li>
                                 <p><a href="players/profile//stats?p-id=<?= $Player_details['player_id'] ?>&id=<?= $Player_details['id'] ?>&source=listing"><?= $this->lang->line('status') ?> </a></p>
                             </li>
                         </ul>
                     </div>
                     <!-- End Links -->

                 </div>
                 <!-- end Side info single team-->

                 <div class="col-lg-8 col-xl-9">
                     <!-- Nav Tabs -->
                     <ul class="nav nav-tabs">
                         <li class="active"><a><?= $this->lang->line('profile') ?></a></li>
                     </ul>
                     <!-- End Nav Tabs -->

                     <!-- Content Tabs -->
                     <div class="tab-content">

                         <!-- Tab One - overview -->
                         <div class="tab-pane active" id="overview">

                             <div class="panel-box padding-b">
                                 <div class="titles">
                                     <h4><?= $this->lang->line('players_bio') ?> </h4>
                                 </div>
                                 <div class="row">
                                     <div class="col-lg-12 col-xl-4">
                                         <img src="img/clubs-teams/single-team.jpg" alt="">
                                     </div>

                                     <div class="col-lg-12 col-xl-8">
                                         <p>The Colombia national football team (Spanish: Selección de fútbol de
                                             Colombia) represents Colombia in international football competitions and is
                                             overseen by the Colombian Football Federation. It is a member of the
                                             CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3]
                                             The team are nicknamed Los Cafeteros due to the coffee production in their
                                             country.</p>

                                         <p>Since the mid-1980s, the national team has been a symbol fighting the
                                             country's negative reputation. This has made the sport popular and made the
                                             national team a sign of nationalism, pride and passion for many Colombians
                                             worldwide.</p>
                                     </div>
                                 </div>
                             </div>
                             <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
                             <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

                             <!-- Tab Theree - stats -->
                             <div class="tab-pane" id="stats">

                                 <div class="row">

                                     <div class="col-lg-6 col-xl-6">
                                         <div class="panel-box">
                                             <div class="titles no-margin">
                                                 <h4><i class="fa fa-user"></i><?= $this->lang->line('personal_info') ?> </h4>
                                             </div>
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
                                                 <li>
                                                     <p><?= $this->lang->line('nationality') ?> <span><?= isset($Personal_info['nationality']) ? $Personal_info['nationality'] : '' ?></span></p>
                                                 </li>

                                                 <li>
                                                     <p><?= $this->lang->line('dob') ?> <span><?= isset($Personal_info['date_of_birth']) ? $Personal_info['date_of_birth'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('languages') ?> <span><?= isset($Personal_info['languages']) ? $Personal_info['languages'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('highest_edu') ?> <span><?= isset($Personal_info['highest_education']) ? $Personal_info['highest_education'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('certification') ?> <span><?= isset($Personal_info['certifications']) ? $Personal_info['certifications'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('hobbies') ?> <span><?= isset($Personal_info['hobbies']) ? $Personal_info['hobbies'] : '' ?></span></p>
                                                 </li>
                                                 <!-- <li>
                                                     <p>Skills <span><?= isset($Personal_info['skills']) ? $Personal_info['skills'] : '' ?></span></p>
                                                 </li> -->
                                                 <li>
                                                     <p><?= $this->lang->line('eye_color') ?> <span><?= isset($Personal_info['eye_color']) ? $Personal_info['eye_color'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('hair_color') ?> <span><?= isset($Personal_info['hair_color']) ? $Personal_info['hair_color'] : '' ?></span></p>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>

                                     <div class="col-lg-6 col-xl-6">
                                         <div class="panel-box">
                                             <div class="titles no-margin">
                                                 <h4><i class="fa fa-hospital"></i><?= $this->lang->line('medical_info') ?> </h4>
                                             </div>
                                             <ul class="list-panel">
                                                 <li>
                                                     <p><?= $this->lang->line('medical') ?> <span><?= isset($Personal_info['medical_condition']) ? $Personal_info['medical_condition'] : '' ?></span>
                                                     </p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('crrunt_medi') ?><span><?= isset($Personal_info['current_medications']) ? $Personal_info['current_medications'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('blood') ?> <span><?= isset($Personal_info['blood_pressure']) ? $Personal_info['blood_pressure'] : '' ?></span></p>
                                                 </li>
                                                 <!-- <li>
                                                     <p>Immunization <span><?= isset($Personal_info['immunization_history']) ? $Personal_info['immunization_history'] : '' ?></span></p>
                                                 </li> -->
                                                 <li>
                                                     <p><?= $this->lang->line('cholestrol') ?> <span><?= isset($Personal_info['cholestrol_level']) ? $Personal_info['cholestrol_level'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('allergies') ?> <span><?= isset($Personal_info['allergies']) ? $Personal_info['allergies'] : '' ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p><?= $this->lang->line('body_mass') ?> <span><?= isset($Personal_info['body_mass_index']) ? $Personal_info['body_mass_index'] : '' ?></span></p>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>

                                 </div>


                             </div>
                             <!-- End Tab Theree - stats -->

                             <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
                             <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->


                         </div>
                         <!-- Tab One - overview -->


                     </div>
                     <!-- Content Tabs -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Single Team Tabs -->


 </section>
 <!-- End Section Area -  Content Central -->