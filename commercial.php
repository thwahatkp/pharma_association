<?php
$database = require 'database/bootstrap.php';
$commercials = $app['database']->GetCommercialProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Malabar Gas" />
    <meta property="og:title" content="Malabar Gas" />
    <meta property="og:description" content="Malabar Gas" />
    <meta property="og:image" content="Malabar Gas" />
    <meta name="format-detection" content="telephone=no" />


    <link rel="icon" href="./img/favicon-32x32.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon-32x32.png" />


    <title>Malabar Gas</title>


    <meta name="viewport" content="width=device-width, initial-scale=1" />




    <link rel="stylesheet" type="text/css" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.css" />
    <link rel="stylesheet" type="text/css" href="css/templete.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <style>
        @import url("../css");
    </style>


    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/revolution.min.css" />
    <!-- -------------------------nav css file------------------------- -->
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <!-- -------------------------Bootstrap cdn------------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body id="bg">
    <div class="page-wraper">


        <header class="site-header mo-left header navstyle2">

            <div class="sticky-header main-bar-wraper header-curve navbar-expand-lg">
                <div class="main-bar clearfix bg-primary">
                    <div class="container clearfix">

                        <div class="logo-header mostion logo-dark">
                            <a href="./index.php"><img src="./img/logo 3.png" alt="" /></a>
                        </div>

                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>





                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header d-md-block d-lg-none">
                                <a href="./index.php"><img src="./img/logo 3.png" alt="" /></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="has-mega-menu homedemo">
                                    <a href="./index.php">Home</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                    <a href="./about.php">About</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                <li class="active-nav nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Products
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-active" href="./commercial.php">Commercial LPG</a>
                                        <a class="dropdown-item" href="./domestic.php">Domestic LPG</a>
                                    </div>
                                </li>
                                </li>
                                <li class="has-mega-menu homedemo">
                                    <a href="./safety-tips.php">Safety Tips</a>

                                </li>

                                <li class=" has-mega-menu homedemo">
                                    <a href="./gallery.php">Gallery</a>

                                </li>
                                <li class=" has-mega-menu homedemo">
                                    <a href="./franchisee.php">Franchisee</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                    <a href="./contact.php">Contact</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                    <a href="./careers.php">Careers</a>

                                </li>


                            </ul>
                            <!-- <div class="dlab-social-icon ind-social">
                                <ul>
                                    <li>
                                        <a class="site-button-link facebook fab fa-facebook-f" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="site-button-link twitter fab fa-twitter" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="site-button-link linkedin fab fa-linkedin-in" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="site-button-link instagram fab fa-instagram" href="#"></a>
                                    </li>
                                </ul>
                           
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="page-content bg-white">

            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image: url(./img/banner/gas.jpg)">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Commercial LPG</h1>



                    </div>
                </div>
            </div>



            <div class="section-full content-inner bg-white video-section" style="background-image:url('./img/domestic/bg.jpg');">
                <div class="container">
                    <div class="section-content">
                        <div class="row d-flex">
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="video-bx">
                                    <img src="./img/commercial/d1.png" alt="Signature">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                                <div class="content-bx1">
                                    <h2 class="m-b15 title">Good food, good memories<br><span class="text-primary"> New LPG Connection for Hotel</span></h2>
                                    <p class="m-b30">We are offering Commercial LPG Cylinders to our clients.
                                        We believe it is important to understand the benefits of LPG as an energy source for
                                        yourself and also to educate others. It's easier and more fun with Malabar Gas.
                                        Our trained and friendly staff are committed to your safety and provide you with a
                                        seamless experience from delivery to installation and after sales service and everything in between.
                                        With Malabar Gas it is possible.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-full content-inner-2 bg-white wow fadeIn" style="background-image:url(images/background/map-bg1.png)" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="container">
                    <div class="section-head style2 text-center">
                        <h2 class="title">Available Commercial Products</h2>
                        <p>What do you get to choose from?</p>
                    </div>
                    <div class="testimonial-num-count owl-num-count owl-carousel owl-btn-center-lr owl-btn-3 owl-theme">
                        <?php
                        foreach ($commercials as $commercial) { ?>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img style="width: 100%;height:auto;" src="<?php echo 'admin/' . $commercial->img_path ?>" alt="">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5"><?php echo $commercial->title ?></h4>
                                        <span class="testimonial-position"><?php echo $commercial->kg ?> Kg</span>
                                        <div class="testimonial-text">
                                            <p><?php echo $commercial->description ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <div class="section-full" id="choose-us">
                <div class="row m-lr0">
                    <div class="col-xl-6 col-lg-12 p-lr0 d-flex dis-tbl latest-project-info style1 bg-secondry wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="align-self-center text-white">
                            <div class="section-head text-white">
                                <h2 class="title">Benefits of LPG for Cooking</h2>
                                <p>The benefits of LPG begin from your kitchen and keep going on
                                </p>
                                <h6 style="text-align:justify ;">LPG is a highly efficient cooking fuel. It is economical
                                    and its excellent heating performance will help you cook your food in less time,
                                    saving you a lot on fuel costs. It undergoes complete combustion, producing no
                                    residue and solid particles, which means minimal maintenance costs and a smaller
                                    carbon footprint. And these are just some of its advantages that you can count on your fingers.</h6>
                            </div>
                            <ul class="list-check white list-2 rounded border">
                                <li>
                                    <h4 class="m-b10">Better Control</h4>

                                </li>
                                <li>
                                    <h4 class="m-b10">Faster Cooking</h4>

                                </li>
                                <li>
                                    <h4 class="m-b10">Environmental Friendly</h4>


                                </li>
                                <li>
                                    <h4 class="m-b10">Low Kitchen Temperature</h4>

                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 p-lr0 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="row spno">
                            <div class="col-lg-6 col-md-6 col-sm-6 bg-primary align-items-center d-flex">
                                <div class="dlab-services-box text-white">

                                    <h6 style="text-align:justify ;">LPG has many benefits that can be life-changing for its users.
                                        It's good for your health, your kitchen and our environment.</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <img class="img-cover" src="./img/compress/5.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="video-bx radius-no h100">
                                    <img src="./img/commercial/d2.jpg" alt="Signature" class="img-cover">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 bg-secondry align-items-center d-flex">
                                <div class="dlab-services-box text-white">

                                    <p>Paying a little attention to working with LPG can be even more beneficial,
                                        so you can save enough to plan your long-awaited trip to your favorite destination.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <footer class="site-footer">
            <div class="footer-top" style="
            background-image: url(images/background/bg3.png);
            background-size: cover;
          ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                            <div class="widget widget_services border-0">
                                <h5 class="footer-title text-white">Company</h5>
                                <ul>
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./about.php">About</a></li>
                                    <li><a href="./gallery.php">Gallery</a></li>

                                    <li><a href="./contact.php">Contact </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-7 col-xl-2 col-lg-3 col-sm-6 footer-col-4">
                            <div class="widget widget_services border-0">
                                <h5 class="footer-title text-white">Useful Link</h5>
                                <ul>
                                    <li><a href="./domestic.php">Domestic LPG </a></li>
                                    <li><a href="./commercial.php">Commercial LPG</a></li>
                                    <li><a href="./safety-tips.php">Safety Tips</a></li>
                                    <li><a href="./franchisee.php">Franchisee</a></li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
                            <div class="widget widget_getintuch">
                                <h5 class="footer-title text-white">Contact us</h5>
                                <ul>
                                    <li>
                                        <i class="ti-location-pin"></i><strong>address</strong>Malabar Fuel Corporation,
                                        LPG Bottling Plant
                                        Elamberampara Pallivayal(P.O),
                                        Thaliparamba,Kannur
                                    </li>
                                    <li>
                                        <i class="ti-mobile"></i><strong>phone</strong>0460 2227420

                                    </li>
                                    <li>
                                        <i class="ti-email"></i><strong>email</strong>info@malabargas.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4 col-lg-4 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title text-white">
                                    Malabar Fuel Corporation
                                </h5>
                                <p class="text-capitalize m-b20">
                                    Malabar Fuel Corporation has been continuously involved in
                                    bottling of LPG as domestic and commercial under the brand
                                    name of MALABAR GAS since 1996.
                                </p>

                                <ul class="list-inline m-a0">
                                    <li>
                                        <a href="#" class="site-button facebook circle"><i class="fab fa-facebook-f"></i></a>
                                    </li>

                                    </li>
                                    <li>
                                        <a href="#" class="site-button instagram circle"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="site-button twitter circle"><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 text-left">
                            <span> Designed & Developed by
                                <a href="https://www.codeorganization.com/" target="_blank">CodeOrganization &#128293;</a></span>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


    </div>


    <script src="js/jquery.min.js"></script>

    <script src="plugins/wow/wow.js"></script>


    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>

    <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>

    <script src="plugins/magnific-popup/magnific-popup.js"></script>

    <script src="plugins/counter/waypoints-min.js"></script>

    <script src="plugins/counter/counterup.min.js"></script>

    <script src="plugins/imagesloaded/imagesloaded.js"></script>

    <script src="plugins/masonry/masonry-3.1.4.js"></script>

    <script src="plugins/masonry/masonry.filter.js"></script>

    <script src="plugins/owl-carousel/owl.carousel.js"></script>

    <script src="plugins/lightgallery/js/lightgallery-all.min.js"></script>

    <script src="plugins/scroll/scrollbar.min.js"></script>



    <script src="js/dz.carousel.min.js"></script>

    <script src="plugins/countdown/jquery.countdown.js"></script>

    <script src="js/dz.ajax.js"></script>

    <script src="plugins/rangeslider/rangeslider.js"></script>



    <script src="js/jquery.lazy.min.js"></script>

    <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/rev.slider.js"></script>
    <script>
        jQuery(document).ready(function() {
            "use strict";
            dz_rev_slider_1();
            $(".lazy").Lazy();
        }); /*ready*/
    </script>
    <script>
        $(document).ready(function() {
            var sync1 = $("#sync1");
            var sync2 = $("#sync2");

            var syncedSecondary = true;

            sync1
                .owlCarousel({
                    items: 1,
                    nav: true,
                    autoplaySpeed: 3000,
                    navSpeed: 3000,
                    paginationSpeed: 3000,
                    slideSpeed: 3000,
                    smartSpeed: 3000,
                    autoplay: 3000,
                    dots: false,
                    loop: true,
                    responsiveRefreshRate: 200,
                    navText: [
                        '<i class="la la-angle-left"></i>',
                        '<i class="la la-angle-right"></i>',
                    ],
                })
                .on("changed.owl.carousel", syncPosition);

            sync2
                .on("initialized.owl.carousel", function() {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: false,
                    margin: 20,
                    autoplaySpeed: 3000,
                    navSpeed: 3000,
                    paginationSpeed: 3000,
                    slideSpeed: 3000,
                    smartSpeed: 3000,
                    autoplay: 3000,
                    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate: 100,
                    responsive: {
                        0: {
                            items: 2,
                        },
                        480: {
                            items: 2,
                        },
                        768: {
                            items: 3,
                        },
                        1024: {
                            items: 4,
                        },
                        1400: {
                            items: 4,
                        },
                    },
                })
                .on("changed.owl.carousel", syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;

                //if you disable loop you have to comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find(".owl-item.active").length - 1;
                var start = sync2.find(".owl-item.active").first().index();
                var end = sync2.find(".owl-item.active").last().index();

                if (current > end) {
                    sync2.data("owl.carousel").to(current, 100, true);
                }
                if (current < start) {
                    sync2.data("owl.carousel").to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data("owl.carousel").to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                //sync1.data('owl.carousel').to(number, 300, true);

                sync1.data("owl.carousel").to(number, 300, true);
            });
        });
    </script>
    <a href="https://api.whatsapp.com/send?text=Hi Malabar Gas&phone=+919446658372" class="whatsapp_float" target="_blank" rel="noopener noreferrer">
        <i class="fa fa-whatsapp whatsapp-icon"></i>
    </a>

    <div class="contact-btn">
        <a class="phone_float" href="tel:0460 2227420">
            <img id="whats" src="./img/contact-redirect.png" id="contact-redirect" alt="" />
        </a>
    </div>
</body>

</html>