"use strict"

function ajax(){
	let data= document.getElementById('name').value;

	var xhttp = new XMLHttpRequest();
	xhttp.open('REQUEST', 'Login.php', true);
	xhttp.open('REQUEST', 'Registration.php', true);
	xhttp.open('REQUEST', 'changePassword.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	document.getElementById('result').innerHTML = this.responseText;
	    }
	}
	
	xhttp.send('name='+data);
	xhttp.send('msg='+data);
}