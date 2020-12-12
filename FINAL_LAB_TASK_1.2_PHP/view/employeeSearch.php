<?php
	require_once('../php/header.php');
	require_once('../models/employeesService.php');
	
	$employeelist = [];
	if(isset($_REQUEST['submit'])){
		$employeename = $_REQUEST['employeename'];

		if(empty($employeename)){
			
		}else{		

			$employeelist = getByEmployeeName($employeename);
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo $_COOKIE['flag'];?></h1>  <!--Show username from cookie which is set in logincheck -->
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>
	
	<form method="post" action="#">
		<fieldset>
			<legend>Search</legend>
			<table>
				<tr>
					<td>Employee name</td>
					<td><input type="text" name="employeename"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<?php if(count($employeelist)>0) { ?>
	<h3>Employee list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Employeename</td>
			<td>Contactno</td>
			<td>Username</td>
			<td>Password</td>
			<td>Action</td>
			
		</tr>
	    <?php } ?>
		<?php 
			for($i=0; $i < count($employeelist); $i++) {
		?>
				<tr>
					<td><?= $employeelist[$i]['id'] ?></td>
					<td><?= $employeelist[$i]['employeename'] ?></td>
					<td><?= $employeelist[$i]['contactno'] ?></td>
					<td><?= $employeelist[$i]['username'] ?></td>
					<td><?= $employeelist[$i]['password'] ?></td>					
					<td>
						<a href="../php/update.php?id=<?= $employeelist[$i]['id']  ?>"> EDIT</a> |
						<a href="../php/delete.php?id=<?= $employeelist[$i]['id']  ?>"> DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>