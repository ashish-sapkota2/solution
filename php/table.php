<?php

	$conn=mysqli_connect("localhost","root","");

	if($conn){
		#database selection
		$db=mysqli_select_db($conn,"people");

		if($db){

			#creating table
			$query="CREATE TABLE users(id INT(6) PRIMARY KEY AUTO_INCREMENT,name TEXT(100),email VARCHAR(200),password VARCHAR(200))";
			if(mysqli_query($conn,$query)){
				echo "table created";
			}
			else{
				echo "failed to create table";
			}
		}
		else{
			echo "db error";
		}
	}
	else{
		echo "connection failed";
	}

?>