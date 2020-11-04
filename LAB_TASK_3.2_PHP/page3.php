<?php
  $genderErr = "";
  $gender = "";
    if(isset($_POST['submit'])){ 
    $gender = $_POST['gender'];  
    if (empty($gender)) {
      $genderErr = "At least one of them has to be selected </br>";
      $gender = "";
    }    
  }
?>

<html>
	<head>
		<title>Gender</title>
	</head>
	<body>
		<form action="" method="post" style="width:250px">
		  <fieldset >
			<legend>Gender:</legend>
			  <input type="radio" id="male" name="gender" value="male">
			  <label for="male">Male</label>
			  <input type="radio" id="female" name="gender" value="female">
			  <label for="female">Female</label>
			  <input type="radio" id="other" name="gender" value="other">
			  <label for="other">Other</label>        		   
		  </fieldset>
      <span><?php echo $genderErr;?></span>		
      <input type="submit" value="Submit" name="submit" style="margin-top:10px;">			 
		  
		</form>
	</body>
</html>

<?php
    echo $gender;
?>

