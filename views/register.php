<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Jeran Burget" />
    <link rel="stylesheet" href="style.css" />
    <title>JeranDev - Registration</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <img src="images/monkey-resize.png" />
            <br />
            <h1 id="headText">Enter Your Desired Login</h1>
            <br />
            <form method="POST" action="../includes/registration.php">
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
        window.location.href = "index.php";
    };
    </script>
</body>

</html>