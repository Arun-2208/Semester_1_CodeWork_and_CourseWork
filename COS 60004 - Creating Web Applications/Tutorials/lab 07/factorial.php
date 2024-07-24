<body>

<?php
 include ("mathfunctions.php");
 ?>

 <h1>Welcome to Lab-7 , lets start with PHP</h1>

 <?php

if(isset($_GET["number"])){

$num=$_GET["number"];
 if(isPostiveInteger($num)){

    echo "<p> the factorial of  ", $num, "  is  ",factorial($num),"  </p>";

 }

 else{

    echo "<p>Please enter a positive integer</p>";
 }

 echo "<p><a href=factorial.html>Click to return to Home page</a></p>";

}
 ?>

</body>