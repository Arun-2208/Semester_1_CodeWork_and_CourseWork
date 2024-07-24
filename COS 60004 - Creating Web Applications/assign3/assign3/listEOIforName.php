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
<title>List the EOI for a Name</title>

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


<h2>List all EOI  given a last name or first name or both</h2>
<a href="manage.php"><button type="button">Return to manage page</button></a>


<form method="get" action="listEOIforName.php">

<p><label for="firstname">Enter First Name</label><input type="text" name="firstname">&nbsp;&nbsp;&nbsp;<span>Eg:Arun</span></p>

<p><label for="lastname">Enter Last Name</label><input type="text" name="lastname">&nbsp;&nbsp;&nbsp;<span>Eg:Ragavendhar</span></p>

<p><input type="submit" value="SUBMIT" name="submit"></p><br><br>

</form>

	<?php     
    
/* checking the server request method and the submitted value to get first name or last nameo or both 
    to list the EOI for that record  
    the form has been self submitted to itself*/

        if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["submit"])){

            include("settings.php");

// checking whether the manager had entred the first name or last name or both parts of the name            

            if((isset($_GET["firstname"]) &&($_GET["firstname"])!="") || (isset($_GET["lastname"]) &&($_GET["lastname"])!="")){

                $firstName=$_GET["firstname"];

            
                $lastName=$_GET["lastname"];


// sql table name
            
            $sqlTable='EOI';

// connecting to the database            

            $conn=mysqli_connect($host,$user,$pwd,$sql_db);


// SELECT query using WHERE clause and IN and OR clauses to filter out the EOI for the given first name or last name or both 

            $query="SELECT *
                    FROM $sqlTable
                    WHERE  First_name IN('$firstName') OR Last_Name IN ('$lastName')";
                
            $result=mysqli_query($conn,$query);


// if a record exists for a given first name or last name or both , it is displayed to the user

            if(mysqli_num_rows($result)>0){

// the table details are returned as HTML table to the webpage                   

                echo "<div id='listEOI'>";
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>EOI number</th>";
                echo "<th>Job Reference No</th>";
                echo "<th>Status</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Gender</th>";
                echo "<th>Street Address</th>";
                echo "<th>Suburb</th>";
                echo "<th>State</th>";
                echo "<th>postCode</th>";
                echo "<th>Email Address</th>";
                echo "<th>Phone No</th>";
                echo "<th>Skills</th>";
                echo "<th>Other Skills</th>";
                echo "</tr>";

                while($row=mysqli_fetch_assoc($result)){

// the table details are returned as HTML table to the webpage   

                    echo "<tr>";
                    echo "<td>",$row['EOInumber'],"</td>";
                    echo "<td>",$row['Job_Reference_number'],"</td>";
                    echo "<td>",$row['Status'],"</td>";
                    echo "<td>",$row['First_name'],"</td>";
                    echo "<td>",$row['Last_Name'],"</td>";
                    echo "<td>",$row['Gender'],"</td>";
                    echo "<td>",$row['Street_address'],"</td>";
                    echo "<td>",$row['Suburb'],"</td>";
                    echo "<td>",$row['State'],"</td>";
                    echo "<td>",$row['Postcode'],"</td>";
                    echo "<td>",$row['Email_address'],"</td>";
                    echo "<td>",$row['Phone_no'],"</td>";
                    echo "<td>",$row['Skills'],"</td>";
                    echo "<td>",$row['Other_Skills'],"</td>";
                    echo "</tr>"; 

                }

                echo"</table>";
                echo "</div>";
            }


// if no EOI record is found for the given first name , last name or both  , the same is notified to the manager           
            else{

                echo"<p class='error'>There are no such  records  in the EOI table for the name</p>";
            }

        } 

// exception handling - default validation message to be shown to the manager , if no name is entered and the blank input box is submitted 
        else{

            echo"<p>Please enter atleast one part of the name </p>";
        }
        }
            include('footer.inc');

        ?>

</body>
</html>



