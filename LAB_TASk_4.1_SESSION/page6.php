
<?php
 
  $bloodgroupErr = "";
  $bloodgroup = "";
    
    if(isset($_POST['submit'])){ 
      $bloodgroup = $_POST['bloodgroup'];
    if (empty($bloodgroup)) {
      $bloodgroupErr = "At least one of them has to be selected </br>";
    } else{
      $bloodgroupErr = "";      
    }
  }
?>

<html>
	<head>
		<title>Blood group</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">			
			<fieldset >
			<legend>Blood Group</legend>
			<select id="bloodgroup" name="bloodgroup" style="width:60px">
        <option value="">Select one</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="O+">O+</option>
			</select>										
			<hr>
      <span><?php echo $bloodgroupErr;?>
			<input type="submit" value="Submit" name="submit" style="margin-top:5px;">
			</fieldset>	
		</form>
	</body>
</html>

<?php    
    echo $bloodgroup;
?>