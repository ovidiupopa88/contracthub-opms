<?php

// *** CONFIG *** //
// Database
$dbhost = "localhost";
$dbuser = "contracthubdb";
$dbpass = "chadmin333@";
$dbname = "contracthubdb";
// Users
$users_opms_table = "users_opms";
$users_contracthub_table = "users_contracthub";
$users_admin_table = "users_admin";

// connect to the database
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>