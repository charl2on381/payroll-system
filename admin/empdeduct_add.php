<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$employee = $_POST['employee'];
		$date = $_POST['date'];
		$deduction = $_POST['deduction'];
		$amount = $_POST['amount'];
		$sql = "SELECT * FROM employees WHERE employee_id = '$employee'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Employee not found';
		}
		else{
			$row = $query->fetch_assoc();
			$employee_id = $row['id'];
			$sql = "INSERT INTO deduction (employee_id, date_deduction, deduction_id, amount) VALUES ('$employee_id', '$date', '$deduction', '$amount')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Employee Deduction added successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: empdeduct.php');

?>