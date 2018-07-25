<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$deduct = $_POST['deduct'];

		$sql = "UPDATE deductiontype SET deductiondesc = '$deduct' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Deduction Type updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:deductiontype.php');

?>