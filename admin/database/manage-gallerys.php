<?php

require_once('../utils/FileUtil.php');

$database = require '../../database/bootstrap.php';
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $img_path = $app['database']->GetGalleryImageById($id);
    if ($_FILES['galleryimage']['name'] != '') {
        unlink("../" . $img_path);
        $img_path = FileUtil::uploadSingleImage('galleryimage', 'gallery-images');
    }
    $check1 = $app['database']->dynamicUpdate('gallery', [
        'title' => $_POST['title'],
        'img_path' => $img_path,
    ], $id);
    if (!$check1) {

        //creategallery($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $id);

        header("Location: ../gallerys.php");
    }
} else {
    $img_path = FileUtil::uploadSingleImage('galleryimage', 'gallery-images');
    if ($img_path != '') {
        $gallery_id = $app['database']->insert('gallery', [
            'title' => $_POST['title'],
            'img_path' => $img_path,
        ]);
        // if ($gallery_id) {

        //     creategallery($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $gallery_id);
        // }
        header("Location: ../gallerys.php");
    }
}
echo 'error';
