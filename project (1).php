<?php
	error_reporting(E_ALL);
	$servername="localhost";
	$username='root';
	$password="root";
	$database="group_project";

	$u_name=$_post[uname];
	$p_word=$_post[pword];

	$f_name=$_post["fname"];
	$l_name=$_post["lname"];
	$c_number=$_post["cnumber"];
	$e_mail=$_post["email"];
	$id=rand();

	//create connection
	$conn= mysqli_connect($servername,$username,$password,$database);

	//check connection
	if ($conn-> Connect_error) {
		echo "My Sql Connection error";
		header("location:index.html");
		die();
	}

	//insert data in to sql
	$sql1="INSERT INTO user VALUES('$u_name','$p_word')";
	$sql2="INSERT INTO employee VALUES('$id','$f_name','$l_name','c_number','e_mail')";

	//check query 
	if ($conn-> query($sql1)==True) {
		echo "Query executed";
	}else{
		echo "Error Inserting Data";
	}

	$conn->close();



?>