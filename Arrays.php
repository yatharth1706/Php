<?php
	
	// array keyword is used to make array
	$persons = array("Yash","Shubham","Rohit");

	echo $persons[0]."<br>";

	print_r($persons);
	echo "<br>";
	for($i = 0;$i<3;$i++){
		echo $persons[$i]."<br>";
	}

	// Associative Arrays

	$names = array('a' => 12, 'b' => 23, 'c' => 34);
	print_r($names);

	echo "<br>".$names['c']."<br>";

	// MultiDimensional Arrays

	$multiArray = array(array('Yash',32,12093),array("Rohit",59,2342),array("Himanshu",234,234));

	echo $multiArray[0][0]."<br>";
	echo $multiArray[2][0]."<br>";


	// foreach

	foreach($persons as $person){
		echo "$person<br>";
	}

	// for multi dimensional array

	foreach ($multiArray as $multiArr){
		foreach ($multiArr as $inner){
			echo $inner."<br>";
		}
	}

?>