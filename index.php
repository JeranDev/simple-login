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
            <h1>Welcome!</h1>
            <br />
            <form method="POST" action="form.php">
                <input type="text" name="username" id="username" placeholder="Username" required />
                <br />
                <input type="password" name="password" id="password" placeholder="Password" required />
                <br />
                <input type="submit" id="logIn" value="Log In" />
                <input type="button" id="register" value="Register" />
            </form>
        </div>
    </div>
    <script src="scripts/indexscripts.js"></script>
</body>

</html>