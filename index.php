<?php
include 'libs/load.php'
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="./assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />
    <link rel="stylesheet" href="./assets/libs/simplebar/dist/simplebar.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">


    <title>Free Freshcart Tailwind Ecommerce HTML Template</title>
</head>

<body>
    <header>
        <!-- navbar -->
        <?php load_template('nav') ?>
        <!-- navbar End-->
    </header>


    <!-- Sign-Up Pop-Up -->
    <?php load_template('signup_popup') ?>
    <!-- Sign-Up Pop-Up End -->

    <!-- Shop Cart -->
    <?php load_template('shop_cart') ?>
    <!-- Shop Cart End -->

    <!-- Modal -->
    <?php load_template('shop_cart_product_shown') ?>
    <main>
        <!-- Hero -->
        <?php load_template('hero') ?>
        <!-- Hero End -->

        <!-- Featured Categories-->
        <?php load_template('featured_categories') ?>
        <!--Featured Categories End -->

        <!-- Attrcat-->
        <?php load_template('attract') ?>
        <!--Attract End -->


        <!-- Popular Products-->
        <?php load_template('popular_products') ?>
        <!-- Popular Products End-->

        <!-- Daily Best Sells-->
        <?php load_template('daily_best_sells') ?>
        <!-- Daily Best Sells End-->

        <!-- Why We Choose Us-->
        <?php load_template('why_we_choose_us') ?>
        <!-- Why We Choose Us End-->

    </main>
    <!-- footer -->
    <?php load_template('footer') ?>
    <!-- footer End -->

    <!-- Product Zoom -->
    <?php load_template('product_zoom') ?>
    <!-- Product Zoom End -->

    <!-- Libs JS -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->

    <!-- build:js ./assets/js/theme.min.js -->
    <script src="./assets/js/main.js"></script>
    <!-- endbuild -->

    <script src="./assets/js/vendors/countdown.js"></script>

    <script src="./assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="./assets/js/vendors/tns-slider.js"></script>
    <script src="./assets/js/vendors/zoom.js"></script>
    <script src="./assets/js/vendors/language.js"></script>
    <!-- Swiper JS -->
    <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/vendors/swiper.js"></script>
    <script src="./assets/js/vendors/validation.js"></script>
</body>

</html>