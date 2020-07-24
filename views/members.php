<?php
session_start();

if($_SESSION["isLoggedIn"] != true) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Jeran Burget" />
    <link rel="stylesheet" href="style.css" />
    <title>JeranDev - Members Page</title>
</head>

<body>
    <div class="container">
        <div class="wrapper" style="width: 600px;">
            <div id="buttons">
                <button id="start">Start the Show!</button>
                <button id="stop">Stop the Show!</button>
            </div>
            <p id="displayColor"></p>

            <canvas id="whiteBoard" width="400" height="400"></canvas>
            <form method="POST" action="../includes/logout.php">
                <button id="logout">Log Out</button>
            </form>
        </div>
    </div>
    <script src="lightshow.js"></script>
</body>

</html>