function ValidatedName(){
	var  data= document.getElementById('name').value;
	
	if (data === "") {
        
      window.alert('name empty!');
        
    }

    else if (data.substr(0, 1).match(/[A-Za-z]/) == null)
   {
      window.alert('Name is not Validated');
   }

	 else{
        
    var name = data.split(" ");
    
    if (name.length < 2) {
        
        window.alert('Less than 2 word');  
    }
   }    

}

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
     
    if (date === "") {
        
         window.alert('Date is empty!');   
    } else if(date<0 || date>31) {
        window.alert("Invalid date");
    }

    else
    {
        window.alert("Valid date");
    }

    var  mm= document.getElementById('mm').value;
     if (mm === "") {
        
         window.alert('mm is empty!');   
    } else if(mm<0 || mm>12) {
        window.alert("Invalid mm");
    }
    
    
    var  yyyy= document.getElementById('yyyy').value;
     

     if (yyyy === "") {
        
         window.alert('yyyy is empty!');   
    } else if(yyyy<1900 || yyyy>2016) {
        window.alert("Invalid yyyy");
    }

    
}  

function ValidateDegree(){
    
    var data = document.getElementsByName('degree');
    
    if (data === "") {
        
         window.alert('Degree is empty!');   
    }

    else if( ( data[0].checked == false ) && ( data[1].checked == false ) && ( data[2].checked == false ) ) {
        window.alert ( 'Degree is not Validated'); 
    }   
   
    else  {
        window.alert('Degree is Validated');
    }
    
}





function ValidateBloodGroup(){
    
    var data = document.getElementById('bloodgroup').value;
    
    if (data === "") {
        
        window.alert('bloodgroup is empty!');   
    } else {
       window.alert('bloodgroup is valid!');  
    }

    
}


function ValidateProfile(){
    
    var data = document.getElementById('picture').value;
    

    if (data === "") {
        
        window.alert('picture is empty!');   
    }

     var d = document.getElementById('userId').value;

    if (d === "") {
        
        window.alert('userId is empty!');   
    }


    
}



    