<?php
session_start();
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Malabar Gas/ADMIN</title>
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

        <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>


        <link href="assets/css/style.css" rel="stylesheet">


    </head>

    <body>

        <?php
        $database = require '../database/bootstrap.php';
        include('shared-views/header.php');
        include('shared-views/sidebar.php');
        ?>

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Career</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    </ol>
                </nav>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Careers</h5>


                                
                                <form method="post" action="./database/manage-careers.php" >
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="name" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Job Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="job_description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Qualification</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="qulalification" class="form-control" >
                                        </div>
                                    </div>
           

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Posted On</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="posted_on" class="form-control" readonly value="<?= date("d/m/Y") ?>" >
                                        </div>
                                    </div>

                                    <div class="row mb-3" style="margin-top: 10px;">
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>

                                </form>

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
