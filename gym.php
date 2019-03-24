<!DOCTYPE html>

<html>

<head>
	<title> Link Up </title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="assets/img/favicon.ico"/>
	<link rel="stylesheet" href="assets/css/gym-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
	 <script type="text/javascript" src="assets/js/next-button.js"></script>
</head>

<body>
	<div id="background">
		<div id="overlay" style='position:fixed; top: 0; bottom: 0; z-index: -1; width: 100%; height: 100%'></div>
	<img src="assets/img/gym.jpg" style='position: fixed; top: 0; bottom: 0; z-index: -2; width: 100%; height: 100%'>
			</div>
	<div class = "logo">
		<h2><a href="home.html">LinkUp</a></h2>
	</div>
	<div id="main">
	<div id="title">GYM</div>
	<div id="where-box">
		<!-- WHERE Input field-->
		<!-- @source https://codepen.io/melnik909/pen/BZpJLN -->
			<form action="GymInsert.php" method="post">
			<label class="field a-field a-field_a1 page__field">
		<!-- WHERE VARIABLE: "dining-where" -->
	      	<input class="field__input a-field__input" name="flocation" placeholder="e.g. RSF" required>
	      	<span class="a-field__label-wrap">
	      		<span class="a-field__label">WHERE</span>
	      	</span>
	    	</label>
	    </div>

		<div id="when-box">
		<!-- WHEN Input field -->
		<!-- @source https://codepen.io/melnik909/pen/BZpJLN -->
			<label class="field a-field a-field_a2 page__field">
		<!-- WHEN VARIABLE: "dining-when" -->
      		<input class="field__input a-field__input" name = "ftime" placeholder="e.g. 14:00" required>
      		<span class="a-field__label-wrap">
        		<span class="a-field__label">WHEN</span>
      		</span>
    		</label>
					</div>
			<div id="nextbutton">
				<input type="submit" value="NEXT" id="next" />
			</div>
<!-- 			</form>-->

</div>

	</div>
<div id = "space"></div>

<!-- ABOUT YOU PAGE -->
<div id="main-info">
	<div id="title"> ABOUT YOU </div>
	<!-- NAME field -->
	<div id="name">
<!-- 	<form action="index.php" method="get">
-->			<label class="field a-field a-field_a1 page__field">
	<!-- NAME VARIABLE: "fullname" -->
      	<input class="field__input a-field__input" name="fname" placeholder="e.g. Trevina Tan" required>
      	<span class="a-field__label-wrap">
      		<span class="a-field__label">NAME</span>
      	</span>
    	</label>
	</div>
	<!-- PHONE # field -->
	<div id="phone">
		<label class="field a-field a-field_a2 page__field">
	<!-- PHONE # VARIABLE: "phone" -->
  		<input class="field__input a-field__input" name="fphonenumber" placeholder="e.g. 5105557777" input="int" required>
  		<span class="a-field__label-wrap">
    		<span class="a-field__label">PHONE #</span>
  		</span>
		</label>
	</div>
	<!-- BLURB field -->
		<div id="blurb">
		<label class="field response-field">
		<input class="response" name="fblurb" placeholder="Write a short blurb about yourself!" required>
		<span class="response-label-wrap"></span>
	</label>
	</div>
	<div id="nextbutton-info">
		<input type="submit" value="NEXT" id="next-info" />
	</div>
</form>
</div>
</div>


</body>

</html>
