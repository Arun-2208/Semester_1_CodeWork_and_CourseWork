<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Apply</title>
        <meta charset="utf-8">
        <meta name="description" content="Assign-2 website using HTMl and CSS-Apply Page">
        <meta name="keywords" content="Metaphoton,IT,Technology,HTML,CSS,cloud,infrastructure">
        <meta name="author" content="Arun Ragavendhar-104837257">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">

    </head>
    <body>
        <?php 

        include('header.inc');
        include('menu.inc');

        ?>
        
        <div class="apply">
            
          <div class="section-apply">

            <form id="regform" action="processEOI.php" method="post" novalidate="novalidate">   

                <fieldset>
                    <legend><span>Apply for a Job</span>&nbsp;&nbsp;&nbsp;<span id="timer"></span></legend>
                     <p><label for="job-id">Job Reference Number</label><input type="text" id="job-id" name="Job_Reference_Number"  required="required"></p>
                     <p><label for="first-name">First Name</label><input type="text" id="first-name" name="First_Name" pattern="[a-zA-Z]*" required="required"></p>
                     <p><label for="last-name">Last Name</label><input type="text" id="last-name" name="Last_Name" pattern="[a-zA-Z]*" required="required"></p>
                     <p><label for="dob">Date of birth</label><input type="text" id="dob" name="Date_of_birth" placeholder="dd/mm/yyyy">
                        <span id="dobErrMsg"></span>
                    </p>
                 
                <fieldset>
                     <legend>Gender</legend>
                     <span id="gender">
                     <label for="male">Male</label><input type="radio" id="male" name="Gender" value="male" required="required">&nbsp;
                     <label for="female">Female</label><input type="radio" id="female" name="Gender" value="female">&nbsp;
                     <label for="non-binary">Non-Binary</label><input type="radio" id="non-binary" name="Gender" value="non-binary">&nbsp;
                     <label for="no-gender">Do not wish to mention</label><input type="radio" id="no-gender" name="Gender" value="no-gender">
                     </span>
                </fieldset>

                    <p><label for="street-address">Street Address</label><input type="text" id="street-address" name="Street_Address" required="required"></p>
                    <p><label for="suburb-town">Suburb/town</label><input type="text" id="suburb-town" name="Suburb" required="required"></p>
                    <p><label for="state">State</label>
                        <select id="state" name="State">
                            <option value="" selected>Select State</option>
                            <option value="NT">NT</option>
                            <option value="QLD">QLD</option>
                            <option value="NSW">NSW</option>
                            <option value="ACT">ACT</option>
                            <option value="VIC">VIC</option>
                            <option value="SA">SA</option>
                            <option value="WA">WA</option>
                            <option value="TAS">TAS</option>
                        </select>   
                        <span id="stateErrMsg"></span>   
                    </p>
                    <p><label for="postcode">Post Code</label><input type="text" id="postcode" name="Post_Code">
                       <span id="postCodeErrMsg"></span>
                    </p>
                    <p><label for="email">Email</label><input type="email" id="email" name="Email" required="required"></p>
                    <p><label for="ph-no">Phone No</label><input type="text" id="ph-no" name="Phone_No" required="required"></p>
                    <p>Skills List:</p>
                        <p><label for="check-box1">Html,Css,Javascript</label><input type="checkbox" id="check-box1" name="Html_Css_Javascript" value="Html,Css,Javascript" checked required="required"></p>
                        <p><label for="check-box2">Python with Flask and Django</label><input type="checkbox" id="check-box2" name="Python_with_Flask_Django" value="Python with Flask and Django"></p>
                        <p><label for="check-box3">Sql and NO Sql Database</label><input type="checkbox" id="check-box3" name="Sql_NO_Sql_Database" value="Sql and NO Sql Database"></p>
                        <p><label for="check-box4">Project Management</label><input type="checkbox" id="check-box4" name="Project_Management" value="Project Management"></p>
                        <p><label for="check-box5">Scrum,Agile Methodology</label><input type="checkbox" id="check-box5" name="Scrum_Agile_Methodology" value="Scrum,Agile Methodology"></p>
                        <p><label for="check-box6">Risk Analysis and Business Analytics</label><input type="checkbox" id="check-box6" name="Risk_Analysis_Business_Analaytics" value="Risk Analysis and Business Analytics" checked required="required"></p>
                        <p><label for="check-box7">Other Skills</label><input type="checkbox" id="check-box7" name="Other_Skills" value="Other Skills"></p>
                        <p><label for="other-skills">Other Skills</label><textarea id="other-skills" name="text_area" rows="6" cols="40"></textarea>
                            <span id="otherSkillsErrMsg"></span>
                        </p>     
                    
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">  

                </fieldset>  

            </form> 

          </div>  

        </div>

        <?php 

        include('footer.inc');

        ?>
       
        <script src="scripts/apply.js"></script>

        <!--script src="scripts/enhancements2.js"></script!--> 

        <script src="scripts/jobs.js"></script>
    
      
    </body>
</html>        















