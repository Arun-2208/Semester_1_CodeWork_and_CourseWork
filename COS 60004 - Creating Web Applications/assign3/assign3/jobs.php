<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jobs</title>
        <meta charset="utf-8">
        <meta name="description" content="Assign-3 creating web applications">
        <meta name="keywords" content="Metaphoton,IT,Technology,HTML,CSS,PHP,cloud,infrastructure">
        <meta name="author" content="Arun Ragavendhar-104837257">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">

       
        
    </head>
    <body>
        
    <?php 

        // using .inc files through include function to implement code re-usability

        include('header.inc');
        include('menu.inc');

        ?>
        
        <div class="jobs">

          <article class="section-jobs">

            <h2>Vacancies and Job Descriptions</h2>
            
                <?php

                // using .inc files through include function to implement code re-usability

                include("jobDescription1.inc");
        
                include("jobDescription2.inc");

                ?>

        </article> 

            <aside class="aside-jobs">
                <fieldset>
                    <legend>Click below for Job description</legend>
                        <p><a href=#vacancy-1>Job Vacancy - 1</a></p>
                        <p><a href=#vacancy-2>Job Vacancy - 2</a></p>
                </fieldset>

                
                    <p>Click below to Apply for Jobs</p>
                        <p><button type="button" id="job1-apply">click to apply for Job 1</button></p>
                        <p><button type="button" id="job2-apply">click to apply for Job 2</button></p>
                
            </aside>

        </div>

        <?php 

        // using .inc files through include function to implement code re-usability

        include('footer.inc');

        ?>
        
        <script src="scripts/jobs.js"></script>
      
    </body>

    
</html>        










