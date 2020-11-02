<html>
<head>
	<title>Name</title>
</head>
<body>
	<form action="" method="post">
		<fieldset style="width:100px">
			<legend>Name</legend>
			<input type="text" name="name" value=""></br><hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>


<?php
  if(isset($_POST['submit'])){ 
    	echo $_POST['name'];
  }
?>