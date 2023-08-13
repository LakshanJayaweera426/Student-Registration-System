<?php require_once('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Banking and Insurance</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Logo for web browser titile bar -->
	<link rel="icon" href="logo.png">

</head>
<body class="body-home">

	<div class="black-fill">
		<div class="container"> <br/><br/>

			

			<!-- ************ICTS************ -->
			<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
				<img src="logo.png" width="150">
				<h4>Honours in Banking and Insurance</h4>
				<h5>Faculty of Business Studies</h5>
				
				<div class="registration-form">
					<a class="nav-link" href="#form" title="Click to move registration form">Registration Form</a>
				</div>
			</section>

			

			<!-- ******************************Form************************** -->
			<section id="form"
					 class="d-flex justify-content-center align-items-center flex-column">



				<form method="post" action="form-connection.php" target="_self">
					<div class="col-md-4">
					      	<img src="logo.png" class="img-fluid rounded-start">
							
					</div>
					<h3>Enrolment of New Students in University of Vavuniya <br/> <b>Academic year - 2020/2021</b></h3>


					<!-- ******* EMAIL *********** -->
					<div class="mb-3">
						<label for="mail" class="form-label">1. Email address</label>
						<input type="email" name="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Your answer" required="Required">
						<!--
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						-->
					</div>

					<!-- ******* ENROLMENT NUMBER *********** -->
					<div class="mb-3">
						<label class="form-label">2. Enrolment Number (as specified on the letter) as 2020ICTS001</label>
						<input type="text" name="registration_number" class="form-control" placeholder="Your answer" required="Required">
					</div>
				
					<!-- ******* Name of the Faculty *********** -->
					<!-- ******* Selected Course of Study *********** -->
					
					<!-- ******* Title *********** -->
					<div class="mb-3">
						<label class="form-label">3. Title</label>						
							<div class="form-radio">								
								<input type="radio" id="Rev" name="title"  value="Rev" required="Required">
								<label for="Rev">Rev. </label>
								<br/>							
								<input type="radio" id="Mr" name="title"  value="Mr" required="Required">
								<label for="Mr">Mr. </label>
								<br/>								
								<input type="radio" id="Ms" name="title"  value="Ms" required="Required">
								<label for="Ms">Ms. </label>
							</div>
										
								
					</div>

					<!-- ******* Name with initials *********** -->
					<div class="mb-3">
						<label class="form-label">4. Name with initials (as specified on the letter)</label>
						<input type="text" name="initials" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Name denoted by the initials *********** -->
					<div class="mb-3">
						<label class="form-label">5. Name denoted by the initials</label>
						<input type="text" name="fullname" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* National Identiy Card Number *********** -->
					<div class="mb-3">
						<label class="form-label">6. National Identiy Card Number</label>
						<input type="text" name="idnumber" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Contact Number *********** -->
					<div class="mb-3">
						<label class="form-label">7. Contact Number</label>
						<input type="text" name="contactnumber" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Permanent Address *********** -->
					<div class="mb-3">
						<label class="form-label">8. Permanent Address</label>
						<input type="text" name="address" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Province *********** -->
					<div class="mb-3">
						<label id="province" class="form-label">9. Province</label>
						<div class="prov">
							<select id="province" name="province" >
								<option value="central">Central</option>
								<option value="eastern">Eastern</option>
								<option value="northcentral">North Central</option>
								<option value="northern">Northern</option>
								<option value="northwestern">North Western</option>
								<option value="sabaragamuwa">Sabaragamuwa</option>
								<option value="southern">Southern</option>
								<option value="uva">Uva</option>
								<option value="western">Western</option>
							</select>
						</div>
					</div>

					<!-- ******* District *********** -->
					<div class="mb-3">
						<label for="district" class="form-label">10. District</label>
						
						<div>
							<select id="district" name="district">
								<option value="ampara">Ampara</option>
								<option value="anuradhapura">Anuradhapura</option>
								<option value="badulla">Badulla</option>
								<option value="batticaloa">Batticaloa</option>
								<option value="colombo">Colombo</option>
								<option value="galle">Galle</option>
								<option value="gampaha">Gampaha</option>
								<option value="hambantota">Hambantota</option>
								<option value="jaffna">Jaffna</option>
								<option value="kalutara">Kalutara</option>
								<option value="kandy">Kandy</option>
								<option value="kilinochchi">Kilinochchi</option>
								<option value="kurunegala">Kurunegala</option>
								<option value="mannar">Mannar</option>
								<option value="matale">Matale</option>
								<option value="moneragala">Moneragala</option>
								<option value="mullative">Mullative</option>
								<option value="polonnaruwa">Polonnaruwa</option>
								<option value="puttalam">Puttalam</option>
								<option value="rathrapura">Ratnapura</option>
								<option value="vavuniya">Vavuniya</option>
							</select>				
						</div>
					</div>

					<!-- ******* Divisional Secretariat *********** -->
					<div class="mb-3">
						<label class="form-label">11. Divisional Secretariat</label>
						<input type="text" name="divisional" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Postal Address *********** -->
					<div class="mb-3">
						<label class="form-label">12. Postal Address</label>
						<input type="text" name="postal" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Year of the G.C.E. (A/L) Examination *********** -->
					<div class="mb-3">
						<label class="form-label">13. Year of the G.C.E. (A/L) Examination</label>						
						<div class="form-radio">							
							<input type="radio" id="2019" name="year"  value="2019" required="Required">
							<label for="2019">2019 </label>
								<br/>
							<input type="radio" id="2020" name="year"  value="2020" required="Required">
							<label for="2020">2020 </label>
								<br/>		
							<input type="radio" id="2021" name="year"  value="2021" required="Required">
							<label for="2021">2021 </label>
						</div>
					</div>

					<!-- ******* Index Number *********** -->
					<div class="mb-3">
						<label class="form-label">14. Index Number</label>
						<input type="text" name="indexnumber" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Average Z Score *********** -->
					<div class="mb-3">
						<label class="form-label">15. Average Z Score</label>
						<input type="text" name="zscore" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* G.C.E (A/L) Studied Stream *********** -->
					<div class="mb-3">
						<label class="form-label">16. G.C.E (A/L) Studied Stream</label>
						<div class="form-radio">
							<input type="radio" id="mathematics" name="stream"  value="Mathematics" required="Required">
							<label for="mathematics">Mathematics </label>
							<br/>
							<input type="radio" id="bioscience" name="stream"  value="BioScience" required="Required">
							<label for="bioscience">Bio Science </label>
							<br/>
							<input type="radio" id="commerce" name="stream"  value="Commerce" required="Required">
							<label for="commerce">Commerce </label>
							<br/>
							<input type="radio" id="technology" name="stream"  value="Technology" required="Required">
							<label for="technology">Technology </label>
							<br/>
							<input type="radio" id="arts" name="stream"  value="ArtsArts" required="Required">
							<label for="arts">Arts </label>
						</div>
					</div>

					<!-- ******* Subject & Results - Edited *********** -->
					<div class="mb-3">
						<label class="form-label">17. Subject & Results</label>
						<div class="title">
							<table>
								<!-- subject 1 -->
								<tr>
									<th class="subth">
										<input type="text" name="sub1" class="form-control" placeholder="Your answer" required="Required">
									</th>
									<td class="subtd">
										<input type="text" name="result1" class="form-control" required="Required">
									</td>
								</tr>
								<!-- subject 2 -->
								<tr>
									<th><input type="text" name="sub2" class="form-control" placeholder="Your answer" required="Required"></th>
									<td><input type="text" name="result2" class="form-control" required="Required" ></td>
								</tr>
								<!-- subject 3 -->
								<tr>
									<th>
										<input type="text" name="sub3" class="form-control" placeholder="Your answer" required="Required"></th>
									<td>
										<input type="text" name="result3" class="form-control" required="Required">
									</td>
								</tr>
							</table>
						</div>
					</div>

					<!-- ******* Race *********** -->
					<div class="mb-3">
						<label class="form-label">18. Race</label>						
						<div class="form-radio">							
							<input type="radio" id="sinhala" name="race"  value="Sinhala" required="Required">
							<label for="sinhala">Sinhala </label>
							<br/>
							<input type="radio" id="tamil" name="race"  value="Tamil" required="Required">
							<label for="tamil">Tamil </label>
							<br/>	
							<input type="radio" id="muslim" name="race"  value="2021" required="Required">
							<label for="muslim">Muslim </label>	
						</div>

					</div>

					<!-- ******* Gender *********** -->
					<div class="mb-3">
						<label class="form-label">19. Gender</label>
						<div class="form-radio">							
							<input type="radio" id="male" name="gender"  value="Male" required="Required">
							<label for="male">Male </label>
							<br/>
							<input type="radio" id="female" name="gender"  value="Female" required="Required">
							<label for="female">Female </label>
							<br/>								
						</div>
					</div>

					<!-- ******* Marital Status *********** -->
					<div class="mb-3">
						<label class="form-label">20. Marital Status</label>
						<div class="form-radio">							
							<input type="radio" id="single" name="marital"  value="Single" required="Required">
							<label for="single">Single </label>
							<br/>
							<input type="radio" id="married" name="marital"  value="Married" required="Required">
							<label for="married">Married </label>				
						</div>
					</div>

					<!-- ******* Religion *********** -->
					<div class="mb-3">
						<label class="form-label">21. Religion</label>
						<div class="form-radio">							
							<input type="radio" id="buddhism" name="religion"  value="Buddhism" required="Required">
							<label for="buddhism">Buddhism </label>
							<br/>
							<input type="radio" id="hindu" name="religion"  value="Hindu" required="Required">
							<label for="hindu">Hindu </label>
							<br/>		
							<input type="radio" id="islam" name="religion"  value="Islam" required="Required">
							<label for="islam">Islam </label>
							<br/>		
							<input type="radio" id="christianroman" name="religion"  value="Christianity_Roman_Catholic" required="Required">
							<label for="christianroman">Christianity-Roman Catholic </label>
							<br/>		
							<input type="radio" id="christiannonroman" name="religion"  value="Christianity_Non_Roman_Catholic " required="Required">
							<label for="christiannonroman">Christianity-Non-Roman Catholic  </label>			
						</div>
					</div>

					<!-- ******* Date of Birth *********** -->
					<div class="mb-3">
						<label class="form-label">22. Date of Birth</label>
						<input type="date" name="birth" class="form-control" required="Required">
					</div>

					<!-- ******* Age *********** -->
					<div class="mb-3">
						<label class="form-label">23. Age</label>
						<input type="number" name="age" class="form-control" required="Required">
					</div>

					<!-- ******* Citizenship *********** -->
					<div class="mb-3">
						<label class="form-label">24. Citizenship</label>
						<div class="form-radio">
							<input type="radio" id="srilankan" name="citizenship"  value="SriLankan" required="Required">
							<label for="srilankan">Sri Lankan </label>
							<br/>
							<input type="radio" id="foreigner" name="citizenship"  value="Foreigner" required="Required">
							<label for="foreigner">Foreigner </label>
						</div>
					</div>

					<!-- ******* If Sri Lankan *********** -->
					<div class="mb-3">
						<label class="form-label">25. If Sri Lankan</label>
						<div class="form-radio">
							<input type="radio" id="bydescent" name="ifsrilankan"  value="By_Descent" required="Required">
							<label for="bydescent">By Descent </label>
							<br/>
							<input type="radio" id="byregistration" name="ifsrilankan"  value="By_Registration" required="Required">
							<label for="byregistration">By Registration </label>		
						</div>
					</div>

					<!-- ******* Name of the Father *********** -->
					<div class="mb-3">
						<label class="form-label">26. Name of the Father</label>
						<input type="text" name="father" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Father's Occupation  *********** -->
					<div class="mb-3">
						<label class="form-label">27. Father's Occupation : (If not Alive State Here)</label>
						<input type="text" name="fatheroccupation" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Father's Address *********** -->
					<div class="mb-3">
						<label class="form-label">28. Father's Address of the Place of Work</label>
						<input type="text" name="fatheraddress" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Father's Contact Number *********** -->
					<div class="mb-3">
						<label class="form-label">29. Father's Contact Number </label>
						<input type="text" name="fathernumber" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Name of the Mother  *********** -->
					<div class="mb-3">
						<label class="form-label">30. Name of the Mother </label>
						<input type="text" name="mothername" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Mother's Occupation *********** -->
					<div class="mb-3">
						<label class="form-label">31. Mother's Occupation : (If not Alive State Here)</label>
						<input type="text" name="motheroccupation" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Mother's Address of the Place of Work *********** -->
					<div class="mb-3">
						<label class="form-label">32. Mother's Address of the Place of Work</label>
						<input type="text" name="motheraddress" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Mother's Contact Number  *********** -->
					<div class="mb-3">
						<label class="form-label">33. Mother's Contact Number </label>
						<input type="text" name="mothernumber" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ************** Emergency Details ********************** -->
					<h5 class="details">Details of the person to contact In the case of Emergency</h5>	

					<!-- ******* Emergency Name *********** -->
					<div class="mb-3">

						<label class="form-label">1. Name</label>
						<input type="text" name="emergencyname" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Emergency Relationship *********** -->
					<div class="mb-3">
						<label class="form-label">2. Relationship </label>
						<input type="text" name="emergencyrelationship" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Emergency Address *********** -->
					<div class="mb-3">
						<label class="form-label">3. Address</label>
						<input type="text" name="emergencyaddress" class="form-control" placeholder="Your answer" required="Required">
					</div>

					<!-- ******* Emergency Contact Number *********** -->
					<div class="mb-3">
						<label class="form-label">4. Contact Number</label>
						<input type="text" name="emergencynumber" class="form-control" placeholder="Your answer" required="Required">
					</div>


					<!-- ******* Text area for message *********** -->
					<div class="mb-3">
						<label class="form-label">5. Message</label>
						<textarea class="form-control" name="mmsg" rows="4" placeholder="Type here message" required="Required">

						</textarea>

						<div id="emailHelp" class="form-text">
							Don't type any symbols. ex: (''," ",!,@,&,can't).<br/>
							Type only letters and numbers.
						</div>
					</div>
					

				 

					

					<button type="submit" name="send" class="btn btn-primary">Submit</button>


					


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

