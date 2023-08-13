<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin - Applied Mathematics Computing</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="CSS/style.css">

	<link rel="icon" href="logo.png">



</head>
<body class="body-home">
<div class="black-fill">
  <section id="contact"
					 class="d-flex justify-content-center align-items-center flex-column">
	  <form action="#" method="post">
	  	<div class="col-md-4">
					      	<img src="logo.png" class="img-fluid rounded-start">
							
			</div>
	    <h3 class="login">Login here</h3>

			<!-- Username -->
	    <div class="mb-3">
	    	<label for="exampleInputEmail1" class="form-label">Username</label><br/>
				<input type="text" class="form-control" name="user" required="required" placeholder="Type your ID number as username" autofocus required></input>
	    </div>
	    
	    <!-- Password -->
	    <div class="mb-3">
	    	<label for="exampleInputEmail1" class="form-label">Password</label><br/>
				<input type="password" class="form-control" name="pass" required="required" placeholder="Type your enrolment number as password" required></input>
				
				 
	    </div>
	    
	    <div>
				<input type="submit" class="button-panel"  name="login" value="Login"></input>
	    </div>

	    
	  
	  <?php
		if (isset($_POST['login']))
			{
				$username = mysqli_real_escape_string($con, $_POST['user']);
				$password = mysqli_real_escape_string($con, $_POST['pass']);
				
				$query 		= mysqli_query($con, "SELECT * FROM admin_applied_mathematics_and_computing WHERE  password='$password' and username='$username'");
				$row		= mysqli_fetch_array($query);
				$num_row 	= mysqli_num_rows($query);
				
				if ($num_row > 0) 
					{			
						$_SESSION['user_id']=$row['user_id'];
						header('location:InsertData\show.php');
						
					}
				else
					{
						
						echo"Invalid Username or password!";
					}
			}
	  ?>

	  </form>
  
  <div class="text-center text-light" >
  			<br/>
				Copyright &copy; 2023 University of Vavuniya. All right reserved.
	</div>
  </section>


</div>



</body>
</html>s