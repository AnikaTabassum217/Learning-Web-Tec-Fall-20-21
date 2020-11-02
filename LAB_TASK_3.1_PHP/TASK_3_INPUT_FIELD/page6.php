<html>
	<head>
		<title>Page 6</title>
	</head>
	<body>
		<form action="" method="post" style="width:200px">			
			<fieldset >
			<legend>Blood Group</legend>
			<select id="bloodgroup" name="bloodgroup" style="width:60px">
				<option  value="A+" <?php if ($_POST['bloodgroup'] == 'A+') { ?>selected="true" <?php }; ?>>A+</option>
				<option value="A-"  <?php if ($_POST['bloodgroup'] == 'A-') { ?>selected="true" <?php }; ?>>A-</option>
				<option value="B+"  <?php if ($_POST['bloodgroup'] == 'B+') { ?>selected="true" <?php }; ?>>B+</option>
				<option value="O+"  <?php if ($_POST['bloodgroup'] == 'O+') { ?>selected="true" <?php }; ?>>O+</option>
			</select>										
			<hr>
			<input type="submit" name="submit" value="Submit" style="margin-top:5px;">
			</fieldset>	
		</form>
	</body>
</html>