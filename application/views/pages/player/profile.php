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

                         <!-- Tab One - overview -->
                         <div class="tab-pane active" id="overview">

                             <div class="panel-box padding-b">
                                 <div class="titles">
                                     <h4>Players Bio</h4>
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
                                                 <h4><i class="fa fa-user"></i>Personal Info</h4>
                                             </div>
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
                                                 <li>
                                                     <p>Nationality <span><?= isset($Personal_info['nationality']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Emergency Number
                                                         <span><?= isset($Personal_info['emergency_contact_number']) ?></span>
                                                     </p>
                                                 </li>
                                                 <li>
                                                     <p>Date of Birth <span><?= isset($Personal_info['date_of_birth']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Languages <span><?= isset($Personal_info['languages']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Highest Education <span><?= isset($Personal_info['highest_education']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Certification <span><?= isset($Personal_info['certifications']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Hobbies <span><?= isset($Personal_info['hobbies']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Skills <span><?= isset($Personal_info['skills']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Eye Color <span><?= isset($Personal_info['eye_color']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Hair Color <span><?= isset($Personal_info['hair_color']) ?></span></p>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>

                                     <div class="col-lg-6 col-xl-6">
                                         <div class="panel-box">
                                             <div class="titles no-margin">
                                                 <h4><i class="fa fa-calendar"></i>Medical Info</h4>
                                             </div>
                                             <ul class="list-panel">
                                                 <li>
                                                     <p>Medical Condiction <span><?= isset($Personal_info['medical_condition']) ?></span>
                                                     </p>
                                                 </li>
                                                 <li>
                                                     <p>Crrunt Medical <span><?= isset($Personal_info['current_medications']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Blood Pressure <span><?= isset($Personal_info['blood_pressure']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Immunization <span><?= isset($Personal_info['immunization_history']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Cholestrol Level <span><?= isset($Personal_info['cholestrol_level']) ?></span></p>
                                                 </li>
                                                 <li>
                                                     <p>Allergies <span></span><?= isset($Personal_info['allergies']) ?></p>
                                                 </li>
                                                 <li>
                                                     <p>Body Mass <span><?= isset($Personal_info['body_mass_index']) ?></span></p>
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