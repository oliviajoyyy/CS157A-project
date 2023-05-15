<html>
    <head>
    <title>Instructor Table database</title>
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
td
{
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
    <h1>Instructor Table Database</h1>
    <div class ="divin"><img src="https://www.rollingstone.com/wp-content/uploads/2021/05/mike-shinoda-twitch.jpg?w=1581&h=1054&crop=1" alt="MikeShinoda"> </div>
    <table>
        <thead>
        <tr>
            <th>Instructor ID</th>
            <th>Instructor Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM Instructor ";
        
        
        $result = $conn->query($sql);
        
        
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
        
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["instructorID"].
                     "</td><td>".$row["instructorName"].
                     "</td><td>".$row["email"]. 
                     "</td><td>".$row["phoneNumber"].
                     "</td></tr>";
            }
            echo "</table>";
    ?>
            </thead>
    </table>
    </div>
    <div>
        <h2>Update Instructor Table Database</h2>
        <form action ="insert.php" method="post">
            <label>Instructor ID:</label><input type = "text" name = "instructorID"><br>
            <label>Instructor Name:</label><input type = "text" name = "instructorName"><br>
            <label>Email:</label><input type = "text" name = "email"><br>
            <label>Phone Number:</label><input type = "text" name = "phoneNumber"><br>
            
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
    <div>
        <h2>Delete a Column in Instructor Table Database</h2>
        <form action ="delete.php" method="post">
            <label>Instructor ID:</label><input type = "text" name = "instructorID"><br>
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
</body>
</html>
