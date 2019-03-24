<html>
<body>
<h1>Test Site</h1>

<form action="insert.php" method="post">
Name: <input type="text" name="fname" /><br><br>
Phone Numer: <input type="int" name="fphonenumber" /><br><br>
Location: <input type="text" name="flocation" /><br><br>
Time: <input type="text" name="ftime" /><br><br>
<input type="submit" />
</form>

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
