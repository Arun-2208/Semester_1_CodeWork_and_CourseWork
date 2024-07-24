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
		<title>manage</title>
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


	// php code to display the HTML elements of the manage page for the user to select the activity to perform 

		echo "<div id='manage'>";

		echo "<fieldset id='options'>";

		echo "<legend>Choose your action</legend>";

	// to logout	

		echo"<p><label>Logout</label><p><button type='button'><a href='ManagerLogout.php'>Logout</a></button></p></p>";

	/* to view all the EOIs , php enhancement - sort the record on the manager's choice 
	and count the number of eoi for a particualar position */
	
		echo"<p><label>View all the EOIs</label><p><button type='button'><a href='listAllEOI.php'>List all EOI</a></button></p></p>";

	// to view EOIs for a particular job ref no

		echo"<p><label>View EOIs for a particular Job Ref No</label><p><button type='button'><a href='listEOIforPos.php'>List all EOI for a position</a></button></p></p>";

	// view EOIs for a given first name or last name or both 

		echo"<p><label>View EOIs given the first name or Last name or both</label><p><button type='button'><a href='listEOIforName.php'>List all EOI for given name</a></button></p></p>";

	// Change the status of an EOI 	
		echo"<p><label>Change the status for a particular applicant</label><p><button type='button'><a href='changeEOIstatus.php'>Change Status</a></button></p></p>";

	// Delete all EOIs for a particualar Job

		echo"<p><label>Delete EOIs of a particular Job</label><p><button type='button'><a href='deleteEOIforPos.php'>Delete all EOI for a particular Job</a></button></p></p>";

		echo "</fieldset>";

		echo "</div>";

		include('footer.inc');



	?>

</body>
</html>



