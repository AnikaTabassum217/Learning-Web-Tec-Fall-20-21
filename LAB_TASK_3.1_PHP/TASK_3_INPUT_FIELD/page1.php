<?php
  $data = "";

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		
		if($name == ""){
			echo " field required...";
		}else{
			$data = $name;
		}
	}
?>

<html>
<head>
	<title>Name</title>
</head>
<body>
	<form action="" method="post">
		<fieldset style="width:100px">
			<legend>Name</legend>
			<input type="text" name="name" value=" <?=$data ?>"></br><hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

