
<?php
  $err = "";
  $name = "";
   $email = "";
   $bloodgroup = "";
   $gender = "";
  $dd =  $_POST['dd'];
	$mm =  $_POST['mm'];
	$yyyy =  $_POST['yyyy'];

    if(isset($_POST['submit'])){ 
    $name = $_POST['name'];  
    if (empty($name)) {
      $err = "Name is required. </br>";
    } if(str_word_count($name)<2) {
      $nameErr = $err. "Atlease 2 words required. </br>";
      $name = "";
    } if (!ctype_alpha($name[0])) {
      $nameErr =  $err. "Must start with letter. </br>";
      $name = "";
    }  

    $email = $_POST['email'];  
    if (empty($email)) {
      $err = $err."Email is required. </br>";
      $email = "";
    } if (empty($emailErr) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $err = $err."Invalid email format. </br>";
      $email = "";
    }   

    $gender = $_POST['gender'];  
    if (empty($gender)) {
      $err = $err. "At least one Gender has to be selected </br>";
      $gender = "";
    } 

    if (empty($dd) || empty($mm) || empty($yyyy)) {
      $err = $err."Invalid date input </br>";
      $dd = "";
      $mm = "";
      $yyyy = "";
    } else if ($dd<1 || $dd>31 || $mm<1 || $mm>12 || 
      $yyyy<1990 || $yyyy>2016) {
      $err = $err."Invalid date input </br>";
      $dd = "";
      $mm = "";
      $yyyy = "";
    }

    if (empty($_POST['degree'])) {
      $err = $err."At least one degree has to be selected </br>";
    }  

    $bloodgroup = $_POST['bloodgroup'];
    if (empty($bloodgroup)) {
      $err = $err."At least one blood group has to be selected </br>";
    } 
   
    $userImg = $_POST['picture'];

    if (empty($userImg)) {
      $err = $err."Picture can not be empty </br>";      
      $userImg = "";
    } 
  }
  
?>

<html>
	<head>
		<title>All</title>
	</head>
	<body>
		<form action="" method="post">
			<table border="1" style="border-collapse:collapse" width="500px">
			<tr>
				<th colspan=3 align="center" style="width:100%"><h1>PERSON PROFILE</h1></th>
			</tr>
			<tr>
				<td style="width:20%">
					<label for="name" style="margin-left:10px">Name</label>
				</td>
				<td style="width:70%">
					<input type="text" id="name" name="name" value="" style="margin:10px"></input>
				</td>
				<td style="width:10%">
				</td>			
			</tr>
			<tr>
				<td style="width:20%">
					<label for="email" style="margin-left:10px">Email</label>
				</td>
				<td style="width:70%">
					<input type="email" id="email" name="email" value="" style="margin:10px"></input>
				</td>
				<td style="width:10%">
				</td>			
			</tr>
			<tr>
				<td style="width:20%">
					<label for="gender" style="margin-left:10px">Gender</label>
				</td>
				<td style="width:70%;padding:10px">
					<input type="radio" id="male" name="gender" value="male">
					<label for="male">Male</label>
					<input type="radio" id="female" name="gender" value="female">
					<label for="female">Female</label>
					<input type="radio" id="other" name="gender" value="other">
					<label for="other">Other</label>
				</td>
				<td style="width:10%">
				</td>			
			</tr>	
			<tr>
				<td style="width:20%">
					<label for="dob" style="margin-left:10px">Date of Birth</label>
				</td>
				<td style="width:70%;padding:10px">
					<input type="number" id="dd" name="dd" style="width:40px">	
					<label >/</label>				
					<input type="number" id="mm" name="mm" style="width:40px">	
					<label >/</label>	
					<input type="number" id="yyyy" name="yyyy" style="width:50px">
					<label for="dob">(dd/mm/yyyy)</label>
				</td>
				<td style="width:10%">
				</td>			
			</tr>
			<tr>
				<td style="width:20%">
					<label for="bloodgroup" style="margin-left:10px">Blood Group</label>
				</td>
				<td style="width:70%;padding:10px">
					<select id="bloodgroup" name="bloodgroup" style="width:60px">
            <option value="">Select One</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="O+">O+</option>
					</select>
				</td>
				<td style="width:10%">
				</td>			
			</tr>
			<tr>
				<td style="width:20%">
					<label for="degree" style="margin-left:10px">Degree</label>
				</td>
				<td style="width:70%;padding:10px">
					<input type="checkbox" id="ssc" name="degree[]" value="SSC">
          <label for="ssc">SSC</label>
          <input type="checkbox" id="hsc" name="degree[]" value="HSC">
          <label for="hsc">HSC</label>
          <input type="checkbox" id="bsc" name="degree[]" value="BSc">
          <label for="bsc">BSc</label>
				</td>
				<td style="width:10%">
				</td>			
			</tr>
			<tr>
				<td style="width:20%">
					<label for="photo" style="margin-left:10px">Photo</label>
				</td>
				<td style="width:70%;padding:10px">
					<input type="file" id="picture" name="picture" value=""></input>
				</td>
				<td style="width:10%">
				</td>			
			</tr>
			<tr>
				<th colspan=3 align="center" style="width:100%; height:40px"></th>
			</tr>
			<tr>
				<th colspan=3 style="width:100%; height:40px;">
					<input type="reset" value="Reset" style="float: right;margin: 5px">
					<input type="submit" value="Submit" name="submit" style="float: right;margin: 5px">					
				</th>
			</tr>
			</table>

      <span><?php echo $err;?>
				
		</form>
	</body>
</html>

<?php    
    echo $name."</br>";
    echo $email."</br>";
    echo $gender."</br>";
    echo $dd . "/" . $mm . "/" . $yyyy."</br>";
    foreach($_POST['degree'] as $selected){
      echo $selected."</br>";
    }
    echo $bloodgroup."</br>";
    echo $userImg."</br>";    
?>