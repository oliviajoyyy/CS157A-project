<html>
    <head>
    <title>Table with database</title>
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
</head>
<body>
    <a href = "HomePage.php"><button type="button">Back</button></a>
    <div>
    <h1>Lesson Table Database</h1>
                <div class ="divin"><img src="https://howtostartanllc.com/images/business-ideas/business-idea-images/music-lessons-business.jpg" alt="aLesson"> </div>

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
       
        $sql = "SELECT * FROM Lesson ";
        
        $result = $conn->query($sql);
        
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
        
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["lessonID"].
                     "</td><td>".$row["lessonName"].
                     "</td><td>".$row["instrument"]. 
                     "</td><td>".$row["startTime"].
                     "</td><td>".$row["endTime"].
                     "</td><td> $".$row["cost"].
                     "</td><td>".$row["description"].
                     "</td><td>".$row["locationID"].
                     "</td></tr>";
            }
            echo "</table>";
    ?>
            </thead>
    </table>
    </div>
    
    <div>
        <h2>Update Lesson Table Database</h2>
        <form action ="insert4.php" method="post">
            <label>lesson ID:</label><input type = "text" name = "lessonID"><br>
            <label>Lesson Name:</label><input type = "text" name = "lessonName"><br>
            <label>Instrument:</label><input type = "text" name = "instrument"><br>
            <label>Start Time:</label><input type = "text" name = "startTime"><br>
            <label>End Time:</label><input type = "text" name = "endTime"><br>
            <label>Cost:</label><input type = "text" name = "cost"><br>
            <label>Description:</label><input type = "text" name = "description"><br>
            <label>Location ID:</label><input type = "text" name = "locationID"><br>
            
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
    
    <div>
        <h2>Delete a Column in Lesson Table Database</h2>
        <form action ="delete4.php" method="post">
            <label>lesson ID:</label><input type = "text" name = "lessonID"><br>
        
            
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
    
</body>
</html>
