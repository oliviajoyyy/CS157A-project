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
                if(!empty($_POST['lessonID']) && !empty($_POST['day']))
                {
                    $lessonID  =  $_POST['lessonID'];
                    $day =  $_POST['day'];
                    
                    $query = "INSERT INTO LessonDay(lessonID, day)  VALUES('$lessonID','$day')";
        
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
        <div><a href = "Lesson Day.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>
