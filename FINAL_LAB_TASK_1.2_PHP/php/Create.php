<?php
	require_once('../php/header.php');
	require_once('../models/employeesService.php');
	
		
	$data = "";     
	$err = "";      

	if(isset($_POST['submit'])){   
		$err = "";  
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
			    'employeename'=> $Employeename,
				'contactno'=> $Contactno,
				'username'=> $Username,
				'password'=> $Password,
				
			];	

			$result = insertEmployees($employee);

			if($result){
				header('location: ../view/employeeList.php');
			}else{
				$err = "Employee create failed";
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
			<input type="text" id="id" name="Employeename" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Contact No</label><br/>
			<input type="number" id="id" name="Contactno" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="" style="margin-top:5px;"></input><br/>

		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>