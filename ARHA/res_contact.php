<!DOCTYPE html>
<html>
<head>
	<title>Contact Form Result</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/res_style.css">
	    
</head>
<body id="body">
    <script src="./assets/js/res_c.js"></script>
	<div class="container">
	    <div class="box">
		<?php
		// Retrieve the user input data from the query parameters in the URL
		$name = isset($_GET['name']) ? $_GET['name'] : '';
		$email = isset($_GET['email']) ? $_GET['email'] : '';
		$subject = isset($_GET['subject']) ? $_GET['subject'] : '';
		$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
		$city = isset($_GET['city']) ? $_GET['city'] : '';
		$message = isset($_GET['message']) ? $_GET['message'] : '';

		// Display the user input data
		echo "<h1>Hasil input form dari user: $name</h1>";
		echo "<p>Name: $name</p>";
		echo "<p>Email: $email</p>";
		echo "<p>Subject: $subject</p>";
		echo "<p>Gender: $gender</p>";
		echo "<p>City: $city</p>";
		echo "<p>Message: $message</p>";

		echo "<div>";
		echo "<button onclick=\"window.location.href='contact.php'\">Kembali</button>";
		echo "</div>";
		?>
	</div>
</body>
</html>
