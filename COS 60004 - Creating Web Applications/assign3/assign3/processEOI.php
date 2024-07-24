<!DOCTYPE html>
<html lang="en">
    <head>
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

// checking the server request method to prevent illegal entry by just entering the file name in the URL 

if($_SERVER['REQUEST_METHOD']=='POST'){

#function to sanitise the input data usering is entering
    function sanitise_input($data){

        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);

        return $data;
    }

#function to validate the Date of Birth format of the user  using a pregmatch  
    function validateDob($dob){

        if(preg_match("/^([0-2]\d|3[01])\/(0\d|1[0-2])\/\d{4}$/",$dob)){

            return true;
        }
    
        return false;
    }

#function to calculate and validate the age of the user

    function validateAge($dob){

            // Extract day, month, and year from the entered DOB
            $birthDate = (int)substr($dob, 0, 2);
            $birthMonth = (int)substr($dob, 3, 5);
            $birthYear = (int)substr($dob, 6, 10);
        
            // Get the current date details
            $today = new DateTime();
            $age = $today->format('Y') - $birthYear; // Year difference
        
            $monthDiff = $today->format('n') - $birthMonth; // Month difference
        
            // Check if the current date is earlier in the year than the birth month
            if ($monthDiff < 0 || ($monthDiff == 0 && $today->format('j') < $birthDate)) {
                $age--;
            }
        
            // If the user age is between 15 and 80, return true
            if ($age < 15 || $age > 80) {

                return false;
            } 
            else {

                return true;
            }
    }

//function to check if the postcode and state are matching or not

    function validateState($state,$postCode){

            // the first digit of the postcode is extracted to then match it against the state 

        $firstDigitOfPostCode=(int)(substr($postCode,0,1));

    
        /* variable to store the result of the checking process
        if the state and postcode matches - it is set to true and returned
        else if the state and postcode do not match - it is set to false and returned*/

        $stateCheck=true;


        switch($firstDigitOfPostCode){

            case 0: if($state!="NT" && $state!="ACT")

                        $$stateCheck=false;   
                    
                    break;

            case 1 : if($state!="NSW")

                        $stateCheck=false;      
                    
                    break;

            case 2: if($state!="NSW")

                        $stateCheck=false;         
                    
                    break;
                    
            case 3: if($state!="VIC")

                        $stateCheck=false;        
                    
                    break;        

            case 4: if($state!="QLD")

                        $stateCheck=false;        
                    
                    break; 


            case 5: if($state!="SA")

                        $stateCheck=false;        
                    
                    break;    
                    
            case 6: if($state!="WA")

                        $stateCheck=false;        
                    
                    break;          

            case 7: if($state!="TAS")

                        $stateCheck=false;        
                    
                    break;  

            case 8: if($state!="VIC")

                        $stateCheck=false;        
                    
                    break;  

            case 9: if($state!="QLD")

                        $stateCheck=false;        
                    
                    break;  
            
            default:break;
        }


        return $stateCheck;

}

    
    
/* variable to check the final status of validation of the user inputs after checking every 
input parameter the user has entered 
*/

    $setDataValidation=true;


//validation and sanity check for  Job refno 

    if(isset($_POST["Job_Reference_Number"]))

        $JobId=sanitise_input($_POST["Job_Reference_Number"]);

    if((trim($JobId)=="")){

        echo"<p class='error'>Job Reference number cannot be empty !!!</p>";
        $setDataValidation=false;
    }

    if(!preg_match("/^(?=.*[a-zA-Z])[a-zA-Z0-9]{5}$/",$JobId) && trim($JobId)!=""){

        echo "<p class='error'>Job Reference number format is not correct !!!</p>";
        $setDataValidation=false;

    }


//validation and sanity check of First Name

    if(isset($_POST["First_Name"]))

        $firstName=sanitise_input($_POST["First_Name"]);

    if(trim($firstName)==""){

        echo"<p class='error'>First Name cannot be empty !!!</p>";
        $setDataValidation=false;
    }    

    if(!preg_match("/^[a-zA-Z]{1,20}$/",$firstName) && trim($firstName)!=""){

        echo "<p class='error'>First Name must be an alphabet with a maximum of 20 characters !!!</p>";
        $setDataValidation=false;
    }

    
//validation and sanity check of Last Name

    if(isset($_POST["Last_Name"]))

        $lastName=sanitise_input($_POST["Last_Name"]);

    if(trim($lastName)==""){

        echo"<p class='error'>Last Name cannot be empty !!!</p>";
        $setDataValidation=false;
    }    

    if(!preg_match("/^[a-zA-Z]{1,20}$/",$lastName) && trim($lastName)!=""){

        echo "<p class='error'>Last Name must be an alphabet with a maximum of 20 characters !!!</p>";
        $setDataValidation=false;
    }

