<?php
?>
<!DOCTYPE html>
<html>
<title>Welcome!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

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
<!--middle-->
<br>
<div class="start" >
<div class=outerDiv>
	<div class="leftDiv">
	<p  style="color:white">hello</p>
	<h1 style="color:white;margin-left:15px;">Chat AnyWhere , Anytime</h1>
	<p style="color:white;margin-left:35px;font-size:20px;">To chat with anyone just login here...</p>
	<form action=checklogin.php method=post>
		<label style="color:white;margin-left:35px;font-weight:20;">UserName</label>
		<input type="text" style="height:30px;width:200px; margin-left:20px;border-radius: 5px;" name=username  \required>
		<br><br>
		<label style="color:white;margin-left:35px;font-weight:20;">Password</label>
		<input type="password" style="height:30px;width:200px; margin-left:26px;border-radius: 5px;" name=password  \required>
		
		<button type="submit"  class="button-fancy button-fancy-2" class="loginbtn" name="login">Login</button>
	</form>
	</div>
	<div class="rightDiv">
	<br><br>
		<img src="images/3.jpg" height=420px width=300px; style="margin-left:190px;">
	</div>
</div>
</div>

<h2><center><b>What To Expect Next:</b></center></h2>
<ul>
				<li>
					<img src="images/1.jpg" height=250px; width=250px; style="border-radius:20px;">
					<br>
					<br>
					<p class="code">Chat with anyone you want</p>
					
					</li>
				<li>
					<img src="images/2.jpg" class="secondimage" height=250px; width=250px;style="border-radius:20px;">
					<br>
					<br>
					<p class="code">check your friends online/offline status</p>
</li>
				<li>
					<img src="images/3.jpg" height=250px; width=250px; style="border-radius:20px;">
					<br>
					<br>
					<p class="code">Feel Connected</p>
					</li>
			</ul>
			
			<div class="fixed-footer" style="height:50px;width:1300px; background-color:lightGrey;">
        <div class="container"><center><b>Copyright &copy; 2020 Sunaina</b></center></div>        
    </div>
</body>
</html>
<style>
.head{
	font-weight:bold;
	color:Blue;
	
}
.leftDiv
			{
				
				height: 200px;
				width: 500px;
				float: left;
			}
			.rightDiv
			{
				
				height: 400px;
				width: 500px;
				float: right;
			}
.start{
	 background-image: url('bgs/blackmamba.png');
	 height:470px;
	 width:1270px;
}
.button-fancy {
	background-color: white ;
	border: 2px solid #020353;
	color: Black;
	height:40px;
	text-align: center;
	text-decoration: none;
	font-size: 1em;
	display: block;
	margin-top:30px;
	margin-left:250px;
	width: 15%;
	border-radius: 5px;
	box-shadow: 3px 3px 8px 0 #000; /* h-offset v-offset blur spread color */
}
li{
	margin-left:100px;
	display:inline-block;
}
.code{
	font-weight:bold;
	font-size:20px;
	color:grey;
}
.outerdiv {
  animation: mymove 5s 1;
  animation-delay: -2s;
}

@keyframes mymove {
  from {left: 0px;}
  to {left: 200px;}
}
</style>

