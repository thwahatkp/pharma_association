<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$img_path = $app['database']->GetProductImagesById($id);
if (!$app['database']->delete('product', 'id', $id)) {
    unlink("../" . $img_path);
    header("Location: ../products.php");
} else {
    echo "error";
}