//validation and sanity check of Date of Birth

    if(isset($_POST["Date_of_birth"]))

        $dob=sanitise_input($_POST["Date_of_birth"]);

    if(trim($dob)==""){

        echo"<p class='error'>Date of birth is missing !!!</p>";
        $setDataValidation=false;
    }

    if(!validateDob($dob) && trim($dob)!=""){

        echo "<p class='error'>Date of Birth must be in DD/MM/YYYY format !!!</p>";
        $setDataValidation=false;
    }

    if(!validateAge($dob) && trim($dob)!="" && validateDob($dob)){

        echo "<p class='error'>Your age is not between 15 and 80 . sorry U cannot Apply !!</p>";
        $setDataValidation=false;
    }


//Validation and sanity check of gender 

    if(isset($_POST["Gender"]))

        $gender=sanitise_input($_POST["Gender"]);

    else{

        echo"<p class='error'>Please choose a gender !!!</p>";
        $setDataValidation=false;
    }


// Validation and sanity check of street address

    if(isset($_POST["Street_Address"]))

        $streetAddress=sanitise_input($_POST["Street_Address"]);

    if(trim($streetAddress)==""){

        echo"<p class='error'>Street Address cannot be empty !!!</p>";
        $setDataValidation=false;
    }

    if(!preg_match("/^.{1,40}$/",$streetAddress) && trim($streetAddress)!=""){

        echo"<p class='error'>Street Address cannot be more than 40 characters !!!</p>";
        $setDataValidation=false;
    }


//validation and sanity check of suburb    

    if(isset($_POST["Suburb"]))

        $suburb=sanitise_input($_POST["Suburb"]);

    if(trim($suburb)==""){

        echo"<p class='error'>suburb cannot be empty !!!</p>";
        $setDataValidation=false;
    }

    if(!preg_match("/^.{1,40}$/",$suburb) && (trim($suburb)!="")){

        echo"<p class='error'>Suburb name cannot be more than 40 characters !!!</p>";
        $setDataValidation=false;
    }


// validation and sanity check of state

    if(isset($_POST["State"]))

        $state=sanitise_input($_POST["State"]);

    if(trim($state)==""){

        echo"<p class='error'>state cannot be empty !!!</p>";
        $setDataValidation=false;
    }

//validation and sanity check of postcode

    if(isset($_POST["Post_Code"]))

        $postCode=sanitise_input($_POST["Post_Code"]);

    if(trim($postCode)==""){

        echo"<p class='error'>Post Code  cannot be empty !!!</p>";
        $setDataValidation=false;
    }

    if(!preg_match("/^\d{4}$/",$postCode)){

        echo"<p class='error'>Post Code  must be a 4 digit number !!!</p>";
        $setDataValidation=false;

    }

 
//call to the function to check if the postcode and state entered are matching

    if(!validateState($state,$postCode) && trim($postCode)!="" && trim($state)!=""){

        echo"<p class='error'>State Chosen and post code are not matching !!!</p>";
        $setDataValidation=false;
    }


//validation and sanity check of email

    if(isset($_POST["Email"]))

        $email=sanitise_input($_POST["Email"]);

    if(trim($email)==""){

        echo"<p class='error'>Email Cannot be empty!!!</p>";
        $setDataValidation=false;
    }

    if(!preg_match("/^\S+@\S+\.\S+$/",$email) && trim($email)!="") {

        echo"<p class='error'>Email format is not correct !!!</p>";
        $setDataValidation=false;
    }

    
//validation and sanity check of Phone number

    if(isset($_POST["Phone_No"]))

    $phoneNo=sanitise_input($_POST["Phone_No"]);

    if(trim($phoneNo)==""){

        echo"<p class='error'>Phone No Cannot be empty!!!</p>";
        $setDataValidation=false;
    }

    if(!preg_match("/^\d{8,12}$/",$phoneNo) && trim($phoneNo)!="") {

        echo"<p class='error'>Phone Number must be between 8-12 digits !!!</p>";
        $setDataValidation=false;
    }


// code for checking if the skills check boxes are ticked or not 

    if(isset($_POST["Html_Css_Javascript"]))

        $skill1=sanitise_input($_POST["Html_Css_Javascript"]);

    else
        $skill1=null;

    if(isset($_POST["Python_with_Flask_Django"]))

        $skill2=sanitise_input($_POST["Python_with_Flask_Django"]);

    else
        $skill2=null;

    if(isset($_POST["Sql_NO_Sql_Database"]))

        $skill3=sanitise_input($_POST["Sql_NO_Sql_Database"]);

    else
        $skill3=null;

    if(isset($_POST["Project_Management"]))

        $skill4=sanitise_input($_POST["Project_Management"]);

    else
        $skill4=null;

    if(isset($_POST["Scrum_Agile_Methodology"]))

        $skill5=sanitise_input($_POST["Scrum_Agile_Methodology"]);

    else
        $skill5=null;

    if(isset($_POST["Risk_Analysis_Business_Analaytics"]))

        $skill6=sanitise_input($_POST["Risk_Analysis_Business_Analaytics"]);

    else
        $skill6=null;


