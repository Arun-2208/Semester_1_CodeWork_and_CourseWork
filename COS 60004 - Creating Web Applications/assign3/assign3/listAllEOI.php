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
    <title>listAllEOI</title>
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
    
    <h2>List all EOI applications</h2>
    <a href="manage.php"><button type="button">Return to manage page</button></a>&nbsp;&nbsp;&nbsp;<span>PHP enhancement made - sorting of the EOI records by name or Job Ref no  and counting EOI for a specific Job<span><br><br>
    
    <form method="get" action="listAllEOI.php">
    <label for="JobRefSort">Sort by:</label><input type="submit" name="sortType" id="JobRefSort" value="Job_Reference_number"><br><br>
    <label for="fnameSort">Sort by:</label><input type="submit" name="sortType" id="fnameSort" value="First_name"><br><br>
    <label for="lnameSort">Sort by:</label><input type="submit" name="sortType" id="lnameSort" value="Last_Name"><br><br>
    <label for="countSE">Count for:</label><input type="submit" name="countType" id="countSE" value="Software Engineer"><br><br>
    <label for="countPR">Count for:</label><input type="submit" name="countType" id="countPR" value="Project Manager"><br><br>

    </form>
    <?php

	include("settings.php");

// php statement to connect to the database    

    $conn=mysqli_connect($host,$user,$pwd,$sql_db);

//table name in the database

    $sqlTable='EOI';

// Checking if a sort option has been selected or not using the 'isset' check

    if(isset($_GET["sortType"]) && $_SERVER["REQUEST_METHOD"]=='GET'){

        $sort=$_GET["sortType"];
           
    }

    else{

        $sort=null;
    }


// checking if a count option has been selected 

    if(isset($_GET["countType"]) && $_SERVER["REQUEST_METHOD"]=='GET'){

        $count=$_GET["countType"];

//   checking the job type for which the count has been requested for

        if($count=='Software Engineer')
            $count='SE365';

        else if($count=='Project Manager')
            $count='PR268';
           
    }

    else{

        $count=null;
    }

/* if sorting option has been selected , a
    SELECT query with an ORDER BY clause hass been used */

    if($sort!=null){

        $query="SELECT * 
            FROM $sqlTable
            ORDER BY $sort ASC ";

    }

/*If counting the number of EOIs has been selected 
   A SELECT query with a count(*)and WHERE  and GROUP BY clause has been used */    

    else if($count!=null){
        $query="SELECT count(*) as count_of_EOI 
            FROM $sqlTable
            WHERE Job_Reference_number='$count'
            Group BY  Job_Reference_number";

        $result=mysqli_query($conn,$query);



// The table and the records are sent back as HTML table on to the webpage to be displayed to the user

        if(mysqli_num_rows($result)>0){

            echo "<div id='listAllEOI'>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Count of EOI</th>";
            echo "</tr>"; 

            while($row=mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo "<td>",$row['count_of_EOI'],"</td>";
                echo "</tr>";

            }

            echo"</table>";
            echo "</div>";
        }

        else{

            echo"<p class='error'>There are no records  in the EOI table yet</p>";
        }

        include('footer.inc');

        exit;
    }


/* If the manager has not chosen a sort or a count , then
all the EOIs are displayed using a SELECT*/  

    else{

        $query="SELECT * 
            FROM $sqlTable" ;
    }

           
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){

// html string to diplay the table

        
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

// html string to diplay the table            
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

// exception handling block , if no records are found , the manager is notifed that no record has been found.     
    else{

        echo"<p class='error'>There are no records  in the EOI table yet</p>";
    }
                
	include('footer.inc');

	?>

</body>
</html>



