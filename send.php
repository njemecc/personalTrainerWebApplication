<?php

require('connection.php');



$video1 = $_POST['selekcija-1'];



$sql = "INSERT INTO video (video1_name)
VALUES ('$video1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$result = mysqli_query($conn,"SELECT * FROM video WHERE video1_name = $video1");

//storing data in array

$data = array();

while($row = mysqli_fetch_assoc($result))
{
  $data[] = $row;
}

// returning response in JSON format

echo json_encode($data);











?>