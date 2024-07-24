/**
* Author: Arun Ragavendhar - 104837257
* Target: jobs.php , apply.php
* Purpose: store Job Ref No from jobs.php to the local storage , navigate the user to apply page on clicking 'apply' , 
            loading Job Ref No from the local storage on the Job Ref No input field on the apply.php page and making it readonly
* Credits: Arun Ragavendhar - 104837257
*/
"use strict";



//function to pre-fill the Job Ref No from local storage when the user navigates to the apply page from the jobs page

 function preFillJobRefNo(fillJobRefNo){

  
// if the value is not null , the value in the local storage is picked up and inputted into the job Ref No field 
// the job Ref No field is set as read only 

     if(fillJobRefNo.value!=null){
    
         fillJobRefNo.readOnly=true;
         fillJobRefNo.value=localStorage.jobRefNo;

     }

 }


// function to store the job ref no of job1 to local storage , when the user clicks on the job1 button 
 function applyForJob1(){

// if the job1-Id element exists  

     if(document.getElementById("job1-Id")){


        // the job ref no is stored in local storage and the user is navigated to the apply page

         localStorage.jobRefNo=document.getElementById("job1-Id").textContent;
         window.location.href="apply.php";
    

     }

  
}

// function to store the job ref no of job2 to local storage , when the user clicks on the job2 button 

 function applyForJob2(){

// if the job2-Id element exists 
     if(document.getElementById("job1-Id")){

      
        // the job ref no is stored in local storage and the user is navigated to the apply page 
        
         localStorage.jobRefNo=document.getElementById("job2-Id").textContent;
         window.location.href="apply.php";
    

     }
  

}


// first executing function from which the  execution starts 

 function init(){

 var job1=document.getElementById("job1-apply");
 var job2=document.getElementById("job2-apply");


// if job1 element exists and if the user clicks on it , the apply for job1 function is invoked 

     if(job1){

        job1.onclick=applyForJob1;

    }

// if job2 element exists and if the user clicks on it , the apply for job2 function is invoked 

     if(job2){

        job2.onclick=applyForJob2;

     }


  /* invoking the function to pick up the Job Ref No that had been stored in the local storage
 when user clicked and navigated to the apply page from the jobs page */

 var fillJobRefNo=document.getElementById("job-id");

     if(fillJobRefNo && localStorage.jobRefNo!=null){

        preFillJobRefNo(fillJobRefNo);

     }

 }

window.onload=init;
// first executing function is invoked

 










