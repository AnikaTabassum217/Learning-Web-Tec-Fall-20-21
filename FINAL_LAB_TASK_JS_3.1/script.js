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
}
function f2(){
    
    let data = document.getElementById('email').value;
    
    if (data === "") {
        
        window.alert('Email is empty!');
        
    }
    
}