<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$career = $app['database']->InfoByID('careers', $id);

if(!$app['database']->delete('careers', 'id', $id))  {
    header("Location: ../careers.php");
}
else {
    echo "error";
}

?>