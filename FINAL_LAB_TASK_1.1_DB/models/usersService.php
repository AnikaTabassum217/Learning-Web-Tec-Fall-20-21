<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
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
		$sql = "select * from users where id=".$id;
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);//array_push() function inserts one or more elements to the end of an array
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers($user){
    
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