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
                <h1>Sports Categories</h1>
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
    <!-- <div class="portfolioFilter">
        <div class="container">
            <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5>
            <a href="#" data-filter="*" class="current">All</a>
            <a href="#" data-filter=".soccer">Soccer</a>
            <a href="#" data-filter=".moto">Moto Cross</a>
            <a href="#" data-filter=".bmx">Bmx</a>
        </div>
    </div> -->
    <!-- End Nav Filters -->


    <!-- White Section -->
    <div class="white-section paddings">
        <div class="container">
            <div class="row portfolioContainer margin-top">

                <!-- Item Gallery -->
                <?php foreach ($sports as  $sport) :
                    $sport_link = "sports/categories/" . strtolower(str_replace(" ", "", $sport['sport_name'])) . "?sport-id=" . $sport['sr_no'];
                    // print_r($sports);
                    if (isset($sports['cover_image'])) {
                        $profile = $sports['cover_image'];
                    } else {
                        $profile = 'images/default-sports.webp';
                    }

                ?>
                    <div class="col-md-4 col-xl-3">
                        <a href="<?= $sport_link ?>">
                            <div class="item-boxed-img small" style="background: url(<?= $profile ?>);">
                                <h4 class="text-warning"><?= $sport['sport_name'] ?> </h4> <br />
                                <p class="badge bg-secondary" style="font-size: 12px;"><?= $sport['type'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- Item Gallery -->

            </div>
        </div>
    </div>
    <!-- End White Section -->




</section>
<!-- End Section Area -  Content Central -->