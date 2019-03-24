<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn,"sample_db");
$sql = "SELECT * FROM sample_table";
$result = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection error: " . $conn->connect_error);
}

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["fname"]."<br>";
  }
}



?>
