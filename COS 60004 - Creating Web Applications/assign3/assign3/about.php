<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Myself</title>
        <meta charset="utf-8">
        <meta name="description" content="Assign-3 Creating Web Applications">
        <meta name="keywords" content="Metaphoton,IT,Technology,HTML,CSS,PHP,cloud,infrastructure">
        <meta name="author" content="Arun Ragavendhar-104837257">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
      
    <?php 

        include('header.inc');
        include('menu.inc');

    ?>
        
        <div class="about">

            <div class="aside-about">
                <figure>
                    <img src="images/myphoto.jpg " alt="image is missing">
                    <figcaption>My Photo</figcaption>
                </figure>    
            </div>

            <div class="section1-about">
                <fieldset>
                <legend>Student Details</legend>
                 <dl>
                     <dt>Name</dt>
                     <dd> : Arun Ragavendhar</dd>

                     <dt>Student Number</dt>
                     <dd> : 104837257</dd>

                     <dt>Student Number</dt>
                     <dd> : 104837257</dd>

                     <dt>Tutor's Name</dt>
                     <dd> : Zeqian Dong</dd>

                     <dt>Course of Study</dt>
                     <dd> : Master of Information Technology</dd>
                  </dl>

                  <a href="mailto:104837257@student.swin.edu.au">Email - 104837257@student.swin.edu.au</a>

                </fieldset>
            </div>
           
            
            <div class="section2-about">
                
                <table id="timetable">
                  
                 <caption><em><strong>My Timetable</strong></em></caption>

                  <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>  
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                        <td>10:30AM-11:30PM</td>   
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>11:30AM-12:30PM</td> 
                        <td></td>  
                        <td class="COS60010">COS60010-Lecture</td>
                        <td></td>
                        <td class="COS60022">COS60022-Tutorial</td>
                        <td></td>    
                    </tr>

                    <tr>
                        <td>12:30PM-1:30PM</td>
                        <td class="COS60022">COS60022-Lecture</td>
                        <td></td>
                        <td class="COS60009" rowspan="2">COS60009-Lecture</td>
                        <td></td>
                        <td></td>   
                    </tr>

                    <tr>
                        <td>1:30PM-2:30PM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>             
                    </tr>

                    <tr>
                        <td>2:30PM-3:30PM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="COS60010" rowspan="2">COS60010-Tutorial</td>
                        <td></td>   
                    </tr>

                    <tr>
                        <td>3:30PM-4:30PM</td><td></td>
                        <td></td>
                        <td></td>
                        <td></td>   
                    </tr>

                    <tr>
                        <td>4:30pm-5:30PM</td>
                        <td class="COS60004" rowspan="2">COS60004-Lecture</td>
                        <td class="COS60004" rowspan="2">COS60004-Tutorial</td>
                        <td></td>
                        <td class="COS60009">COS60009-Tutorial</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>5:30pm-6:30PM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>6:30pm-7:30PM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>   
                    </tr>
                  </tbody>
                    
                </table>

            </div>

        </div>

        <?php 

        include('footer.inc');

        ?>
        
    </body>
</html>        

