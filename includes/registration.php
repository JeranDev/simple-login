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
$registerName = $_POST['registerName'];
$registerPass = $_POST['registerPass'];

$s = "select * from users where username = '$registerName'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Jeran Burget" />
    <link rel="stylesheet" href="../views/style.css" />
    <title>JeranDev - Registration</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <img src="../views/images/monkey-resize.png" />
            <br />
            <h1 id="headText">Enter Your Desired Login</h1>
            <br />
            <form method="POST" action="../includes/db.php">
                <input type="text" name="registerName" id="registerName" placeholder="Username" required />
                <br />
                <input type="password" name="registerPass" id="registerPass" placeholder="Password" required />
                <br />
                <input type="submit" id="newAccount" value="Create" />
                <input type="button" id="back" value="Back" />
            </form>
        </div>
    </div>
    <script>
    document.getElementById("back").onclick = function() {
        window.location.href = "../index.php";
    };
    </script>
    <?php
    if($num == 1) {
        echo "<script> document.getElementById('headText').innerHTML = 'Username is Taken!' </script>";
    } else {
        $reg = "insert into users (username, password) values ('$registerName' , '$registerPass')";
        mysqli_query($con, $reg);
        echo "<script> document.getElementById('headText').innerHTML = 'Registration Successful!';
        document.getElementById('newAccount').disabled = true; </script>";
        
    }
    ?>
</body>

</html>