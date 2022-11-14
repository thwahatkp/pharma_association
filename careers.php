<?php
$database = require 'database/bootstrap.php';
$franchisees = $app['database']->GetFranchisees();
$jobDetails = $app['database']->GetJobDetails();
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



    <link rel="stylesheet" type="text/css" href="css/franchise.css" />
    <link rel="stylesheet" type="text/css" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/careers.css" />
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.css" />
    <link rel="stylesheet" type="text/css" href="css/templete.css" />
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <style>
        @import url("../css");
    </style>
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <link href="./vendor/icomoon/css/iconfont.min.css" rel="stylesheet">



    <link href="./vendor/dmenu/css/menu.css" rel="stylesheet">
    <link href="./vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
    <link href="./vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
    <link href="./vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="./vendor/float-labels/css/float-labels.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/revolution.min.css" />
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
                                <li class=" has-mega-menu homedemo">
                                    <a href="./about.php">About</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                <li class="nav-item dropdown">
                                    <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Products <i class="ti-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="./commercial.php">Commercial LPG</a>
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
                                <li class="has-mega-menu homedemo">
                                    <a href="./franchisee.php">Franchisee</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                    <a href="./contact.php">Contact</a>
                                </li>
                                <li class="active has-mega-menu homedemo">
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
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(./img/banner/franchise.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 style="color:white;" class="title">Find A Careers</h1>



                    </div>
                </div>
            </div>






            <div class="order">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-8" id="mainContent" style="padding-left:25px;padding-right:25px;">

                            <div class="row filter-box filters">

                                <div class="col-md-6 col-sm-6">
                                    <select id="category" class="wide price-list" name="category">
                                        <option value="">All</option>
                                        <?php
                                        foreach ($franchisees as $franchisee) { ?>

                                            <option value=".<?php echo $franchisee->city ?>"><?php echo $franchisee->city ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="search-wrap">
                                        <input id="search" type="text" class="form-control" placeholder="Search..." />

                                    </div>
                                </div>
                            </div>


                            <div class="row grid">
                                <div>
                                    <?php foreach ($jobDetails as $jobDetails) { ?>
                                        <div class="shadow row padding-40 margin-bt-5">
                                            <!-- <div class="col-md-3">
                                            <div class="story-himg story-himg-middle-u" style="padding:10px 10px 10px 10px;">
                                                <img src="https://svrsoftwareservices.com/img/technical/java.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="">
                                            </div>
                                         </div> -->
                                            <div class="col-md-12">
                                                <div class="story-desc story-desc-middle">
                                                    <h3><?= $jobDetails->title ?></h3>
                                                    <!-- <div class="heading-border-light"></div> -->
                                                    <p id="p">
                                                    <div class="job-details">
                                                        <h4>Job Description</h4>
                                                        <p><?= $jobDetails->job_description ?></p>

                                                        <h4>Qualification</h4>
                                                        <p><?= $jobDetails->qualification ?></p>

                                                        <h4>Posted On</h4>
                                                        <p><?= $jobDetails->posted_on ?></p>
                                                    </div>
                                                    </p>
                                                    <div class="apply-btn">
                                                        <button class="btn" onclick="document.getElementById('job-id').value=<?= $jobDetails->id ?>" data-toggle="modal" data-target="#exampleModal">Apply</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <!-- ----------------------popup modal bootstrap---------------------- -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #d2151e; ">
                                        <h5 class="modal-title" id="exampleModalLabel">UPLOAD DETAILS</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data" action="./manage-job.php" id="captcha-check" name="member_signup">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Id:</label>
                                                <input type="text" name="id" class="form-control" id="job-id" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name: *</label>
                                                <input type="text" name="name" class="form-control" minlength="3" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Phone: *</label>
                                                <input type="tel" name="phone" class="form-control"  required minlength="10">    
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Email: *</label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Message: *</label>
                                                <textarea class="form-control" name="message" id="message-text" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Resume: <span style="font-size: 11px;">(maximum 500KB) </span>*</label>
                                                <input type="file" name="resume" id="fileToUpload" class="form-control" required>
                                            </div>
                                            <div id="errorMsg"></div>
                                            <div class="captcha">
                                                <p><span id="num1">1</span> + <span id="num2">20</span></p>
                                                <input type="text" id="input_val" required oninput="captchaVerify()" class="form-control">

                                            </div>
                                            <div id="errorCaptcha"></div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" id="captcha-btn" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ----------------------popup modal bootstrap---------------------- -->

                        <div class="col-lg-4">
                            <form method="post" role="form" action="./manage-enquirys.php" id="orderForm" name="orderForm">


                                <div id="#orderSummaryStep" class="step">

                                    <div class="order-body">

                                        <div class="row">
                                            <h3 style="text-align:center;color:black;font-size:24px;">Get A Quote</h3>
                                            <div class="col-md-12">
                                                <div class="order-list">
                                                    <ul id="itemList">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" id="inp" name="name" placeholder="Name">
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" id="inp" name="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" id="inp" name="phone" placeholder="Phone Number">
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea id="text" name="message" rows="4" class="form-control" required="" placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>


                                        <div class="row total-container">
                                            <div class="col-md-12 p-0">

                                            </div>
                                        </div>
                                        <div id="totalError"></div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <button name="submit1" type="submit" value="Submit" name="forward" class="btn-form-func forward">
                                                    <span class="btn-form-func-content">Submit</span>

                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="content-block" style="margin-top: 50px;">

        <div class="section-full content-inner-2 bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url(images/background/map-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center service-info">
                        <h2 class="title text-white">Prominent in cooking gas supply sector Malabar Gas is inviting dealerships from under-represented locations as part of its business expansion.</h2>
                        <a href="tel: 0460 2227420" class="site-button white align-self-center outline ms-auto radius-xl outline-2 btnhover16 btnhover16">Contact Now
                        </a>
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

    <script src="js/custom.js"></script>


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





    <script src="./vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="./vendor/price-format/js/jquery.priceformat.min.js"></script>
    <script src="./vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
    <script src="./vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>

    <script src="./vendor/mmenu/js/mmenu.min.js"></script>
    <script src="./vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="./vendor/float-labels/js/float-labels.min.js"></script>
    <script src="./vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js"></script>
    <script src="./vendor/jquery-wizard/js/jquery.wizard.js"></script>
    <script src="./vendor/isotope/js/isotope.pkgd.min.js"></script>
    <script src="./vendor/scrollreveal/js/scrollreveal.min.js"></script>
    <script src="./vendor/lazyload/js/lazyload.min.js"></script>
    <script src="./vendor/sticky-kit/js/sticky-kit.min.js"></script>

    <script src="https://js.stripe.com/v3/"></script>

    <script src="./js/scripts.js"></script>
    <a href="https://api.whatsapp.com/send?text=Hi Malabar Gas&phone=+919446658372" class="whatsapp_float" target="_blank" rel="noopener noreferrer">
        <i class="fa fa-whatsapp whatsapp-icon"></i>
    </a>

    <div class="contact-btn">
        <a class="phone_float" href="tel:0460 2227420">
            <img id="whats" src="./img/contact-redirect.png" id="contact-redirect" alt="" />
        </a>
    </div>
</body>
<script>
    $(document).ready(function() {
        let maxFileSize = 500000;
        $("#fileToUpload").change(function() {
            console.log(maxFileSize);
            fileSize = this.files[0].size;
            if (fileSize > maxFileSize) {
                $(':input[type="submit"]').prop('disabled', true);
                $("#errorMsg").html('<p class="alert-danger" style="text-align: center;">sorry your file is too large</p>')
            } else {
                $(':input[type="submit"]').prop('disabled', false);
                $("#errorMsg").html('');

            }
        })
    })
    // captcha
    let input_val = document.getElementById('input_val');
    let num1 = document.getElementById('num1');
    let num2 = document.getElementById('num2');

    const myBtn = document.getElementById('captcha-btn');

    num1.innerHTML = Math.floor(Math.random() * 10);
    num2.innerHTML = Math.floor(Math.random() * 15);

    let number1 = num1.innerText;
    let number2 = num2.innerText;

    function captchaVerify() {
        let captcha = $("#input_val").val();
        let sum_result = parseInt(number1) + parseInt(number2);
        let res = parseInt(captcha);
        if (sum_result === res) {
            $(':input[type="submit"]').prop('disabled', false);
            $("#errorCaptcha").html('')
        } else {
            $(':input[type="submit"]').prop('disabled', true);
            $("#errorCaptcha").html('<p class="alert-danger" style="text-align: center; margin-top:5px">Unvalid Captcha Please check..</p>');
        }
    }


    // myBtn.addEventListener("click", () => {

    //     let sum_result = parseInt(number1) + parseInt(number2);
    //     let res = parseInt(input_val.value);
    //     if (res == sum_result) {
    //         alert("Correct");
    //     } else {
    //         alert("wrong");
    //     }
    // })
</script>

</html>