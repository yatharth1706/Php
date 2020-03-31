<?php
	
	$file = 'README.md';

	// first check whether file exists or not

	if(file_exists($file)){
		// read file

		$sentences = readfile($file);
		echo $sentences . "<br>";	

		// copy file 
		// copy($file, 'quotes.txt');

		// for seeing location of file

		echo realpath($file) . "<br>";

		// filesize

		echo filesize($file) . "<br>";

		//rename file

		rename('quotes.txt', 'sentences.txt');
	}else{
		echo "File does not exists";
	}
	
?>