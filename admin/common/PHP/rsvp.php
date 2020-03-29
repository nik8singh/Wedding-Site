<?php
include('../../../dbConfig.php');
$sql = "SELECT * FROM rsvp";
$result = $conn->query($sql);

//Initialize array variable
$dbdata = array();

//Fetch into associative array
while ($row = $result->fetch_assoc()) {
    $dbdata[] = $row;
}

//Print array in JSON format
echo json_encode($dbdata);

$conn->close();
