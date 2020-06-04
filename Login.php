<?php
session_start();
require'Config.php';
?>

<DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style> 
<div class="ram3" style="background-image: url(imgs/login-bg.jpg);">
<div id="main-wrapper" >
<center><h2 class ="h"> Login From</h2>
</center>
<form class="myform" action="Login.php" method="POST">
<lable>Username </lable><br>
<input name="Username"type="text" class="inputvalue" placeholder="type your user name" size="90"/><br>
<lable>Password</lable><br>
<input name="Password" type="password" class="inputvalue" placeholder="type your password"/><br>
<input name="login" type="submit" id="login_btn" value="Login"/><br>
<a href="Register.php"><input type="button" id="register_btn" value="Register"/><br></a>
</form>
</div>

</div>
</body>
</html>