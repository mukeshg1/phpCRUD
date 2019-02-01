<!--
 File Name    : RegForm.html
 File Path    : C:\xampp\htdocs\PHP
 Description  : Registration Form to take input from users 
 Created date : 23/01/2019
 @Author      : Mukesh
 Comments     : Validation is also done here using jQuery validation plugin tool
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	
	<link type="text/css" rel="stylesheet" href="stylephp.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <title>Homepage</title>
  </head>
  <body class="body">
	  <!--<div id="loader">
		  <img src="spinner.gif" />-->
	  </div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
		<a href="index.html" ><img class="logo" src="logo2.png"></a> 
		<form id="loginform" method="POST" style="padding-left:50%; margin-top:10px;" action="loginvalidate.php">
			<div class="form-row">
				<div class="form-group col-md-6">
					<input type="email" class="form-control" name="loginemail" id="loginemail" placeholder="Enter Email*">
				</div>
				<div class="form-group col-md-5">
					<input type="password" class="form-control" name="loginpassword" autocomplete="off" placeholder="Enter Password*">
				</div>
				<div class="form-group col-md-1">
					<button class="btn btn-default btn-md" name="login_btn" id="login_btn">Login</button>
				</div>
			</div>
		</form>
	</nav>
	<form id="register_form" action="add-user.php" class="registerform" method="post">
		<h2>Create an account</h2>
        <label><i>It's free and takes only a minute.</i></label>
		<div id="message"></div>
        <div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="firstname" id="firstname" autocomplete="off" placeholder="First Name*">
			</div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="middlename" id="middlename" autocomplete="off" placeholder="Middle Name">
			</div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="lastname" id="lastname" autocomplete="off" placeholder="Last Name*">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" maxlength="10" autocomplete="off" class="form-control" name="phone" id="phone" placeholder="Mobile Number*">   
            </div>
            <div class="form-group col-md-6">
				<input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="Email*">
			</div>       
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="password" class="form-control" id="password1" name="password1" autocomplete="off" placeholder="Password*">
			</div>
			<div class="form-group col-md-6">
			<input type="password" class="form-control" name="password2" id="password2" autocomplete="off" placeholder="Repeat Password*">
			</div>
		</div>
        <div class="form-group col-md-13">          
            <button name="submit_btn" id="submit_btn" class="btn btn-primary btn-lg btn-block btn-huge">Register</button>
            <button type="reset" id="reset_btn" class="btn btn-secondary btn-lg btn-block btn-huge">Reset</button>
        </div>  
	</form>
	<h2 class="head2">Space for sample message</h2>
	<p>This space is for sample messages about what this web app does.<br>Also space to display all the necessary information</p>
	
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
	<script language="javascript" type="text/javascript" src="validationphp.js"></script>
	<script language="javascript" type="text/javascript" src="login.js"></script>    
</body>
</html>
