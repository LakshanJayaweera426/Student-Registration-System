
<?php
	
	


	$connection = mysqli_connect('localhost','root','','applied');
	
	//check DB connect or not
	if(mysqli_connect_errno()){
		die('Database connecton failed'.mysqli_connect_error());
	}else{
		//echo 'connection successful.';
	}

?>