<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google\Client();
$client->setAuthConfigFile('client_secrets.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/malabarGas/admin/oauth2callback.php');
$client->addScope('email');
$client->addScope('profile');

if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $client->setAccessToken($_SESSION['access_token']);
  $gauth = new Google\Service\Oauth2($client);
  $google_info = $gauth->userinfo->get();
  $_SESSION['email'] = $google_info->email;
  $_SESSION['name'] = $google_info->name;
  $_SESSION['image'] = $google_info->image;
  authenticate_admin();
}

function authenticate_admin()
{
  $database = require '../database/bootstrap.php';
  $isAdmin = $app['database']->CheckIsAdmin($_SESSION['email']);
  $_SESSION['isAdmin'] = $isAdmin;
  if (!$isAdmin) {
    unset($_SESSION['access_token']);
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/malabarGas/admin/forbidden.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  } else {
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/malabarGas/admin/index.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  }
}