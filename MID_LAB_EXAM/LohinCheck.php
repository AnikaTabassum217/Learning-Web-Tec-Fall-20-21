<?php
	

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$id = $_REQUEST['id'];
		

		if(empty($username) || empty($password) || empty ($id)){
			
			header('location: login.php?msg=null');
		}else{

			if($username == $password ){
				

				
				header('location: home.php');
			}else{
				header('location: login.php?msg=invalid');
			}
		}
	}else{
		header('location: login.php');
	}
	

?>