//code for validation and checking of the other skills check box and other skills description         


    if(isset($_POST["Other_Skills"]) && trim(($_POST["text_area"]))==""   ){

        echo"<p class='error'>Text area cannot be empty after selecting other skills checkbox!!!</p>";
        $setDataValidation=false;
    }


    else if(!isset($_POST["Other_Skills"]) && trim(($_POST["text_area"]))!=""){

        echo"<p class='error'>Please check the other skills text box to fill in the text area !!!</p>";
        $setDataValidation=false;
    }


    else if(isset($_POST["Other_Skills"]) && trim(($_POST["text_area"]))!=""){

        $skill7=sanitise_input($_POST["Other_Skills"]);
        $text_area=sanitise_input($_POST["text_area"]);
        
        }

    else if(!isset($_POST["Other_Skills"]) && trim(($_POST["text_area"])=="")){

        
        $skill7=null;
        $text_area=null;
        }    

    
// if all the inputs of the user pass validation succesfully , user is notified that all validation passsed successfully

    if($setDataValidation==true){

        echo"<p class='success'>Great !! All fields have been validated successfully</p>";


       // settings.php file is included to get the host , username, password and database_name   

        require_once("settings.php");

// statement to connect to the database 

        $conn=mysqli_connect($host,$user,$pwd,$sql_db);

// table name in the database

        $sqlTable='EOI';

// the skills sets which were selected by the user are appeneded to make it ready to be entered into the database

        $skillSets=$skill1."  ".$skill2."  ".$skill3."  ".$skill4."  ".$skill5."  ".$skill6;
        $otherSkills=$skill7." - ".$text_area;

// if not able to connect to the database        
        if(!$conn)

            echo"<p class='error'>Error Connecting to the Database</p>";

// if the connection to the databse is succesfull


/* a MySql SHOW query is used to check if the table exists*/

        else{
        $query="SHOW 
                TABLES LIKE '$sqlTable'";

        
        $result=mysqli_query($conn,$query);


// if the table does not exists , a new table is created  

            if(mysqli_num_rows($result)==0){

                echo "<p class='error'>Table does not exist yet . Creating the table now</p>";
                
//query to create the table 

                $query1="CREATE TABLE $sqlTable(
                    EOInumber INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    Job_Reference_number VARCHAR(30) NOT NULL,
                    Status VARCHAR(30) NOT NULL DEFAULT 'New',
                    First_name VARCHAR(60) NOT NULL,
                    Last_Name VARCHAR(60) NOT NULL,
                    Gender VARCHAR(60) NOT NULL,
                    Street_address VARCHAR(60) NOT NULL,
                    Suburb VARCHAR(60) NOT NULL,
                    State VARCHAR(60) NOT NULL,
                    Postcode VARCHAR(60) NOT NULL,
                    Email_address VARCHAR(60) NOT NULL,
                    Phone_no VARCHAR(60) NOT NULL,
                    Skills VARCHAR(500),
                    Other_Skills VARCHAR(500)
                )";

               
// mysqli statement to execute the table creation

                $result1=mysqli_query($conn,$query1);
            
// if table creation is successful , user is notified of it 

                if($result1)
                    echo"<p class='success'>Table created successully</p>";
                
// else user is notifed that an error occured                   
                else
                    echo"<p class='error'>error occured , unable to create the tables </p>";
            
                }
    
// if in the case of the table already existing , the user record is directly entred into the table 

    

//an INSERT query is used to write the user record to the table                

                $query2="INSERT INTO $sqlTable(Job_Reference_number,First_name ,Last_Name ,Gender,Street_address,Suburb,State,Postcode,Email_address,Phone_no,Skills,Other_Skills) 
                            VALUES('$JobId','$firstName','$lastName','$gender','$streetAddress','$suburb','$state','$postCode','$email','$phoneNo','$skillSets','$otherSkills')";

                    
                    $result2=mysqli_query($conn,$query2);

        // if the record is succesfully added the user is notified and their Unique EOI Number is also displayed for reference          
                    if($result2){
                        echo"<p class='success'> Thank you for applying .Your Application has been successfully added to the database </p>";


        // Query and code block to extract and display the EOI number of the applicant after successfully applying

                        $query3="SELECT *
                                 FROM $sqlTable 
                                 WHERE First_Name='$firstName' AND Last_Name='$lastName' AND Job_Reference_number='$JobId' ORDER BY EOInumber DESC LIMIT 1";

                        $result3=mysqli_query($conn,$query3);
                        
                        if($result3){

                            if(mysqli_num_rows($result3)>0){

                                $row=mysqli_fetch_assoc($result3);

                                    echo "<p>your Unique EOI Number : ","<strong>",$row['EOInumber'],"</strong>","</p>";
                            }
                        }


                        echo"<p><a href='apply.php'>Click here to return to apply page </p>";
                    }
            // else , the user is notified of a failure
                    else
                        echo"<p class='error'>There is an error in writing your record to the database</p>";
                
            }
    } 


/* error handling part of input data validation , if the input data failed navigation ,
 the below block is executed and user can return to the home page  */

    else{
        echo"<p><a href='apply.php'>Click here to return to apply page to correct your errors</p>";
    }


        include('footer.inc');

    
}

/*error handling part for the request method check , the user is redirected back to apply page 
if the file name is directly entered in the URL without actually submitting the form */

else{
    header("location:apply.php");
}

 ?>

</body>
</html>

















