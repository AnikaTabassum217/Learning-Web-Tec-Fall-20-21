<html>
	<head>
		<title>Page 2</title>
	</head>
	<body>
		<form action="" method="post">
			<fieldset style="width:220px">
			<legend>Email</legend>
			  <input type="email" id="email" name="email" value="" style="margin-top:5px;"></input>
			  <abbr title="hint: sample@example.com"><span>&#8505;</span></abbr> </br><hr>		         
			  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
			</fieldset>
		</form> 
	</body>
</html>


<?php
  if(isset($_POST['submit'])){ 
    	echo $_POST['email'];
  }
?>