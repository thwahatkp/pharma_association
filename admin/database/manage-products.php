<?php

require_once('../utils/FileUtil.php');

$database = require '../../database/bootstrap.php';
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $img_path = $app['database']->GetProductImageById($id);
    if ($_FILES['productimage']['name'] != '') {
        unlink("../" . $img_path);
        $img_path = FileUtil::uploadSingleImage('productimage', 'product-images');
    }
    $check1 = $app['database']->dynamicUpdate('product', [
        'title' => $_POST['title'],
        'type' => $_POST['type'],
        'kg' => $_POST['kg'],
        'description' => $_POST['description'],
        'img_path' => $img_path,
    ], $id);
    if (!$check1) {

        //createproduct($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $id);

        header("Location: ../products.php");
    }
} else {
    $img_path = FileUtil::uploadSingleImage('productimage', 'product-images');
    if ($img_path != '') {
        $product_id = $app['database']->insert('product', [
            'title' => $_POST['title'],
            'type' => $_POST['type'],
            'kg' => $_POST['kg'],
            'description' => $_POST['description'],
            'img_path' => $img_path,
        ]);
        // if ($product_id) {

        //     createproduct($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $product_id);
        // }
        header("Location: ../products.php");
    }
}
echo 'error';
