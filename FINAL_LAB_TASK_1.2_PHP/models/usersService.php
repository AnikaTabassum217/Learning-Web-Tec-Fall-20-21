<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from employees where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById($id){

		$conn = getConnection();
		$sql = "select * from employees where id=".$id;
		$result = mysqli_query($conn, $sql);

		$employee =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($employee, $data);//array_push() function inserts one or more elements to the end of an array
		}

		return $employee;
	}


	function getAllEmployee(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$employee =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($employee, $data);
		}

		return $employee;
	}


	function insertUsers($employee){

		$conn = getConnection();
		$sql = "insert into users values('','{$employee['employeename']}','{$employee['contactno']}', '{$employee['username']}', '{$employee['password']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteEmployee($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateEmployee($user){
    
	$conn = getConnection();
		//$sql = "insert into users values('{$id['id']}', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$sql = "UPDATE `users` SET `username`='{$user['username']}',
					`password`='{$user['password']}',`email`='{$user['email']}',
					`type`='{$user['type']}' WHERE id='{$user['id']}'";
		
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}

?>