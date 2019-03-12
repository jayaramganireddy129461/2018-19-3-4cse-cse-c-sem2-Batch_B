<?php   
session_start(); 
$user=$_SESSION["sess_user"];
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
body{  
    background-image:url('image123.jpg');          
    margin-top: 0px;  
    margin-bottom: 20px;  
    margin-right: 150px;  
    margin-left: 200px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }   
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  color: black;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 9px 5px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color:black;
  color: white;
}
.center{
border-radius: 25px;
background-color:white;
color:#7B1090;
margin:auto;
width:650px;
height:100%;
border: 1px solid #73AD21;
padding: 0px;
}
a{
  text-decoration: none;
}
.footer{

color:white;
}
table{
	
	width:50%;
	color: black;
		font-family:monoscape;
	font-size: 20px;
	text-align: left;
}
th{
	background-color:pink;
	color: black;
}



</style>
</head>
<body>
<div class="header">
 </div>
<br><br><br>
<div class="topnav" color="black">
<a href="logout.php">LOGOUT</a>
<a href="stu.php">HOME</a>  

</div>
<div class="center">
<br> <center>  <h3>DETAILS</h3></center>
<table border="4" cellpadding="8">
<tr>
<th>Name</th>
     
<th> REG NUMBER</th>
<th>CGPA</th>
<th>PHNO</th>
 <th>Total_Backlogs</th>
 </tr>




<?php
$con1=mysqli_connect("localhost","root","","placement") or die(mysqli_error());

if(!$con1){
die("connection failed:".mysqli_connect_error());
}else{
$result1=mysqli_query($con1,"SELECT * FROM studentdetails where Regd_No='$user'");

if(mysqli_num_rows($result1)>0){
 
 while($row=mysqli_fetch_assoc($result1))
{

echo "<tr><td>".$row["Name"]."</td><td>".$row["Regd_No"]."</td><td>".$row["B.Tech_CGPA"]."</td><td>".$row["Student_Mobile_No"]."</td><td>".$row["Total_Backlogs"]."</td></tr>";	
	}


$cg=$row['B.Tech_CGPA'];
 $back=$row['Total_Backlogs'];
 echo '<center>'.$row['Total_Backlogs']."<br>".'</center>';



}

}
}

mysqli_close($con1);
?>

</table>
<br><br>
<table border="4" cellpadding="10">
<tr>
<th>Name </th>
<th>
Package</th>
<th>backlog</th>
<th>yeargap</th>
</tr>

<?php
$con=mysqli_connect("localhost","root","","placement") or die(mysqli_error());

if(!$con){
die("connection failed:".mysqli_connect_error());
}else{
$result=mysqli_query($con,"SELECT * from company where cgpa>='$cg' AND backlog<='$back'" );

if(mysqli_num_rows($result)!=0){
 
 while($row=mysqli_fetch_assoc($result))
{


echo "<tr><td>".$row["name"]."</td><td>".$row["package"]."</td><td>".$row["backlog"]."</td><td>".$row["yeargap"]."</td></tr>";

}

}
}
mysqli_close($con);
?>
</table><br>
</div><br><br />
<div class="footer" align="right">
<h3>Powered By:
    COMPUTER SCIENCE DEPT,ANITS </h3>
</div>

</body>
</html>  
