<?php

include '../config/conn.php';

if (isset($_POST['submit'])) {
    $kasir = $_POST['user'];
    $pass = $_POST['pass'];

    $login = "SELECT * FROM akun WHERE nama_kasir = '$kasir' AND password = '$pass'";

    $result = mysqli_query($conn, $login);
    if (mysqli_num_rows($result) == 1) {
        header("Location:dashboard.php");
    } else {
        echo "Password atau Username anda salah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
</head>

<body>
<div class="container_login">

    <form action="" method="post">
        <div class="login">
            <h2>Login</h2>
            <div>
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <button type="submit" name="submit">login</button>
        </div>
    </form>
</div>
</body>

</html>