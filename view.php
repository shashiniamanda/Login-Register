<!DOCTYPE html>
<html>
<head>
	<title>Databse view</title>
</head>
<body>
	<?php
	error_reporting(E_ALL);
	$servername="localhost";
	$username='root';
	$password="root";
	$database="group_project";

	//create connection
	$conn= mysqli_connect($servername,$username,$password,$database);

	//check connection
	if ($conn-> Connect_error) {
		echo "My Sql Connection error";
	}
	$sql="SELECT * FROM employee";
	$result=$conn->query($sql);
	$count=mysqli_num_rows($result);
	if($count==TRUE){
		while ($row=$result->fetch_assoc()) {
			echo $row["fname"].$row["lname"].$row["cnumber"].$row["email"];
		}
	}else{
		echo "No Data in the Databse";
	}
	 $conn->close();
?>

</body>
</html>