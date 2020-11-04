
<?php
  $nameErr = "";
  $name = "";
    if(isset($_POST['submit'])){ 
    $name = $_POST['name'];  
    if (empty($name)) {
      $nameErr = "Name is required. </br>";
    } if(str_word_count($name)<2) {
      $nameErr = $nameErr. "Atlease 2 words required. </br>";
      $name = "";
    } if (!ctype_alpha($name[0])) {
      $nameErr =  $nameErr. "Must start with letter. </br>";
      $name = "";
    }    
  }
?>

<html>
<head>
	<title>Name</title>
</head>
<body>
  
  <br><br>
	<form action="" method="post">
		<fieldset style="width:100px">
			<legend>Name</legend>
			<input type="text" name="name" value="" pattern="[A-Za-z .-]+"></br>
      <span><?php echo $nameErr;?></span><hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

<?php
    echo $name;
?>