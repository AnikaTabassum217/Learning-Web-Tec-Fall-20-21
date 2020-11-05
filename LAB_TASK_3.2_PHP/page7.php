<?php
 
  $userErr = "";
  $userId = "";
  $userImg = "";
    
    if(isset($_POST['submit'])){ 
      $userId = $_POST['userId'];
      $userImg = $_POST['picture'];

    if (empty($userImg)) {
      $userErr = "Picture can not be empty </br>";
      $userId = "";
      $userImg = "";
    } else if (empty($userId)) {
      $userErr = $userErr . " User Id can not be empty </br>";
      $userId = "";
      $userImg = "";
    } else if ($userId<1) {
      $userErr = $userErr . " User Id must be greater than 0 </br>";
       $userId = "";
      $userImg = "";
    }else{
      $userErr = "";      
    }
  }
?>

<html>
	<head>
		<title>User</title>
	</head>
	<body>
		<form action="" method = "POST" style="width:350px">
			<fieldset >
				<legend>Profile Picture</legend>
				<label for="userId" style="margin-bottom:10px">User Id</label>
				<input type="text" id="userId" name="userId" value="" style="margin-bottom:10px"></input><br/>
				<label for="picture" style="margin-right:3px">Picture</label>
				<input type="file" id="picture" name="picture" value=""></input>
				<hr>	
        <span><?php echo $userErr;?>
				<input type="submit" value="Submit" name="submit" style="margin-top:5px;">
			</fieldset>	
				
		</form>
	</body>
</html>

<?php    
    echo $userId."</br>";
    echo $userImg;
?>