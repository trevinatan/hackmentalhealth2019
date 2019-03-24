<html>
<body>
<?php

// Create connection
$conn = new mysqli('localhost','root','');

// Check connection
if ($conn->connect_error) {
    die("Database connection failed." . $conn->connect_error);
}
echo "Database connected successfully. <br>";

// Selects the Database sample_db
mysqli_select_db($conn,"sample_db");

// Create INSERT query
$sql="INSERT INTO sample_table (fname,fphonenumber, flocation, ftime) VALUES ('$_POST[fname]','$_POST[fphonenumber]', '$_POST[flocation]', '$_POST[ftime]')";

if ($conn->query($sql) === TRUE) {
    echo "Inserted new record successfully! <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Delete old matches
$sql = "SELECT * FROM sample_table WHERE fmatch=True";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 2) {
  $sql = "DELETE FROM sample_table WHERE fmatch=True";
}

if ($conn->query($sql) === TRUE) {
    echo "Old matches deleted successfully. <br>";
} else {
    echo "Match found! <br>" . $conn->error;
}

// Updates new matches
$sql = "SELECT * FROM sample_table where fmatch=False AND ftime='$_POST[ftime]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 2) {
  $sql = "UPDATE sample_table SET fmatch=True WHERE ftime='$_POST[ftime]'";
}

if ($conn->query($sql) === TRUE) {
    echo "Updated new matches successfully. <br>";
} else {
    echo "No matches found, please wait. <br>" . $conn->error;
}

echo "<br>";
mysqli_close($conn);
?>

Welcome <?php echo $_POST['fname']; ?>!<br><br>

<div id="show"></div>

<script type="text/javascript" src="jquery.js"> </script>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function() {
      $('#show').load("data.php")
    }, 3000)
  })
</script>

</body>
</html>
