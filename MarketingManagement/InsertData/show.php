<?php require_once('connection.php'); ?>

<?php 

	

	$query = "SELECT * FROM marketingmanagement";

	$result_set = mysqli_query($connection, $query);

	if ($result_set) {
		// checking how many records returned from the query
		//echo "If you entered details are wrong, then you can delete your details and enter your details again.";

		$table = '<table>';
		$table .= '<tr><th>1.Email</th><th>2.Registration Number</th><th>3.Title</th><th>4.Initials</th><th>5.Full name</th><th>6.ID_number</th><th>7.contact_no</th><th>8.perment_address</th><th>9.province</th><th>10.district</th><th>11.divisional_secretariat</th><th>12.postal_address</th><th>13.gce_al</th><th>14.index_no</th><th>15.index_no</th><th>16.al_stream</th><th>17.subject1</th><th>18.result1</th><th>19.subject2</th><th>20.result2</th><th>21.subject3</th><th>22.result3</th><th>23.race</th><th>24.gender</th><th>25.marital</th><th>26.religion</th><th>27.date_of_birth</th><th>28.age</th><th>29.citizenship</th><th>30.IF_Srilankan</th><th>31.father_name</th><th>32.father_occupation</th><th>33.father_address_workplace</th><th>34.father_contact_number</th><th>35.mother_name</th><th>36.mother_address_workplace</th><th>37.mother_contact_number</th><th>38.mother_contact_number</th><th>39.emergency_name</th><th>40.emergency_relationship</th><th>41.emergency_address</th><th>42.emergency_contact</th><th>43.msg</th>';

		while ($record = mysqli_fetch_assoc($result_set)) {
			$table .= '<tr>';
			$table .= '<td>' . $record['email'] . '</td>';
			$table .= '<td>' . $record['registration_no'] . '</td>';
			$table .= '<td>' . $record['title'] . '</td>';
			$table .= '<td>' . $record['initials'] . '</td>';
			$table .= '<td>' . $record['full_name'] . '</td>';
			$table .= '<td>' . $record['ID_number'] . '</td>';
			$table .= '<td>' . $record['contact_no'] . '</td>';
			$table .= '<td>' . $record['perment_address'] . '</td>';
			$table .= '<td>' . $record['province'] . '</td>';
			$table .= '<td>' . $record['district'] . '</td>';	//10
			$table .= '<td>' . $record['divisional_secretariat'] . '</td>';
			$table .= '<td>' . $record['postal_address'] . '</td>';
			$table .= '<td>' . $record['gce_al'] . '</td>';
			$table .= '<td>' . $record['index_no'] . '</td>';
			$table .= '<td>' . $record['z_score'] . '</td>';
			$table .= '<td>' . $record['al_stream'] . '</td>';
			$table .= '<td>' . $record['subject1'] . '</td>';
			$table .= '<td>' . $record['result1'] . '</td>';
			$table .= '<td>' . $record['subject2'] . '</td>';
			$table .= '<td>' . $record['result2'] . '</td>';	//20
			$table .= '<td>' . $record['subject3'] . '</td>';
			$table .= '<td>' . $record['result3'] . '</td>';
			$table .= '<td>' . $record['race'] . '</td>';
			$table .= '<td>' . $record['gender'] . '</td>';
			$table .= '<td>' . $record['marital'] . '</td>';
			$table .= '<td>' . $record['religion'] . '</td>';
			$table .= '<td>' . $record['date_of_birth'] . '</td>';
			$table .= '<td>' . $record['age'] . '</td>';
			$table .= '<td>' . $record['citizenship'] . '</td>';
			$table .= '<td>' . $record['IF_Srilankan'] . '</td>';	//30
			$table .= '<td>' . $record['father_name'] . '</td>';
			$table .= '<td>' . $record['father_occupation'] . '</td>';
			$table .= '<td>' . $record['father_address_workplace'] . '</td>';
			$table .= '<td>' . $record['father_contact_number'] . '</td>';
			$table .= '<td>' . $record['mother_name'] . '</td>';
			$table .= '<td>' . $record['mother_occupation'] . '</td>';
			$table .= '<td>' . $record['mother_address_workplace'] . '</td>';
			$table .= '<td>' . $record['mother_contact_number'] . '</td>';
			$table .= '<td>' . $record['emergency_name'] . '</td>';
			$table .= '<td>' . $record['emergency_relationship'] . '</td>';	//40
			$table .= '<td>' . $record['emergency_address'] . '</td>';
			$table .= '<td>' . $record['emergency_contact'] . '</td>';
			$table .= '<td>' . $record['msg'] . '</td>';
			$table .= '</tr>';
		}

		$table .= '</table>';
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Student details</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style3.css">

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
					<h3><b> - Honours in Marketing Management - Faculty of Business Studies - </b></h3>
					<br>
					<?php echo $table; ?>
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
<?php mysqli_close($connection); ?>