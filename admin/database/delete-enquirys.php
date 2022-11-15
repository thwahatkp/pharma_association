<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$enquiry = $app['database']->InfoByID('enquiry', $id);

if(!$app['database']->delete('enquiry', 'id', $id))  {
    header("Location: ../enquirys.php");
}
else {
    echo "error";
}

?>