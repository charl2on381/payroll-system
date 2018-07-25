<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$deduct = $_POST['deduct'];
	

		$sql = "INSERT INTO deductiontype (deductiondesc) VALUES ('$deduct')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Deduction added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: deductiontype.php');

?>