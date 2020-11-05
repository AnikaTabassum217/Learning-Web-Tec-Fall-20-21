
<?php
  $dd =  $_POST['dd'];
	$mm =  $_POST['mm'];
	$yyyy =  $_POST['yyyy'];
  
  $dobErr = "";
  $gender = "";
    if(isset($_POST['submit'])){ 
    if (empty($dd) || empty($mm) || empty($yyyy)) {
      $dobErr = "Invalid input </br>";
      $dd = "";
      $mm = "";
      $yyyy = "";
    } else if ($dd<1 || $dd>31 || $mm<1 || $mm>12 || 
      $yyyy<1990 || $yyyy>2016) {
      $dobErr = "Invalid input </br>";
      $dd = "";
      $mm = "";
      $yyyy = "";
    }    
  }
?>

<html>
	<head>
		<title>DoB</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">
		  <fieldset >
			<legend>Date of Birth</legend>
				<label for="dd" style="margin-right:33px; margin-left:8px;">dd</label>
				<label for="mm" style="margin-right:25px">mm</label>
				<label for="yyyy">yyyy</label><br>
				<input type="number" id="dd" name="dd" style="width:40px">	
				<label >/</label>				
				<input type="number" id="mm" name="mm" style="width:40px">	
				<label >/</label>	
				<input type="number" id="yyyy" name="yyyy" style="width:50px"><br>
				<hr>
        <span><?php echo $dobErr;?>
			<input type="submit" value="Submit" name="submit" style="margin-top:5px;">				
		  </fieldset>		  
		</form>
	</body>
</html>

<?php
    echo $dd . "/" . $mm . "/" . $yyyy;
?>