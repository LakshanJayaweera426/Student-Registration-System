<?php require_once('connection.php'); ?>

<?php

						//print_r($_POST);

		$email=$_POST['email'];
		$registration_number = $_POST['registration_number'];
		$title = $_POST['title'];
		$initials = $_POST['initials'];
		$fullname = $_POST['fullname'];//5
		$idnumber = $_POST['idnumber'];
		$contactnumber = $_POST['contactnumber'];
		$address = $_POST['address'];
		$province = $_POST['province'];
		$district = $_POST['district'];//10
		$divisional = $_POST['divisional'];
		$postal = $_POST['postal'];
		$year = $_POST['year'];
		$indexnumber = $_POST['indexnumber'];
		$zscore = $_POST['zscore'];//15
		$stream = $_POST['stream'];
		$sub1 = $_POST['sub1'];		// 17.1
		$result1 = $_POST['result1'];
		$sub2 = $_POST['sub2'];		// 17.2
		$result2 = $_POST['result2'];
		$sub3 = $_POST['sub3'];	// 17.3
		$result3 = $_POST['result3'];
		$race = $_POST['race'];			//18
		$gender = $_POST['gender'];
		$marital = $_POST['marital'];	// 20
		$religion = $_POST['religion'];
		$birth = $_POST['birth'];
		$age = $_POST['age'];
		$citizenship = $_POST['citizenship'];
		$ifsrilankan = $_POST['ifsrilankan'];			//25
		$father = $_POST['father'];	
		$fatheroccupation = $_POST['fatheroccupation'];	
		$fatheraddress = $_POST['fatheraddress'];	
		$fathernumber = $_POST['fathernumber'];	
		$mothername = $_POST['mothername'];				// 30
		$motheroccupation = $_POST['motheroccupation'];	
		$motheraddress = $_POST['motheraddress'];	
		$mothernumber = $_POST['mothernumber'];	
		$emergencyname = $_POST['emergencyname'];	
		$emergencyrelationship = $_POST['emergencyrelationship'];
		$emergencyaddress = $_POST['emergencyaddress'];	
		$emergencynumber = $_POST['emergencynumber'];	
		$mmsg = $_POST['mmsg'];	
		

		$query = "INSERT INTO mathematicsandcomputing (email,registration_no,title,initials,full_name,ID_number,contact_no,perment_address,province,district,divisional_secretariat,postal_address,gce_al,index_no,z_score,al_stream,subject1,result1,subject2,result2,subject3,result3,race,gender,marital,religion,date_of_birth,age,citizenship,IF_Srilankan,father_name,father_occupation,father_address_workplace,father_contact_number,mother_name,mother_occupation,mother_address_workplace,mother_contact_number,emergency_name,emergency_relationship,emergency_address,emergency_contact,msg) VALUES ('{$email}','{$registration_number}','{$title}','{$initials}','{$fullname}','{$idnumber}','{$contactnumber}','{$address}','{$province}','{$district}','{$divisional}','{$postal}','{$year}','{$indexnumber}','{$zscore}','{$stream}','{$sub1}','{$result1}','{$sub2}','{$result2}','{$sub3}','{$result3}','{$race}','{$gender}','{$marital}','{$religion}','{$birth}','{$age}','{$citizenship}','{$ifsrilankan}','{$father}','{$fatheroccupation}','{$fatheraddress}','{$fathernumber}','{$mothername}','{$motheroccupation}','{$motheraddress}','{$mothernumber}','{$emergencyname}','{$emergencyrelationship}','{$emergencyaddress}','{$emergencynumber}','{$mmsg}')"; 
						
		

		/*				

		$query = "INSERT INTO icts (email,name,message) VALUES ('{$email}','{$name}','{$msg}')"; 

		*/

		$result= mysqli_query($connection,$query);

		if ($result ){
			header('location:FileUpload.php');
			
		}else{
		}
	?>