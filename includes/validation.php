<?php
session_start();

//database settings
$server = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'login';

//connect to the database
$con = mysqli_connect($server, $user, $pass, $db);

//select the database
mysqli_select_db($con, $db);

//registration information
$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['isLoggedIn'] = true;
    header('location:../views/members.php');
} else {
    header('location:../views/index.php');
}

?>