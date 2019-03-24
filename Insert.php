<html>
<body>
<?php

// Create connection
$conn = new mysqli('localhost','root','');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "DB Connected successfully <br>";

// this will select the Database sample_db
mysqli_select_db($conn,"sample_db");

echo "DB is seleted as Test successfully. <br>";

// create INSERT query

$sql="INSERT INTO sample_table (fname,fphonenumber, flocation, ftime) VALUES ('$_POST[fname]','$_POST[fphonenumber]', '$_POST[flocation]', '$_POST[ftime]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully! <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo " <br>";

$sql = "SELECT * FROM sample_table WHERE fmatch=True";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 2) {
  $sql = "DELETE FROM sample_table WHERE fmatch=True";
}

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$sql = "UPDATE sample_table SET fmatch=True WHERE ftime='$_POST[ftime]'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully <br>";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_close($conn);
?>

Welcome <?php echo $_POST['fname']; ?><br>

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
