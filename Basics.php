<?php

	// variables must begin with '$' sign
	// case sensitive

	$num1 = 90;
	$num22 = 100;

	echo "90+100=",$num1+$num22."<br>";

	// concatenation symbol (.)

	$name = "Google";
	echo '<a href = "https://www.google.com" >'.$name.'</a><br>';

	// if else

	if ($num1 == $num22) {
		echo "Both numbers are equal<br>";
	}else{
		echo "No they are not equal<br>";
	}


	// loops

	for($i = 0;$i<10;$i++){
		echo "$i<br>";
	}

	// similarly while and do while like c++

?>