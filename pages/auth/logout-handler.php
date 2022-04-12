<?php
session_start();

unset ($_SESSION['username']);
unset ($_SESSION['username']);
unset ($_SESSION['username']);
unset ($_SESSION['role']);
unset ($_SESSION['joined']);

$_SESSION['loggedin'] = false;

header('location: ./login-opms.php');

?>