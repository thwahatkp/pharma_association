<?php
require 'sql_details.php';
return [
    'database' => [
        'name' => $sql_details['db'],
        'username' => $sql_details['user'],
        'password' => $sql_details['pass'],
        'connection' => 'mysql:host=' . $sql_details['host'],
        'options' => []
    ] 
];

