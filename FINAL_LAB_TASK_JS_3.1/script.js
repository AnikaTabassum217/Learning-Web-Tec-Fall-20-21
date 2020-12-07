"use strict"




function f1(){
	var  data= document.getElementById('name').value;
	
	if (data == "") {
        
      window.alert('name empty!');
        
    }
	
	 else {
        
        var name = data.split(" ");
        
        if (name.length < 0) {
            
            window.alert('empty');
            
        }

}



