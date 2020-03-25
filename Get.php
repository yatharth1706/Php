<?php
	
	// get method
	// getting submitted data from form.php file
	
	if(isset($_GET["stu_name"]) && isset($_GET["stu_age"]) && $_GET["stu_weight"]){

		if(!empty($_GET["stu_name"]) && !empty($_GET["stu_age"]) && !empty($_GET["stu_weight"])){

				echo "Name = ".$_GET["stu_name"]."<br>";
				echo "Age = ".$_GET["stu_age"]."<br>";
				echo "Weight = ".$_GET["stu_weight"]."<br>";		

		}
	}else{

		echo "Please Enter All Fields";

	}
	
	

?>