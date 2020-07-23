<?php
  session_start();
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if ($username != "jeran"){
      header("Location: index.php");
    } else if ($password !="stinky") {
      header("Location: index.php");
    } else {
      $_SESSION["isLoggedIn"] = true;
      header("Location: login.php");
    }
?>