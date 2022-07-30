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
    <link rel="stylesheet" href="stylesheet/wedding.css" />
    <title>Corporate Events</title>
</head>

<body>
    <div class="image">
        <h2>Wedding</h2>
        <a href="wedding.php">
            <img src="images/about.jpg" alt="">
        </a>
        </br>
        <p>
            The corporate world moves at a breakneck pace and is rife with minutiae. When you work with MK, we handle all of the technicalities while delivering a one-of-a-kind experience for your guests that aligns with your company's goals.

            We'll help you plan and execute your event strategy, whether it's to recruit new customers, educate your staff, or commemorate company milestones. Once you've engaged us, we'll work with you to lay the groundwork for your event, developing an inspiration board and a floor plan based on your objectives. Your MK team will then bring your brand to life through our high-quality planning and management services, as well as day-of coordination, from production to design. </p>

    </div>

    <div class="image2">
        <h2>Wedding Services</h2>
        <a href="event.php">
            <img src="images/services.jpg" alt="">
        </a>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque recusandae quia enim ipsum iusto in sapiente? Repudiandae similique, unde accusamus earum, soluta consectetur doloribus ullam praesentium quisquam voluptate, vero dolore.
        </p>

    </div>

    <section class="container content">
        <h3>Testimonial</h3>
        <?php
        include_once "testimonial.php";
        ?>
    </section>


    <div class="book">
        <h3>Planning an event?</h3>
        <a href="book/index.php?page=eventvenue"><button class="button" role="button"><b>Book Now!</b></button></a>
    </div>

</body>

</html>