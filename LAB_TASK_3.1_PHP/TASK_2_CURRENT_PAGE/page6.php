<html>
	<head>
		<title>Page 6</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">			
			<fieldset >
			<legend>Blood Group</legend>
			<select id="bloodgroup" name="bloodgroup" style="width:60px">
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="O+">O+</option>
			</select>										
			<hr>
			<input type="submit" name="submit" value="Submit" style="margin-top:5px;">
			</fieldset>	
		</form>
	</body>
</html>


<?php
  if(isset($_POST['submit'])){ 
    echo $_POST['bloodgroup'];
  }
?>