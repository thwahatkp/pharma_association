<?php
$database = require 'database/bootstrap.php';
$title = require('./includes/common.php');
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


    <title><?= $common['webtitle'] ?></title>


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
                            <a href="./index.php"><img src="./img/WhatsApp-removebg.png" alt="" /></a>
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
                  <a href="./index.php#aboutuso">About</a>

                <li class=" has-mega-menu homedemo">
                  <a href="./gallery.php">Gallery</a>

                </li>
                <li class="active has-mega-menu homedemo">
                  <a href="./contact.php">Contact</a>

                </li>
                <li class="has-mega-menu homedemo">
                  <a href="./membership.php">Membership</a>

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

            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(./img/banner/gas.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Contact Us</h1>



                    </div>
                </div>
            </div>


            <div class="section-full content-inner bg-white contact-style-1">
                <div class="container">
                    <div class="row dzseth">
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                                <div class="icon-lg text-primary m-b20"> <a href="" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">Address</h5>
                                    <p>Chamber Of Pharma Entrepreneurs, <br>
                                    Chembaka Housing Colony, Olive Building<br> Chalappuram,Calicut</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                                <div class="icon-lg text-primary m-b20"> <a href="" class="icon-cell"><i class="ti-email"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">Email</h5>
                                    <p><a id="hov" class="emailId" href="mailto:copekerala@gmail.com">
                                          copekerala@gmail.com
                                        </a><br><br><br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                                <div class="icon-lg text-primary m-b20"> <a href="" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">Phone</h5>
                                    <p><a id="hov" class="phone" href="tel: 09544101177">
                                            +91 9544101177
                                        </a><br>
                                        <!-- <a id="hov" class="phone" href="tel: 04602227409">
                                            04602227409
                                        </a> -->
                                        <br><br></p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-6 m-b30">
                            <div class="p-a30 bg-gray clearfix radius-sm">
                                <h3>Send Message Us</h3>
                                <div class="dzFormMsg"></div>
                                <form name="enquiry" method="post" role="form" action="./manage-enquirys.php">
                                    <input type="hidden" value="Contact" name="dzToDo">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="name" type="text" required="" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="phone" type="text" required="" class="form-control" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="email" type="email" class="form-control" required="" placeholder="Your Email Id">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="message" rows="4" class="form-control" required="" placeholder="Your Message..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button name="submit1" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-lg-6 m-b30 d-flex">
                            <img src="./img/contact.jpg" alt="no image" style="border-radius: 1rem; width:100%; height:95%;">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d124837.09564498941!2d75.39634!3d12.101249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc833c4ce911c7271!2sMalabar%20Fuel%20Corporation!5e0!3m2!1sen!2sin!4v1659088728329!5m2!1sen!2sin" class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:100%;" allowfullscreen=""></iframe> -->


                        </div>

                    </div>
                </div>
            </div>

        </div>



        <?php require('./includes/footer.php') ?>


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
  <?php require("./includes/call-whatsapp.php")?>

</body>

</html>