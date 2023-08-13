<?php require_once('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>University of Vavuniya</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="CSS/style.css">

	<!-- Logo for web browser titile bar -->
	<link rel="icon" href="logo.png">

</head>
<body class="body-home">

	<div class="black-fill">
		<div class="container"> <br/><br/>

			<!-- ************************NavigationBar ************************  -->
			<nav class="navbar navbar-expand-lg bg-body-tertiary" id="homenav">
				<div class="container-fluid">

					<!-- Logo for navbar -->
				    <a class="navbar-brand" href="#">
				    	<img src="logo.png" alt="icon" width="40">
				    </a>

				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				    </button>

				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">

				        	<li class="nav-item">
				          		<a class="nav-link active" aria-current="page" href="#">Home</a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="#about">About</a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="#contact">Contact</a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="#infor">Read Me</a>
				        	</li>

				        	<!-- %%%%%%%%%%%%%%Dropdown%%%%%%%%%%%%%%%%%%%% -->

				        	<li class="nav-item dropdown">
					          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            Registration
					          </a>
					          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

					          	<li class="fas">Please select your chosen degree program</li>
					          	<hr>
					          	<li class="fas">Faculty of Applied Science</li>

					            <li class="fasc"><a class="dropdown-item" href="AppliedMathematicsComputing/index.php" target="_blank">BSc Applied Mathematics and Computing -  208D </a></li>

					            <li class="fasc"><a class="dropdown-item" href="EnvironmentalScience/index.php" target="_blank">BSc Honours in Environmental Science -  149E</a></li>

					            <li class="fasc"><a class="dropdown-item" href="InformationTechnology/index.php" target="_blank">BSc Information Technology -  108R</a></li>
					            <br/>

					            <li class="fas">Faculty of Business Studies</li>

					            <li class="fasc"><a class="dropdown-item" href="AccountingFinance/index.php" target="_blank">Honours in Accounting and Finance -  740C</a></li>

					            <li class="fasc"><a class="dropdown-item" href="ProjectManagement/index.php" target="_blank">Honours in Project Management -  234M</a></li>

					            <li class="fasc"><a class="dropdown-item" href="BankingInsurance/index.php" target="_blank">Honours in Banking and Insurance -  703R</a></li>

					            <li class="fasc"><a class="dropdown-item" href="HumanResourceManagement/index.php" target="_blank">Honours in Human Resource Management -  579P</a></li>

					            <li class="fasc"><a class="dropdown-item" href="BusinessEconomics/index.php" target="_blank">Honours in Business Economics -  109P</a></li>

					            <li class="fasc"><a class="dropdown-item" href="MarketingManagement/index.php" target="_blank">Honours in Marketing Management - 303M</a></li>
					            <br/>

					            <li class="fas">Faculty of Technological Studies</li>
					            
					            <li class="fasc"><a class="dropdown-item" href="InformationCommunicationTechnology/index.php" target="_blank">Bachelor of Information and Communication Technology - 104R</a></li>
					            
					            
					          </ul>
					        </li>

					        <li class="nav-item dropdown">
					          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            Administration
					          </a>
					          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

					          	
					          	
					          	<li class="fas">Faculty of Applied Science</li>

					            <li class="fasc"><a class="dropdown-item" href="AppliedMathematicsComputing/index1.php" target="_blank">BSc Applied Mathematics and Computing -  208D </a></li>

					            <li class="fasc"><a class="dropdown-item" href="EnvironmentalScience/index1.php" target="_blank">BSc Honours in Environmental Science -  149E</a></li>

					            <li class="fasc"><a class="dropdown-item" href="InformationTechnology/index1.php" target="_blank">BSc Information Technology -  108R</a></li>
					            <br/>

					            <li class="fas">Faculty of Business Studies</li>

					            <li class="fasc"><a class="dropdown-item" href="AccountingFinance/index1.php" target="_blank">Honours in Accounting and Finance -  740C</a></li>

					            <li class="fasc"><a class="dropdown-item" href="ProjectManagement/index1.php" target="_blank">Honours in Project Management -  234M</a></li>

					            <li class="fasc"><a class="dropdown-item" href="BankingInsurance/index1.php" target="_blank">Honours in Banking and Insurance -  703R</a></li>

					            <li class="fasc"><a class="dropdown-item" href="HumanResourceManagement/index1.php" target="_blank">Honours in Human Resource Management -  579P</a></li>

					            <li class="fasc"><a class="dropdown-item" href="BusinessEconomics/index1.php" target="_blank">Honours in Business Economics -  109P</a></li>

					            <li class="fasc"><a class="dropdown-item" href="MarketingManagement/index1.php" target="_blank">Honours in Marketing Management - 303M</a></li>
					            <br/>

					            <li class="fas">Faculty of Technological Studies</li>
					            
					            <li class="fasc"><a class="dropdown-item" href="InformationCommunicationTechnology/index1.php" target="_blank">Bachelor of Information and Communication Technology - 104R</a></li>
					            
					            
					          </ul>
					        </li>


				      	</ul>

				      	
				      	
				    </div>
				    
				</div>
			</nav>

			<!-- Welcome to University of Vavuniya -->
			<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
				<img src="logo.png">
				<h4>Welcome to University of Vavuniya</h4>
				<p>“To be a leading centre of excellence in knowledge advancement and dissemination for sustainable change.” </p>	
			</section>

			<!-- Registration Details -->

		
			<section id="infor"
					 class="d-flex justify-content-center align-items-center flex-column">

				<form>
					<div class="col-md-4">
					      	<img src="logo.png" class="img-fluid rounded-start">
							
					</div>
					<h3>Enrolment of New Students in <br/> University of Vavuniya <br/> <b>Academic Year 2020/2021</b></h3>

					<h5>We are glad to inform you that you have been selected to follow the course of study in University of Vavuniya. You are kindly requested to fill the form for the purpose of enrolment. You are also requested to submit the scanned copy of the following documents for the purpose of enrolment.<br/>(Only <b><u>.zip</u></b> or <b><u>.rar</u></b> format is acceptable)</h5>


					<br>
					<h6>
						1. Enrolment Letter Sent by University of Vavuniya. <br>
						2. Certified Copy of Admission Letter sent by the UGC.<br>
						3. Certified Copy of the Birth Certificate (Extract of birth Certificate will not be accepted).<br>
						4. Certified Copy of School Living Certificate.<br>
						5. Photographs - 01 (Front and Back). (color, size:4x5cm) with Certified Attestation at the back of the photo <i>(With the signature and the official seal of Justice of Peace, Commissioner for Oaths, Principle of the School).</i><br>
						6. Certified Copy of National Identy Card.<br>
						7. Certified Copy of the Result Sheet of G.C.E. A/L Examination.<br>
						8. Certified Copy of the Result Sheet of G.C.E. O/L Examination.<br>
						9. Payment of Enrolment fee of Rs.2350.<br>
						10. Payment of Hostel fee of Rs.2650. (If Hostel Required).<br>
						11. Scanned copy of Medical Report.
					</h6>
					<h5 class="redwarning">
						Keep the .zip or .rar file with required documents ready before registration.
					</h5>
					
					

				</form>

			</section>
			

			<!-- About -->
			<section id="about"
					 class="d-flex justify-content-center align-items-center flex-column">
				
				<div class="card mb-3 card-1" >
				  	<div class="row g-0">
				  	
					    <div class="col-md-4">
					      	<img src="logo.png" class="img-fluid rounded-start"><br>
					      	<br><br>

					      	<h4>The Mission</h4>
					      	<h6 class="mission">“To excel in the quality of education, innovative research and active collaboration for empowering the graduates and for the sustainable development of the region and nation.”</h6>
					    </div>
					
				    	<div class="col-md-8">
				      		<div class="card-body">
				        		<h5 class="card-title">About</h5>
				        		<h6 class="card-text">The University of Vavuniya is a public university in the city of Vavuniya in Sri Lanka. In June 2021, the Government of Sri Lanka announced the creation of a new state university by converting the Vavuniya Campus of the University of Jaffna into the University of Vavuniya. <br/> <br />
				        		Pampaimadu, <br/>
								Vavuniya.	<br/>
								Sri Lanka.	<br/>
								Tel :   +94 24 222 2265 <br/>
								Email : registraroffice@vau.ac.lk <br/>
								Fax :   +94 24 222 2265 <br/>

 
 								</h6>
 								<h6 class="card-text"><small class="text-muted">University of Vavuniya </small></h6>
				    
				      		</div>
				    	</div>
				  	</div>
				</div>

			</section>

			<!-- ******************************Contact************************** -->
			<section id="contact"
					 class="d-flex justify-content-center align-items-center flex-column">



				<form method="post" action="contact.php" target="_self">
					<div class="col-md-4">
					      	<img src="logo.png" class="img-fluid rounded-start">
							
					</div>
					<h3>Contact Us</h3>

					<div class="mb-3">
						<label for="mail" class="form-label">Email address</label>
						<input type="email" name="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Type here your email address">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>

					<div class="mb-3">
						<label class="form-label">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Type here your name">
					</div>

					<div class="mb-3">
						<label class="form-label">Message</label>
						<textarea class="form-control" name="msg" rows="4" placeholder="Type here message">

						</textarea>

						
					</div>
					
					<button type="submit" name="send" class="btn btn-primary">Send</button>


					


				</form>

			</section>

			<div class="text-center text-light">
				Copyright &copy; 2023 University of Vavuniya. All right reserved.
			</div>

		</div>
		
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>


	

	
</body>
</html>

