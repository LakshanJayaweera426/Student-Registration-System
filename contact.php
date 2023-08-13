<?php require_once('connection.php'); ?>

<?php

						//print_r($_POST);

		$email=$_POST['email'];
		$name = $_POST['name'];
		$msg = $_POST['msg'];
						
						

		$query = "INSERT INTO contact (email,name,message) VALUES ('{$email}','{$name}','{$msg}')"; 

		$result= mysqli_query($connection,$query);

		if ($result ){
			header('location:index.php');
			
		}else{
		}
	?>