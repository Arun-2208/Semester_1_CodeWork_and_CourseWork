/**
* Author: Arun Ragavendhar - 104837257
* Target: index.php
* Purpose: to create a slideshow of images on the index page using javascript to enhance and provide an immersive user experience
* Credits: Arun Ragavendhar - 104837257
*/
"use strict";



// variable to hold the result of the setInterval function

var show;


//variable to reference the image element of the index.php page to use and manipulate it in JavaScript

var imgReference=document.getElementById("clogo");


// the 4 images to be shown in the slideshow are stored as an array with their url address

var images=new Array('./images/logo1.png','./images/logo2.png','./images/logo3.png','./images/logo4.png');


//  variable to mark the index of the array of images to iterate them to create a slideshow

var imageIndex=0;


/* 
    The "slideshow" function iterates through the array of images by incrementing the index count by 1 
    and taking Modulus of the index so that the index keeps rotating between 0-3.
    For one particular instance of an index , the function changes the image source used for the image in the index.php file. 
   */

function slideshow(){


    imageIndex+=1;                                              
    imageIndex=imageIndex%4;

    imgReference.src=images[imageIndex];

}


/* the first trigger function when the window loads*/

function init(){

    show=setInterval(slideshow,2000);

}

//the window load event is mapped to the first trigger function

window.onload=init;