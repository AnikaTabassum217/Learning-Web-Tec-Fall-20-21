<?php
	require_once('../php/header.php');
	require_once('../models/usersService.php');
	
		
	$data = "";     
	$err = "";       //
	$id = $_REQUEST['id'];
	$data = getById($id);

	if(isset($_POST['submit'])){   //
		$err = "";  
		$id = $_REQUEST['id'];
		$Username = $_REQUEST['Username'];
		$Type = $_REQUEST['Type'];
		$Password = $_REQUEST['Password'];
		$Email = $_REQUEST['Email'];
		
		
		  
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
				'id'=>$id,
				'username'=> $Username,
				'password'=> $Password,
				'type'=>$Type,
				'email'=>$Email
			];	

			$result = updateUsers($user);

			if($result){
				header('location: ../view/userList.php');
			}else{
				$err = "User update failed";
				header('location: ../php/update.php');
			}
		}
	}

?>

<html>
<head>
	<title>Update</title>
</head>
<body>
	
	<?php echo $err ?>  
	
	<form action="" method="post"> <!--submited in this form -->
	
		<fieldset style="width:220px">
		<legend>Update</legend>

		    <label for="id">ID</label><br/>
			<input type="number" id="id" name="id" value="<?= $data[0]['id'] ?>" readonly style="margin-top:5px;"></input><br/> 
			
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="<?= $data[0]['username'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="Type" value="<?= $data[0]['type'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="<?= $data[0]['password'] ?>" style="margin-top:5px;"></input><br/>

			<label for="id">Email</label><br/>
			<input type="email" id="id" name="Email" value="<?= $data[0]['email'] ?>" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>