<?php
include('connect.php');
//include('menu.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     <link rel="stylesheet" href="stylesheet/venue.css">
 -->
    <title>Wedding Venue</title>
</head>

<body>
    <header class="masthead">
    </header>
    <div class="container-fluid mt-3 pt-2">
        <h4 class="text-center text-white">List of Our Event Venues</h4>
        <hr class="divider">
        <div class="row-items">
            <div class="col-lg-12">
                <div class="row">
                    <?php
                    $rtl = 'rtl';
                    $ci = 0;
                    $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                    if ($host == 'http://localhost/test/wedding.php') {
                        $venue = $conn->query("SELECT * from venue where category = 'wedding' ");
                    } else if ($host == 'http://localhost/test/corporate.php') {
                        $venue = $conn->query("SELECT * from venue where category = 'event' ");
                    } else {
                        $venue = $conn->query("SELECT * from venue where category = 'wedding' ");
                    }
                    while ($row = $venue->fetch_assoc()) :

                        $ci++;
                        if ($ci < 3) {
                            $rtl = '';
                        } else {
                            $rtl = 'rtl';
                        }
                        if ($ci == 4) {
                            $ci = 0;
                        }
                    ?>
                        <div class="col-md-6">
                            <div class="card venue-list <?php echo $rtl ?>" data-id="<?php echo $row['id'] ?>">

                                <div id="imagesCarousel_<?php echo $row['id'] ?> card-img-top " class="carousel slide" data-ride="carousel">
                                    <?php ?>
                                    <div class="carousel-inner">

                                        <?php
                                        $images = array();
                                        $fpath = 'images/uploads/venue_' . $row['id'];
                                        $images = scandir($fpath);
                                        $i = 1;
                                        foreach ($images as $k => $v) :
                                            if (!in_array($v, array('.', '..'))) :
                                                $active = $i == 1 ? 'active' : '';

                                        ?>
                                                <div class="carousel-item <?php echo $active ?>">
                                                    <img class="d-block w-100" src="<?php echo $fpath . '/' . $v ?>" alt="">
                                                </div>
                                        <?php
                                                $i++;
                                            else :
                                                unset($images[$v]);
                                            endif;
                                        endforeach;
                                        ?>
                                        <a class="carousel-control-prev" href="#imagesCarousel_<?php echo $row['id'] ?>" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#imagesCarousel_<?php echo $row['id'] ?>" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-center text-center h-100">
                                        <div class="">
                                            <div>
                                                <h3><b class="filter-txt"><?php echo ucwords($row['venue']) ?></b></h3>
                                                <small><i><?php echo $row['address'] ?></i></small>
                                            </div>
                                            <div>
                                                <span class="truncate" style="font-size: inherit;"><small><?php echo ucwords($row['description']) ?></small></span>
                                                <br>
                                                <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: <?php echo number_format($row['rate'], 2) ?></span>
                                                <br>
                                                <br>
                                                <button class="btn btn-primary book-venue align-self-end" type="button" data-id='<?php echo $row['id'] ?>'>Book</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <br>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    // $('.card.venue-list').click(function(){
    //     location.href = "index.php?page=view_venue&id="+$(this).attr('data-id')
    // })
    $('.book-venue').click(function() {
        uni_modal("Submit Booking Request", "booking.php?venue_id=" + $(this).attr('data-id'))
    })
    $('.venue-list .carousel img').click(function() {
        viewer_modal($(this).attr('src'))
    })
</script>

</html>