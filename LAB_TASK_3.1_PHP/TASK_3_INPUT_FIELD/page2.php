<?php
  $data = "";

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		
		if($email == ""){
			echo " field required...";
		}else{
			$data = $email;
		}
	}
?>

<html>
	<head>
		<title>Page 2</title>
	</head>
	<body>
		<form action="" method="post">
			<fieldset style="width:220px">
			<legend>Email</legend>
			  <input type="email" id="email" name="email" value=" <?=$data ?>" style="margin-top:5px;"></input>
			  <abbr title="hint: sample@example.com"><span>&#8505;</span></abbr> </br><hr>		         
			  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
			</fieldset>
		</form> 
	</body>
</html>

