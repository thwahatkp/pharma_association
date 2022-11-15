<?php
require_once('./utils/FileUtil.php');

$database = require('./database/bootstrap.php');
echo "working";
if ($_POST['name'] != "") {
    $membership = $app['database']->insert('membership', [
        'company_name' => $_POST['name'],
        'address' => $_POST['address'],
        'select_option' => $_POST['checkbox'],
        'partner_director' => $_POST['partner'],
        'mobile' => $_POST['mobile'],
        'email' => $_POST['email'],
        'name_p_d' => $_POST['partnersName'],
        'mobile_p_d' => $_POST['partnersMob'],
        'brands' => $_POST['brand'],
        'date' => $_POST['date'],
        'division' => $_POST['division'],
        'other_state' => $_POST['state'],
    ]);
    header("location:./chamberofpharma/thank-you.php");
}

?>
    

    

