<?php
include_once('functions.php');
?>
<!DOCTYPE html>
<html>
<style>
    * {}

    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.651), rgba(0, 0, 0, 0.61)),
            url(https://s7d2.scene7.com/is/image/ritzcarlton/RCGNDCA_00228?$XlargeViewport100pct$);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom center;
        padding-top: 90px;
        padding-bottom: 92px;
    }
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Event Calendar</title>
    <link type="text/css" rel="stylesheet" href="jscript/style.css" />
    <link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.min.css" />
    <script src="jscript/jquery.min.js"></script>
</head>

<body>
    <div id="calendar_div" class="container">
        <h1 style="align:center">List available venues as from : </h1>
        <?php echo getCalender(); ?>
    </div>
</body>

</html>