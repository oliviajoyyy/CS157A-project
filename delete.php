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
    if(!empty($_POST['instructorID']))
    {
        $instructorID =  $_POST['instructorID'];
      
        $query = "DELETE FROM Instructor WHERE instructorID = '$instructorID'";
        
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
        <div><a href = "Instructor.php"><button type="button">Continue</button></a></div>
            </body>
</html>
