/*function f1(){
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
}*/

function ValidateEmail(){
    
    var data = document.getElementById('email').value;
    
    if (data === "") {
        
        window.alert('Email is empty!');   
    }

    else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)

     {
    window.alert('Email is not Validated');
     }
        
    else
   {
    window.alert('Email is Validated');
    }   
    }

 function ValidateGender(){
    
    var data = document.getElementsByName('gender');


    
    if (data === "") {
        
         window.alert('Gender is empty!');   
    }

    else if( ( data[0].checked == false ) && ( data[1].checked == false ) && ( data[2].checked == false ) ) {
        window.alert ( 'Gender is not Validated'); 
    }   
   
    else  {
        window.alert('Gender is Validated');
    }

    }

function ValidatedDOB(){ 

     var  date= document.getElementById('dd').value;
     var  mm= document.getElementById('mm').value;
     var  yyyy= document.getElementById('yyyy').value;
    
    if (date === "") {
        
         window.alert('Date is empty!');   
    } else if(date<0 || date>31) {
        window.alert("Invalid date");
    }
    


    // else if (mm === "") {

    //     window.alert('MOnth is empty'); 
    // } 
    //  else  if(yyyy === "")
    // { 
    //  window.alert('Year is empty'); 
    // } 

    
}  



    