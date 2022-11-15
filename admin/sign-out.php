<?php
session_start();
unset($_SESSION['access_token']);
unset($_SESSION['email']);
unset($_SESSION['name']);
$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/chamberofpharma/admin/pages-login.php';
header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
