<?php
include_once "menu.php";
include "connect.php";
error_reporting(0);
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: login.php");
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}

?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet/login.css" />
</head>

<body>
    <div class="center">
        <h1>Register</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="username" value="<?php echo $username; ?>" required>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <label>Email</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                <label>Confirm Password</label>
            </div>

            <input type="submit" value="Register" name="submit" />

    </div>
    </form>
    </div>
</body>

</html>