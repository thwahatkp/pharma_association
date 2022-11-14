<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$img_path = $app['database']->GetTestimonialImagesById($id);
if (!$app['database']->delete('testimonial', 'id', $id)) {
    unlink("../" . $img_path);
    header("Location: ../testimonials.php");
} else {
    echo "error";
}
