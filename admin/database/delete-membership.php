<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$enquiry = $app['database']->InfoByID('membership', $id);

if(!$app['database']->delete('membership', 'id', $id))  {
    header("Location: ../membership.php");
}
else {
    echo "error";
}

?>