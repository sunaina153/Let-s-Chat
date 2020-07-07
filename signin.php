<?php
session_start();
 

require 'lib/password.php';
 
include 'connect.php';
 
 $message='';
 $message1='';
 $message3='';
//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if(isset($_POST['signin'])){
	
    
    //Retrieve the field values from our registration form.
	$UserEmail = !empty($_POST['UserEmail']) ? trim($_POST['UserEmail']) : null;
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $password1 = !empty($_POST['password1']) ? trim($_POST['password1']) : null;
    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    
    //Now, we need to check if the supplied username already exists.
    
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM login WHERE username = :username";
    $stmt = $conn->prepare($sql);
    
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
	//Construct the SQL statement and prepare it.
    $sql1 = "SELECT COUNT(UserEmail) AS num1 FROM login WHERE UserEmail = :UserEmail";
    $stmt1 = $conn->prepare($sql1);
    
    //Bind the provided username to our prepared statement.
    $stmt1->bindValue(':UserEmail', $UserEmail);
    
    //Execute.
    $stmt1->execute();
    
    //Fetch the row.
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
	
	if($row1['num1'] > 0){
        $message1="This Email already exits";
    }
    if($row['num'] > 0){
        $message="This Username already exits";
    }
	if($password!=$password1)
	{
		$message3="Confirm your password again";
	}
    else{
		$passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
    $user_id=1;
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
	
    $sql = "INSERT INTO login (UserEmail,username, password) VALUES (:UserEmail,:username, :password)";
    $stmt = $conn->prepare($sql);
    
    //Bind our variables.
	$stmt->bindValue(':UserEmail', $UserEmail);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
	
    $result=$stmt->execute();
	if($result){
        //What you do here is up to you!
		header("location: home.php");
    }
	}
    
    
    
}
 
?>
<html>  
    <head>  
	
        <title>Chat Application using PHP Ajax Jquery</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>  
    <body bgcolor=lightgrey;>  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button" style="font-size:20px;">Let's Chat</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="signin.php" class="w3-bar-item w3-button">Sign In</a>
      <a href="login.php" class="w3-bar-item w3-button">Sign Up</a>
    </div>
  </div>
</div>
        <div class="container">
   <br />
   <h3 align="center">Welcome!</a></h3><br />
   <br />
   <div class="panel panel-default">
    <div class="panel-heading" style="text-align:center;color:Green;"><b>Login Here to chat...</b></div>
    <div class="panel-body">
     <form action="" method="post">
	 <p class="text-danger"><?php echo $message1; ?></p>
      <p class="text-danger"><?php echo $message; ?></p>
	  <p class="text-danger"><?php echo $message3; ?></p>
	  <div class="form-group">
       <label>Enter Email</label>
       <input type="email" name="UserEmail" class="form-control" required />
      </div>
      <div class="form-group">
       <label>Enter Username</label>
       <input type="text" name="username" class="form-control" required />
      </div>
      <div class="form-group">
       <label>Enter Password</label>
       <input type="password" name="password" class="form-control" required />
      </div>
	  <div class="form-group">
       <label>Confirm Password</label>
       <input type="password" name="password1" class="form-control" required />
      </div>
      <div class="form-group">
       <input type="submit" name="signin" class="btn btn-info" value="signin">
      </div>
	  <p>Already have an account? <a href="login.php" style="color:blue;"><u>Login here</u></a>.</p>
     </form>
    </div>
   </div>
  </div>
  <div class="fixed-footer" style="height:50px;width:1300px; background-color:lightGrey;">
        <div class="container"><center><b>Copyright &copy; 2020 Sunaina</b></center></div>        
    </div>
    </body>  
</html>
<style>
body{
	
	background-color:lightgrey;
}
</style>
<script>
$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});
</script>
