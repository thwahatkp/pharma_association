<?php
$table = <<<EOT
(
    SELECT applications.id,careers.title,name,phone,email,message,img_path FROM `applications` JOIN careers ON applications.job_id = careers.id
) temp
EOT;
$primaryKey = 'id';
$columns = [];
foreach($_GET['columns'] as $column)
{
    $row = array('db' => $column["data"], 'dt' => $column["data"]);
    array_push($columns,$row);
}

require '../../../database/sql_details.php';
require( 'ssp.class.php' );
echo json_encode(SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns));