<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enhancements</title>
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
        
        <div id="enhancements">
            <div id="section-enhancements">
               <fieldset>
                    <legend><strong>Additonal HTML elements and CSS properties</strong></legend>
                        <p>A number of specifc HTML elements and CSS properties have been used to enhance the 
                            webpage for both design aesthetics as well as functionality.</p>
                            <ul>
                                <li>CSS animation for a 'fade in' effect has been added to all pages using '@keyframes'
                                    to give an immersive effect to the webpage</li>
                                <li>
                                    &nbsp;&nbsp;<a href=./index.php>Index Page</a>&nbsp;&nbsp;<a href=./jobs.php>Jobs Page</a>
                                    &nbsp;&nbsp;<a href=./apply.php>Apply Page</a>&nbsp;&nbsp;<a href=./about.php>About Page</a>
                                    &nbsp;&nbsp;<a href=./enhancements.php>Enhancements Page</a>
                                </li> 
                                  
                                <li>CSS scroll effect in Jobs page and Enhancements page by using a scroll bar by  CSS properties 
                                    'overflow-y:scroll;' and  'background-attachment: fixed;' - </li>
                                
                                <li>&nbsp;&nbsp;<a href=./jobs.php>Jobs Page</a>
                                    &nbsp;&nbsp;<a href=./enhancements.php>Enhancements Page</a>
                                </li> 
                          
                                <li>Uniform and consistent sticky header , border and footer for all pages -</li> 
                           
                                <li>
                                    &nbsp;&nbsp;<a href=./index.php>Index Page</a>&nbsp;&nbsp;<a href=./jobs.php>Jobs Page</a>
                                    &nbsp;&nbsp;<a href=./apply.php>Apply Page</a>&nbsp;&nbsp;<a href=./about.php>About Page</a>
                                    &nbsp;&nbsp;<a href=./enhancements.php>Enhancements Page</a>
                                </li> 
                                
                            </ul>        
                </fieldset>

               <fieldset>
                    <legend><strong>Responsive Webpage Design</strong></legend>
                        <p>Media query has been used to make the website completely responsive to all device sizes so that 
                            the page flows and is responive and usable on mobile devices,tablets,laptops and desktops</p>
                    
                        <p>The following media queries and corresponding CSS attiributes and properties have been used
                            to make the page completely responsive and  fluid on all devices</p>
                            <ul>
                        
                                <li>@media only screen and (max-width: 599px) - for mobile devices</li>
                                <li>@media only screen and (max-width: 1302px) and (min-width:600px) - for tablets</li>
                                <li>Standard CSS styling (above 1302px) - for laptops and desktops</li>
                        
                            </ul>
               </fieldset>
            </div>
        </div>

        <?php 

        include('footer.inc');

        ?>

    </body>
</html>        

