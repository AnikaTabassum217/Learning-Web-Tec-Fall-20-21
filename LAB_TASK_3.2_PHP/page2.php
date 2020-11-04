
<?php
  $emailErr = "";
  $email = "";
    if(isset($_POST['submit'])){ 
    $email = $_POST['email'];  
    if (empty($email)) {
      $emailErr = "Email is required. </br>";
      $email = "";
    } if (empty($emailErr) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email = "";
    }    
  }
?>

<html>
	<head>
		<title>Page 2</title>
	</head>
	<body>
		<form action="" method="post">
			<fieldset style="width:220px">
			<legend>Email</legend>
			  <input type="text" id="email" name="email" value="" style="margin-top:5px;"></input>
			  <abbr title="hint: sample@example.com"><span>&#8505;</span></abbr> </br>
        <span><?php echo $emailErr;?></span><hr>	         
			  <input type="submit" value="Submit" name="submit" style="margin-top:5px;">
			</fieldset>
		</form> 
	</body>
</html>

<?php
    echo $email;
?>