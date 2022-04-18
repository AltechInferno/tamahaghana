<?php
include 'controllers/DBconnection.php'; 
include 'controllers/generalController.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us || <?= general('title'); ?> </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <!-- /.main-header -->
            <?php include 'includes/header.php'; ?>
        <!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>About Us</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="service-one service-one__about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Organic Services</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <div class="client-carousel client-carousel__has-border-top client-carousel__about-page">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <?= partners(); ?>    
                    <!-- /.swiper-slide -->
                       
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <!-- /.about-three -->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <img src="assets/images/resources/about-3-2.jpg" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Get to know us</p>
                                <h3>We Grow, We Serve</h3>
                            </div><!-- /.block-title -->
                            <div class="about-three__summery">
                                <p>Founded in 2014 and formerly registered as limited liability company in 2018
                                    is into production and agregation of agricultural commodities notably Maize, soybeans 
                                cashew and shea nuts.</p>

                                <p>Tamaha Ghana objective is to improve the livlihoods of rural farmers through innovation farming technology
                                    and support schemes targeted at improving the per acre yields and creating premium markets for the poor folks. 
                                 </p>

                                 <p>We have experimented and expanded both in-grower and out-grower shcemes in the production of Maize and soybeans within
                                     our catchment areas. we employ cost conscious but balance bundle of inputs that increase yields and ensure smooth recovery 
                                     with a buy back arrangment from the registered farmers after harvest.
                                 </p>
                            </div><!-- /.about-three__summery -->
                            <div class="about-three__signs">
                                <img src="assets/images/resources/about-3-1.png" alt="">
                                <img src="assets/images/resources/sign-1-1.png" alt="">
                            </div><!-- /.about-three__signs -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->


        <section class="team-one">
            <img src="assets/images/icons/team-bg-1-1.png" alt="" class="team-one__bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-5">
                        <div class="team-one__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>meet the team</p>
                                <h3>Expert Farmers</h3>
                            </div><!-- /.block-title -->
                            <div class="team-one__summery">
                                <p>Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare sem
                                    lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p>
                            </div><!-- /.team-one__summery -->

                            <!-- If we need navigation buttons -->
                            <div class="team-one__nav">
                                <div class="swiper-button-prev" id="team-one__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-next" id="team-one__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                            </div><!-- /.team-one__nav -->

                        </div><!-- /.team-one__content -->
                    </div><!-- /.col-md-12 col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="team-one__carousel-wrap">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
            "nextEl": "#team-one__swiper-button-next",
            "prevEl": "#team-one__swiper-button-prev"
        },"breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            },
            "1200": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            }
        }}'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php 
                                $team_query = mysqli_query($connect, "SELECT * FROM team");
                                    while($team = mysqli_fetch_array($team_query)){
                                        echo '<div class="team-card">
                                        <div class="team-card__image">
                                            <img src="assets/images/team/'.$team['profile_pic'].'" alt="'.$team['name'].'">
                                            <div class="team-card__social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div><!-- /.team-card__social -->
                                        </div><!-- /.team-card__image -->
                                        <h3>'.$team['name'].'</h3>
                                        <p>'.$team['position'].'r</p>
                                    </div>';
                                    }
                            ?>
                        </div><!-- /.swiper-slide -->
                       
                    </div><!-- /.swiper-wrapper -->

                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.team-one__carousel-wrap -->
        </section><!-- /.team-one -->

       <!-- <section class="testimonials-one testimonials-one__about">
            <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
            <div class="container">
                <h2 class="testimonials-one__title">Testimonials</h2>
                <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> /.testimonials-one__icons 
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                                reprehenderit in esse nulla pariatur.</p>
                        </div> /.swiper-slide 
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> /.testimonials-one__icons
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                                reprehenderit in esse nulla pariatur.</p>
                        </div> /.swiper-slide
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>/.testimonials-one__icons
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                                reprehenderit in esse nulla pariatur.</p>
                        </div>/.swiper-slide 
                    </div> /.swiper-wrapper 
                </div> /#testimonials-one__carousel

                <div id="testimonials-one__thumb" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-1.jpg" alt="">
                            </div>/.testimonials-one__image 
                        </div> /.swiper-slide
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-2.jpg" alt="">
                            </div>/.testimonials-one__image
                        </div> /.swiper-slide
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-3.jpg" alt="">
                            </div>/.testimonials-one__image 
                        </div> /.swiper-slide
                    </div>/.swiper-wrapper
                </div> /#testimonials-one__thumb.swiper-container 

                <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Jessica Brown</h4>
                                <span>Customer</span>
                            </div>/.testimonials-one__meta 
                        </div> /.swiper-slide
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Caleb Hoffman</h4>
                                <span>Customer</span>
                            </div> /.testimonials-one__meta
                        </div> /.swiper-slide 
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Bradley Kim</h4>
                                <span>Customer</span>
                            </div>/.testimonials-one__meta
                        </div> /.swiper-slide
                    </div> /.swiper-wrapper
                </div>/#testimonials-one__meta.swiper-container
                <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
            </div> /.container 
        </section>/.testimonials-one -->

        

        <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
            <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <!-- /.call-to-action__bg -->
            <div class="container">
                <div class="call-to-action__content">
                    <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                    <h3>We’re popular leader in agriculture
                        market globally</h3>
                </div><!-- /.call-to-action__content -->
                <div class="call-to-action__button">
                    <a href="services.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__button -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->
        
        <!-- /.bottom-footer -->
            <?php include 'includes/footer.php'; ?>
        <!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


     <!-- /.mobile-nav__wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:needhelp@agrikon.com">needhelp@agrikon.com</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

   

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>
</body>

</html>