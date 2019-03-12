<html>
<head>
<title>home page</title>

<meta name="viewport" content="width=device-width,initial-scale=0">
<style>
body, html {
  height: 100vh;
  margin: 0;
 background-color:black;
}

.bg {
  /*-webkit-filter: blur(5px); */   
  /* The image used */
  background-image: url("r.jpg");

  /* Full height */
  height: 100vh; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.button{
   font-family: 'Montserrat',sans-serif;
   font-size: 130%;  
   color: #0A93CA;
   float: center;
  text-align: right;
  text-decoration: none;
  text-transform: uppercase;
  border:solid #0A93CA;
  padding: 8px 15px;
  margin:auto auto;
 
    
    
}
.button:hover {
      color: #CBDFD6;
      border: solid #CBDFD6 2px;
 }
.butt{
   font-family: 'Montserrat',sans-serif;
   font-size: 130%;  
   color: #0A93CA;
   float: center;
  text-align: right;
  text-decoration: none;
  text-transform: uppercase;
  border:solid #0A93CA;
  padding: 8px 15px;
  margin:auto auto;
 }
.butt:hover {
      color: #CBDFD6;
      border: solid #CBDFD6 2px;
 }
.title {
  position: absolute;
   top: 120px;
  left: 100px;
  font-size: 25px;
   color: #58D68D;
}
.sub{
position: absolute;
top:190px;
left:165px;
 font-size: 26px;
 color: #58D68D;
}
.label{
position: absolute;
top:301px;
left:265px;
 font-size: 28px;
 color: #566573;
}
.label1{
position: absolute;
top:50px;
right:180px;
 font-size: 28px;
 color: #2874A6;
}
.qu{
position: absolute;
top:430px;
left:280px;
 font-size: 24px;
 color: #E8D5D4  ;
}
.container {
  position: absolute;
  right: 0;
  margin: 120px 70px;
  max-width: 750px;
  min-height:390px;
  padding: 20px;
  background: rgba(130,130,130,.3);
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 2 0 25 0;
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
}


 
</style>
<!--<script src="jquery-1.11.0.min.js"></script>-->
<script type="text/javascript">
function showText(id,delay){
var elem=document.getElementById(id);
setTimeout(function(){elem.style.visibility='visible';},delay*600)
}
window.onload=function(){
showText('title1',1);
showText('title2',1);
showText('title3',2);
showText('title4',2);
}
</script>

</head>
<body>
<div class="bg">
  <div class="title" id="title1" style="visibility:hidden"><h1>ANITS CAMPUS PLACEMENTS<h1></div>
  <div class="sub" id="title2" style="visibility:hidden"><h3>Check your stuff here,Navigate through login<h3></div> 
 <div class="qu" id="title3" style="visibility:hidden"><p> "The future belongs to those<br> 
                     who believe in the beauty of<br> 
                     their dreams."</p></div>
  <div class="label" id="title4" style="visibility:visible"><h4>LOGIN:</h4></div>
 <div class="label1" id="title5" style="visibility:visible"><h4>ADMIN</h4></div>
<IMG STYLE="position:absolute; TOP:0px; LEFT:0px; WIDTH:190px; HEIGHT:160px" SRC="logo1.png">  
<form action=" " class="container" method="POST">
<label for="name"><b><h3 style="color:white;">USER ID</h3></b></label>
    <input type="text" placeholder="Enter Name" name="user" required>

    <label for="psw"><b><h3 style="color:white;">PASSWORD</h3></b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <input type="submit" class="btn" name="submit" value="login"><br>
 
 <label>
  <h3 style="color:#041141;">student?</h3>
</label>
  </form>
<div><a href="main.php" STYLE="position:absolute; TOP:330px; left:370px;" class="button">STUDENT</a></div>
</div>

 
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
    header("Location: dark.php");  
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