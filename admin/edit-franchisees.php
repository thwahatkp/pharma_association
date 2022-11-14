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
        if (isset($_GET['id'])) {
            $testimonial = $app['database']->InfoByID('franchisee', $_GET['id']);
            foreach ($testimonial as $k => $v) {
                if (!is_numeric($k)) {
                    $$k = $v;
                }
            }
        }
        include('shared-views/header.php');
        include('shared-views/sidebar.php');
        ?>

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Franchisees</h1>
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
                                <h5 class="card-title">Edit Franchisee</h5>


                                
                                <form method="post" action="./database/manage-franchisees.php" enctype="multipart/form-data">
                                    <input type="hidden" required name="id" value="<?php echo isset($id) ? $id : '' ?>">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="name" class="form-control" value="<?php echo isset($name) ? $name : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Serial No</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="serial_no" class="form-control" value="<?php echo isset($serial_no) ? $serial_no : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="address" class="form-control" value="<?php echo isset($address) ? $address : '' ?>">
                                        </div>
                                    </div>
           

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 col-form-label" class="control-label">District</label>

                                                <select name="district" required>
                                                    <option value="<?php echo 'Alappuzha' ?>" <?php if (isset($district)) if ($district == 'Alappuzha') echo 'selected="selected"'; ?>>Alappuzha</option>
                                                    <option value="<?php echo 'Ernakulam' ?>" <?php if (isset($district)) if ($district == 'Ernakulam') echo 'selected="selected"'; ?>>Ernakulam</option>
                                                    <option value="<?php echo 'Idukki' ?>" <?php if (isset($district)) if ($district == 'Idukki') echo 'selected="selected"'; ?>>Idukki</option>
                                                    <option value="<?php echo 'Kannur' ?>" <?php if (isset($district)) if ($district == 'Kannur') echo 'selected="selected"'; ?>>Kannur</option>
                                                    <option value="<?php echo 'Kasargod' ?>" <?php if (isset($district)) if ($district == 'Kasargod') echo 'selected="selected"'; ?>>Kasargod</option>
                                                    <option value="<?php echo 'Kollam' ?>" <?php if (isset($district)) if ($district == 'Kollam') echo 'selected="selected"'; ?>>Kollam</option>
                                                    <option value="<?php echo 'Kottayam' ?>" <?php if (isset($district)) if ($district == 'Kottayam') echo 'selected="selected"'; ?>>Kottayam</option>
                                                    <option value="<?php echo 'Kozhikode' ?>" <?php if (isset($district)) if ($district == 'Kozhikode') echo 'selected="selected"'; ?>>Kozhikode</option>
                                                    <option value="<?php echo 'Malappuram' ?>" <?php if (isset($district)) if ($district == 'Malappuram') echo 'selected="selected"'; ?>>Malappuram</option>
                                                    <option value="<?php echo 'Palakkad' ?>" <?php if (isset($district)) if ($district == 'Palakkad') echo 'selected="selected"'; ?>>Palakkad</option>
                                                    <option value="<?php echo 'Pathanamthitta' ?>" <?php if (isset($district)) if ($district == 'Pathanamthitta') echo 'selected="selected"'; ?>>Pathanamthitta</option>
                                                    <option value="<?php echo 'Thiruvananthapuram' ?>" <?php if (isset($district)) if ($district == 'Thiruvananthapuram') echo 'selected="selected"'; ?>>Thiruvananthapuram</option>
                                                    <option value="<?php echo 'Thrissur' ?>" <?php if (isset($district)) if ($district == 'Thrissur') echo 'selected="selected"'; ?>>Thrissur</option>
                                                    <option value="<?php echo 'Wayanad' ?>" <?php if (isset($district)) if ($district == 'Wayanad') echo 'selected="selected"'; ?>>Wayanad</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="city" class="form-control" value="<?php echo isset($city) ? $city : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Area Served</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="area" class="form-control" value="<?php echo isset($area) ? $area : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Service</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="service" class="form-control" value="<?php echo isset($service) ? $service : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Contact-1</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="contact_one" class="form-control" value="<?php echo isset($contact_one) ? $contact_one : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Contact_2</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="contact_two" class="form-control" value="<?php echo isset($contact_two) ? $contact_two : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="email" class="form-control" value="<?php echo isset($email) ? $email : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Map</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="map" class="form-control" value="<?php echo isset($map) ? $map : '' ?>">
                                        </div>
                                    </div>
                                  



                                    <div class="row mb-3" style="margin-top: 10px;">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
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
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/malabargas/admin/pages-login.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
