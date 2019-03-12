<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("down.jpg");

  min-height:100%;

  /* Center and scale the image nicely */
    margin: 0;
  background-repeat: no-repeat;
 background-size:100% 100vh;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 370px;
  top:100px;
  margin: auto auto;
  max-width: 450px;
  min-height:290px;
  padding: 40px;
  background-color:#E8DAEF;
 background: rgba(130,130,130,.3);
 }


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:20px;
}
.bn{
  background-color: #4CAF50;
  font-size: 40px;
  cursor: pointer;
 color: white;
  background-color: #3b5998;
}
 .bn i{font-size: 40px;
  margin-right:15px;
  padding-bottom: 3px;
}

.btn:hover {
  opacity: 1;
}
.bu
{
  border-radius:18px;
  font-size:28px;
}
</style>
</head>
<body>
 
<div class="bg-img">



  <form action="" class="container" method="POST">
<input type="button"  class="bn" value="BACK" style="float:right; width: 100px; font-size: 110%" onclick="window.location.href='homeimp.php' "/>    
<h1 style="color:#38B4E2;">STUDENT</h1>

    <label for="name"><b style="color:#38B4E2;">Name</b></label>
    <input type="text" placeholder="Enter Name" name="user" required>

    <label for="psw"><b style="color:#38B4E2;">Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <input type="submit" class="btn" name="submit" value="login"><br>
<br> 
 <label>
  Forgot password?<b style="color:blue;">contact admin</b>
</label>
  </form>
</div>
<?php  
if(isset($_POST["submit"])){ 
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {  
    $users=$_POST['user']; 
    $passs=$_POST['pass'];  
     
    $con=mysqli_connect("localhost","root","","placements") or die(mysqli_error());  
      
  
     $query=mysqli_query($con,"SELECT * FROM placement WHERE username='$users' AND password='$passs'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }
     
    if($users == $dbusername && $passs == $dbpassword)  
    {  
  session_start(); 
  
    
  $_SESSION['sess_user']=$users;
    header("Location: stu.php");  
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



</body>
</html>
