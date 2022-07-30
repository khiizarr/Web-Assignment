<?php
include_once "menu.php";
include "connect.php";
session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['active'] = TRUE;
        header("Location: homelogged.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

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
        <h1>Login</h1>
        <form method="POST">
            <div class="txt_field">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <label>Password</label>
            </div>
            <div class="pass"><a href="forgotpassword.php">Forgot Password?</a></div>
            <input type="submit" value="Login" name="submit" />
            <div class="signup_link">Not a member? <a href="register.php">Sign up</a></div>
            <div class="signup_link"> <a href="home.php">Continue as Guest</a></div>

    </div>
    </form>
    </div>
</body>

</html>