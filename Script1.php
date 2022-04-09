<?php
$servername = "0.0.0.0";
$username = "root";
$password = "123";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected";
?>
