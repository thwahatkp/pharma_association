<?php
require_once('./utils/FileUtil.php');

$database = require('./database/bootstrap.php');
$pdf = $_FILES['resume'];
// var_dump($pdf['size']);
// return;

// -------------------checking file pdf-------------------
// -------------------checking size-------------------
if ($pdf["size"] > 500000) {
    echo "<script>alert('sorry your file is too large'); window.location='./careers.php'</script>";
} else {
    $img_path = FileUtil::uploadSingleImage('resume', 'applications');
    if ($img_path != '') {
        $gallery_id = $app['database']->insert('applications', [
            'job_id' => $_POST['id'],
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'message' => $_POST['message'],
            'img_path' => $img_path,
        ]);
        // if ($gallery_id) {

        //     creategallery($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $gallery_id);
        // }
        echo "<script>alert('report sended successfully'); window.location='./careers.php'</script>";
        // header("Location: ./careers.php");
    }
}
