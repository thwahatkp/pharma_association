<?php

$database = require '../../database/bootstrap.php';
$id = $_GET['id'];
$franchisee = $app['database']->InfoByID('franchisee', $id);
if (!$app['database']->delete('franchisee', 'id', $id)) {
   
    header("Location: ../franchisees.php");
} else {
    echo "error";
}
