<?php
	
	$conn = mysqli_connect('localhost','rohitkumarrana67','Rana67rohit@','pizza');

	// check error

	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

	// write query for all pizzas

	$sql = 'SELECT title,ingredients, id FROM pizzas';

	// make query and get result

	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array

	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free result from memory
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);
	print_r($pizzas);
?>

<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
</head>
<body>

</body>
</html>