<?php require_once('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Upload Documents</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style1.css">

	<!-- Logo for web browser titile bar -->
	<link rel="icon" href="logo.png">

</head>
<body class="body-home">
	<div class="black-fill">
		<div class="container"> <br/><br/>
			<section id="form"
					 class="d-flex justify-content-center align-items-center flex-column">
				<form method="POST" action="form-connection2.php" target="_blank">
					<div class="col-md-4">
					      	<img src="logo.png" class="img-fluid rounded-start">		
					</div>
					<h3><b> - Attachment of Relevant Documents - </b></h3>
					<br>
					<h5><b>Upload the Scanned copy of the below 10 important documents :<br>(Only <b><u>.zip</u></b> or <b><u>.rar</u></b> format is acceptable)</b></h5>
					<br>
					<div class="docs">
						
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
						11. Scanned copy of Medical Report.<br><br>

						Please <i><u>collect all the relevent document with certified and scanned them properly, save it in one folder and compress the folder as <b> .zip </b> or <b> .rar </b> format with the <b> name of your enrolment </b> and then upload.</u></i>
					</div>					
					<br>
									
					<input type="submit" name="submit" value="Click to Upload Files" class="btn btn-primary" required="Required">


					<div class="docs">
						I declare that <b> shall abide by the statutes, By laws, Regulations and the rules the Univeristy of Vavuniya so far as they are applicable to me, pay due respect to the Teachers, Officers and other Employees </b> of the University and conduct myself in a manner which will in no way be prejudicial to the good name of the university. I am also aware that if I fail to adhee to the terms of the declaration, I will be liable to expel from the University of for other disciplinary action. <br/><br/>
						I hereby declare that <b> I agree to accept and conduct myself according to the laws in the <q> Prohibition of Ragging and other forms of Violence in Educational Institutions Act No. 20 of 1998.</q></b>In addition, I shall at all times refrain from encouraging such undesirable activites. <br/><br/>
						Further, I declare that <b> the particulars given in the application are true and correct to the best of my knowledge. I am aware that the University has the right to cancle my registration if any information given above is found to be incorrect.</b>
						<br/>
						<div class="ragginradion">
							<input type="radio" name="ragging" value="True">
							<label for="true" required="Required">True</label><br/>
							<input type="radio" name="ragging" value="False">
							<label for="true" required="Required">False</label>
						</div>

					</div>




					<a class="btn btn-primary" href="RegistrationSuccsefull.php" role="button">DONE</a>
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

