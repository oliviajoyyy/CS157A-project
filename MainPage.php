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
    </style>
    <body>
       <div><p style="text-indent: 25px;"><font size="+3">
        A small business has been offering music lessons to customers. They have recently been gaining more customers and are now hiring more music instructors. They have been keeping track of customers, lessons, and instructors on a spreadsheet, but now they need a better way to organize all the information. 
       </font></p>
       <p style="text-indent: 25px;"><font size="+3"> We will create a database for this business to help them better manage the information about their lessons, instructors and customers.
       </font></p></div>
        <div>
             <h1>Instructor Table Database</h1>
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
            <h1>Customer Table Database</h1>
    <table>
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
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
            <h1>Lesson Table Database</h1>
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
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
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
                     "</td><td>".$row["cost"].
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
                <h1>Location Table Database</h1>
            <table>
        <thead>
        <tr>
            <th>Location ID</th>
            <th>Street Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Max Participants</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
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
                     "</td><td>".$row["maxParticipants"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
        </table>   
        </div>
        <div>
            <h1>Customer Lesson Table Database</h1>
    <table>
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Lesson ID</th>
        </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
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
            
            <h1>Instructor Lesson Table Database</h1>
    <table>
        <thead>
        <tr>
            <th>Instructor ID</th>
            <th>Lesson ID</th>
        </tr>
    <?php
    //instructorID, lessonID
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
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
                echo "<tr><td>".$row["instructorID"].
                     "</td><td>".$row["lessonID"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
        </table>
        </div>
        <div>
        <h1>Instructor Specialty Table Database</h1>
    <table>
        <thead>
        <tr>
            <th>Instructor ID</th>
            <th>Specialty</th>
        </tr>
    <?php
    //instructorID, lessonID
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);  
            echo "Connection Error.";
        }
       
        $sql = "SELECT * FROM InstructorSpecialty";
        
        $result = $conn->query($sql);
         
        if(!$result)
        {
            die("Invalid query: ".$conn->error);
        }
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>".$row["instructorID"].
                     "</td><td>".$row["specialty"].
                     "</td></tr>";
            }
            echo "</table>";
        ?>
            </thead>
        </table>  
        </div>
        <div>
               <h1>Lesson Day Table Database</h1>
         <table>
        <thead>
        <tr>
            <th>Lesson ID</th>
            <th>Day</th>
        </tr>
    <?php
    //instructorID, lessonID
        $conn = mysqli_connect("localhost", "root", "XX7026xxfor", "MusicLessons");
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
        </div>
    </body>
</html>
