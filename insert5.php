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
                if(!empty($_POST['customerID']) && !empty($_POST['lessonID']))
                {
                    $customerID  =  $_POST['customerID'];
                    $lessonID =  $_POST['lessonID'];
                    
                    $query = "INSERT INTO CustomerLesson(customerID, lessonID) VALUES('$customerID','$lessonID')";
        
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
        <div><a href = "Customer Lesson.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>
