<?php
    $servername = 'localhost';
	$username = 'root';
	$password = '';
    $db_name = 'backend_db';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['send'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$phoneNumber = $_POST['phoneNumber'];
		$age = $_POST['age'];
		$email = $_POST['email'];
        $experience = $_POST['experience'];
		$pastExp = $_POST['pastExp'];
		$Question = $_POST['Question'];
		$cars = $_POST['cars'];
		  
		$sql = "INSERT INTO `customers` (`firstName`, `lastName`, `phoneNumber`, `age`, `email`, `experience`, `pastExp`, `Question`, `cars`)
				VALUES ('$firstName', '$lastName', '$phoneNumber', '$age', '$email', '$experience', '$pastExp', '$Question', '$cars')";
		$result = mysqli_query($conn, $sql);
        echo '<a href = "apply.php"></a>';
	  }
	
	  $conn->close();
?>