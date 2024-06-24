<?php

include "service/database.php";

if (isset($POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="sevice/style11.css"></script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2> 
        <form action="login.php" method="POST">
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <button type="submit" >Login</button> 
        </form>
        <p>Belum punya akun? <a href="daftar.html">Daftar disini</a></p>
    </div>
</body>
</html>


