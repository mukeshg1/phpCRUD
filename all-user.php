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
                     <a class="nav-link" href="userprofile.php">Home <span class="sr-only">(current)</span></a>
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
        echo "<tr><td>".$row["id"]."</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>".$row["email"]."
        </td><td><input class='btn btn-primary' type='button' value='Update' id='b_Update'>
        <input class='btn btn-secondary' type='button' value='Delete' id='b_Del'></td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    </tbody>
    </table>
    
    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="updateModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Update User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <i><div id ="updatemsg"></div></i>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="updatefirstname" id="updatefirstname" autocomplete="off" placeholder="First Name*">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="updatelastname" id="updatelastname" autocomplete="off" placeholder="Last Name*">
                    </div>
                </div>
                <div class="form-group col-md-13">
                    <input type="email" name="updateemail" id="updateemail" class="form-control" autocomplete="off" placeholder="Email*">
                </div>       
                <div class="form-row">
                    <div class="form-group col-md-6">    
                        <button name="save_btn" id="save_btn" class="btn btn-primary btn-block btn-huge">Save changes</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="button" id="close_btn" class="btn btn-secondary btn-block btn-huge" data-dismiss="modal">Close</button>
                    </div>  
                </div>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="crud.js"></script>
    </body>
    </html>