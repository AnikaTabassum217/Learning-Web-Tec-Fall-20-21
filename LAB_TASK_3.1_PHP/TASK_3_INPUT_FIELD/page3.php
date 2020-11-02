<?php

   $dd = "";
   $mm = "";
   $yyyy = ""; 
  if(isset($_POST['submit'])){ 
    $dd =  $_POST['dd'];
    $mm =  $_POST['mm'];
    $yyyy =  $_POST['yyyy'];    
  }
?>

<html>
	<head>
		<title>Page 3</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">
		  <fieldset >
			<legend>Date of Birth</legend>
				<label for="dd" style="margin-right:33px; margin-left:8px;">dd</label>
				<label for="mm" style="margin-right:25px">mm</label>
				<label for="yyyy">yyyy</label><br>
				<input type="number" id="dd" name="dd" value=" <?= $dd ?>"  style="width:40px">	
				<label >/</label>				
				<input type="number" id="mm" name="mm" value=" <?= $mm ?>" style="width:40px">	
				<label >/</label>	
				<input type="number" id="yyyy" name="yyyy" value=" <?= $yyyy ?>" style="width:50px"><br>
				<hr>
			<input type="submit" name="submit" value="Submit" style="margin-top:5px;">				
		  </fieldset>		  
		</form>
	</body>
</html>


