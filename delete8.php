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
                if(!empty($_POST['instructorID']) && !empty($_POST['lessonID']))
                {
                    $instructorID  =  $_POST['instructorID'];
                    $lessonID  =  $_POST['lessonID'];
                    
                    $query = "DELETE FROM InstructorLesson WHERE instructorID = '$instructorID' AND lessonID = '$lessonID'";
        
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
        <div><a href = "Instructor Lesson.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>

