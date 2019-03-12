<html>
<body>
<?php 
$name=$_POST["name"];
$pack=$_POST["package"];
$cgpa=$_POST["cgpa"];
$backlog=$_POST["backlog"];
$yeargap=$_POST["yeargap"];
    echo "<script type='text/javascript'>";
    echo "alert('Company Details Sucessfully Saved')";
    echo "</script>";

$conn= mysqli_connect('localhost','root','','placement')
or die ('Error connecting to your database');
if($conn -> connect_error){
	die("Connection failed:". $conn-> connect_errror);
	
}

$sql=mysqli_query($conn,"insert into company values('$name','$pack','$cgpa','$backlog','$yeargap')");
C


$result= $conn->query($sql);


mysqli_close($conn);

?>
</body>
</html>
