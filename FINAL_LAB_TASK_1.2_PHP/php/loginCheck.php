<?php
	//session_start();
	require_once('../models/EmployeesService.php');

	if(isset($_REQUEST['submit'])){
		$employeename = $_REQUEST['employeename'];
		$password = $_REQUEST['password'];

		if(empty($employeename) || empty($password)){
			//echo "null submission";
			header('location: ../view/login.php?msg=null');
		}else{

			$employee = [
				'employeename'=> $employeename,
				'password'=> $password
			];

			$status = validate($employee);

			if($status){
				setcookie('flag', $employeename, time()+3600, '/');
				header('location: ../view/home.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>