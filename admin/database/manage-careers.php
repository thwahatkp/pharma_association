<?php
require_once('../utils/FileUtil.php');

$database = require '../../database/bootstrap.php';
if(isset($_REQUEST['submit'])){
    $careers_id = $app['database']->insert('careers', [
        'title' => $_POST['name'],
        'job_description' => $_POST['job_description'],
        'qualification' => $_POST['qulalification'],
        'posted_on' => $_POST['posted_on']
    ]);
    header("Location: ../careers.php");

}else{
    echo "notwork";
}

?>