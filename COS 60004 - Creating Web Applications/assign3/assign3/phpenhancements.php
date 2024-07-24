<!DOCTYPE html>
<html lang="en">
    <head>
        <title>phpenhancements</title>
        <meta charset="utf-8">
        <meta name="description" content="Assign-3 Creating Web applications">
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
        
        <div id="phpenhancements">
            <div id="section-phpenhancements">
               <fieldset>
                    <legend><strong>Password based secure Manager Login - Logout system </strong></legend>
                        <p>A separate table 'Managers' has been created in the database. This table 
                            has the Username and password of the manager stored in it</p>
                            <ul>
                                <li><strong><a href=ManagerLogin.php>Manager Login</a></strong>&nbsp;&nbsp;<span><strong>Please enter the exact username and password given to login</strong></span></li>
                        
                                <li>When the manager navigates to the login page and enteres the
                                    correct username and password, the correct Username and pasword are fetched from the database to verify
                                </li>   

                                <li>If the username and password entered, matches the one fetched from the database, 
                                    the login is succesfull and the manager is navigated to the manage.php page </li>

                                <li><strong>Once the user has Logged in, the PHP session is started and the session variable is set 
                                    and only when the user log outs, the session is destroyed and session variable is cleared.
                                    This make the login - logout system a very secure one , as the manage.php page and the the other internal php pages 
                                     cannot be directly entered by using the file name in the url</strong> </li> 
                                
                                <li>If the username and password entered are incorrect and do not match with the one fetched from the database, 
                                    the login is not allowed and the user is asked to retry </li>                            
                                
                            </ul>        
                </fieldset>

               <fieldset>
                    <legend><strong>Sorting and Group and Counting of EOIs</strong></legend>
                        <p>Sorting has been implemented to sort the EOIs by name or Job Ref no and Counting has been implemented 
                            to count the number of EOIs recieved for a specific  Job position</p>
                    
                            <ul>
                                <li><strong><a href=ManagerLogin.php>Manager Login Page</a></strong>&nbsp;&nbsp;
                                <span><strong>-Please login to the Manager login page and click on the List all EOIs option  on the manage.php page 
                                    to check and test this enhancement</strong></span></li>

                                <li>Once the manager has logged in and chosen the List of all EOIs options from the manage.php</li>    

                                <li>The user can click on the 'sort by' button for any one of the options allowed
                                    which is , by 'Job Ref no' or'first name' or 'last name '.
                                    The record is sorted by that attribute and displayed to the user  
                                    
                                    . A SELECT QUERY with a ORDER BY ASC clause has been used for this
                                
                                </li>  
                                
                                <li>The user can click  on the 'Count for' button for any one of the options allowed
                                    which is , for 'software Engineer' or 'Project Manager'. 
                                    The number of EOI records for that Job Position is grouped,counted and displayed to the user.
                                    
                                    A SELECT QUERY with a count(*) and GROUP BY clause has been used for this
                                </li>                    
                        
                            </ul>
               </fieldset>
            </div>
        </div>

        <?php 

        include('footer.inc');

        ?>

    </body>
</html>        

