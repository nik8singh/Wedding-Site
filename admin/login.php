<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="common/css/login.css">
    <?php
    session_start();
    ?>
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="common/PHP/authenticate.php" method="post">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login">
        <?php
        if (isset($_SESSION["error"])) {
            $error = $_SESSION["error"];
            echo $error;
        }
        ?>
</div>
</body>
</html>

<?php
unset($_SESSION["error"]);
?>