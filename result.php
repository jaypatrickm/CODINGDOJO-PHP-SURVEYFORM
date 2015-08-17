<?php
	// var_dump($_POST);
	$name = $_POST['name'];
	$dojoLocation = $_POST['dojoLocation'];
	$favoriteLanguage = $_POST['favoriteLanguage'];
	$comments = $_POST['comments'];
?>
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
	<div id="result">
		<h2>Submitted Information</h2>
		<h3>Name:</h3>
		<h4><?php echo $name; ?></h4>
		<h3>Dojo Location:</h3>
		<h4><?php echo $dojoLocation; ?></h4>
		<h3>Favorite Language:</h3>
		<h4><?php echo $favoriteLanguage; ?></h4>
		<h3>Comment:</h3>
		<h4><?php echo $comments; ?></h4>
	</div>
</div>
</body>
</html>