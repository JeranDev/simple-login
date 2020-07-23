<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Jeran Burget" />
    <link rel="stylesheet" href="styles/styles.css" />
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <img src="images/monkey-resize.png" />
            <br />
            <h1>Enter Your Desired Login</h1>
            <br />
            <input type="text" id="username" placeholder="Username" required />
            <br />
            <input type="password" id="password" placeholder="Password" required />
            <br />
            <input type="submit" id="newAccount" value="Create" disabled />
            <input type="button" id="back" value="Back" />
        </div>
    </div>
    <script src="scripts/registerscripts.js"></script>
</body>

</html>