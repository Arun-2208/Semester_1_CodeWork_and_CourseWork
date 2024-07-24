


<?php

/* php code to destroy the session and clear the session variable 
This page is called when the user logouts*/ 

session_start();

session_unset();

session_destroy();

header('location:ManagerLogin.php');

 ?>