<?php
	
	// opening a file
	$file = 'sentences.txt';
	$sz = filesize($file);

	$handle = fopen($file, 'a+');
	
	// echo fread($handle,$sz) . "<br><br>";

	// read a single line

	// echo fgets($handle);
	// echo fgets($handle);
	// echo fgets($handle);
	// echo fgets($handle);
	// echo fgets($handle);
	// echo fgetc($handle);

	// write something in a file

	fwrite($handle, '\nHello my name is yatharth verma');
?>