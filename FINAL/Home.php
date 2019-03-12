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
  background-color: #FBFCFC;
  background-image: url("1.jpg");
  padding: 15px;
  text-align: center;
  
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #1F618D;
  color: black;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 9px 15px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.center{
background-color:#99A3A4;
margin:auto;
height:450px;
border: none;
padding: 0px;
}
.center .but{
position: absolute;
top:50%;
left:30%;
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
top:50%;
right:15%;
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
  text-decoration: none;
}
.footer {
  border-style: none;
  background-color: #D5DBDB;
  text-align: right;
  padding: 1px;
},
.label{

top:250px;
left:300px;
 font-size: 35px;
 color: #566573;
}
</style>
</head>
<body>
<div class="label" id="title4" style="visibility:visible"><h4>Result</h4></div>
<div class="header">
 <h3>Welcome, <?=$_SESSION['sess_user'];?></h3> 
</div>
<IMG STYLE="position:absolute; TOP:0px; LEFT:0px; WIDTH:145px; HEIGHT:90px" SRC="logo1.png">

<div class="topnav" color="black">
  <a href="logout.php">Logout</a>
  <a href="about.html">About</a>
 </div>


<div class="center">

  <!--<img src="bac.jpg" style="width:100%;height:100%;">-->
<!--<a href="final.php"><button class="but" style="margin:auto;display:block">Placements</button></a>-->
<!--<a href="1.html"><button class="butt" style="margin:auto;display:block">Circulars</button>--></a><br><br><br><br><br><br>
<form action="/action_pa.php">
  <input  class="but" type="image" src="but.png" alt="Submit" width="210" height="210">
</form>
<form action="/action_pa.php">

  <input  class="butt" type="image" src="but1.png" alt="Submit" width="210" height="210">
</form>
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