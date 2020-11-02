<html>
	<head>
		<title>Page 5</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">
			<fieldset >
				<legend>Degree</legend>
				<input type="checkbox" id="ssc" name="degree1" value="SSC" 
				<?php if (isset($_POST['submit']) && $_POST['degree1']!="") echo "checked";?> >
				<label for="ssc">SSC</label>
				<input type="checkbox" id="hsc" name="degree2" value="HSC"
        <?php if (isset($_POST['submit']) && $_POST['degree2']!="") echo "checked";?>>
				<label for="hsc">HSC</label>
				<input type="checkbox" id="bsc" name="degree3" value="BSc"
        <?php if (isset($_POST['submit']) && $_POST['degree3']!="") echo "checked";?> >
				<label for="bsc">BSc</label>		
				</br><hr>
				<input type="submit" name="submit" value="Submit" style="margin-top:10px;">	
			</fieldset>	
			
		</form>
	</body>
</html>