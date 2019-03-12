<?php  
if(isset($_POST["submit"])){ 
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {  
    $users=$_POST['user']; 
    $passs=$_POST['pass'];  
     
    $con=mysqli_connect("localhost","root","","admin") or die(mysqli_error());  
      
  
     $query=mysqli_query($con,"SELECT * FROM details WHERE admin='$users' AND password='$passs'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['admin'];  
    $dbpassword=$row['password'];  
    }
     
    if($users == $dbusername && $passs == $dbpassword)  
    {  
  session_start(); 
  
    
  $_SESSION['sess_user']=$users;
    header("Location: v.php");  
    } 
    } else {  
    echo "<script type='text/javascript'>";
    echo "alert('invalid username and password')";
    echo "</script>";
}  
  } else { 
 echo "All fields are required!";
      
}  
}
?> 
