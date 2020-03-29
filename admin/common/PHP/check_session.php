<?php
session_start();

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['name'])) {
    header('Location: login.php');
}