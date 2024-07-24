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
<title>List the EOI for a Job ref No</title>

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


<h2>List the EOIs for a particular Position</h2>
<a href="manage.php"><button type="button">Return to manage page</button></a>

<p>To list the EOI for SOFTWARE ENGINEER enter Job Ref No : SE365</p>
<p><p>To list the EOI for PROJECT MANAGER enter Job Ref No : PR268</p>


<form method="get" action="listEOIforPos.php">

<label for="JobId">Enter jobId</label><input type="text" maxlength=6 name="jobId"><input type="submit" value="SUBMIT" name="submit"><br><br>

</form>

	<?php      

/* checking the server request method and the submitted value to get the Job ref no to be listed 
 the form has been self submitted to itself*/

        if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["submit"])){

            include("settings.php");

            $jobId=$_GET["jobId"];

// sql table name   

            $sqlTable='EOI';

// connecting to the database

            $conn=mysqli_connect($host,$user,$pwd,$sql_db);

// a SELECT query using where claused is used to get the EOIs for the given Job ref no

            $query="SELECT *
                    FROM $sqlTable
                    WHERE Job_Reference_number='$jobId'" ;
                
            $result=mysqli_query($conn,$query);

// if EOIs exist for the given Job ref no , it is displayed to the manager

            if(mysqli_num_rows($result)>0){

// the table details are returned as HTML page to the webpage     

                
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

// the table details are returned as HTML page to the webpage

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
                
            }


// if there is no EOI record for the given Job ref No , the same message is displayed to the manager    

            else{

                echo"<p class='error'>There are no such  records  in the EOI table for the mentioned Job Reference No </p>";
            }

        }

        
            
            include('footer.inc');

        ?>

</body>
</html>



