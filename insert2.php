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
                if(!empty($_POST['customerID']) && !empty($_POST['customerName']) && !empty($_POST['email']) && !empty($_POST['phoneNumber']))
                {
                    $customerID =  $_POST['customerID'];
                    $customerName  =  $_POST['customerName'];
                    $email  =  $_POST['email'];
                    $phoneNumber  =  $_POST['phoneNumber'];
            
                    $query = "INSERT INTO Customer(customerID, customerName, email, phoneNumber) VALUES('$customerID', '$customerName', '$email', '$phoneNumber')";
        
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
