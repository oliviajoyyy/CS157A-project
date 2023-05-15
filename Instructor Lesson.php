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
    text-align:center;
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
            <h1>Instructor Lesson Table Database</h1>
            
       <div class ="divin"><img src="https://cdn.mos.cms.futurecdn.net/HooAQUxY2wuVRG86CqXr8R.jpg" alt="BreakingBenjamin"> </div>

            
           
    <table>
        <thead>
        <tr>
            <th>Instructor ID</th>
            <th>Lesson ID</th>
        </tr>
    <?php
    //instructorID, lessonID
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM InstructorLesson";
        
        $result = $conn->query($sql);
         
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
        
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo
   
                "<tr><td>".$row["instructorID"].
                     "</td><td>".$row["lessonID"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
        </table>
       
       <div>
        <h2>Update Instructor Lesson Table Database</h2>
        <form action ="insert8.php" method="post">
            <label>Instructor ID:</label><input type = "text" name = "instructorID"><br>
            <label>Lesson ID:</label><input type = "text" name = "lessonID"><br>  
            <button type = "submit" name ="submit">Submit </button>
        </form> 
        
    </div>
       
       
        <div>
        <h2>Delete a Column in Instructor Lesson Table Database</h2>
        <form action ="delete8.php" method="post">
            <label>Instructor ID:</label><input type = "text" name = "instructorID"><br>
            <label>Lesson ID:</label><input type = "text" name = "lessonID"><br>  
            <button type = "submit" name ="submit">Submit </button>
        </form> 
        
    </div>
</body>
</html>
