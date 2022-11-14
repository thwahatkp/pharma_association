<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$img_path = $app['database']->GetGalleryImagesById($id);
if (!$app['database']->delete('gallery', 'id', $id)) {
    unlink("../" . $img_path);
    header("Location: ../gallerys.php");
} else {
    echo "error";
}
