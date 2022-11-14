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
                            <a href="./index.php"><img src="./img/WhatsApp-removebg.png" alt="" /></a>
                        </div>

                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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

                                <li class=" has-mega-menu homedemo">
                                    <a href="./gallery.php">Gallery</a>

                                </li>
                                <li class="has-mega-menu homedemo">
                                    <a href="./contact.php">Contact</a>

                                </li>
                                <li class="active has-mega-menu homedemo">
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
            <div class="dlab-bnr-inr overlay-black-middle bg-pt"
                style="background-image:url(./img/banner/franchise.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 style="color:white;" class="title">Membership</h1>



                    </div>
                </div>
            </div>






            <div class="order">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12" id="mainContent" style="padding-left:25px;padding-right:25px;">

                            <div class="row filter-box filters">

                                <div class="col-md-10 col-sm-10" style="margin: 2px auto;">
                                    <form action="" method="post">
                                        <!-- <div class="search-wrap"> -->
                                        <label class="mb-2 font-size-14">Company name</label>
                                        <input id="" type="text" class="form-control mb-2" name=""
                                            placeholder="Company" />

                                        <label class="mb-2 font-size-14">Address in kerala</label>
                                        <textarea class="form-control mb-4" placeholder="Address"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <div class="selctbtn form-control">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label font-size-14"
                                                    for="inlineRadio1">Proprietorship</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label font-size-14"
                                                    for="inlineRadio2">Partnership</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label font-size-14 mb-4 "
                                                    for="inlineRadio3">PVT
                                                    LTD Company</label>
                                            </div>
                                        </div>
                                        <br>

                                        <label class="mb-2 font-size-14">Name of managing partner / managing
                                            director</label>
                                        <input id="" type="text" class="form-control mb-2" name=""
                                            placeholder="Partner / Director" />

                                        <label class="mb-2 font-size-14">Mobile</label>
                                        <input id="" type="number" maxlength="10" class="form-control mb-2" name=""
                                            placeholder="Mobile no" />

                                        <label class="mb-2 font-size-14">Email</label>
                                        <input id="" type="email" class="form-control mb-2" name=""
                                            placeholder="Email" />

                                        <label class="mb-2 font-size-14">Name of Partners/Directors with mobile
                                            no</label><br>
                                        <div class="col-md-6 col-sm-6 mb-2">
                                            <input id="" type="text" class="form-control mb-2" name=""
                                                placeholder="Name" />
                                        </div>

                                        <div class="col-md-6 col-sm-6 mb-2">
                                            <input id="" type="number" maxlength="10" class="form-control mb-2" name=""
                                                placeholder="Mobile no" />
                                        </div>

                                        <div class="col-md-6 col-sm-6 mb-2">
                                            <input id="" type="text" class="form-control mb-2" name=""
                                                placeholder="Name" />
                                        </div>

                                        <div class="col-md-6 col-sm-6 mb-2">
                                            <input id="" type="text" class="form-control mb-2" name=""
                                                placeholder="Mobile no" />
                                        </div>

                                        <label class="mb-2 font-size-14">Name of trademark brands <span
                                                style="font-size: 11px;">(either TM or REGISTERED)</span> </label>
                                        <input id="" type="email" class="form-control mb-2" name=""
                                            placeholder="Brands" />

                                        <div class="col-md-6 col-sm-6 mb-2">
                                            <label class="mb-2 font-size-14">Year of establishment</label><br>
                                            <input id="" type="date" class="form-control mb-2" name="" />
                                        </div>

                                        <div class="col-md-6 col-sm-6 mb-2">
                                            <label class="mb-2 font-size-14">Name of the division if any</label><br>
                                            <input id="" type="text" class="form-control mb-2" name="" />
                                        </div>

                                        <label class="mb-2 font-size-14">Operating any other state</label><br>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input other-state" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              Yes
                                            </label>
                                          </div>

                                          <div id="show-state" style="display:none;">
                                            <label class="mb-2 font-size-14">State name</label>
                                            <input id="" type="text" class="form-control mb-2" name=""
                                                placeholder="State" />
                                          </div>


                                    </form>




                                    <!-- </div> -->
                                </div>
                            </div>




                        </div>
                        <!-- <div class="col-lg-4">
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
                        </div> -->

                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="content-block" style="margin-top: 50px;">

        <div class="section-full content-inner-2 bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s"
            style="background-image:url(images/background/map-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center service-info">
                        <h2 class="title text-white">Prominent in cooking gas supply sector Malabar Gas is inviting
                            dealerships from under-represented locations as part of its business expansion.</h2>
                        <a href="tel: 0460 2227420"
                            class="site-button white align-self-center outline ms-auto radius-xl outline-2 btnhover16 btnhover16">Contact
                            Now
                        </a>
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

    <script src="js/membership.js"></script>


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
    <a href="https://api.whatsapp.com/send?text=Hi Malabar Gas&phone=+919446658372" class="whatsapp_float"
        target="_blank" rel="noopener noreferrer">
        <i class="fa fa-whatsapp whatsapp-icon"></i>
    </a>

    <div class="contact-btn">
        <a class="phone_float" href="tel:0460 2227420">
            <img id="whats" src="./img/contact-redirect.png" id="contact-redirect" alt="" />
        </a>
    </div>
</body>
<script>
    $(document).ready(function () {
        let maxFileSize = 500000;
        $("#fileToUpload").change(function () {
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