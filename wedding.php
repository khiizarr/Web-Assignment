 <?php
    if ($_SESSION['active'] = TRUE) {
        include('menulogged.php');
    } else
        include_once "menu.php";
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="stylesheet/wedding.css" />
     <title>Wedding</title>
 </head>

 <body>
     <div class="image">
         <h2>Wedding</h2>
         <a href="wedding.php">
             <img src="images/about.jpg" alt="">
         </a>
         </br>
         <p>
             Our team is dedicated to ensuring that the day you've always imagined becomes a reality.

             We will design a personalized proposal based on your objectives and needs from the start. Following your booking, your MK team will work with you to lay the groundwork for your wedding, br developing an inspiration board and floor plan based on your own vision. Customization is ensured with us, from individual lighting to seating charts.

             From start to finish, we care about your wedding planning experience. So unwind and enjoy yourself. Your MK staff will walk you through every step of the process, ensuring that your special day is stress-free and unforgettable.
         </p>

     </div>

     <div class="image2">
         <h2>Wedding Services</h2>
         <a href="event.php">
             <img src="images/services.jpg" alt="">
         </a>

         <p>
             || Ceremony & Reception Coordination
             || Rehearsal Dinner Coordination
             || Rentals & Vendor Coordination
             || Wedding Day Timeline
             || Floor Plan Design
             || Wedding Concept & Design
             || Budget Management
             || Security & Staffing
             || Tenting
             || Transportation & Parking
         </p>

     </div>

     <section class="container content">
         <h3>Testimonial</h3>
         <?php
            include_once "testimonial.php";
            ?>
     </section>


     <div class="book">
         <h3>Planning a wedding?</h3>
         <a href="calender.php"><button class="button" role="button"><b>Book Now!</b></button></a>
     </div>

 </body>

 </html>