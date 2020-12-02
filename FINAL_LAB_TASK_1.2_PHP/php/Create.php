<?php
	require_once('../php/header.php');
	require_once('../models/usersService.php');
	
		
	$data = "";     
	$err = "";       //

	if(isset($_POST['submit'])){   //
		$err = "";  
		$employeeName = $_POST['employeeName'];
		$contactNo = $_POST['contactNo'];
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		
	
		  
		if(empty($employeeName)) {
			$err = $err . "employeeName name required<br/>";
		} if(empty($contactNo)) {
			$err = $err . "contactNo required<br/>";
		} if(empty($Username)) {
			$err = $err . "Username required<br/>";
		} if(empty($Password)) {
			$err = $err . "Password required<br/>";
		}
		 
		
		if(str_word_count($err)==0){            // error count is 0    
			$employee = [
			    'eployeename'=> $employeeName,
				'contactno'=> $contactNo,
				'username'=> $Username,
				'password'=> $Password,
				
			];	

			$result = insertEmployee($employee);

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
		
		
			
			<label for="id">Employee Name</label><br/>
			<input type="text" id="id" name="employeeName" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Contact No</label><br/>
			<input type="text" id="id" name="contactNo" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="" style="margin-top:5px;"></input><br/>

			
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>