<?php
session_start();

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


// initializing variables
$opms_username = "";
$opms_email    = "";
$opms_fullname = "";
$errors = array();
// connect to the database
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// LOGIN OPMS USER
if (isset($_POST['login_opms_user'])) {
    
    $opms_username = mysqli_real_escape_string($db, $_POST['username']);
    $opms_password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($opms_username)) {
        array_push($errors, "Username is required");
    }
    if (empty($opms_password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        //echo "Old: " . $opms_password;
        $opms_password = md5($opms_password);
        //echo "  Hashed: " . $opms_password;
        $query = "SELECT * FROM users_opms WHERE username='$opms_username' AND password='$opms_password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $row = mysqli_fetch_row($results);
            $full_name = $row[5];
            $_SESSION['username'] = $opms_username;
            $_SESSION['fullname'] = $full_name;
            $_SESSION['success'] = "You are now logged in";
            $_SESSION['loggedin'] = true;
            header('location: ../opms/index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>

