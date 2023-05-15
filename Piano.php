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
       <a href = "LessonCatalog.php"><button type="button">Back</button></a>
      
          <div>
            <h1>Lesson Catalog for Piano Table Database</h1>
                                                <div class ="divin"><img src="https://media.istockphoto.com/id/1148666295/vector/piano-keyboard-seamless-top-view-realistic-detailed-shaded-piano-keys-simple-beautiful.jpg?s=170667a&w=0&k=20&c=5B30wV9uH-tOz8-Qn9_pkBItVMez24HRZIyzjExwzwg=" alt="piano"> </div>

    <table>
        <thead>
        <tr>
            <th>Lesson ID</th>
            <th>Lesson Name</th>
            <th>Instrument</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Cost</th>
            <th>Description</th>
            <th>Location</th>
            <th>Location ID</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM LessonCatalog WHERE instrument = 'piano'";
           
        $result = $conn->query($sql);

        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
        
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["lessonID"].
                     "</td><td>".$row["lessonName"].
                     "</td><td>".$row["instrument"]. 
                     "</td><td>".$row["startTime"].
                     "</td><td>".$row["endTime"].
                     "</td><td>".$row["cost"].
                     "</td><td>".$row["description"].
                     "</td><td>".$row["location"].
                     "</td><td>".$row["locationID"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
    </table>
        </div>
        
        
        
        
    </body>
</html>
