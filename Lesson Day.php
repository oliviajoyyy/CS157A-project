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
    <h1>Lesson Day Table Database</h1>
    
           <div class ="divin"><img src="https://merriam-webster.com/assets/mw/images/video/vid-video-play-lg/calendar%20that%20says%20day%20today-7778-9fe23b1203b2b8483e31701d8488cf27@1x.jpg" alt="Calandar"> </div>

    <div>
         <table>
        <thead>
        <tr>
            <th>Lesson ID</th>
            <th>Day</th>
        </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM LessonDay";
        
        $result = $conn->query($sql);
         
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["lessonID"].
                     "</td><td>".$row["day"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
        </table>   
    </div><!-- comment -->
    
    <div>
        <h2>Update Lesson Table Database</h2>
        <form action ="insert7.php" method="post">
            <label>lesson ID:</label><input type = "text" name = "lessonID"><br>
            <label>Day:</label><input type = "text" name = "day"><br>
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
    
    <div>
        <h2>Delete Column in Lesson Table Database</h2>
        <form action ="delete7.php" method="post">
            <label>lesson ID:</label><input type = "text" name = "lessonID"><br>
            <label>Day:</label><input type = "text" name = "day"><br>
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
</body>
</html>
