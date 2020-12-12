<?php
	require_once('../php/header.php');
	require_once('../models/employeesService.php');
	
		
	$data = "";     
	$err = "";       //
	$id = $_REQUEST['id'];
	$data = getById($id);

	if(isset($_POST['submit'])){   //
		$err = "";  
		$id = $_REQUEST['id'];
		$Employeename = $_POST['Employeename'];
		$Contactno = $_POST['Contactno'];
		$Username=$_POST['Username'];
		$Password = $_POST['Password'];
		
		
		  
	 if(empty($Employeename)) {
			$err = $err . "Employeename required<br/>";
		} if(empty($Contactno)) {
			$err = $err . "Contactno required<br/>";
		} if(empty($Username)) {
			$err = $err . "Username required<br/>";
		} if(empty($Password)) {
			$err = $err . "Password required<br/>";
		}
		 
		
		if(str_word_count($err)==0){            // error count is 0    
			$employee = [
				'id'=>$id,
				'employeename'=> $Employeename,
				'contactno'=> $Contactno,
				'username'=> $Username,
				'password'=> $Password,
			];	

			$result = updateEmployees($employee);

			if($result){
				header('location: ../view/employeeList.php');
			}else{
				$err = "Employee update failed";
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
			
			<label for="id">Employee Name</label><br/>
			<input type="text" id="id" name="Employeename" value="<?= $data[0]['employeename'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Contact No</label><br/>
			<input type="number" id="id" name="Contactno" value="<?= $data[0]['contactno'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="<?= $data[0]['username'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="<?= $data[0]['password'] ?>" style="margin-top:5px;"></input><br/>
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>