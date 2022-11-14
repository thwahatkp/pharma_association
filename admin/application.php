<?php
session_start();
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Malabar Gas/ADMIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    
     <link rel="icon" href="../images/logo/favicon.ico" type="image/png">
	<link href="../images/logo/apple-touch-icon.png" rel="apple-touch-icon">

    
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>

    
    <link href="assets/css/style.css" rel="stylesheet">


  </head>

  <body>

    <?php
    include('shared-views/header.php');
    include('shared-views/sidebar.php');
    ?>

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Application</h1>
      </div>

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">

           
                
                <table id="applications-tbl" class="table table-striped table-bordered mb-0" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Job</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Resume</th>
                    </tr>
                  </thead>
                </table>
                
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/applications.js"></script>
    <script src="assets/js/datatables.min.js"></script>

    
    <script src="assets/js/main.js"></script>

  </body>

  </html>

<?php
} else {
 
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/malabargas/admin/pages-login.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
