<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "trip";

	$con = mysqli_connect($server, $username, $password, $database);

	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}
	echo "succesful connected ";

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$desc = $_POST['desc'];


$sql = "INSERT INTO `trip`( `name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";


$result = mysqli_query($con, $sql);

if($result){
	echo "Data succesfully Saved";
}
else{
	echo "record not inserted";
}




?>

<!-- 	$sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email','$phone', '$desc' current_timestamp());";

	echo $sql;


	if($con->query($sql) == true){
		echo "Success inserted";
	}

	else{
		echo "Error: $sql <br> $con->error";
	}

	$con->close();

	--/>