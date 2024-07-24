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
    <title>Change EOI status </title>

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


<h2>change EOI status for a particular applicant</h2>
<a href="manage.php"><button type="button">Return to manage page</button></a>


<form method="get" action="changeEOIstatus.php">

<p>please enter the full name and the EOI number to get the EOI to be updated</p>

<p><strong>All of the above 3 details of user must be entred to change the status </strong></p>

<p><label for="EOInumber">Enter EOI No</label><input type="text" name="EOIno">&nbsp;&nbsp;&nbsp;<span>Eg:M5678</span></p>  

<p><label for="firstname">Enter First Name</label><input type="text" name="firstname">&nbsp;&nbsp;&nbsp;<span>Eg:Arun</span></p>

<p><label for="lastname">Enter Last Name</label><input type="text" name="lastname">&nbsp;&nbsp;&nbsp;<span>Eg:Ragavendhar</span></p>

<p>please click on the new  new status to be updated</p>

<p><input type='submit' name='Current' value='Current'>&nbsp;&nbsp;&nbsp;&nbsp;

<input type='submit' name='Final' value='Final'></p>

</form>


	<?php      

/*The request method is checked in PHP and the status to be changed and set is got from the user 
The belowmcode snippet is for the case the status of the EOI is changed to 'Current' */  

        if(isset($_GET["Current"]) && ($_SERVER["REQUEST_METHOD"]=="GET")){

/* the user must enter both the first name and last name and the EOI no 
 only then , the record is fetched , other wise validation message is thrown to the user*/             
             
            if((isset($_GET["firstname"]) &&($_GET["firstname"])!="") && (isset($_GET["lastname"]) &&($_GET["lastname"])!="") && (isset($_GET["EOIno"]) &&($_GET["EOIno"])!="")){

                $EOIno=$_GET["EOIno"];

                $firstName=$_GET["firstname"];

                $lastName=$_GET["lastname"];

                require('settings.php');

// SQL table name

            $sqlTable='EOI';

// connection to the database            
            $conn=mysqli_connect($host,$user,$pwd,$sql_db);

            $query1="UPDATE $sqlTable
                    SET Status = 'Current'
                    WHERE  First_name IN('$firstName') AND Last_Name IN ('$lastName') AND EOInumber IN('$EOIno')";
                
            $result1=mysqli_query($conn,$query1);


            $query2=" SELECT *
                     FROM   $sqlTable
                     WHERE  First_name IN('$firstName') AND Last_Name IN ('$lastName') AND EOInumber IN('$EOIno')";
        
    $result2=mysqli_query($conn,$query2);

// once the the status has been updated , the updated EOI record is fetched and displayed to the user 

            if(mysqli_num_rows($result2)>0){

                
// if the status change is succesfull , the user is notified 

            echo "<p class='success'>The EOI status has been updated </p>";

// the records are displayed as HTML tables 

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

                while($row=mysqli_fetch_assoc($result2)){

// the records are displayed as HTML tables 

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

            else{
                echo "<p class='error'>The EOI number and name do not match</p>";
            }

        }

// else block is executed when the user does not enter all the required details        
        else{

            echo "<p class='error'>Please enter the full name and Valid EOI no</p>";

        }
    }


/*The request method is checked in PHP and the status to be changed and set is got from the user 
The belowmcode snippet is for the case the status of the EOI is changed to 'Final' */  

        else if(isset($_GET["Final"]) && $_SERVER['REQUEST_METHOD']=='GET'){

/* the user must enter both the first name and last name and the EOI no 
 only then , the record is fetched , other wise validation message is thrown to the user*/    

            if((isset($_GET["firstname"]) &&($_GET["firstname"])!="") && (isset($_GET["lastname"]) &&($_GET["lastname"])!="")&& (isset($_GET["EOIno"]) &&($_GET["EOIno"])!="")){

                $EOIno=$_GET["EOIno"];

                $firstName=$_GET["firstname"];

                $lastName=$_GET["lastname"];

            require('settings.php');

//SQL table name

            $sqlTable='EOI';

//connection to the database

            $conn=mysqli_connect($host,$user,$pwd,$sql_db);

            $query3="UPDATE $sqlTable
                    SET Status = 'Final'
                    WHERE  First_name IN('$firstName') AND Last_Name IN ('$lastName') AND EOInumber IN('$EOIno')";
                
            $result3=mysqli_query($conn,$query3);


// once the the status has been updated , the updated EOI record is fetched and displayed to the user 

            $query4=" SELECT *
                     FROM   $sqlTable
                     WHERE  First_name IN('$firstName') AND Last_Name IN ('$lastName') AND EOInumber IN('$EOIno')";
        
    $result4=mysqli_query($conn,$query4);

            if(mysqli_num_rows($result4)>0){

// if the status change is succesfull , the user is notified 

            echo "<p class='success'>The EOI status has been updated </p>";

// the records are displayed as HTML tables

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

                while($row=mysqli_fetch_assoc($result4)){

// the records are displayed as HTML tables

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

            else{
                echo "<p class='error'>The EOI number and name do not match</p>";
            }

        }

// else block is executed when the user does not enter all the required details  

        else{

            echo "<p class='error'>Please enter the full name and Valid EOI No</p>";

        }
    }

        ?>

        <?php
            include('footer.inc');
        ?>

</body>
</html>



