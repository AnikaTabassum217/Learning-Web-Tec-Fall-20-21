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
	<a href="register.php">Register</a> |
	<a href="../php/create.php">Create New Employee</a> |
	<a href="employeelist.php">Employee List</a> |
	<a href="../php/logout.php">logout</a>
</body>
</html>