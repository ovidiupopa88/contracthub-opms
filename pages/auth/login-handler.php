<?php
session_start();

require_once('server/config.php');

// initializing variables
$opms_username = "";
$opms_email    = "";
$opms_fullname = "";
$errors = array();

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
            
            $_SESSION['username'] = $opms_username;
            $full_name = $row[5];
            $_SESSION['fullname'] = $full_name;
            $role = $row[4];
            $_SESSION['role'] = $role;
            $joined = $row[6];
            $_SESSION['joined'] = $joined;

            $_SESSION['success'] = "You are now logged in";
            $_SESSION['loggedin'] = true;
            header('location: ../opms/index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>

