/**
* Author: Arun Ragavendhar - 104837257
* Target: apply.html
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

    sessionStorage.fname=document.getElementById("first-name").value;
    sessionStorage.lname=document.getElementById("last-name").value;
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



// function to validate if the enterd postcode and state name match 

function validateState(postcode,state){


    // the first digit of the postcode is extracted to then match it against the state 

    var firstDigitOfPostCode=parseInt(postcode.substring(0,1));

  
    /* variable to store the result of the checking process
    if the state and postcode matches - it is set to true and returned
    else if the state and postcode do not match - it is set to false and returned*/

    var stateCheck=true;


    switch(firstDigitOfPostCode){

        case 0: if(state!="NT" && state!="ACT")

                    stateCheck=false;   
                
                break;

        case 1 : if(state!="NSW")

                    stateCheck=false;      
                
                break;

        case 2: if(state!="NSW")

                    stateCheck=false;         
                
                break;
                
        case 3: if(state!="VIC")

                    stateCheck=false;        
                
                break;        

        case 4: if(state!="QLD")

                    stateCheck=false;        
                
                break; 


        case 5: if(state!="SA")

                    stateCheck=false;        
                
                break;    
                
        case 6: if(state!="WA")

                    stateCheck=false;        
                
                break;          

        case 7: if(state!="TAS")

                    stateCheck=false;        
                
                break;  

        case 8: if(state!="VIC")

                    stateCheck=false;        
                
                break;  

        case 9: if(state!="QLD")

                    stateCheck=false;        
                
                break;  
        
        default:break;
    }


    return stateCheck;

}



// function to validate the post code format entered by the user

function validatePostCode(postcode){

  

  if(postcode.match(/^\d{4}$/))

    return true;

  
 else 
  
    return false;

}


// function to validate the age of the user using the DOB entered

function validateAge(dob){


   /* from the entered DOB , the day , month and year are extracted first 
      these are respectively compared with the current date - day , month and year 
      if the user age is between 15 and 80 - true is returned 
      else - false is returned
      
       substring method - extracts the specific part of the DOB required 
       parseInt method - converts the extracted substring to an integer
      
      */

    var birthDate=parseInt(dob.substring(0,2));
    var birthMonth=parseInt(dob.substring(3,5));
    var birthYear=parseInt(dob.substring(6,10));


    /* the extracted details are subtracted and compared with the current date details
       to find out the age of ther user*/


    var today=new Date();
    var age=today.getFullYear()-birthYear;                                          //gets year difference

    var monthDiff=today.getMonth()-birthMonth;                                      // gets the month difference

    if(monthDiff<0 || (monthDiff==0 && today.getDate()<birthDate)){                // checks the month differnce and day difference

        age--;
    }


    // age has now been calculated 
    //if the user age is between 15 and 80 - true is returned 

    if(age<15 || age>80){

        return false;
        
    }

    //else - false is returned
  
    else{

        return true;

    }

}


// function to validate the DOB format of user data

function validateDOB(dob){

    if(dob.match(/^([0-2]\d|3[01])\/(0\d|1[0-2])\/\d{4}$/)){

        return true;
    }

    return false;

}



/*the below function is first invoked to validate the user data
 when the user tries to submit the form */ 

