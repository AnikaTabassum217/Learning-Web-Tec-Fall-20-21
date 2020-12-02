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
		
		
		  
	/* if(empty($Username)) {
			$err = $err . "Username name required<br/>";
		} if(empty($Type)) {
			$err = $err . "Type required<br/>";
		} if(empty($Password)) {
			$err = $err . "Password required<br/>";
		} if(empty($Email)) {
			$err = $err . "Email required<br/>";
		} */
		 
		
		//if(str_word_count($err)==0){               
				

			$result = deleteEmployee($id);

			if($result){
				header('location: ../view/employeeList.php');
			}else{
				$err = "Delete  failed";
				header('location: ../php/delete.php');
			}
		//}
	}

?>

<html>
<head>
	<title>Delete</title>
</head>
<body>
	
	<?php echo $err ?>  
	
	<form action="" method="post"> <!--submited in this form -->
	
		<fieldset style="width:220px">
		<legend>Delete</legend>

		    <label for="id">ID</label><br/>
			<input type="number" id="id" name="id" value="<?= $data[0]['id'] ?>" readonly style="margin-top:5px;"></input><br/>

             <label for="id">Employee Name</label><br/>
			<input type="text" id="id" name="Employeename" value="<?= $data[0]['eployeename'] ?>" readonly style="margin-top:5px;"></input><br/>
			
			label for="id">Contact No</label><br/>
			<input type="text" id="id" name="Type" value="<?= $data[0]['contactno'] ?>" readonly style="margin-top:5px;"></input><br/>
						
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="<?= $data[0]['username'] ?>" readonly style="margin-top:5px;"></input><br/>
			
		
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="<?= $data[0]['password'] ?>" readonly style="margin-top:5px;"></input><br/>

			
		  <input type="submit" name="submit" value="Delete" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>