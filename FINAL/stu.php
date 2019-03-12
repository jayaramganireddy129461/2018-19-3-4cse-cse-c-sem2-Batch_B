<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:log.php");  
} else {  
?>
<!doctype html> 
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=0">
<style>
body {
  margin: 0;
  background-size:100% 100vh
} 
  .header {
  background-image: url("adm.jpg");
  padding: 10px;
  color:white;
  font-size:30px;
  text-align:right;
  
}
.center{
background-image:url("place.jpg");
background-repeat:no-repeat;
background-size:100% 100%;
margin:auto;
height:460px;
border: none;
padding: 0px;
}

.center .bu{
left:80%;

}
.center .but{
position: absolute;
top:47%;
left:52%;
transform: translate(-50%,-50%);
-ms-transform: translate(-50%,-50%);
background-color: none;
color:white;
padding:12px 24px;
border: none;
cursor: pointer;
font-size: 20px;
text-align: center;
}
.but:hover {
      color: #CBDFD6;
      border: solid none 2px;
}
.center .butt{
position: absolute;
top:62%;
right:39%;
transform: translate(-50%,-50%);
-ms-transform: translate(-50%,-50%);
background-color: none;
color:white;
padding:12px 24px;
border: none;
cursor: pointer;
font-size: 20px;
text-align: center;
}
.butt:hover {
      color: #CBDFD6;
      border: solid none 2px;
}
a{
 
  color:black;
 text-align:right;
 
  text-decoration: none;
}
.footer {
  border-style: none;
  background-color: white;
  text-align: right;
  padding: 0px;
},
.label{

top:250px;
left:300px;
 font-size: 35px;
 color: #566573;
}
.topnav a {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 9px 15px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

</style>
</head>
<body>
<div class="header">
 <h3>Welcome, <?=$_SESSION['sess_user'];?></h3> 
</div>


<div class="topnav" color="black">
  <a href="logout.php">Logout</a>
  <a href="about.html">About</a>
 </div>

 </div>


<div class="center">
  

<a href="final.php"><button class="but" style="margin:auto;display:block;background-color:green;">Placements</button></a>
<a href="1.html"><button class="butt" style="margin:auto;display:block;background-color:purple;">Circulars</button>
</a><br><br><br><br><br><br>

</div>
<div class="footer" align="right">
<h3>Powered By:
    COMPUTER SCIENCE DEPT,ANITS </h3>
</div>

</body>
</html>
<?php  
}  
?>