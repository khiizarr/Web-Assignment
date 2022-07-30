<!DOCTYPE html>
<html lang="en">
<?php
include_once "menu.php";

session_start();


?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Lobster&family=Paytone+One&family=Playball&display=swap" rel="stylesheet">
    <title>Event Planner</title>
</head>

<body>

    <div class="hero">
        <div class="container">
            <h1 style='font-family: "Playball", cursive; '>MK</h1>
        </div>
        <a class="button" href="login.php" style="position: absolute; margin-left: 0%">Contact us</a>

    </div>



    <section class="container content">
        <h2>The MK Experience</h2>
        <p>It is unlike anything else. Our full-service event planning and design staff will walk you through every step of the process, delivering a stress-free experience from beginning to end. Customization is ensured when you work with us. We will build a personalized proposal suited to your exact objectives and needs from the start. You'll be connected with an MK Team who will work with you to make your idea a reality. We will collaborate with some of the top suppliers in Mauritius to handle all of the specifics such as meeting scheduling, delivery dates, payments, day-of setup, and more. When it comes time for the performance, our crew will work relentlessly to ensure that your event is seamless and unforgettable.</p>

        <h3>Testimonial</h3>
        <?php
        include_once "testimonial.php";
        ?>
    </section>

    <script src="script.js"></script>

    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>

</body>

</html>