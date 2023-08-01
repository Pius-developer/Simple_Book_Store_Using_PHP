<?php

function Createdb(){
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bookstore";

	$conn = mysqli_connect($server,$username,$password);



	// Check Connection
	if (!$conn) {
		die("Connection Failed". mysqli_connect_error());
	}

	// Create a database
	$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
	if (mysqli_query($conn, $sql)) {
		
	// Create a connection
	$conn = mysqli_connect($server,$username,$password,$dbname);

	$sql = "
       
       CREATE TABLE IF NOT EXISTS books(

       	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       	book_name VARCHAR(25) NOT NULL,

       	book_publisher VARCHAR(20),

       	book_price FLOAT

       	);
	";

	  if (mysqli_query($conn, $sql)) {
       	
       	return $conn;

       }else{
       	echo"Cannot Create Table";
       }

	}else{
		echo "Error Creating Database".myqli_error($conn);
	}
}

?>