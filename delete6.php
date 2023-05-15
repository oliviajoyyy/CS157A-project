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
                if(!empty($_POST['instructorID']) && !empty($_POST['specialty']))
                {
                    $instructorID  =  $_POST['instructorID'];
                    $specialty =  $_POST['specialty'];
                    
                    $query = "DELETE FROM InstructorSpecialty WHERE instructorID = '$instructorID' AND specialty ='$specialty'";
        
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
        <div><a href = "Instructor Specialty.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>
