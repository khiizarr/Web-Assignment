<?php
if ($_SESSION['active'] = TRUE) {
    include('menulogged.php');
} else
    include_once "menu.php";
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet/services.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Lobster&family=Playball&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
</head>

<body>

    <div class="back">
        <div class="title">
            <br>
            <h2>MK</h2>
            <h1>EVENTS</h1>
        </div>
        <br>
    </div>
    <div class="image">
        <h2>Wedding</h2>
        <a href="wedding.php">
            <img src="images/wedding.jpg" alt="">
        </a>
        </br>
        <h5>
            Make the day you've always desired, </br> the day you'll remember forever.
        </h5>

    </div>

    <div class="image">
        <h2>Corporate Events</h2>
        <a href="corporate.php">
            <img src="images/events.jpg" alt="">
        </a>
        <br>
        <h5>
            Impress your visitors with a one-of-a-kind event <br> that reflects your company's mission.
        </h5>

    </div>

    <div class="image">
        <h2>Social Gathering</h2>
        <a href="social.php">
            <img src="images/social.jpg" alt="">
        </a>
        <br>
        <h5>
            Receptions, birthday celebrations, and other events. <br> Let us help you plan your next social occasion.
        </h5>
    </div>

</body>

</html>