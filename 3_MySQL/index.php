<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "salesmanager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ma san pham: " . $row["masp"]. " - ten sp: " . $row["tensp"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
