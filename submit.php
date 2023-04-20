<?php
if ($_POST) {
	$host = 'localhost';
	$user = 'root';
	$pass = 'root';
	$dbname = 'afl2_personalwebsite';

	$conn = new mysqli($host, $user, $pass, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);

	$sql = "INSERT INTO qna (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

	if ($conn->query($sql) === TRUE) {
		$message = "Your message has been sent successfully.";
		header("Location: contact.php?msg=" . urlencode($message));
        exit();
	} else {
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$conn->close();

    exit();
}
?>
