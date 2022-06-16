<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test00";

  $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT * FROM t00";
  $result = $conn->query($sql);

if ( $result->num_rows > 0) {
  // output data of each row
  while( $row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nom"]. " " . $row["pass"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
