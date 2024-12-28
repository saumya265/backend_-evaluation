<?php
session_start();
$_SESSION['loggedin'] = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db/config.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['loggedin_user_name'] = $row['name'];
                $_SESSION['loggedin_user_email'] = $row['email'];
                header("location: index.php");
                exit();
            } else {
                echo "Invalid Credentials";
                // session_unset();
                unset($_SESSION['loggedin']);
                $_SESSION['invalid_credentials'] = true;
                header("location: index.php");
            }
        }
    } else {
        echo "No user found";
        // session_unset();
        unset($_SESSION['loggedin']);
        $_SESSION['user_not_found'] = true;
        header("location: index.php");
    }
}
