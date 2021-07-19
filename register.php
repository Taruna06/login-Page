<?php 

$host="localhost";
$user="taruna";
$password="taruna";
$db="fullstackproject";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username'])){
  $uname = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from loginform where user = '".$uname."' AND password = '".$password."' limit 1";
  $result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result) == 1){
    echo "You have successfully logged in";
    exit();
  }
  else{
    echo "You have Entered Incorrect Password";
    exit();
  }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="login_style.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <title>Huddle Register page</title>

 
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>


<div class="registertwo">
<form action = "process.php" class="register_page" method="post">
				<input type="text" name="username" placeholder="Enter the User Name"/>
                <input type="email" name="email" placeholder="Enter the Email"/>	
				<input type="password" name="password" placeholder="Enter the Password"/>
                <input type="password" name="cpassword" placeholder="Confirm the Password"/>
			    <input type="submit" type="submit" value="Create an account" name = "btn-save" class="btn-login register"/>
                <div><a href = "login.php" style = "color:white">Already have an account?</a></div>
		</form>
</div>





</body>
</html>