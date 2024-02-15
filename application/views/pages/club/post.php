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
    <div class="single-team-tabs">
        <div class="container">
            <div class="row">
                <!-- Left Content - Tabs and Carousel -->
                <div class="col-xl-12 col-md-12">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a>Post</a></li>

                    </ul>




                    <!-- End Nav Tabs -->
                </div>

                <div class="col-lg-8 col-xl-9 padding-top-mini">
                    <!-- Content Tabs -->
                    <div class="tab-content">

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

               <!-- Side info single team-->
               <div class="col-lg-4 col-xl-3 padding-top-mini">
                    <!-- Diary -->

                    <!-- Attack -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4><i class="fa fa-calendar"></i>Info</h4>
                        </div>
                        <ul class="list-panel">
                            <li>
                                <p>Country <span><?= $club_details['country'] ?></span></p>
                            </li>
                            <li>
                                <p>City <span><?= $club_details['city'] ?></span></p>
                            </li>

                        </ul>
                    </div>
                    <!-- End Attack -->

                    <!-- Personal Info -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4><i class="fa fa-link"></i>Links</h4>
                        </div>
                        <ul class="list-panel" id="myTab">
                            <li>
                                <p><a href="clubs/profile/<?= $club_details['id'] ?>/details">Profile</a></p>
                            </li>
                            <li>
                                <p><a href="clubs/profile/<?= $club_details['id'] ?>/posts">Post</a></p>
                            </li>
                            <li>
                                <p><a href="clubs/profile/<?= $club_details['id'] ?>/stats">Stats</a></p>
                            </li>

                        </ul>
                    </div>
                    <!-- End Personal Info -->


                    <!-- End Diary -->

                    <!-- Video presentation -->
                    <!-- <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Presentation</h4>
                        </div>
                        
                        <div class="row">
                            <iframe src="https://www.youtube.com/embed/AfOlAUd7u4o" class="video"></iframe>
                            <div class="info-panel">
                                <h4>Rio de Janeiro</h4>
                                <p>Lorem ipsum dolor sit amet, sit amet, consectetur adipisicing elit, elit, incididunt ut labore et dolore magna aliqua sit amet, consectetur adipisicing elit,</p>
                            </div>
                        </div>
                        
                    </div> -->
                    <!-- End Video presentation-->

                </div>
                <!-- end Side info single team-->

            </div>
        </div>
    </div>
    <!-- Single Team Tabs -->


</section>
<!-- End Section Area -  Content Central -->