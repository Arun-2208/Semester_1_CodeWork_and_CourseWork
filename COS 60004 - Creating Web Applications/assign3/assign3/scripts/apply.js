/**
* Author: Arun Ragavendhar - 104837257
* Target: apply.php
* Purpose: form data validation , storing user data in session storage and using this data to pre fill form  
* Credits: Arun Ragavendhar - 104837257
*/
"use strict";



/* function to prefill  user data on window re-load that has been stored in the session storage,
  if the user has successfully validated and submitted the form to the server 
  within the same browser session */

function preFillForm(){

    /* Each one of the below if statements 
      first checks if the 'value' in the 'sessionStorage.key' is not null
      if its not null , then it fills the respective HTML input fields value pairs with the respctive values stored in the session storage keys */

    if(sessionStorage.fname!=null) 
        document.getElementById("first-name").value=sessionStorage.fname;

    if(sessionStorage.lname!=null) 
        document.getElementById("last-name").value=sessionStorage.lname;

    if(sessionStorage.dob!=null) 
        document.getElementById("dob").value=sessionStorage.dob;
    
    
        var getGender=sessionStorage.gender;
    
//switch  case to check the gender in the session storage and mark the corresponding radio button

    switch(getGender){

        case 'male':document.getElementById("male").checked=true;
                    break;
        
        case 'female':document.getElementById("female").checked=true;
                    break;

        case 'non-binary':document.getElementById("non-binary").checked=true;
                    break;

        case 'no-gender':document.getElementById("no-gender").checked=true;
                    break;

        default:    break;
        
    }

/* Each one of the below if statements 
      first checks if the 'value' in the 'sessionStorage.key' is not null
      if its not null , then it fills the respective HTML input fields pairs with the respective values stored in the session storage keys */


    if(sessionStorage.streetAddress!=null)
        document.getElementById("street-address").value=sessionStorage.streetAddress;

    if(sessionStorage.suburb!=null)
        document.getElementById("suburb-town").value=sessionStorage.suburb;

    if(sessionStorage.state!=null)
        document.getElementById("state").value=sessionStorage.state;

    if(sessionStorage.postCode!=null)
        document.getElementById("postcode").value=sessionStorage.postCode;

    if(sessionStorage.email!=null)
        document.getElementById("email").value=sessionStorage.email;

    if(sessionStorage.phNo!=null)    
        document.getElementById("ph-no").value= sessionStorage.phNo;


    if(sessionStorage.checkbox1)
        document.getElementById("check-box1").checked=true;

    if(sessionStorage.checkbox2)
        document.getElementById("check-box2").checked=true;

    if(sessionStorage.checkbox3)
        document.getElementById("check-box3").checked=true;

    if(sessionStorage.checkbox4)
        document.getElementById("check-box4").checked=true;

    if(sessionStorage.checkbox5)
        document.getElementById("check-box5").checked=true;

    if(sessionStorage.checkbox6)
        document.getElementById("check-box6").checked=true;

/* if the the other skills checkbox had been selected previously by the user,
   then the text area is pre filled */         

    if(sessionStorage.checkbox7){
        
        document.getElementById("check-box7").checked=true;

        document.getElementById("other-skills").value=sessionStorage.otherSkills;

    }


}

/*function to store the user data to session Storage , when he/she successully passes 
 all the field validations and submits his/her form to the server */

function storeUserData(){


/*the 'value' of the specific HTML element is stored in the 'session storage.key'*/

if (trim(document.getElementById("first-name").value!=""))
    sessionStorage.fname=document.getElementById("first-name").value;

if (trim(document.getElementById("last-name").value!=""))
    sessionStorage.lname=document.getElementById("last-name").value;

if (trim(document.getElementById("dob").value!=""))
    sessionStorage.dob=document.getElementById("dob").value;


/*for finding the gender selected, the radio button input tags are taken in an array and
     then searched for the 'checked' element*/

    var gender=[];

    var gender=document.getElementById("gender").getElementsByTagName("input");

    for(var i=0;i<gender.length;i++){

        if(gender[i].checked){

            sessionStorage.gender=gender[i].value;
        
            break;
        }
    }

    
/*the 'value' of the specific HTML element is stored in the 'session storage.key'*/


    sessionStorage.streetAddress=document.getElementById("street-address").value;

    sessionStorage.suburb=document.getElementById("suburb-town").value;

    sessionStorage.state=document.getElementById("state").value;

    sessionStorage.postCode=document.getElementById("postcode").value;

    sessionStorage.email=document.getElementById("email").value;

    sessionStorage.phNo=document.getElementById("ph-no").value;


/* every specific check box is first validated if its checked or not 
if it is checked , the value is stored in the session storage as 'true'
else it is stored in the session storage as 'false'*/


    if(document.getElementById("check-box1").checked)
        sessionStorage.checkbox1=true;

    if(document.getElementById("check-box2").checked)
        sessionStorage.checkbox2=true;

    if(document.getElementById("check-box3").checked)
        sessionStorage.checkbox3=true;

    if(document.getElementById("check-box4").checked)
        sessionStorage.checkbox4=true;

    if(document.getElementById("check-box5").checked)
        sessionStorage.checkbox5=true;

    if(document.getElementById("check-box6").checked)
        sessionStorage.checkbox6=true;

    if(document.getElementById("check-box7").checked){
       
        sessionStorage.checkbox7=true;

        sessionStorage.otherSkills=document.getElementById("other-skills").value;

    }


}





// first trigger functions, rUns on window load 


function init1(){

    var regform=document.getElementById("regform");

   if(regform.onsubmit)
    {

        storeUserData();
    }
/* invoking the function to prefill  user data on window re-load that has been stored in the session storage,
  if the user has successfully validated and submitted the form to the server 
  within the same browser session */

    preFillForm();

 
}

// the window load event is map to the first trigger function on window load

onload=init1;












































