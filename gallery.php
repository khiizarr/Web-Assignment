<!DOCTYPE html>
<html lang="en">
<?php
if ($_SESSION['active'] = TRUE) {
    include('menulogged.php');
} else
    include_once "menu.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylesheet/gallery.css">
    <title>expanding cards</title>
</head>

<body>
    <div class="container">
        <div class="panel active" style="background-image: url(https://images.unsplash.com/photo-1535515082057-d33cc6f76d6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=400&q=60);">
            <h3>wedding day</h3>
        </div>
        <div class="panel" style="background-image: url(https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80);">
            <h3>new pic2</h3>
        </div>
        <div class="panel" style="background-image: url(https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8d2VkZGluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60);">
            <h3>new pic3</h3>
        </div>
        <div class="panel" style="background-image: url(https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d2VkZGluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60);">
            <h3>new pic4</h3>
        </div>
        <div class="panel" style="background-image: url(https://images.unsplash.com/photo-1551847656-53899b4fd65b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXRodW1ibmFpbHx8TVRBYklReU94Z2t8fGVufDB8fHx8&dpr=1&auto=format&fit=crop&w=291.2&q=60);">
            <h3>new pic5</h3>
        </div>
        <div class="panel" style="background-image: url(https://images.unsplash.com/photo-1545232979-8bf68ee9b1af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdlZGRpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=900&q=60);">
            <h3>new pic6</h3>
        </div>
        <div class="panel" style="background-image: url(https://images.unsplash.com/photo-1544078751-58fee2d8a03b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDExfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=400&q=60);">
            <h3>new pic7</h3>
        </div>
    </div>

    <script src="scripts/gallery.js"></script>

</body>

</html>