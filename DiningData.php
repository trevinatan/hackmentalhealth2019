<?php
$conn = new mysqli('localhost', 'root', 'POTATO123');
mysqli_select_db($conn,"sample_db");
$sql = "SELECT * FROM dining_table WHERE fmatch=True";
$result = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection error: " . $conn->connect_error);
}

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["fname"]."&emsp;";
    echo $row["fphonenumber"]."&emsp;";
    echo $row["flocation"]."&emsp;";
    echo $row["ftime"]."&emsp;";
    echo $row["fblurb"]."<br>";
  }
}
?>
