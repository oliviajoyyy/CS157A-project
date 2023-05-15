<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Lessons Database</title>
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
}   }

    </style>
    <body>
      <a href = "HomePage.php"><button type="button">Back</button></a>
             <h1>Lesson Catalog Table Database</h1>
             
            <div class ="divin"><img src="https://static.scientificamerican.com/sciam/cache/file/AFD5B975-B600-4C35-AA8B265090FFE58E_source.jpg?w=590&h=800&6383116C-7EF8-42FD-95038A097D97A2C4" alt="papers"> </div>

    <div>
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
       
        $sql = "SELECT * FROM LessonCatalog ";
           
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

       <div>
    <table>
        <thead>
        <tr>
            <th> <a href = "Guitar.php"><button type="button">Guitar</button></a></th>
            <th> <a href = "Piano.php"><button type="button">Piano</button></a></th>
            <th> <a href = "Trumpet.php"><button type="button">Trumpet</button></a></th>
            <th> <a href = "Vocals.php"><button type="button">Vocals</button></a></th>
        </tr>
          </thead>
    </table>
   </div>
    </body>
</html>
