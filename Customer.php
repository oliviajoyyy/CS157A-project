<html>
    <head>
        <title>Customer Table Database</title>
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
    {   background-color: #f2f2f2}
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
    <h1>Customer Table Database</h1>
    
        <div class ="divin"><img src="https://www.unr.edu/main/images/colleges-schools/liberal-arts/music/components/practice-room-policies.jpg" alt="Student"> </div>

    
    <table>
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
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
       
        $sql = "SELECT * FROM Customer ";
        
        
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
                     "</td></tr>";
            }
            echo "</table>";
    ?>
            </thead>
    </table>
    </div>
    
    <div>
        <h2>Update Customer Table Database</h2>
        <form action ="insert2.php" method="post">
            <label>Customer ID:</label><input type = "text" name = "customerID"><br>
            <label>Customer Name:</label><input type = "text" name = "customerName"><br>
            <label>Email:</label><input type = "text" name = "email"><br>
            <label>Phone Number:</label><input type = "text" name = "phoneNumber"><br>
            
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
    
    <div>
        <h2>Delete a Column in Customer Table Database</h2>
        <form action ="delete2.php" method="post">
            <label>Customer ID:</label><input type = "text" name = "customerID"><br>            
            <button type = "submit" name ="submit">Submit </button>
        </form> 
    </div>
</body>
</html>
