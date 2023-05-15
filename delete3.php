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
                   
                
                if(!empty($_POST['LocationID']))
                {
                    $LocationID =  $_POST['LocationID'];
                    
            
                    $query = "DELETE FROM Location WHERE LocationID = '$LocationID'";
        
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
        <div><a href = "Location.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>
