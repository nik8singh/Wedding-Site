<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link
            crossorigin="anonymous"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            rel="stylesheet"
    />
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="common/css/login.css">


    <link href="common/css/common.css" rel="stylesheet">
    <?php
    session_start();
    ?>
</head>
<body>
<header>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="height: 100px; font-size: 40px">
            <a class="navbar-brand" href="#">WEDDING ADMIN</a>
            <button class="navbar-toggler" data-target="#navbarCollapse" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="../index.html">Main Website</a>
                </div>
            </div>
        </nav>
    </div>
</header>
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
    </form>
</div>
</body>
</html>


<!-- Latest compiled and minified CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<?php
unset($_SESSION["error"]);
?>


