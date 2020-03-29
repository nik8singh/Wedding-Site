<?php
include('../../dbConfig.php');

// Escape user inputs for security
$guestname = mysqli_real_escape_string($conn, $_REQUEST['guestname']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['guestphone']);
$adult_guest = mysqli_real_escape_string($conn, $_REQUEST['guestAdults']);
$child_guest = mysqli_real_escape_string($conn, $_REQUEST['guestChild']);

if(isset($_POST['guestvisa'])){
    //is checked and value = 1
    $visa = 1;
}
else{
    //is not checked and value=0
    $visa=0;
}

if($_POST['yesorno'] == 'true'){
    //is checked and value = 1
    $response = 1;
}
else{
    //is not checked and value=0
    $response=0;
}

$sql = "INSERT INTO rsvp (name, phone, response, adult_guest, child_guest, visa)
VALUES ('$guestname', '$phone', $response, '$adult_guest','$child_guest', $visa)";

if ($conn->query($sql) === TRUE) {

} else {
    header('HTTP/1.1 500 database issue '.' response : '.$response.$guestname .' ' .$phone.' '.$adult_guest .' '.$child_guest.' '. $visa );
    header('Content-Type: application/json; charset=UTF-8');
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
