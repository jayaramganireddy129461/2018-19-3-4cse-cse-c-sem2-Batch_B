<html>
<head>

<style type="text/css">
table{
	
	width: 100%;
	color: black;
		font-family:monoscape;
	font-size: 25px;
	text-align: left;
}
th{
	background-color:green;
	color: white;
}
</style>
</head>	

<body>
<a href="dark.php"><b style="font-size:20px;">Back<b></a>
<table cellpadding="5"
 border="3">
<tr>
<th>Name</th>

<th>Id</th>

<th>cgpa</th>
<th>Branch</th>
<th>Gender</th>
<th>Section</th>
<th>Interested_for_placement</th>

</tr>






	
<?php  
 $depts=$_POST['dept'];
$sec=$_POST['Section'];

 echo "$depts";

    $con=mysqli_connect("localhost","root","","placement") or die(mysqli_error());  
      
  
     $query=mysqli_query($con,"SELECT * FROM  studentdetails WHERE Branch='$depts' AND Section='$sec'");  
 
 $numrows=mysqli_num_rows($query);  

 if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
           
      
	  echo "<tr><td>".$row["Name"]."</td><td>".$row["Regd_No"]."</td><td>".$row["B.Tech_CGPA"]."</td><td>".$row["Branch"]."</td><td>".$row["Gender"]."</td><td>".$row["Section"]."</td><td>".$row["Interested_for_Placement"]."</td></tr>";
}
	  

   
    }
      
   

mysqli_close($con);
?>
</table>

</body>
</html>