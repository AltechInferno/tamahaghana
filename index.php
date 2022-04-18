<?php 
include 'controllers/DBconnection.php'; 
include 'controllers/generalController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= general('title'); ?> || Home</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="<?= general('title'); ?>">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" >
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

        <!-- /.main-header-starts -->
            <?php include 'includes/header.php'; ?>
        
        <!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
            
                    <div class="swiper-wrapper">
                    <?php 
                $slider_query = mysqli_query($connect, "SELECT * FROM sliders") or die(mysqli_error($connect)); 
                while($slider = mysqli_fetch_array($slider_query)){
                    echo '
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/'.$slider['background_image'].');">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to Tamaha Ghana</span>
                                    <h2>'.$slider['title'].'</h2>
                                    <p>'.$slider['description'].'</p>
                                    <a href="#" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>';
                    }
                ?>
                    <!-- /.swiper-slide -->
                   
                </div> 
                
                <!-- /.swiper-wrapper -->


                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="service-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
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

        <section class="about-one">
            <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__images">
                            <img src="assets/images/resources/about-1-1.jpg" alt="">
                            <img src="assets/images/resources/about-1-2.jpg" alt="">
                            <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                                <span>Trusted by</span>
                                <h4>8900</h4>
                            </div><!-- /.about-one__count -->
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-7">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Tamaha Ghana</p>
                                <h3>Improving Yield. Improving Life.</h3>
                            </div><!-- /.block-title -->
                            <div class="about-one__tagline">
                                <p>Tamaha Ghana operations covers northern and north east regions. Currently operates 1200 acres
                                    commercial farm in the mion district of northern region. 
                                </p>
                            </div><!-- /.about-one__tagline -->
                            <div class="about-one__summery">
                                <p>We have experimented and expanded both in-grower and out-grower schemes in the production 
                                   of Maize and soybeans within our catchment areas. We employ cost conscious but balance bundle of 
                                   inputs that increase yields and ensure smooth recovery with a buy back arrangement from the registered
                                   farmers after harvest. 
                                </p>
                            </div><!-- /.about-one__summery -->
                            <div class="about-one__icon-row">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-farmer"></i>
                                            <h4><a href="about.html">Professional
                                                    Farmers</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-agriculture"></i>
                                            <h4><a href="services.html">Organic & Eco
                                                    Solutions</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.about-one__icon-row -->
                            <a href="about.php" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section class="service-two">
            <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                    <p>Our Services list</p>
                    <h3>What We’re Offering</h3>
                </div><!-- /.block-title -->
                <div class="row">
                   <?php 
                        $service_query = mysqli_query($connect, "SELECT * FROM services ORDER BY id ASC") or die(mysqli_error($connect)); 
                            while($service = mysqli_fetch_array($service_query)){
                                echo '<div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="service-two__card">
                                    <div class="service-two__card-image">
                                        <img src="assets/images/services/service-2-1.jpg" alt="">
                                    </div>
                                    <div class="service-two__card-content">
                                        <div class="service-two__card-icon">
                                            <i class="agrikon-icon-tractor"></i>
                                        </div>
                                        <h3><a href="service-details.html">'.$service['service_name'].'</a></h3>
                                        <p>'.$service['service_description'].'</p>
                                    </div>
                                </div>
                            </div>'; 
                            }
                    ?>
                   
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->

        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                    <p>Closed projects</p>
                    <h3>Latest Projects List</h3>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
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
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-1.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-2.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-3.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-4.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-2.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-4.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->

        <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
            <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="call-to-action__three-image">
                            <img src="assets/images/resources/cta-3-1.jpg" alt="">
                            <img src="assets/images/resources/cta-3-2.jpg" alt="">
                        </div><!-- /.call-to-action__three-image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="call-to-action__three-content">
                            <h3>Improving Livelihood of Rural Farmers</h3>
                            <a href="about.php" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action__three-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action__three -->
        <div class="client-carousel client-carousel__has-border-top">
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
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <?php include 'includes/footer.php'; ?>
    
    </div><!-- /.page-wrapper -->


       
    <!-- /.mobile-nav__wrapper -->
    <?php include 'includes/mobile_header.php'; ?>
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

    <script>

        $(document).ready(function(){
           $('#send_message').on('click', function(e){
                $('#send_message').attr('disabled','disabled');
                e.preventDefault(); 

                var name = document.getElementById('name');
                var email = document.getElementById('email');
                var phone = document.getElementById('phone');
                var message = document.getElementById('message');

                $.ajax({
                    url: 'controllers/sendMessageController.php', 
                    type: 'POST', 
                    data: {name:name, email:email, phone:phone, message:message},              
                    xhrFields: {
                          withCredentials: true
          				  },

                            success : function(data){
				        	$("#send_message").removeAttr("disabled");

                    if(data == 'success'){

                        toastr.success('success', 'Message Sent successfully!', {
                        timeOut: 2000,
                        preventDuplicates: true,
                        showMethod: "fadeIn",
                        showEasing: "swing",
                        hideEasing: "linear",
                        hideMethod: "fadeOut",
                        extendedTimeOut: "1000",
                        hideDuration: "1000",
                        showDuration: "300",
                        progressBar: true,
                        newestOnTop: false, 
                        closeButton: false,
                        positionClass: 'toast-top-right',
                        // Redirect 
                        onHidden: function() {
                          
                            top.location.href = 'index.php';
                        
                        }
                      });
                      
                              }else if(data == 'error'){
                                toastr.success('danger', 'Message Sending Failed!', {
                                timeOut: 2000,
                                preventDuplicates: true,
                                showMethod: "fadeIn",
                                showEasing: "swing",
                                hideEasing: "linear",
                                hideMethod: "fadeOut",
                                extendedTimeOut: "1000",
                                hideDuration: "1000",
                                showDuration: "300",
                                progressBar: true,
                                newestOnTop: false, 
                                closeButton: false,
                                positionClass: 'toast-top-right',
                                // Redirect 
                                onHidden: function() {
                                  
                                    top.location.href = 'index.php';
                                
                                }
                      });
                              }
                             
                          }
                    
           });
       
        });

    });
       
    </script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>