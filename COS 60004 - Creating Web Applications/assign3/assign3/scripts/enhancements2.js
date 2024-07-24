/**
* Author: Arun Ragavendhar - 104837257
* Target: apply.php
* Purpose: to create a timer that displays the left over time the user has to fill the form. 
          If the time runs out and the user has not yet submitted the form,he /she is alerted 
          and then re-directed to the index page.
* Credits: Arun Ragavendhar - 104837257
*/
"use strict";



/* variable to store the total available time in seconds.
Here the timer has been set for 5 minutes , which is 300 seconds*/

var totalTime = 300; 


// variable to store and update the remaining time as the timer runs

var timeRemaining = totalTime;


//variable to hold the result of the setInterval function

var interval;


//variable to reference the timer element being displayed on the html form 

var timer = document.getElementById("timer");


//function to update the timer every second

function updateTimer() {

  
// if the time remaining has reached 0 , the user is alerted and is re-directed to the index page


  if (timeRemaining == 0) {

      alert("Time limit reached!!. Redirecting to index page !!.");
      window.location.href = "../index.php"; 

  }


/* else ,the code snippet breaks down the total time remaining (in seconds) into minutes and seconds, 
formats them with leading zeros, and then updates the content of a HTML timer element 
to display the time remaining in the format MM:SS. 

Math.floor function rounds of the output of timeRemaining/60 to the nearest integer . This returns the minutes.
timeRemaining % 60 returns the seconds and it this then updated in the HTML timer element
*/


  else{

      const minutes = Math.floor(timeRemaining / 60);                                 
      const seconds = timeRemaining % 60;
      timer.innerHTML = `Time Remaining: ${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;


// once the current time remaining has been displayed , the timeRemaing is then decremented by 1 

      timeRemaining--;

  }


}


// function to clear the timer,when the form is submitted before the time runs out 


function clearTimer() {

      clearInterval(interval);

  }



/* the first invoked function which calls the other functions when an event occurs*/

function init2(){


// variable to reference the registration form element from apply.php page


    var regForm=document.getElementById("regform");


// if the form is not yet submitted , the timer is updated and is running till the times runs out


    if(!regForm.onsubmit){

        interval= setInterval(updateTimer, 1000); 

    }


// else , it means the form has been submitted and the timer is cleared 


    else{

        clearTimer();
    }

  }

// first function invoke

init2();
