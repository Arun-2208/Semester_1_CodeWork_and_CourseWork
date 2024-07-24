

"use strict";

function cMessage(){

    var a=document.getElementById("pMessage");
    a.textContent="You have finished task 1";
    
}


function rewriteParagraph(userName)
{
    message.innerHTML=" Hi "+userName+" If u have recieved this message then have succesfully \nchanged the content of your HTML element.Congrats!!";
    
    
}

function putName()
{
var sName=prompt("Enter your name.\nthis prompt should open when the\n 'Click me!' button is pressed","Enter your name");
alert("Hi there "+sName+".Alert boxes are a quick way to check\nstate of your variables when devloping code");
rewriteParagraph(sName);
}

function init()
{
    var getName=document.getElementById("click me");
    getName.onclick=putName;
    
    var trigger=document.getElementById("heading");
    trigger.onclick=cMessage;
    
}


window.onload=init;

