<?php
session_start();
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Malabar/ADMIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="assets/css/style.css" rel="stylesheet">


  </head>

  <body>


    <?php
    $database = require '../database/bootstrap.php';

    $enquiry_count = $app['database']->GetTotalCount('enquiry');


    include('shared-views/header.php');
    include('shared-views/sidebar.php');
    ?>

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          </ol>
        </nav>
      </div>

      <section class="section dashboard">
        <div class="row">


          <div class="col-md-2"></div>
          <div class="col-lg-8">
            <div class="row">






              <div class="col-xxl-4 col-md-6">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Enquiry</h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo $enquiry_count  ?></h6>
                        <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Enquiry</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-4 col-md-6">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Membership</h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php  ?></h6>
                        <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Careers</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include('shared-views/footer.php'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>


    <script src="assets/js/main.js"></script>

  </body>

  </html>

<?php
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/chamberofpharma/admin/pages-login.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
