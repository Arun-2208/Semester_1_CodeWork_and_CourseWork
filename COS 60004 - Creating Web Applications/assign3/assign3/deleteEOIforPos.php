<?php

/* php enhancement  - php session has been  created when the manager logs in with the 
    correct user name and password and a session variable is set 
	the user cannot put the file name in the url and enter the page 
	The page has been securely locked */

session_start();

// if the session variable is not set , the user is redirected back to the  ManagerLogin Page

if(!isset($_SESSION['sessionVariable'])){

	header('location:ManagerLogin.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Delete all EOIs for a particular Job </title>
    <meta charset="utf-8">
    <meta name="description" content="Assign-3 creating web applications">
    <meta name="keywords" content="Metaphoton,IT,Technology,HTML,CSS,PHP,cloud,infrastructure">
    <meta name="author" content="Arun Ragavendhar-104837257">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/phpstyle.css">
</head>

<body>

<?php
        include('header.inc');
        
        include('menu.inc');
    ?>


<h2>Delete all EOI for a particular Job Ref No </h2>
<a href="manage.php"><button type="button">Return to manage page</button></a>


<form method="get" action="deleteEOIforPos.php">

<p>please select one job to delete all the EOIs for that role</p>

<p><label for="jobId1">Click to delete all EOI for Software Developer role</label><input type="submit" name="jobId1" value="Delete Software Developer"></p>

<p><label for="jobId2">Click to delete all EOI for Project Manager</label><input type="submit" name="jobId2" value="Delete Project Manager"></p>

</form>


    <?php      

/* The request method is checked if its a  valid request and then the job ref no ,
 for which the records have to be deleted is gor from the user when they click the delete button for a specific job 
 
 The below code snippet is deleted if all EOIs for the software engineer jobs is to be deleted */    
  
        if(isset($_GET["jobId1"]) && $_SERVER['REQUEST_METHOD']=='GET'){

        require('settings.php');

// SQL table name

        $sqlTable='EOI';

// Job id is set to software engineer job ref no

        $jobId='SE365';

        $conn=mysqli_connect($host,$user,$pwd,$sql_db);

// A SELECT query is first used to check if EOIs exists for the job ID

        $query=" SELECT *
                FROM $sqlTable
                WHERE Job_Reference_number IN('$jobId')";

        $result=mysqli_query($conn,$query);

// If EOIs exist for the Job Id then they are deleted

        if(mysqli_num_rows($result)>0){

        $query=" DELETE 
                 FROM $sqlTable
                 WHERE Job_Reference_number IN('$jobId')";
            
        $result=mysqli_query($conn,$query);

// User is notified once a record is deleted 

        if($result)
            echo"<p class='success'>ALL EOIs for Software Developer role have been deleted</p>";

            }
    
        else{
            echo "<p class='error'>There are No EOIs Yet for Software Developer role </p>";
        }

    }


/* The request method is checked if its a  valid request and then the job ref no ,
 for which the records have to be deleted is gor from the user when they click the delete button for a specific job 
 
 The below code snippet is deleted if all EOIs for the project manager jobs is to be deleted */    
    

        else if(isset($_GET["jobId2"]) && $_SERVER['REQUEST_METHOD']=='GET'){

            require('settings.php');

// SQL table name

            $sqlTable='EOI';

// Job Id is set to project manager JOb Id 

            $jobId='PR268';

            $conn=mysqli_connect($host,$user,$pwd,$sql_db);

// A SELECT query is first used to check if EOIs exists for the job ID
            
            $query=" SELECT *
                     FROM $sqlTable
                     WHERE Job_Reference_number IN('$jobId')";

            $result=mysqli_query($conn,$query);

// If EOIs exist for the Job Id then they are deleted            

            if(mysqli_num_rows($result)>0){

            $query=" DELETE 
                     FROM $sqlTable
                     WHERE Job_Reference_number IN('$jobId')";
                
            $result=mysqli_query($conn,$query);

// the user is notfied once the EOI records are deleted

            if($result)
                echo"<p class='success'>ALL EOIs for Project Management roles have been deleted</p>";

                }
          
            else{
                echo "<p class='error'>There are No EOIs Yet for Project Management role </p>";
            }

        }

    ?>

        <?php
            include('footer.inc');
        ?>

</body>
</html>



