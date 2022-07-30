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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" href="stylesheet/feedback.css" />
  <title>Let Us Know Your Feedback</title>
</head>

<body>

  <form method="post">

    <div id="panel" class="panel-container">
      <strong>How satisfied are you with our <br /> customer support performance?</strong>
      <div class="ratings-container">
        <div class="rating">
          <img src="https://cdn-icons-png.flaticon.com/512/725/725099.png" alt="">
          <input type="radio" name="quality" value="Unhappy"> <small>Unhappy</small>
        </div>

        <div class="rating">
          <img src="https://cdn-icons-png.flaticon.com/512/725/725085.png" alt="" />
          <input type="radio" name="quality" value="Neutral"> <small>Neutral</small>
        </div>

        <div class="rating active">
          <img src="https://cdn-icons-png.flaticon.com/512/742/742751.png" alt="" />
          <input type="radio" name="quality" value="Satisfied"> <small>Satisfied</small>
        </div>
      </div>
      <div class="textbox">
        <label for="textbox">Write your feedback.</label>

        <textarea id="suggestion" name="suggestion" rows="4" cols="50"></textarea>
      </div>
      <button class="btn" name="submit">Send Review</button>
      <button class="btn"><a href="reviews.php" style="text-decoration: none; color: white">View Feedbacks</a></button>

    </div>
  </form>
  <script src="scripts/feedback.js"></script>
</body>

</html>

<?php
include('book/admin/db_connect.php');
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$query = "insert into feedback(feedback, quality)values('$feedback_txt', '$q_score' )";
$result = mysqli_query($conn, $query);
?>