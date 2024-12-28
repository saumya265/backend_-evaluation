<?php
// session_start();
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (isset($_SESSION['loggedin']) == true) {
//         include 'db/config.php';
//         $loggedin_user_name = $_SESSION["loggedin_user_name"];
//         $loggedin_user_email = $_SESSION["loggedin_user_email"];
//         $message = $_POST['message'];
//         $sql = "INSERT INTO `messages`(`user_name`, `user_email`, `message`) VALUES ('$loggedin_user_name', '$loggedin_user_email', '$message')";
//         $result = mysqli_query($connection, $sql);
//     } else {
//         echo 'Please login first';
//     }
// }