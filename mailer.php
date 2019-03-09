<?php
 		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "kazisakib";


		$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$name = $_POST['name'];
		

		$email = $_POST['email'];
		

		$subject = $_POST['subject'];
		

		$message = $_POST['message'];
		

	}
		


		$sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

		if (mysqli_query($conn, $sql)) {
    		echo "Thanks for taking time. I appreciate your feedback!";
		}

		else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}


?>