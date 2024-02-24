<!-- Section Title -->
<style>
    .paddings {
        padding: 30px 0 !important;
    }
</style>
<div class="section-title" style="background:url(img/slide/1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Sports Gallery</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <!-- <li><a href="index.html">Home</a></li>
                        <li>Inner Page</li> -->
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
    <div class="portfolioFilter">
        <div class="container">
            <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5>
            <a href="#" data-filter="*" class="current">All</a>
            <a href="#" data-filter=".soccer">Soccer</a>
            <a href="#" data-filter=".moto">Moto Cross</a>
            <a href="#" data-filter=".bmx">Bmx</a>
        </div>
    </div>
    <!-- End Nav Filters -->


    <!-- White Section -->
    <div class="white-section paddings">
        <div class="container">
            <div class="row portfolioContainer margin-top">

                <!-- Item Gallery -->
                <?php foreach ($sports as  $item) :
                    
                    // print_r($sports);
                    if (isset($sports['cover_image'])) {
                        $profile = $sports['cover_image'];
                    } else {
                        $profile = 'images/default-listing.png';
                    }

                ?>

                    <div class="col-sm-6 col-lg-4 col-xl-3 soccer">
                        <div class="item-gallery">
                            <div class="hover small">
                                <img src="<?= $profile ?>" alt="Club Team" />
                                <a class="swipebox-ligbox" href="sports/sport_category/<?=$item['sr_no']?>">
                                    <div class="overlay"><i class="fa fa-plus"></i></div>
                                </a>
                            </div>
                            <div class="info-gallery">
                                <p><?= $item['sport_name'] ?></p>
                                <i class="fa fa-picture-o"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Item Gallery -->

            </div>
        </div>
    </div>
    <!-- End White Section -->




</section>
<!-- End Section Area -  Content Central -->