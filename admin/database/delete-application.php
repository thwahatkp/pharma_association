<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$img_path = $app['database']->GetApplicationImages($id);
if (!$app['database']->delete('applications', 'id', $img_path)) {
    unlink("../../" . $id);
    header("Location: ../application.php");
} else {
    echo "error";
}