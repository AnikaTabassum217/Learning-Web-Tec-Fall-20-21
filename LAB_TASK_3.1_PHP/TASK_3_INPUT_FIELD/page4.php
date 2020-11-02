<html>
	<head>
		<title>Page 4</title>
	</head>
	<body>
		<form action="" method="post" style="width:250px">
		  <fieldset >
			<legend>Gender:</legend>
			  <input type="radio" id="male" name="gender" 
        <?php if (isset($_POST['submit']) && $_POST['gender']=="male") echo "checked";?> value="male">
			  <label for="male">Male</label>
			  <input type="radio" id="female" name="gender" 
        <?php if (isset($_POST['submit']) && $_POST['gender']=="female") echo "checked";?> value="female">
			  <label for="female">Female</label>
			  <input type="radio" id="other" name="gender" 
        <?php if (isset($_POST['submit']) && $_POST['gender']=="other") echo "checked";?> value="other">
			  <label for="other">Other</label>	
			  </br><hr>
			  <input type="submit" name="submit" value="Submit" style="margin-top:10px;">			  
		  </fieldset>		  
		</form>
	</body>
</html>


