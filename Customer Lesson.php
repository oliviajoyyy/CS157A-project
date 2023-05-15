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
    <h1>Customer Lesson Table Database</h1>
                    <div class ="divin"><img src="https://ecdn.teacherspayteachers.com/thumbitem/Listening-to-Music-Lesson-Plan-3608703-1657527457/original-3608703-1.jpg" alt="Lesson"> </div>

    <table>
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Lesson ID</th>
        </tr>
    <?php
        //customerID, lessonID
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM CustomerLesson ";
        
        $result = $conn->query($sql);
         
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
        
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["customerID"].
                     "</td><td>".$row["lessonID"].
                     "</td></tr>";
            }
            echo "</table>";
      
   
    ?>
            </thead>
    </table>
    </div>
    <div>
        <h2>Update Customer Lesson Table Database</h2>
        <form action ="insert5.php" method="post">
            <label>Customer ID:</label><input type = "text" name = "customerID"><br>
            <label>Lesson ID:</label><input type = "text" name = "lessonID"><br>  
            <button type = "submit" name ="submit">Submit </button>
        </form> 
        
    </div>
    
    <div>
        <h2>Delete Column in Customer Lesson Table Database</h2>
        <form action ="delete5.php" method="post">
            <label>Customer ID:</label><input type = "text" name = "customerID"><br>
            <label>Lesson ID:</label><input type = "text" name = "lessonID"><br>  
            <button type = "submit" name ="submit">Submit </button>
        </form> 
        
    </div>
</body>
</html>
