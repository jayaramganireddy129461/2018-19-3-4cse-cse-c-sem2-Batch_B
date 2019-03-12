<html>
<head>
<style>
table{
 
 border-collapse: collapse;
 text-aglin:center;
}
#tab{
   
 background-color:white;
}
.topnav {
  overflow: hidden;
  color: black;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 9px 5px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
body{
  background-image:url("s1.jpeg");  
  background-repeat:no-repeat;
  background-size:100% 100%;
 
}

a
{
  text-decoration:none;
  color:#40E058;
}
.header
{
   padding:30px;
   text-align:center;
   font-size:30px;

}
table{
  width:60%;
}
th{height:40px;}

td{height:30px;}

</style>
</head>
<body>

<div class="header">
 <b>Drop Company Name 
</b>
</div>
<div class="topnav" color="black">
<a href="logout.php">LOGOUT</a>
<a href="dark.php">HOME</a>  

</div>

<div id="two" align="center"><br><br>
	<table border="1" width="600" id="tab">
		<tr>
			<th>Company</th>
			<th>Cgpa</th>
			<th>Package</th>
                        <th>Delete</th>
		</tr>

<?php

$con=mysqli_connect("localhost","root","","placement") or die(mysqli_error());
  if(isset($_GET['id'])){
     $del_id=$_GET['id'];
    if(mysqli_query($con,"delete from company where name='$del_id'")){
      echo "<h2 style='color:#E91E40;'>$del_id is Deleted successfully.</h2>";
    }
  }

if(!$con){
die("connection failed:".mysqli_connect_error());
}else{
$result=mysqli_query($con,"SELECT * FROM company ");

if(mysqli_num_rows($result)!=0){
 
 while($row=mysqli_fetch_assoc($result))
{


echo "<tr  align='center'><td>". $row['name'] ."</td><td>". $row['cgpa'] . "</td><td>". $row['package'] ."</td><td><a href=delete.php?id=".$row['name'].">delete</a></td> ";

}

}
}
mysqli_close($con);
?>
</body></html>