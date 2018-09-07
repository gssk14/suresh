<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hotel Palace</title>
<style>

@keyframes slide
{
   0%{background:url("a.jpeg");
     margin:50px 0;
	 background:width:100%;
	 background:size:50%;
	 background-repeat:none;}
	 
    25%{background:url("b.jpeg");
     margin:50px 0;
	 background:width:100%;
	 background:size:50%;
	 background-repeat:none;}
	 
	 50%{background:url("c.jpeg");
     margin:50px 0;
	 background:width:100%;
	 background:size:50%;
	 background-repeat:none;}
	 
	 100%{background:url("d.jpeg");
     margin:50px 0;
	 background:width:100%;
	 background:size:50%;
	 background-repeat:none;}
}

.show{
  padding:83px;
  animation-name:slide;
  animation-duration:15s;
  animation-iteration-count:infinite;
  }	 
body
{
  transition:background-color .5s;
}

.nav
{
height:100%;
width:0%;
position:fixed;
z-index:1;
left:0;
top:0;
background-color: #111;
overflow-y: hidden;
transition:0.5s;
padding-top:60px;
}
.nav-content
{
  font-size:25px;
}

.nav a
{
padding:8px 8px 8px 40px;
text-decoration:none;
font-size:37px;
color: #818181;
display:block;
transition:0.3s;
}

.nav a:hover
{
color:#0066ff;
}

.nav .close
{
position:absolute;
top:0px;
right:15px;
font-size:60px;
margin-left:50px;
}

span
{
 font-size:40px;
 cursor:pointer;
 color:#0066ff;
 height:50%;
}

h1
{
  color:#0066ff;
  font-family:Helvetica;
}
h2
{
  color:#0066ff;
  font-family:Helvetica;
}
h3
{
  color:#0066ff;
  font-family:Helvetica;
}
img
{
  height:100px;
  width:100px;
  right:100px;
  top:8px;
  left:100px;
  top:8px;
  position:absolute;
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
#con
{
  transition:margin-left .5s;
}

@media screen and(max-height:450px)
{
.nav {padding-top:15px;}
.nav a {font-size:18px}
}
</style>
</head>
<body>
<img src="f.png"/>
<center><h1>HOTEL PALACE</h1></center>
<div class="show">
<div  id="lay" class="nav">
<a href="javascript:void(0)" class="close" onClick="closeNav()">&times;</a>

 <div class="content">
 <a href="add.php">Add Items</a>
 <a href="delete.php">Delete Items</a>
 <a href="view.php">View</a>
 
 </div>
 </div>
 </div>
<div id="con">

<center><span onClick="openNav()">&#9776; Menu</span></center>
</div>

<script>
 function openNav(){
 document.getElementById("lay").style.width="307px";
 document.getElementById("con").style.marginLeft="307px";
 document.body.style.backgroundColor="rgba(0,0,0,0.4)";
}

function closeNav(){
 document.getElementById("lay").style.width="0%";
 document.getElementById("con").style.marginLeft="0%";
 document.body.style.backgroundColor="white";
}
</script>
<div class="nv"/>
<form action="delete.php"method="post">
<center>
<h2>Delete Items</h2>
<h2>Item_Id</h2>
<input type="text" name="Item_Id"/></center></br>
<center><button type="submit" name="delete"><b>DELETE</b></button></br>	
   
</center>
</form>
</div>

<?php
$conn=mysqli_connect("localhost","root","mysql","hotel");
 if(!$conn){
       echo "Error in connection";
   } 
  if(isset($_POST["delete"]))
 {
   $res =mysqli_query($conn,"delete from palace where Item_Id = $_POST[Item_Id]");
   if(!$res){
       echo mysqli_error($conn);
   }
  }
?>
<center><a href="index.php"><button type="submit"><b>Log out</b></button></a></center>
</body>
</html>
