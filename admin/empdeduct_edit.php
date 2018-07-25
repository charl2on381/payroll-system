<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$date = $_POST['date'];
		$deduction = $_POST['deduct_id'];
		$amount = $_POST['amount'];

		$sql = "UPDATE deduction SET date_deduction = '$date', deduct_id = '$deduction', amount = '$amount' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Deduction updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:empdeduct.php');

?>