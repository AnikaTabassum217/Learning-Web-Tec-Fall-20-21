
<?php
 
  $degreeErr = "";
    if(isset($_POST['submit'])){ 
    if (empty($_POST['degree'])) {
      $degreeErr = "At least one of them has to be selected </br>";
    }    
  }
?>

<html>
	<head>
		<title>Degree</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">
			<fieldset >
				<legend>Degree</legend>
				<input type="checkbox" id="ssc" name="degree[]" value="SSC">
				<label for="ssc">SSC</label>
				<input type="checkbox" id="hsc" name="degree[]" value="HSC">
				<label for="hsc">HSC</label>
				<input type="checkbox" id="bsc" name="degree[]" value="BSc">
				<label for="bsc">BSc</label>					
			</fieldset>	
      
      <span><?php echo $degreeErr;?>
      <input type="submit" value="Submit" name="submit" style="margin-top:10px;">	</br>
			
		</form>
	</body>
</html>

<?php
    foreach($_POST['degree'] as $selected){
      echo $selected."</br>";
    }
?>