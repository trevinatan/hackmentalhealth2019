<html>
<body>
<?php

// Create connection
$conn = new mysqli('localhost','root','POTATO123');

// Check connection
if ($conn->connect_error) {
    die("Database connection failed." . $conn->connect_error);
}

// Selects the Database sample_db
mysqli_select_db($conn,"sample_db");

// Create INSERT query
$sql="INSERT INTO gym_table (fname,fphonenumber, flocation, ftime, fblurb)
VALUES ('$_POST[fname]','$_POST[fphonenumber]', '$_POST[flocation]', '$_POST[ftime]', '$_POST[fblurb]')";

if ($conn->query($sql) === TRUE) {
    echo "<br>";
} else {
    echo $conn->error;
}

// Delete old matches
$sql = "SELECT * FROM gym_table WHERE fmatch=True";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 2) {
  $sql = "DELETE FROM gym_table WHERE fmatch=True";
}

if ($conn->query($sql) === TRUE) {
    echo "<br>";
} else {
    echo $conn->error;
}

// Updates new matches
$sql = "SELECT * FROM gym_table where fmatch=False AND ftime='$_POST[ftime]' AND flocation='$_POST[flocation]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 2) {
  $sql = "UPDATE gym_table SET fmatch=True WHERE ftime='$_POST[ftime]' AND flocation='$_POST[flocation]'";
}

if ($conn->query($sql) === TRUE) {
    echo "<br>";
} else {
    echo $conn->error;
}

mysqli_close($conn);
?>
<div id="show"></div>

<script type="text/javascript" src="jquery.js"> </script>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function() {
        $('#show').load("GymMatch.php")
    }, 3000)
  })
</script>

</body>
</html>
