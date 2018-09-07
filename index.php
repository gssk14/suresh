<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
<title> login </title>
<style>
body 
 {
   font-family:Helvetica;
 }
form
 {
   border: 3px solid #f1f1f1;
 }
 
 input[type=text], input[type=password]
  {
    padding :16px 20px;
    margin  :8px 0;
    display:inline-block;
    border: 1px solid black;
 }
button
 {
  background-color:#0066ff;
  color:white;
  padding:14px 20px;
  margin:8px 0px;
  border:none;
  cursor:none;
  width:100px;
 border-radius: 2px;
 }
button:hover {
  opacity:0.5;
 }
.con
 {
   padding:16px;
   width:500px;
   border:3px solid gray;
   margin-left:380px;
 }
</style>
</head>
<body>
<center> <h2> Login Form </h2></center>
<form action="add.php" id="clear">

<div class="con">

<center>
<img src="newic.jpeg" alt="Avatar"/></br></br></br>
</center>

    <center>
<lable for="uname"><b>User Name</b></lable></br>
<input type="text" placeholder="User name" name="username" required/></br>

<lable for="psw"><b>Password</b></lable></br>
<input type="password" placeholder="Password" name="password" required/>
</center>
<div class="lbtn"> 
<center>
<button type="submit"> <b>Login</b></button>		<button type="submit" onclick="myFunction()"><b> Reset</b></button></br></br>
<a href="#">Forget password?</a>
</center>

<script>
function myFunction(){
 document.getElementById("clear").reset();
 }
</script>
</form>
<?php
/* @var $_POST type */
$username=$_POST('username');
$password=$_POST('password');
if (($username== 'gssk14') && ($password== 'suresh55')) {
    header('add.php');
}
elseif (($username== 'suresh_esh') && ($password== '1234sk')) {
    header('add.php');
}
else {
    echo 'Go Back & Try Again';
}
?>
</body>
</html>