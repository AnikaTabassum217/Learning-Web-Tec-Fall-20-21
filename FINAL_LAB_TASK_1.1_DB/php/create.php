<?php
	require_once('../php/header.php');
	require_once('../models/usersService.php');
	
		
	$data = "";     
	$err = "";       //

	if(isset($_POST['submit'])){   //
		$err = "";  
		$Username = $_POST['Username'];
		$Type = $_POST['Type'];
		$Password = $_POST['Password'];
		$Email = $_POST['Email'];
	
		  
		if(empty($Username)) {
			$err = $err . "Username name required<br/>";
		} if(empty($Type)) {
			$err = $err . "Type required<br/>";
		} if(empty($Password)) {
			$err = $err . "Password required<br/>";
		} if(empty($Email)) {
			$err = $err . "Email required<br/>";
		}
		 
		
		if(str_word_count($err)==0){            // error count is 0    
			$user = [
				'username'=> $Username,
				'password'=> $Password,
				'type'=>$Type,
				'email'=>$Email
			];	

			$result = insertUsers($user);

			if($result){
				header('location: ../view/userList.php');
			}else{
				$err = "User create failed";
				header('location: ../php/create.php');
			}
		}
	}

?>



<html>
<head>
	<title>Create</title>
</head>
<body>
	
	<?php echo $err ?>  
	
	<form action="" method="post"> <!--submited in this form -->
	
		<fieldset style="width:220px">
		<legend>Create </legend>
			
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="Type" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="" style="margin-top:5px;"></input><br/>

			<label for="id">Email</label><br/>
			<input type="email" id="id" name="Email" value="" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>