function validateUserData(){


// variable to store error message that is to be displayed to the user

    var errMsg="";             
    
// variable to store the result of the validation outcome - either as true or false 

    var result=true;

// variables to reference the DOB , state , postcode, check boxes and text area fields from the apply.html page

    var dob=document.getElementById("dob").value;
    var state=document.getElementById("state").value;
    var postcode=document.getElementById("postcode").value;
    var otherSkills=document.getElementById("check-box7");
    var textarea=document.getElementById("other-skills");


/* if the date of birth field is empty - user is asked to enter it first */  
    
    if(dob==""){

        errMsg="Your date of birth cannot be empty !!";
        document.getElementById("dobErrMsg").textContent=errMsg;
        
        result=false;
    }
    
/* else if ,the date of birth is entered, then its sent for format validation
        and if it fails validation for incorrect format - user is notified to 
        enter the DOB in the correct format */
    
    else if(!validateDOB(dob)){

        errMsg="Your date of birth is not in correct format !!";
        document.getElementById("dobErrMsg").textContent=errMsg;
        
        result=false;

    }   
    
// the error message is cleared once user clears the error and re-submits the form for validation
    
    else{

        errMsg="";
        document.getElementById("dobErrMsg").textContent=errMsg;

    }

// once format validation is done , we go for age limit validation 

// again , a mandatory check that DOB is not empty

    if(dob==""){

        errMsg="Your date of birth cannot be empty !!";
        document.getElementById("dobErrMsg").textContent=errMsg;
        
        result=false;
    }

/* else if ,the date birth is entered, format is correct , it is sent for age limit validation
        and if it fails validation for age out of limit - user is notified that he/she
        cannot apply as age is not in the limit of 15 - 80 */ 

   else if(validateDOB(dob) && !validateAge(dob)){

        errMsg="You cannot apply for the job as your age is not between 15 and 80 years !!";
        document.getElementById("dobErrMsg").textContent=errMsg;

        result=false;

   }

// the error message is cleared once user clears the error and re-submits the form for validation

   else if(validateDOB(dob) && validateAge(dob)){

        errMsg="";
        document.getElementById("dobErrMsg").textContent=errMsg;

    }


//mandatory check for the 'state' being left empty by the user
//if it is empty - user is notified to select the state 

    if(state==""){

        errMsg="Your state cannot be empty !!";
        document.getElementById("stateErrMsg").textContent=errMsg;
        
        result=false;
    }

// the error message is cleared once user clears the error and re-submits the form for validation    

    else{

        errMsg="";
        document.getElementById("stateErrMsg").textContent=errMsg;
        
    }

/*mandatory check for postcode being empty -
if it is empty - user is notified to select the postcode */

    if(postcode==""){

        errMsg="Your postcode cannot be empty !!";
        document.getElementById("postCodeErrMsg").textContent=errMsg;
        
        result=false;
    }
    
/*else if - the post code is entered , it is then sent for validation 
if the postcode entred is in correct format - 
if it fails validation - user is notfied to enter it in correct format  */
    
    else if (!validatePostCode(postcode)){

        errMsg="Your postcode must be a 4 digit number!!";
        document.getElementById("postCodeErrMsg").textContent=errMsg;

        result=false;

    }

/*else if - the state and postcode are entered  and in correct format, then the chosen state and post code 
is sent for validation - if it fails validation , the user is notified to choose 
the correct state and pincode matching*/


   else if(!validateState(postcode,state) && state!="" && postcode!=""){

        errMsg="Your postcode is not matching with your selected state !!";
        document.getElementById("postCodeErrMsg").textContent=errMsg;

        result=false;

   }

// the error message is cleared once user clears the error and re-submits the form for validation

   else{

        errMsg="";
        document.getElementById("postCodeErrMsg").textContent=errMsg;

    }
   

// checking if 'otherskills' checkbox is selcted for not

   if(otherSkills.checked==true){

    
/* if the other skills check box has been selected ,
then the text area cannot be empty , so it is checked next */

//the below code checks if the trimmed value (without leading or trailing whitespace) of the textarea is an empty string or not.

        if(textarea.value.trim()===""){

            errMsg="Your text area cannot be empty !!";
            document.getElementById("otherSkillsErrMsg").textContent=errMsg;

            result=false;

        }     

// the error message is cleared once user clears the error and re-submits the form for validation        


        else{

            errMsg="";
            document.getElementById("otherSkillsErrMsg").textContent=errMsg;
        
            }

        }      


/* if the other skills check box is not selected, then the user cannot write in the text area 
   and user is notified to rectify this error*/


   if(otherSkills.checked==false){
   
        if(textarea.value.trim()!=""){

            errMsg="You cannot write in text area as you have not checked 'otherskills' textbox !!";
            document.getElementById("otherSkillsErrMsg").textContent=errMsg;

            result=false;

            }     
    
    
        else{

            errMsg="";
            document.getElementById("otherSkillsErrMsg").textContent=errMsg;
        
            }

        }        




/* If the data entered by thee user has passed all the validations,
and the result is true for all cases , then the user data is stored 
in the session storage */

 
        if(result==true){

        storeUserData();

         }


/* the result is returned on form submit 
   if - result is true - form is submitted to the server
   else - result is false - validation messages thrown to the user , to correct the mistakes and re-submit the form*/


   return result; 
   

}


// first trigger functions, rins on window load 

function init1(){

    
// variable to reference the form element of the apply.html page 

    var regForm=document.getElementById("regform");

// when the user tries to submit the form , a function to validate the user input is triggered    

    regForm.onsubmit=validateUserData;


/* invoking the function to prefill  user data on window re-load that has been stored in the session storage,
  if the user has successfully validated and submitted the form to the server 
  within the same browser session */

    preFillForm();

 
}

// the window load event is map to the first tigger function on window load

window.onload=init1;












































