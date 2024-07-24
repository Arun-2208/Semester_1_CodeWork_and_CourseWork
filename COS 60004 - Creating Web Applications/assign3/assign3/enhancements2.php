<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enhancements2</title>
        <meta charset="utf-8">
        <meta name="description" content="Assign-2 website using HTMl and CSS-Enhancements Page">
        <meta name="keywords" content="Metaphoton,IT,Technology,HTML,CSS,cloud,infrastructure">
        <meta name="author" content="Arun Ragavendhar-104837257">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
       
        <?php 

            include('header.inc');
            include('menu.inc');

        ?>
        
        <div id="enhancements2">
            <div id="section-enhancements2">
               <fieldset>
                    <legend><strong>A slideshow of images on the index page</strong></legend>
                        <p>An array of 4 images is first stored. A "slideshow" function is called periodically in an 
                           interval of 2 seconds using the "setInterval" function.</p>
                            <ul>
                                <li>The "slideshow" function iterates through the array of images by incrementing the index count by 1 
                                    and taking Modulus of the index so that the index keeps rotating between 0-3.
                                    imageIndex+=1;
                                    imageIndex=imageIndex%4;</li>

                                <li>For one particular instance of an index , the function changes the image source used for the image in the index.php file.
                                    var imgReference=document.getElementById("clogo");
                                    imgReference.src=images[imageIndex];</li>
                                                              
                                <li><strong><a href=./index.php>Index Page</a></strong>&nbsp;&nbsp;<span>- The slideshow starts automatically when the index page loads</span></li>
                        
                            </ul>        
                </fieldset>

               <fieldset>
                    <legend><strong>A timer for the apply page</strong></legend>
                        <p>A timer has been created for the apply page for a set time limit of 5 mins for the user 
                            to finish his/her application form and submit it.</p>
                    
                            <ul>

                                <li>Firstly ,when the page loads the timer starts running and the "updateTimer()" function is periodically called 
                                    every second to update the timer using setInterval function</li>    

                                <li>The "updateTimer()" function breaks down the total time remaining (in seconds) into minutes and seconds, 
                                    formats them with leading zeros, and then updates the text content of an HTML timer element 
                                    to display the time remaining in the format MM:SS. 
                                    
                                    Math.floor function rounds off the output of 'timeRemaining/60' to the nearest integer . This returns the minutes.
                                    'timeRemaining % 60' returns the seconds it this then updated in the HTML timer element</li>   

                                <li>Once the current time remaining has been displayed , the timeRemaing is then decremented by 1 and the 
                                    loop continues until the time runs out or the until the user successfully submits the form without any errors</li> 
                                    
                                <li>If the user still has not submitted the form and the times runs out, then the user is alerted and
                                        is then re-directed back to the index page</li>

                                <li><strong><a href=./apply.php>Apply Page</a></strong>&nbsp;&nbsp;<span>- The timer starts automatically when the apply page loads</span></li>
                        
                            </ul>
               </fieldset>
            </div>
        </div>

        <?php 

        include('footer.inc');

        ?>

    </body>
</html>        

