<?php
require'Config.php';
?>
<DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body style="background-color:#ff7675"> 

<div id="Wel"> 
<h1>Legal Salaah</h1>
</div>
<div id="Wel1"> 
<h1><center>A Complete Solutions On GST Registration</center></h1>
</div>
<div id="main" >
<center><h2>Register From</h2>
<img src="imgs/login-bg.jpg" class="ram1"/>
</center>
<form class="myform1" action="Register.php" method="POST">
<lable>Fullname</lable><br>
<input name="Fullname" type="text" class="inputvalue1" placeholder="type your full name" /><br>
<lable>Gender</lable>
<input type="radio" name="Gender"  class="Radio" value="Male" required />Male
<input type="radio" name="Gender"  class="Radio" value="Female" required />Female<br>

<lable>Address</lable><br>
<input name="Address" type="text" class="inputvalue1" placeholder="type your full Address name" /><br>
<lable>Username</lable><br>
<input name="Username" type="text" class="inputvalue1" placeholder="type your user name"  required /><br>
<lable>Password</lable><br>
<input name="Password" type="password" class="inputvalue1" placeholder="type your password" required /><br>
<lable> ConfirmPassword</lable><br>
<input name="cpassword" type="password" class="inputvalue1" placeholder="type your password" required /><br>
<input name="submit_btn" type="submit" id="Sign_btn" value="Sign Up"/><br>
<a href="Login.php"><input type="button" id="back_btn" value="Back"/><br> </a>
</form>

</div>
</body>
</html>