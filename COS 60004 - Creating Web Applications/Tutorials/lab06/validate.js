


"use strict";



function prefillForm(){


    document.getElementById("firstname").value=sessionStorage.fname;
    document.getElementById("lastname").value=sessionStorage.lname;
    document.getElementById("age").value=sessionStorage.age;
    document.getElementById("beard").value=sessionStorage.beard;
    document.getElementById("food").value=sessionStorage.food;
    document.getElementById("partySize").value=sessionStorage.partySize;


    


    switch(sessionStorage.species){

        case "Human":{document.getElementById("human").checked=true;
                       break; }
                       
        case "Dwarf":{document.getElementById("dwarf").checked=true;
                       break; }

        
        case "Elf":{document.getElementById("elf").checked=true;
                       break; }

                       
        case "Hobbit":{document.getElementById("hobbit").checked=true;
                        break; }

         default: "mandatory";               

    }



    switch(sessionStorage.trip){

        case " 1day ":{
                document.getElementById("1day").checked=true;
                break;}

        case " 4days ":{   
                
                document.getElementById("4day").checked=true;
                break;}
                
        case " 10days ":{
                
                document.getElementById("10day").checked=true;
                break;}


        case " 4days  10days ":{            
                document.getElementById("4day").checked=true;
                document.getElementById("10day").checked=true;                        
                break;}

        case " 1day  10days ":{            
                document.getElementById("1day").checked=true;
                document.getElementById("10day").checked=true;                        
                break;}     
                
        case " 1day  4days ":{            
                document.getElementById("1day").checked=true;
                document.getElementById("4day").checked=true;                        
                break;}    
                
        case " 1day  4days  10days ":{            
                document.getElementById("1day").checked=true;
                document.getElementById("4day").checked=true;      
                document.getElementById("10day").checked=true;                    
                break;} 

        
        default:   "mandatory";    
    }

}

function storeBooking(firstName,lastName,age,is1day,is4day,is10day){

    var trip="";
    if(is1day)trip+=" 1day ";
    if(is4day)trip+=" 4days ";
    if(is10day)trip+=" 10days ";


    sessionStorage.trip=trip;
    sessionStorage.fname=firstName;
    sessionStorage.lname=lastName;
    sessionStorage.age=age;
    sessionStorage.species=getSpecies();
    sessionStorage.food=document.getElementById("food").value;
    sessionStorage.partySize=document.getElementById("partySize").value;
    sessionStorage.beard=document.getElementById("beard").value;

    alert("thanks buddy . all the user values has been stored in session storage!!.");
}




function getSpecies(){

    var speciesName="unknown";
    var speciesArray=[];


    speciesArray=document.getElementById("species").getElementsByTagName("input");

    for(var i=0;i<speciesArray.length;i++){

        if(speciesArray[i].checked)

            speciesName=speciesArray[i].value;

    }
    return speciesName;
}


function checkSpeciesAge(age){

    var errMsg2="";
    var foundSpecies=getSpecies();
    

    switch(foundSpecies){

        case "Human": if(age>120){

                        errMsg2="You cannot be a "+foundSpecies+ " and more than 120 years old";
                        
                        }break;

        case "Dwarf": if(age>150){

                         errMsg2="You cannot be a "+foundSpecies+" and be above 150 years old"; 

                        }break;
                        
        case "Hobbit": if(age>150){

                        errMsg2="You cannot be a "+foundSpecies+" and be above 150 years old";       
                        }break;          

        case "Elf" :    break;
         
        default: errMsg2="sorry u r type is not allowed on tours because u have not selected a species type yet";

    }

        return errMsg2;

}


function checkSpeciesBeard(age,beard){

    var errMsg3="";
    var foundSpecies2=getSpecies();

    switch(foundSpecies2){

        case "Human": break;
                        

        case "Dwarf": if((age>30) && (beard<12)){

                        errMsg3="You cannot be a "+foundSpecies2+" above 30 years old but without a beard less than 12 inches !!";       
                    
                        }   break;   
        case "Hobbit": if(beard>0){

                        errMsg3="You cannot be a "+foundSpecies2+" and have a beard !!";       
                        
                        }      break;    

        case "Elf" :    if(beard>0){

                        errMsg3="You cannot be a "+foundSpecies2+" and have a beard !! ";       
                    
                        }    break;

        
        default: errMsg3="sorry u are not allowed as u have not chosen a species yet";

    }

    return errMsg3;
}


function validate(){

    var errMsg="";
    var result=true;
    var firstName=document.getElementById("firstname").value;
    var lastName=document.getElementById("lastname").value;
    var age=document.getElementById("age").value;
    var partySize=document.getElementById("partySize").value;
    var is1day=document.getElementById("1day").checked;
    var is4day=document.getElementById("4day").checked;
    var is10day=document.getElementById("10day").checked;
    var human=document.getElementById("human").checked;
    var dwarf=document.getElementById("dwarf").checked;
    var elf=document.getElementById("elf").checked;
    var hobbit=document.getElementById("hobbit").checked;
    var beard=document.getElementById("beard").value;
    

    if(!firstName.match(/^[a-zA-Z]+$/)){

        errMsg=errMsg+"your firstname must contain only alpha characters\n";
        result=false;
    }

    if(!lastName.match(/^[a-zA-Z\-]+$/)){

        errMsg=errMsg+"your lastname must contain only alpha characters or iphen\n";
        result=false;
    }

    if(!(human || dwarf || elf || hobbit)){

        errMsg=errMsg+"you must select atleast one species type\n";
        result=false; 
    }

    if(isNaN(age)){

        errMsg=errMsg+"your age must be a number\n";
        result=false;
    }

    else if(age<18){
        
        errMsg=errMsg+"your age must be above 18\n";
        result=false;

    }

    else{
        var tmpMsg="";  
        var tmpMsg=checkSpeciesAge(age);
    
        if(tmpMsg!=""){
    
            errMsg=errMsg+tmpMsg+'\n';
            result=false;
        }
       
    }
   

    if(!((partySize>1) && (partySize<100))){

        errMsg=errMsg+"party size is not in acceptable range\n";
        result=false;
    }

    if(document.getElementById("food").value=="none"){

        errMsg=errMsg+"you must select atleast one food option\n";
        result=false;
    }

    if(!(is1day || is4day || is10day)){

        errMsg=errMsg+"you must check atleast one tour package\n";
        result=false;
    }

    
    var tmpMsg2="";
    var tmpMsg2=checkSpeciesBeard(age,beard);

    if(tmpMsg2!=""){

        errMsg=errMsg+tmpMsg2+'\n';
        result=false;
    }


    if(result){

        storeBooking(firstName,lastName,age,is1day,is4day,is10day);
    }


    if(errMsg!=""){

        alert(errMsg);
    }

    return result;
}




function init(){


    prefillForm();

    var regForm=document.getElementById("regform");
    regForm.onsubmit=validate;
}



window.onload=init;