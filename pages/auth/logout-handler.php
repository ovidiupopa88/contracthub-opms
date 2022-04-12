<?php
session_start();

$_SESSION['username'] = null;
unset ($_SESSION['username']);
$_SESSION['fullname'] = null;
unset ($_SESSION['username']);
$_SESSION['success'] = null;
unset ($_SESSION['username']);

$_SESSION['loggedin'] = false;

header('location: ./login-opms.php');

?>