<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "massagisto";

  // Create connection
  $conn = new mysqli($host, $user, $pass, $db);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


$sql = "INSERT INTO users (email,password) VALUES ('kirweekend@mail.ru', '010101')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
