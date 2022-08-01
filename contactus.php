<?php
if ($_SESSION['active'] = TRUE) {
  include('menulogged.php');
} else
  include_once "menu.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us</title>
	<link rel="stylesheet" href="stylesheet/contactus.css">
</head>
<body>
	
<div class="wrapper">
  <div class="title">
    <h1>contact us form</h1>
  </div>

  <form action="" method="POST">
  <div class="contact-form">
    <div class="input-fields">
      <input type="text" name= "username" class="input" placeholder="Name" value="<?php echo $_POST['username']; ?>" >
      <input type="text" name= "email" class="input" placeholder="Email Address" value="<?php echo $_POST['email']; ?>" >
      <input type="text" name= "phone" class="input" placeholder="Phone" value="<?php echo $_POST['phone']; ?>" >
      <input type="text" name= "subject" class="input" placeholder="Subject" value="<?php echo $_POST['subject']; ?>" >
    </div>
    <div class="msg">
      <textarea name= "message" placeholder="Message" value="<?php echo $_POST['message']; ?>" ></textarea>

      <div class="btn">
        <input type="submit" value="Send" name="submit" />
    </div>
      
    </div>
  </div>
</form>
</div>
	
</body>
</html>

<?php

include('book/admin/db_connect.php');
$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$feedback_txt = $_POST['suggestion'];
$query = "insert into contact(username, email, phone, subject, message)values('$name', '$email', '$phone', '$subject', '$message' )";
$result = mysqli_query($conn, $query);

?>