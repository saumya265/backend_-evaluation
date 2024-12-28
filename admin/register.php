<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    include 'db/config.php';

    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `admin`(`name`, `phone_number`, `email`, `password`) VALUES ('$name', '$phone_number', '$email', '$hashed_password')";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        $_SESSION['registered'] = true;
        header('location: index.php');
    }
}
