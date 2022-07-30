<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.651), rgba(0, 0, 0, 0.61)),
            url(https://s7d2.scene7.com/is/image/ritzcarlton/RCGNDCA_00228?$XlargeViewport100pct$);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom center;

    }
</style>
<?php
if ($_SESSION['active'] = TRUE) {
    include('menulogged.php');
} else
    include_once "menu.php";

include('book/admin/db_connect.php');

$db = $conn;
$tableName = "feedback";
$columns = ['id', 'quality', 'feedback'];

$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY id ASC";
        $result = $db->query($query);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
?>

<style>
    body {
        margin-top: 50px;
    }
</style>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive" style="margin-top: 90px; margin-left: 210px;">
                    <table class="table table-bordered" style="background-color: white">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Rate</th>
                                <th>Feedback</th>
                        </thead>
                        <tbody>
                            <?php
                            if (is_array($fetchData)) {
                                $sn = 1;
                                foreach ($fetchData as $data) {
                            ?>
                                    <tr>
                                        <td><?php echo $_SESSION['username'] ?? ''; ?></td>
                                        <td><?php echo $data['quality'] ?? ''; ?></td>
                                        <td><?php echo $data['feedback'] ?? ''; ?></td>
                                    </tr>
                                <?php
                                    $sn++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="3">
                                        <?php echo $fetchData; ?>
                                    </td>
                                <tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>