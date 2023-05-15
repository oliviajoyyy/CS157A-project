<html>
    <head>
    <title>Location Table Database</title>
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
    text-align:center;
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
    
    <h1>Location Table Database</h1>
            <div class ="divin"><img src="https://static.vecteezy.com/system/resources/previews/009/385/892/original/pin-location-icon-sign-free-png.png" alt="Icon"> </div>
    <div>
    <table>
        <thead>
        <tr>
            <th>Location ID</th>
            <th>Street Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Description</th>
            <th>Max Participants</th>
        </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM Location ";
        
        $result = $conn->query($sql);
        
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["LocationID"].
                     "</td><td>".$row["streetAddress"].
                     "</td><td>".$row["city"]. 
                     "</td><td>".$row["state"].
                     "</td><td>".$row["zip"].
                      "</td><td>".$row["description"].  
                     "</td><td>".$row["maxParticipants"].
                     "</td></tr>";
            }
            echo "</table>";
    ?>
            </thead>
    </table>
    </div>
    
    <div>
        <h2>Update Location Table Database</h2>
        <form action ="insert3.php" method="post">
            <label>Location ID:</label><input type = "text" name = "LocationID"><br>
            <label>Street Address:</label><input type = "text" name = "streetAddress"><br>
            <label>City:</label><input type = "text" name = "city"><br>
            <label>State:</label><input type = "text" name = "state"><br>
            <label>Zip Code:</label><input type = "text" name = "zip"><br>
            <label>Description:</label><input type = "text" name = "description"><br>
            <label>Max Participants:</label><input type = "text" name = "maxParticipants"><br>
            
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
                
      <div>
        <h2>Delete a Column in Location Table Database</h2>
        <form action ="delete3.php" method="post">
            <label>Location ID:</label><input type = "text" name = "LocationID"><br>
            
     
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
</body>
</html>
