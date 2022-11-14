<?php

require_once('../utils/FileUtil.php');

$database = require '../../database/bootstrap.php';
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
   
    $check1 = $app['database']->dynamicUpdate('franchisee', [
        'name' => $_POST['name'],
        'serial_no' => $_POST['serial_no'],
        'address' => $_POST['address'],
        'district' => $_POST['district'],
        'city' => $_POST['city'],
        'area' => $_POST['area'],
        'service' => $_POST['service'],
        'contact_one' => $_POST['contact_one'],
        'contact_two' => $_POST['contact_two'],
        'email' => $_POST['email'],
        'map' => $_POST['map'],
      
    ], $id);
    if (!$check1) {

        //createfranchisee($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $id);

        header("Location: ../franchisees.php");
    }
} else {
     {
        $franchisee_id = $app['database']->insert('franchisee', [
            'name' => $_POST['name'],
            'serial_no' => $_POST['serial_no'],
            'address' => $_POST['address'],
            'district' => $_POST['district'],
            'city' => $_POST['city'],
            'area' => $_POST['area'],
            'service' => $_POST['service'],
            'contact_one' => $_POST['contact_one'],
            'contact_two' => $_POST['contact_two'],
            'email' => $_POST['email'],
            'map' => $_POST['map'],
           
        ]);
        // if ($franchisee_id) {

        //     createfranchisee($_POST['title'], $_POST['subtitle'], $_POST['content'], $img_path, $franchisee_id);
        // }
        header("Location: ../franchisees.php");
    }
}
echo 'error';
