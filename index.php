<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo Survey Form</title>
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//alert('hello world!');
			$("#form-addUser").submit(function(){
				var firstName = $('#name').val();
				if (firstName == ''){
					$("h1").append('<h2>Please enter your name before submitting.</h2>');
					return false;
				} 
			})
		});
	</script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
	<h1>Survey Form</h1>
	<form id="form-addUser" action="result.php" method="post">
		<div>
			<label for="name">Your Name:</label>
			<input type="text" id="name" name="name" placeholder="name" autofocus>
		</div>
		<div>
			<label for="dojoLocation">Dojo Location:</label>
			<select name="dojoLocation">
			<?php
			$locations = array('Mountain View', 'Seattle', 'Southbay');
			for ($i=0;$i<count($locations);$i++){
				echo "<option value='" . strtolower($locations[$i]) . "'>" . $locations[$i]  . "</option>";
			}
			?>
			</select>
		</div>
		<div>
			<label for="favoriteLanguage">Favorite Language:</label>
			<select name="favoriteLanguage">
			<?php
			$languages = array('Javascript', 'PHP', 'MySQL');
			for ($i=0;$i<count($languages);$i++){
				echo "<option value='" . strtolower($languages[$i]) . "'>" . $languages[$i]  . "</option>";
			}
			?>
			</select>
		</div>
		<div>
			<label for="comments">Comment (optional):</label>
			<textarea name="comments" id="comments" cols="20" rows="10" placeholder="Enter comment..." maxlength="395"></textarea>
		</div>
		<div class="button">
			<button type="submit">Submit</button>
		</div>
	</form>
</div>
</body>
</html>