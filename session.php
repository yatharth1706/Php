<?php

	// first start the session
	session_start();

	// then set any variables inside the session inside $_SESSION
	// superglobal()

	$_SESSION['name'] = 'Yash';
	$_SESSION['age'] = 22;
	$_SESSION['weight'] = 70;


	echo "Stored data in sessions!"
?>