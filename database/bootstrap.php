<?php
$app = [];
$app['config'] = require 'config.php'; 
require 'connection.php';
require 'queryBuilder.php';
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);