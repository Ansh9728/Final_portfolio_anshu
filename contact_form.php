<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Get the form data
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		// Database connection settings
		$servername = "127.0.0.1";
		$username = "Anshu";
		$password = "Learn5621@";
		$dbname = "portfolio_anshu";

		// Create a new connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check the connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Prepare and execute the SQL query to insert the form data into the database
		$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

		if ($conn->query($sql) === TRUE) {
			echo "Form submitted successfully!";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		// Close the database connection
		$conn->close();
	}

?>
