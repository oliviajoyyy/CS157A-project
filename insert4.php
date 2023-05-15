<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $conn = mysqli_connect("localhost", "root", "", "MusicLessons");

            if(isset($_POST['submit']))
            {
                
                        
                
                if(!empty($_POST['lessonID']) && !empty($_POST['lessonName']) && !empty($_POST['instrument']) && !empty($_POST['startTime'])  && !empty($_POST['endTime']) && !empty($_POST['cost']) && !empty($_POST['description']) && !empty($_POST['locationID']))
                {
                    $lessonID =  $_POST['lessonID'];
                    $lessonName  =  $_POST['lessonName'];
                    $instrument  =  $_POST['instrument'];
                    $startTime  =  $_POST['startTime'];
                    $endTime  =  $_POST['endTime'];
                    $cost =  $_POST['cost'];
                    $description =  $_POST['description'];
                    $locationID =  $_POST['locationID'];
            
                    $query = "INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)"
                            . " VALUES('$lessonID', '$lessonName', '$instrument', '$startTime', '$endTime','$cost' ,'$description', '$locationID')";
        
                    $run = mysqli_query($conn, $query) or die(mysqli_error());
        
                    if($run)
                    {
                        echo " Form submitted successfully";
                    }
                    else
                    {
                        echo " Form NOT submitted successfully";
                    }
                }
                else
                {
                    echo " all fields required";
                }
            }
        ?>
        <div><a href = "Lesson.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>
