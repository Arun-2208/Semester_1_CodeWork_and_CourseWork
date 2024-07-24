
<?php


/* PHP enhancement - When a valid user enters the  enters the correct user name and password  * */


session_start();

/*The session variable is set once the user name and password entered by the user matches with the one 
fetched from the stored ones in the database

The user is allowed to login and enter the manage.php page only if the username and passwords match as 
only then the session is started and a session variable is set*/


if(isset($_SESSION['sessionVariable']))

	header('location:manage.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ManagerLogin</title>

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

	<h1>Manager Login</h1>
    <hr>
	<form method="post" action="ManagerLogin.php">
	<fieldset><legend>Manager Login</legend>
		<p>	<label for="managerId">Manager ID : </label>
			<input type="text" name="managerId" id="managerId" />&nbsp;&nbsp;&nbsp;<span>Username: AR1999</span></p>
		<p>	<label for="password">Password :  </label>
			<input type="password" name="password" id="password" />&nbsp;&nbsp;&nbsp;<span>Password: dingdongbell001</span></p>
		<p>	<input type="submit" value="Log In" /></p>
	</fieldset>
	</form>
	<hr>


<?php

// The request method is checked to ensure a valid submit request has been made 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
// function to sanitise user input to avoId SQL injection

	function sanitise_input($data){

		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);

		return $data;
	}

//checking if the username and password are entred and are not just left blank before submitting

		if (isset($_POST["managerId"]) && isset($_POST["password"]) && trim($_POST["password"])!="" && trim($_POST["managerId"])!=""){
		
// the username and password entered by the user is sanitised before using it in the SQL query

			$managerId=sanitise_input($_POST["managerId"]);
			$password=sanitise_input($_POST["password"]);
			
// connecting to the database

			require_once('settings.php');
		
			$conn = mysqli_connect($host,$user,$pwd,$sql_db);

// error handling - if connection doe not exist

			if(!$conn)
				echo "<p class='error'>error connecting to the database</p>";
				
// SELECT query to fetch the correct Username and Password of the Manager stored in the 'Manager' table in the database 

				$query = "SELECT managerId,password 
						FROM   Managers
						WHERE managerId='$managerId'";
					
// error handling - if manager credential cannot be fetched 
				
				$result = mysqli_query($conn, $query);

				if(!$result)
				echo "<p class='error'>error fetching the manager credentials</p>";

				if($result){

// The manager credentials have been successfully fetched 

					if(mysqli_num_rows($result)>0){
						$row=mysqli_fetch_assoc($result);

/* if the username and password enter matches the username and password fetched from the database , 
the user is allowed to login and the session variable is set*/


					if($row["managerId"]==$managerId && $row["password"]==$password){

							$_SESSION["sessionVariable"]="Session started";

							header("location:manage.php");
						
					}

// else if the credentails entered and credentials in the database do not match - user is notifed and asked to retry

					else{

						echo "<p class='error'>Incorrect Username or Password . Please retry</p>";
					}
					
				}
			}
		}

// this block is executed if the user simply clicks on submit without entering the username and password

			else if(trim($_POST["password"])=="" || trim($_POST["managerId"])=="") {
				echo"<p class='error'>Password or username field is empty</p>";
			}
		}
		
		include('footer.inc');
		
?>
    	

</body>
</html>