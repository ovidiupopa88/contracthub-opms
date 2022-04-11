<?php
session_start();

// *** CONFIG *** //
// Database
$dbhost = "localhost";
$dbuser = "contracthub";
$dbpass = "chadmin333@";
$dbname = "contracthubdb";
// Users
$users_opms_table = "users_opms";
$users_contracthub_table = "users_contracthub";
$users_admin_table = "users_admin";


// initializing variables
$opms_username = "";
$opms_email    = "";
$opms_fullname = "";
$errors = array();
// connect to the database
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// LOGIN OPMS USER
if (isset($_POST['login_opms user'])) {
    $opms_username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($opms_username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$opms_username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $opms_username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
        array_push($errors, "Wrong username/password combination");
        }
    }
    echo "connected";
}
?>

