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
                if(!empty($_POST['customerID']))
                {
                    $customerID =  $_POST['customerID'];
                   
            
                    $query = "DELETE FROM Customer WHERE customerID = ' $customerID'";
        
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
        
        
        <div><a href = "Customer.php"><button type="button">Continue</button></a></div>
            </body>
    </body>
</html>
