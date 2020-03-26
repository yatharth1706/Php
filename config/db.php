<?php
	
	$conn = mysqli_connect('localhost','rohitkumarrana67','Rana67rohit@','pizza');

	// check error

	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}


?>