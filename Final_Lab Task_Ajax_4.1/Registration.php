<?php
  $data = "";

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		
		if($name == ""){
			echo " field required...";
		}else{
			$data = $name;
		}
	}
?>

<html>
<form>
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text"><br/>
					Password<br/><input type="password"><br/>
					Confirm Password<br/><input type="password"><br/>
					Name<br/><input type="text"><br/>
					User Type<hr/>
					<input type="radio" />User
					<input type="radio" />Admin
					<hr/>
					<input type="submit" value="Sign Up" onclick="ajax()">
					<td><input type="button" name="button" value="Click" onclick="ajax()"></td>
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</html>