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

mysqli_close($conn);
?>

<?php
 $conn = new mysqli('localhost','root','');
 mysqli_select_db($conn,"sample_db");
 $sql = "SELECT * FROM sample_table";
 $result = mysqli_query($conn, $sql);
 $keepGoing = true;
 if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result) && $keepGoing) {
     if ($row["fname"] == "Key") {
       echo "Name: " . $row["fname"]."<br>";
       $keepGoing = false;
     }
    }
 } else {
   echo "0 results <br>";
 }
 echo " <br>";
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
