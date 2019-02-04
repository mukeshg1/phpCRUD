<?php
/*
File Name    : all-activity.php
File Path    : C:\xampp\htdocs\phpCRUD
Description  : PHP page which displays all the user activity stored in 'activity' table from database 'crudphp'
Created date : 04/02/2019
Author       : Mukesh
*/
session_start();
// Create connection
$SERVER = '127.0.0.1';
$USER = 'root';
$PASSWORD = '';
$DB = 'crudphp';

$conn = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (ISSET($_SESSION['user']))
{
$sql = "SELECT * FROM activity";
$result = $conn->query($sql);
?>
    <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylephp.css"> 
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="userprofile.php" ><img class="logo" src="logo2.png"></a> 
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                     <a class="nav-link" href="userprofile.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="all-user.php">All users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="all-activity.php">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutuser.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Activity No.</th>
                <th>Time</th>
                <th>User Affected</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tbody>    
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>" . $row["time"]. "</td><td>" . $row["email"]. "</td><td>".$row["activity"]."</td></tr>";
    }
} else {
    echo "No records to show.";
}
$conn->close();
?>
    </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="activity.js"></script>
    </body>
    </html>
<?php }
else{
    include 'index.html';
    echo "<p style='color:white;'>Error: Invalid Session</p>";
}