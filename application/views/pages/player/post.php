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
                             <img src="img/players/7.jpg" alt="location-team">
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
                                 <p><a href="players/profile/<?= $Player_details['id'] ?>/stats">STATS</a></p>
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
                         
<!-- Tab Theree - career -->
<div class="tab-pane" id="career">
                             <div class="col-lg-12">
                                 <table class="table-striped table-responsive table-hover career">
                                     <thead>
                                         <tr>
                                             <th>Season</th>
                                             <th>Club</th>
                                             <th>Apps(Subs)</th>
                                             <th>Goals</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/colombia.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/japan.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/bra.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/arg.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/uru.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/nga.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/mex.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/rusia.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/aus.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                         <tr>
                                             <td>2017/2018</td>
                                             <td><img src="img/clubs-logos/arabia.png" alt="icon1">Japan</td>
                                             <td>22(0)</td>
                                             <td>50</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <!-- Tab Theree - career -->
                     
                         
                     </div>
                     <!-- Content Tabs -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Single Team Tabs -->


 </section>
 <!-- End Section Area -  Content Central -->