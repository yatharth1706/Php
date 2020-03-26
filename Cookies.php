<?php

	// Cookie is often used to identify user
	// A cookie is a small file that the server embeds on the users computer

	// setcookie function takes five parameters name,value,expire,path,domain
	$time = time();
	setcookie('student','Mark',$time + 10);

	echo "Set cookie";
?>