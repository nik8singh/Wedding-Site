<?php
session_start();

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['adminusername'], $_POST['adminpassword'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

include('../../../dbConfig.php');
$error = "<div style='color: darkred; margin: 10px;'><strong>Oh snap!</strong> username/password incorrect</div>";

$user = $_POST['adminusername'];
$password = trim($_POST['adminpassword']);
$sql = "SELECT * FROM myadminusers where username = '$user' AND password = '$password'";
$result = $conn->query($sql);

//$error.= " user =  ". $user. " number of rows : ". $result->num_rows. " <br> for =". $sql;

if ($result->num_rows > 0) {
    $row = $result->fetch_row();
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['adminusername'];
    $_SESSION['id'] = $row[0];
    header('Location: ../../index.php');

} else {
    $_SESSION["error"] = $error;
    header('Location: ../../login.php');
}


// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
//if ($stmt = $conn->prepare('SELECT password FROM myadminusers WHERE username = ?')) {
//    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
//    $stmt->bind_param('s', $_POST['adminusername']);
//    $stmt->execute();
//
//    // Store the result so we can check if the account exists in the database.
//    $stmt->store_result();
//    if ($stmt->num_rows > 0) {
//        $stmt->bind_result($id, $password);
//        $stmt->fetch();
//        $error .= " || Checking Password - ". $password;
//        // Account exists, now we verify the password.
//        if ($_POST['adminpassword'] === $password) {
//            // Verification success! User has loggedin!
//            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
//            session_regenerate_id();
//            $_SESSION['loggedin'] = TRUE;
//            $_SESSION['name'] = $_POST['adminusername'];
//            $_SESSION['id'] = $id;
//            header('Location: ../../index.php');
//        } else {
//            $_SESSION["error"] = $error;
//            header('Location: ../../login.php');
//        }
//    } else {
//        $_SESSION["error"] = $error;
//        header('Location: ../../login.php');
//    }

$conn->close();
//}

