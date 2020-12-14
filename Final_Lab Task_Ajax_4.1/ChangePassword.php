<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'Current Password'){
			echo "valid password";
		}

		if($_REQUEST['msg'] == 'New Password'){
			echo "New Password";
		}
		f($_REQUEST['msg'] == 'Retype New Password'){
			echo " Retye New Password";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<form>
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" /><br />
						New Password<br />
						<input type="password" /><br />
						Retype New Password<br />
						<input type="password"/>								
						<hr />
						<input type="button" value="Change" onclick="ajax()" />     
						<a href="home.html">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>



	