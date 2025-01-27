<?php $page = 'home'; ?>
<?php
$lunchMenu = [
    "Quesadillas" => [
        [
            "name" => "Cheese",
            "price" => "12.29",
            "description" => "Grilled tortilla with a blend of cheese and jack cheese dip, served with guacamole and sour cream."
        ],
        [
            "name" => "Chicken",
            "price" => "15.29",
            "description" => "Grilled tortilla with chicken and cheese dip, served with guacamole and sour cream."
        ],
        [
            "name" => "Shrimp",
            "price" => "16.29",
            "description" => "Grilled tortilla with shrimp and cheese dip, served with guacamole and sour cream."
        ],
        [
            "name" => "Roast Beef",
            "price" => "16.29",
            "description" => "Grilled tortilla with roast beef and cheese dip, served with guacamole and sour cream."
        ],
        [
            "name" => "Brisket",
            "price" => "16.29",
            "description" => "Grilled tortilla with brisket and cheese dip, served with guacamole and sour cream."
        ],
    ],
    "Local Favorite" => [
        [
            "name" => "Green Chile Chop",
            "price" => "13.29",
            "description" => "Pork chop topped with green chile, cheese, and served with rice or beans and choice of corn or flour tortillas."
        ],
        [
            "name" => "Tamale Plate",
            "price" => "12.29",
            "description" => "Two pork tamales served with rice, beans, and red or green chile."
        ],
    ],
    "Enchilada Plates" => [
        [
            "name" => "Cheese",
            "price" => "13.29",
            "description" => "Topped with red or green chile and cheese."
        ],
        [
            "name" => "Chicken or Ground Beef",
            "price" => "14.29",
            "description" => "Served with rice and beans, topped with chile and cheese."
        ],
    ],
    "Fajitas" => [
        [
            "name" => "Beef or Chicken",
            "price" => "15.29",
            "description" => "Served sizzling with rice, beans, and vegetables."
        ],
    ],
    "Burritos or Stuffed Soppapilla" => [
        [
            "name" => "Bean",
            "price" => "12.29",
            "description" => "Stuffed with refried beans and cheese."
        ],
        [
            "name" => "Beef, Chicken, or Pork Carnitas",
            "price" => "13.29",
            "description" => "Filled with beef, chicken, or pork carnitas."
        ],
    ],
    "Taco Plate" => [
        [
            "name" => "Beef, Chicken, or Pork Carnitas",
            "price" => "11.29",
            "description" => "Three tacos served with beans, rice, and fresh salsa."
        ],
        [
            "name" => "Shrimp",
            "price" => "14.29",
            "description" => "Three shrimp tacos served with beans, rice, and fresh salsa."
        ],
    ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> Home | Tortilla Flats Restaurant</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>

        <div class="banner-wrapper ">
            <div class="banner_swiper swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="banner-slide" style="background-image: url('images/banner/home/banner-1.jpg');">
                            <div class="slide-content">
                                <h1 class="text-center text-white large_heading fontHeading">
                                    Offering The Best Tasting <br /> Experience!
                                </h1>
                                <p class="mt-4 text-center text-white">
                                    Fresh Ingredients, Tasty Meals, and Creative Chefs
                                </p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="#" class="btn_1 d-block">View Menu</a>
                                    <a href="#" class="btn_2 d-block ms-3">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="banner-slide" style="background-image: url('images/banner/home/banner-2.jpg');">
                            <div class="slide-content">
                                <h2 class="text-center text-white large_heading fontHeading">
                                    Creative Chefs, <br> Fresh &amp; Tasty Meals
                                </h2>
                                <p class="mt-4 text-center text-white">
                                    Handpicked Recipes, Deliciously Crafted for You
                                </p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="#" class="btn_1 d-block">View Menu</a>
                                    <a href="#" class="btn_2 d-block ms-3">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="banner-slide" style="background-image: url('images/banner/home/banner-3.jpg');">
                            <div class="slide-content">
                                <h3 class="text-center text-white large_heading fontHeading">
                                    Celebrate with Us <br /> in Style!
                                </h3>
                                <p class="mt-4 text-center text-white">
                                    Perfect Ambience for Unforgettable Moments
                                </p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="#" class="btn_1 d-block">View Menu</a>
                                    <a href="#" class="btn_2 d-block ms-3">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

        <section>
            <div class="containerFull overflow-hidden">
                <h4 class="text_secondary text-center">
                    Welcome To Tortilla Flats Restaurant
                </h4>
                <h5 class="fontHeading heading fontWeight600 text-center mt-4 h_underline">

                    Delicious Food, Friendly Staff,<br /> Cozy Atmosphere & Positive Emotions!
                </h5>

                <div class="row align-items-center  mt-5 pt-5">
                    <div class="col-sm-12 col-md-6 col-lg-4 pe-5">
                        <div class="about_content  mt-30 aos-init aos-animate" data-aos="fade-right">
                            <div class="">

                                <h5 class="sub_heading fontHeading h_underline  text-center">Where History Meets Flavor:
                                    Tortilla
                                    Flats Experience</h5>

                                <p class=" mt-5 text-center">Indulge in the best New Mexican food at Tortilla Flats,
                                    your go-to destination for the finest local flavors in Santa Fe. Nestled just over
                                    four miles southwest of downtown Santa Fe on Cerrillos Road and next to Meow Wolf
                                    Santa Fe. Serving high-quality, authentic Mexican and New Mexican dishes, whether
                                    you’re stopping for a quick breakfast or lunch, or want a relaxing dinner after a
                                    hard day’s work, we have tasty food for the whole family. </p>
                            </div>
                            <div class="d-flex  justify-content-center mt-4">
                                <a href="#" class="btn_1 d-block">View Menu</a>
                                <a href="#" class="btn_2 d-block ms-3">Book a Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-4 ">
                        <div class="img_box mt-5 aos-init aos-animate" data-aos="fade-left" data-aos-delay=".5s">
                            <img src="images/about (1).jpg" alt="banner" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-4 m-0 p-0">
                        <div class="img_box aos-init aos-animate" data-aos="fade-left">
                            <img src="images/about (2).jpg" alt="banner" class="img-fluid">
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <section class="cta_1">
            <div class="containerFull">
                <p class="fontWeight600 text-white text-center">
                    We Create Delicious Memories
                </p>
                <h4 class="large_heading fontHeading fontWeight600 text-center mt-4 text-white">
                    Pull Up A Chair. Take A <br />Taste & Come Join Us
                </h4>
                <p class="discription mt-4 text-white text-center">
                    We have awesome recipes and the most talented chefs in town!
                </p>

                <div class="text-center mt-5">
                    <a href="" class="btn_1">
                        Book a Table
                    </a>
                </div>
            </div>

        </section>

        <section>
            <div class="containerFull">

                <h5 class="text-center text_secondary">
                    What’s For Lunch?
                </h5>
                <h4 class="fontHeading heading fontWeight600 text-center mt-4 h_underline">
                    Our Daily Specials
                </h4>
                <?php
                $menuItems = [
                    [
                        "name" => "Grilled Fillet",
                        "description" => "Pork fillet, ginger, garlic, honey, pepper & canola oil.",
                        "price" => "$26.95",
                        "image" => "menu-img-grilled-fillet.jpg",
                    ],
                    [
                        "name" => "Smoked Paprika Hummus",
                        "description" => "Red peppers, roasted garlic, lemon slices, olives & mint.",
                        "price" => "$13.95",
                        "image" => "menu-img-smoked-paprika-hummus.jpg",
                    ],
                    [
                        "name" => "Roasted Steak Roulade",
                        "description" => "Mint parsley with apple cider salt & spices.",
                        "price" => "$29.95",
                        "image" => "menu-img-roasted-steak-roulade.jpg",
                    ],
                    [
                        "name" => "Alder Grilled Seafood Paella",
                        "description" => "Monkfish, onion, paella rice, smoked paprika.",
                        "price" => "$40.95",
                        "image" => "menu-img-alder-grilled-seafood-paella.jpg",
                    ],
                    [
                        "name" => "Sea Trout",
                        "description" => "Roast trout, English asparagus, watercress & royals.",
                        "price" => "$44.95",
                        "image" => "menu-img-sea-trout.jpg",
                    ],
                    [
                        "name" => "Chicken Breast",
                        "description" => "Paupiette of chicken, cheese & beans.",
                        "price" => "$33.95",
                        "image" => "menu-img-chicken-breast.jpg",
                    ],
                ];
                ?>

                <div class="row mt-5 pt-5">
                    <?php foreach ($menuItems as $item): ?>
                        <div class="col-lg-6 mb-4">
                            <div class="items_daily_lunch ">
                                <div class="img_box">
                                    <img src="https://7oroof.com/demos/elroyale/assets/images/menu/1.jpg"
                                        alt="<?php echo $item['name']; ?>">
                                </div>
                                <div class="content">
                                    <h5 class="title fontHeading ">
                                        <?php echo $item['name']; ?>
                                    </h5>
                                    <p class="mt-2">
                                        <?php echo $item['description']; ?>
                                    </p>
                                    <p class="fontWeight600 text_primary mt-2">
                                        <?php echo $item['price']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>


            </div>
        </section>

        <section class="cta_2">
            <div class="containerFull">
                <div class="inner">

                    <p class="text-center title fontWeight600 text-white">
                        Made With Love
                    </p>
                    <h4 class="fontHeading large_heading fontWeight600 text-white text-center mt-4">

                        Our Delicious Food
                    </h4>
                    <p class="text-center text-white mt-4">
                        We believe in creating memories that last. Our goal is to provide a place where you <br />can
                        enjoy our delicious food with friends, family, and loved ones.
                    </p>
                    <div class="text-center mt-5">
                        <a href="" class="btn_1">
                            Book a Table
                        </a>
                    </div>
                </div>


            </div>
        </section>

        <section>
            <div class="containerFull">
                <h5 class="text_secondary text-center fontWeight600">
                    Taste The Best
                </h5>
                <h4 class="fontHeading heading fontWeight600  text-center h_underline  mt-4">
                    Discover Our Menu
                </h4>


                <div class="mt-5 pt-5">
                    <ul class="nav nav-tabs" id="menuTabs" role="tablist">
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="lunch-tab" data-bs-toggle="tab" data-bs-target="#lunch"
                                type="button" role="tab" aria-controls="lunch" aria-selected="false">Lunch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="dinner-tab" data-bs-toggle="tab" data-bs-target="#dinner"
                                type="button" role="tab" aria-controls="dinner" aria-selected="false">Dinner</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="dessert-tab" data-bs-toggle="tab" data-bs-target="#dessert"
                                type="button" role="tab" aria-controls="dessert" aria-selected="false">Dessert</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="drinks-tab" data-bs-toggle="tab" data-bs-target="#drinks"
                                type="button" role="tab" aria-controls="drinks" aria-selected="false">Drinks</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="menuTabContent">
                        <!-- All Tab -->
                        <!-- <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <p>All menu items will be displayed here.</p>
                        </div> -->
                        <!-- Lunch Tab -->
                        <div class="tab-pane fade show active" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                            <h1 class="mb-4 mt-4 h_underline fontHeading">Lunch Menu</h1>
                            <div class="row pt-5">
                                <?php foreach ($lunchMenu as $category => $items): ?>
                                    <div class="col-12 mb-4">
                                        <h2 class="text_primary fontHeading "><?php echo $category; ?></h2>
                                        <div class="row mt-4">
                                            <?php foreach ($items as $item): ?>
                                                <div class="col-md-6 mb-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title fontWeight600 fontHeading "><?php echo $item['name']; ?></h5>
                                                            <p class="card-text"><?php echo $item['description']; ?></p>
                                                            <p class="card-text  text-success mt-3">
                                                                <strong>$<?php echo $item['price']; ?></strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Dinner Tab -->
                        <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                            <p>Dinner menu items will be displayed here.</p>
                        </div>
                        <!-- Dessert Tab -->
                        <div class="tab-pane fade" id="dessert" role="tabpanel" aria-labelledby="dessert-tab">
                            <p>Dessert menu items will be displayed here.</p>
                        </div>
                        <!-- Drinks Tab -->
                        <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                            <p>Drinks menu items will be displayed here.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>



    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        const swiper = new Swiper('.banner_swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 1000,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>