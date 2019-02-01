<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "crudphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>
    <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylephp.css"> 
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" ><img class="logo" src="logo2.png"></a> 
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="all-user.php">All users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutuser.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>    
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>".$row["email"]."</td><td><input type='button' value='Edit' id='b_Edit'>
        <input type='button' value='Delete' id='b_Del'></td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="javascript" type="text/javascript" src="crud.js"></script>
    </body>
    </html>