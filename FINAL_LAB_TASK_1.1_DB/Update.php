<?php
	
	$data = "";     
	$err = "";       //
	
	$id = $_REQUEST['id'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users where id = ".$_REQUEST['id'];
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);

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
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE `users` SET `username`='$Username',
					`password`='$Password',`email`='$Email',
					`type`='$Type' WHERE id='$id'";
			
			if ($conn->query($sql) === TRUE) {
			  header('location: Home.php');
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();			
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
			<input type="number" id="id" name="id" value="<?= $data['id'] ?>" style="margin-top:5px;"></input><br/> 
			
			<label for="id">User Name</label><br/>
			<input type="text" id="id" name="Username" value="<?= $data['username'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="Type" value="<?= $data['type'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Password</label><br/>
			<input type="password" id="id" name="Password" value="<?= $data['password'] ?>" style="margin-top:5px;"></input><br/>

			<label for="id">Email</label><br/>
			<input type="email" id="id" name="Email" value="<?= $data['email'] ?>" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>