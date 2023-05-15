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
    
    <style>
    table 
    {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th 
    {
        background-color: #588c7e;
        color: white;
        text-align:center
    }
    tr:nth-child(even) 
    {   
        background-color: #f2f2f2
    }
    h1
    {
        font-size: 4em;
        color: #0D2E8D;
        text-align:center
    }
    td
    {
        text-align:center
    }
       img
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
    .divin
    {

    background-color: yellow;
   }
    </style>
    
    
    <body>
        
        <a href = "CustomerReport.php"><button type="button">Back</button></a>
    <h1>Customer Report for Intermediate Piano Table Database</h1>
        
        <div>
    <table>
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Lessons Taken</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM customerreport WHERE lessonsTaken = 'Intermediate Piano'";
           
        $result = $conn->query($sql);

        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
        
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["customerID"].
                     "</td><td>".$row["customerName"].
                     "</td><td>".$row["email"]. 
                     "</td><td>".$row["phoneNumber"].
                     "</td><td>".$row["lessonsTaken"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
    </table>
        </div>
 </div>       
    </body>
</html>

