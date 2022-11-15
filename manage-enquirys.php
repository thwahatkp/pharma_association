<?php
    $database = require './database/bootstrap.php';



if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $check1 = $app['database']->dynamicUpdate('enquiry', [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'message' => $_POST['message'],
    ], $id);
    if($check1) {
        echo 'error';
    }
    else {
        header("Location:./thank-you.php");
    }   
}
else {
    $enquiry_id = $app['database']->insert('enquiry', [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'message' => $_POST['message'],
    ]);
    if($enquiry_id) {
        header("Location:./thank-you.php");
    }
    echo 'error';
}