<html>
	<head>
		<title>Page 5</title>
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
				</br><hr>
				<input type="submit" name="submit" value="Submit" style="margin-top:10px;">	
			</fieldset>	
			
		</form>
	</body>
</html>


<?php
  if(isset($_POST['submit'])){ 
    foreach($_POST['degree'] as $selected){
      echo $selected."</br>";
    }
  }
?>