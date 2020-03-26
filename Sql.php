<?php
	
	include('config/db.php');
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
?>

<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
</head>
<body>
	<div>
		<?php foreach($pizzas as $pizza){?>

		<h2> <?php echo htmlspecialchars($pizza['title'])?></h2>
		<ul> <?php foreach(explode(',',$pizza['ingredients']) as $ing){?>
				<li><?php echo $ing?></li>
			<?php }?>
		</ul>

		<?php }?>
		<h4></h4>
	</div>
</body>
</html>