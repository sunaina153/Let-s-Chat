<?php
$message='';
?>
<html>  
    <head>  
	
        <title>Chat Application </title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>  
    <body>  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.php" class="w3-bar-item w3-button" style="font-size:20px;">Let's Chat</a>
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
      <div class="panel-heading" style="color:green;"><center><b>Login Here...</b></center></div>
    <div class="panel-body">
     <form action="checklogin.php" method="post">
      <p class="text-danger"><?php echo $message; ?></p>
      <div class="form-group">
       <label>Enter Username</label>
       <input type="text" name="username" class="form-control" required />
      </div>
      <div class="form-group">
       <label>Enter Password</label>
       <input type="password" name="password" class="form-control" required />
      </div>
      <div class="form-group">
       <input type="submit" name="login" class="btn btn-info" value="login" >
      </div>
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