

"use script";

function newMessage()
{
    n_message.textContent="A new message written! Task Completed !";
}

function rewriteParagraph(userName)
{
    message.innerHTML=" Hi "+userName+" If u have recieved this message then have succesfully \nchanged the content of your HTML element.Congrats!!";
}

function putName()
{
var sName=prompt("Enter your name.\nthis prompt should openwhen the\n 'Click me!' button is pressed","Enter your name");
alert("Hi there "+sName+".Alert boxes are a quick way to check\nstate of your variables when devloping code");
rewriteParagraph(sName);
}

function init()
{
    var getName=document.getElementById("click me");
    getName.onclick=putName;
    
}


window.onload=init;

var trigger=document.getElementsByTagName(h1);
trigger[0].onclick=newMessage;