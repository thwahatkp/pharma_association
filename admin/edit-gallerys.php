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

    
    <link href="assets/css/style.css" rel="stylesheet">


  </head>

  <body>

    <?php
    $database = require '../database/bootstrap.php';
    if (isset($_GET['id'])) {
      $testimonial = $app['database']->InfoByID('gallery', $_GET['id']);
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
        <h1>Gallery</h1>
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
                <h5 class="card-title">Edit Gallery</h5>

                
                <form method="post" action="./database/manage-gallerys.php" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" value="<?php echo isset($title) ? $title : '' ?>">
                    </div>
                  </div>
          
                  <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file"  id="input" name="galleryimage" accept="image/png, image/jpeg"><?php echo isset($img_path) ? 'ADDED IMAGE:' . $img_path : '' ?>
                      <p style="float:right;margin-top:20px;">Maximum size 150kb </p>
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
    <script>


const input = document.getElementById('input')

input.addEventListener('change', (event) => {
  const target = event.target
  	if (target.files && target.files[0]) {

      /*Maximum allowed size in bytes
        5MB Example
        Change first operand(multiplier) for your needs*/
      const maxAllowedSize =  200000;
      if (target.files[0].size > maxAllowedSize) {
        alert("File is too big!Maximum size 200kb");
      
       	target.value = ''
      }
  }
})
</script>
  </body>

  </html>

<?php
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/chamberofpharma/admin/pages-login.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
