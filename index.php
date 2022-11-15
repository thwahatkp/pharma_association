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
  <link rel="stylesheet" href="./css/nav.css">
  <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.css" />
  <link rel="stylesheet" type="text/css" href="css/templete.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

  <style>
    @import url("../css");
  </style>


  <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/revolution.min.css" />
  <!-- /////////////////////////////////////////////////////////// -->
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
              <a href="./index.php"><img src="./img/WhatsApp-removebg.png" alt="dsafasf" /></a>
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
                <li class="active has-mega-menu homedemo">
                  <a href="./index.php">Home</a>

                </li>
                <li class="has-mega-menu homedemo">
                  <a href="./redirect-about.php">About</a>

                <li class=" has-mega-menu homedemo">
                  <a href="./gallery.php">Gallery</a>

                </li>
                <li class="has-mega-menu homedemo">
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

      <div class="main-slider style-two default-banner" id="home">
        <div class="tp-banner-container">
          <div class="tp-banner">
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="reveal-add-on36" data-source="gallery" style="background: #ffffff; padding: 0px">

              <div id="welcome" class="rev_slider fullscreenbanner" style="display: none" data-version="5.4.7.2">
                <ul>

                  <li data-index="rs-100" data-transition="slideoververtical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="./img/banner/back1.jpg" alt="" data-lazyload="./img/banner/back1.jpg" data-bgposition="center center" data-kenburns="on" data-duration="4000" data-ease="Power3.easeInOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="4" class="rev-slidebg" data-no-retina="" />


                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-100-layer" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                          z-index: 2;
                          background-color: rgba(0, 0, 0, 0.1);
                          border-color: rgba(0, 0, 0, 0);
                          border-width: 0px;
                        "></div>


                    <div class="tp-caption tp-shape tp-shapewrapper ov-tp" id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]' data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5"></div>
                    <div class="tp-caption" id="slide-100-layer-3" data-x="['center','center','center','center']" data-hoffset="['-90','-200','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-90']" data-fontsize="['30','15','15','10']" data-lineheight="['80','40','40','30']" data-letterspacing="['2','2','2','2']" data-width="['1000','none','768','360']" data-height="none" data-whitespace="['normal','nowrap','normal','normal']" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[10,10,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                          z-index: 6;
                          min-width: 500px;
                          max-width: 500px;
                          font-weight: 600;
                          white-space: normal;
                          color: #fff;
                          font-family: 'Poppins', sans-serif;
                          text-shadow: 2px 2px 4px #000000;
                        ">
                      To provide innovative healthcare solutions to <br>
                      society by combining <br>
                      core competencies of member companies and <br>
                      world-class manufacturers.
                    </div>

                    <div class="tp-caption" id="slide-100-layer-4" data-x="['center','center','center','center']" data-hoffset="['-265','-165','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['50','0','-5','00']" data-fontsize="['18','16','14','14']" data-lineheight="['30','30','26','26']" data-width="['640','481','500','300']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                          z-index: 7;
                          min-width: 640px;
                          max-width: 640px;
                          font-weight: 700;
                          font-size: 18px;
                          line-height: 30px;
                          font-weight: 400;
                          color: #fff;
                          font-family: 'Poppins', sans-serif;
                          text-shadow: 2px 2px 4px #000000;
                          margin-top: 10%;
                        ">
                      Providing innovative healthcare solutions to the society
                    </div>

                    <a class="tp-caption rev-btn tc-btnshadow bg-primary tp-rs-menulink" href="tel: 0460 2227420" target="_blank" id="slide-100-layer-5" data-x="['center','center','center','center']" data-hoffset="['-510','-335','-100','-80']" data-y="['middle','middle','middle','middle']" data-voffset="['160','90','80','90']" data-lineheight="['18','18','18','18']" data-whitespace="nowrap" data-type="button" data-actions="" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]' data-textalign="['center','center','center','center']" data-paddingtop="[15,15,15,10]" data-paddingright="[30,30,30,20]" data-paddingbottom="[15,15,15,10]" data-paddingleft="[30,30,30,20]" style="
                          z-index: 8;
                          letter-spacing: 2px;
                          white-space: nowrap;
                          font-size: 12px;
                          font-weight: 600;
                          color: rgba(255, 255, 255, 1);
                          text-transform: uppercase;
                        ">
                      Call Now
                    </a>

                    <!-- <a class="tp-caption rev-btn tc-btnshadow tp-rs-menulink bg-primary" href="./about.php" target="_blank" id="slide-100-layer-6" data-x="['center','center','center','center']" data-hoffset="['-340','-160','70','70']" data-y="['middle','middle','middle','middle']" data-voffset="['160','90','80','90']" data-lineheight="['18','18','18','18']" data-whitespace="nowrap" data-type="button" data-actions="" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]' data-textalign="['center','center','center','center']" data-paddingtop="[15,15,15,10]" data-paddingright="[30,30,30,20]" data-paddingbottom="[15,15,15,10]" data-paddingleft="[30,30,30,20]" style="
                          z-index: 8;
                          letter-spacing: 2px;
                          white-space: nowrap;
                          font-size: 12px;
                          font-weight: 600;
                          color: rgba(255, 255, 255, 1);
                          text-transform: uppercase;
                        ">
                      About Us
                    </a> -->
                  </li>



                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important"></div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="content-block">

        <div class="section-full call-action bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 text-white">
                <h2 class="title">Become a member.</h2>
                <p class="m-b0">
                </p>
              </div>
              <div class="col-lg-3 d-flex">
                <a href="./membership.php" class="site-button white align-self-center outline ms-auto radius-xl outline-2 btnhover16 btnhover16">Click
                  Here
                </a>
              </div>
            </div>
          </div>
        </div>


        <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
          <div class="container">
            <div class="on-show-slider">
              <div id="sync2" class="owl-carousel owl-theme owl-none owl-dots-none project-list">
                <div class="item">
                  <div class="project-owbx">
                    <i class="ti-face-smile"></i>
                    <h4 class="title">Keeping high-quality products with international standards</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="project-owbx">
                    <i class="flaticon-engineer-1"></i>
                    <h4 class="title">Having more than 4,000 employees</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="project-owbx active">
                    <i class="ti-thumb-up"></i>
                    <h4 class="title"> Providing innovative healthcare solutions to the society</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="project-owbx">
                    <i class="ti-clip"></i>
                    <h4 class="title">Organizing more than 100 pharmaceutical companies in Kerala</h4>
                  </div>
                </div>
              </div>

              <div class="section-full content-inner bg-white video-section" id="aboutus">
                <div class="container">
                  <div class="section-content">
                    <div class="row d-flex">
                      <div class="col-lg-6 col-md-12 m-b30">
                        <div class="video-bx">
                          <img src="./img/about/about6.jpg" alt="Signature" style="border-radius: 2rem;">

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                        <div class="content-bx1">
                          <h2 class="m-b15 title">Chamber of Pharma.<br><span class="text-primary"> Since
                              2016</span></h2>
                          <h4 class="title" style=" color: #999;">
                            <!-- Chamber of Pharma is an independent -->
                          </h4>
                          <p class="m-b30" style="text-align:justify ; font-size:1.9rem;" >
                            The Chamber of Pharma is an independent and we'll recognised organisation of pharmaceutical marketing and manufacturing companies of Kerala. we are the one and only organization in this segment.
                            Chamber of Pharma maintain and honour the dignity of pharmaceutical marketing companies of Kerala.
                            We promote morals and ethics in the pharmaceutical marketing business.
                            We are trying to promote pharmaceutical marketing entrepreneurship in at most ethical way.
                            The Chamber of Pharma works together to overcome the issues faced by our members and attain positive outcomes.
                            The Chamber of Pharma always in coordination with similar organisations across India for keeping the pride of the represented segment .
                            When we look back with pride and satisfaction ,we could say that we have been able to work an organisation as socially committed business community.
                            Today Chamber of Pharma Entrepreneurs as an organization has more than 100 pharmaceutical companies operating in Kerala.
                            Our member companies offer employment opportunities to more than 4000 employees and also provide ample business opportunities for various supporting industries.
                          </p>

                          <div class="" id="aboutuso"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>

        <div id="section" >

          <div class="container col-xxl-8 px-4 py-5">
            <div class="container my-5">
              <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                  <h1 class="display-4 fw-bold lh-1 text-primary">VISION</h1>
                  <p class="lead">To serve ailing human beings with quality medicines at affordable prices by continuously upgrading systems, technology, and knowledge for excellent productivity and quality. To work towards human welfare by manufacturing and delivering innovative products for their health and wellness.</p>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                  <a href="./gallery.php">
                    <img class="rounded-lg-3" src="./img/banner/vision.jpeg" alt="" width="720">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="container col-xxl-8 px-4 py-5">
            <div class="container my-5">
              <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                  <h1 class="display-4 fw-bold lh-1 text-primary">MISSION</h1>
                  <p class="lead">To Ensure responsible, sustainable, and ethical way of pharmaceutical business practices among member organizations.

                    To take the lead role in the welfare and development of the member companies thereby creating a healthy atmosphere for the growth and development of the industry.

                    To provide innovative healthcare solutions to society by combining core competencies of member companies and world-class manufacturers..</p>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                  <a href="./gallery.php">
                    <img class="rounded-lg-3" src="./img/mission.jpeg" alt="" width="720">
                  </a>
                </div>
              </div>
            </div>
          </div>




        </div>


        <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
          <div class="container">
            <div class="section-head text-black text-center">
              <h2 class="title">Latest Events</h2>
              <p>chamber of pharma</p>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="img-carousel-dots owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
                  <div class="item" style="max-width: 90%;">
                    <a href="./gallery.php">
                      <img src="./img/banner/carousal1.jpeg" style="border-radius: 3%; " alt="">
                    </a>
                  </div>
                  <div class="item" style="max-width: 90%;">
                    <a href="./gallery.php">
                      <img src="./img/banner/carousal2.jpeg" style="border-radius: 3%;" alt="">
                    </a>
                  </div>
                  <div class="item" style="max-width: 90%;">
                    <a href="./gallery.php">
                      <img src="./img/banner/carousal3.jpeg" style="border-radius: 3%;" alt="">
                    </a>
                  </div>
                  <div class="item" style="max-width: 90%;">
                    <a href="./gallery.php">
                      <img src="./img/banner/carousal4.jpeg" style="border-radius: 3%;" alt="">
                    </a>
                  </div>

                  <!-- <div class="item">
                    <div class="service-box style1">
                      <div class="icon-xl m-b20 text-primary radius">
                        <a href="portfolio-details.html" class="icon-cell"><i class="ti-alarm-clock"></i></a>
                      </div>
                      <h3 class="title">Timely delivery
                        <br><br>
                      </h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="service-box style1">
                      <div class="icon-xl m-b20 text-primary radius">
                        <a href="portfolio-details.html" class="icon-cell"><i class=" ti-thumb-up"></i></a>
                      </div>
                      <h3 class="title">Ethical Business Practices</h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="service-box style1">
                      <div class="icon-xl m-b20 text-primary radius">
                        <a href="portfolio-details.html" class="icon-cell"><i class=" ti-money"></i></a>
                      </div>
                      <h3 class="title">Competitive Pricing</h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="service-box style1">
                      <div class="icon-xl m-b20 text-primary radius">
                        <a href="portfolio-details.html" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
                      </div>
                      <h3 class="title">Proficient team
                        <br><br>
                      </h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="service-box style1">
                      <div class="icon-xl m-b20 text-primary radius">
                        <a href="portfolio-details.html" class="icon-cell"><i class=" ti-headphone-alt"></i></a>
                      </div>
                      <h3 class="title">Customer Support <br><br>

                      </h3>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php include("./includes/footer.php") ?>
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
  <!--   
  <script src="plugins/switcher/switcher.js"></script> -->

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
      var slidesPerPage = 4; //globaly define number of elements per page
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
  <?php require("./includes/call-whatsapp.php")?>
</body>

</html>