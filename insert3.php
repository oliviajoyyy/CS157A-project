
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
                   
                
                if(!empty($_POST['LocationID']) && !empty($_POST['streetAddress']) && !empty($_POST['city']) && !empty($_POST['state'])  && !empty($_POST['zip']) && !empty($_POST['description']) && !empty($_POST['maxParticipants']))
                {
                    $LocationID =  $_POST['LocationID'];
                    $streetAddress  =  $_POST['streetAddress'];
                    $city  =  $_POST['city'];
                    $state  =  $_POST['state'];
                    $zip = $_POST['zip'];
                    $description =  $_POST['description'];
                    $maxParticipants=  $_POST['maxParticipants'];
            
                    $query = "INSERT INTO Location(LocationID, streetAddress, city, state, zip, description, maxParticipants) VALUES('$LocationID', '$streetAddress', '$city', '$state', '$zip', '$description', '$maxParticipants')";
        
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
