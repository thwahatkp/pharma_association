<?php
$table = <<<EOT
(
    SELECT * FROM careers
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