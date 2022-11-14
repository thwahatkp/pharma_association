<?php

require_once('../utils/FileUtil.php');

$database = require '../../database/bootstrap.php';
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $img_path = $app['database']->GetTestimonialImageById($id);
    if ($_FILES['testimonialimage']['name'] != '') {
        unlink("../" . $img_path);
        $img_path = FileUtil::uploadSingleImage('testimonialimage', 'testimonial-images');
    }
    $check1 = $app['database']->dynamicUpdate('testimonial', [
        'name' => $_POST['name'],
        'title' => $_POST['title'],
        'message' => $_POST['message'],
        'img_path' => $img_path,
    ], $id);
    if (!$check1) {

        //createtestimonial($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $id);

        header("Location: ../testimonials.php");
    }
} else {
    $img_path = FileUtil::uploadSingleImage('testimonialimage', 'testimonial-images');
    if ($img_path != '') {
        $testimonial_id = $app['database']->insert('testimonial', [
            'name' => $_POST['name'],
            'title' => $_POST['title'],
            'message' => $_POST['message'],
            'img_path' => $img_path,
        ]);
        // if ($testimonial_id) {

        //     createtestimonial($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $testimonial_id);
        // }
        header("Location: ../testimonials.php");
    }
}
echo 'error';
