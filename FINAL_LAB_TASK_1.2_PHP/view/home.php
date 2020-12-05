<?php
	require_once('../php/header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page, <?php echo $_COOKIE['flag'];?></title>
</head>
<body>
	<h1>Welcome Home! </h1>
	
	<a href="../php/create.php">Create New User</a> <br>
	<a href="employeeList.php">Employees List</a> <br>
	<a href="../php/logout.php">logout</a>
</body>
</html>