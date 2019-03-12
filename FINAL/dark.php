
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 0"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style type="text/css">
.header {
  padding:15px;
 
  background-size:100%;
background-color:white;
  background-image: url("fall.gif");

 color: white;
}
body, html {
  height: 100vh;
  margin: 0;
 background-color:white;
}
.footer{
position:fixed;
float:right;
   left:0;
bottom:0;
background-style:none;
background-color:;
text-align:right;
width:100%;
padding:5px;

}

.bg {
  /* The image used */
  background-image: url("blur.jpg");
  
 
  
    

  /* Full height */
  height: 700px; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.dropbtn {
  background-color: none;
  color: white;
  padding: 10px;
  font-size: 110%;
  border: none;
  cursor: pointer;
top:50px;
right:30px;
float:right;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding: 8px 120px;
  font-size:20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 18px 10px;
  font-size: 70%;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:none}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: none;
}
a {
 
  color: white;
  font-size: 150%;

  text-align: center;
  padding: 12px 5px;
  text-decoration: none;
}
a:hover:not(.active) {
   background-color:NONE;
}
.container {
 
position: absolute;
            top: 56%;
            left: 20%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 400px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background:rgba(0,0,0,.3);
            border-radius: 25px;




}
.container1 {
  position: absolute;
 top: 56%;
           left: 80%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 400px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background:rgba(0,0,0,.3);
            border-radius: 25px;
        } 
.button {
  background-color:#49933D;
  border-radius:10px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  font-weight:none;
  margin: 4px 2px;

  cursor: pointer;
}
.butt{
   font-family: 'Montserrat',sans-serif;
   font-size: 19px;  
   color:white;
   float: center;
  text-align: right;
  text-decoration: none;
  text-transform: uppercase;
  
  padding: 8px 15px;
  margin:auto auto;
 }
.butt:hover {
      color: #CBDFD6;}
</style>
</head>
<body>
<div class="bg">
<div class="header">
<div class="h1"></div>
<h1 align="center">
ADMIN
</h1>
</div>
<div id="2"></div>

//<div class="dropbtn">
  
 <div class="dropdown">
  <a class="dropbtn">COMPANY</a>
  <div class="dropdown-content">
  <a href="campus.php">ADD</a>
  <a href="delete.php">DELETE</a>

  </div>
</div>

</div>
<center>
 <form action="ex1.php" class="container1" method="POST">
<h1 style='color:pink';>Export</h1><br />
   <b> DEPERTMENT:<b>
 <select name="dept" id="dept">
            <option value="">select</option>
	    <option  value="CSE">CSE</option>
            <option  value="CHEMICAL">CHEMICAL</option>
            <option  value="CIVIL">CIVIL</option>
	    <option  value="ECE">ECE</option>
            <option   value="EEE">EEE</option>
	  <option  value="IT">IT</option>
           <option  value="MECHANICAL">MECHANICAL</option>

</select><br><br>
 <b>YEAR:<b>
<select>
            <option  value="">select</option>
	    <option name="year" value="4">4</option>
</select><br><br>
<b>SECTION:</b>
 <select name="Section" id="Section">
            <option value="">SELECT</option>
	    <option name="dept" value="A">A</option>
            <option name="dept" value="B">B</option>
            <option name="dept" value="C">C</option>
            <option name="dept" value="D">D</option>
</select><br><br>
<input type="submit" style="font-size:20px;" name="submit" value="submit">
</center>


    
  </form>
</div>
<div id="1"></div>
<center>
<form action="" class="container" method="POST" enctype="multipart/form-data">    
<h1 style='color:pink';>Import</h1>
<input type="file" class="button" name="file"  style="margin:auto;display:block;"/ > <br><br> 

<input type="submit" class="button" name="sub" value="upload" style="margin:auto;display:block;"/><br>
<p style="color:red; font-size:20px;">Note:choose csv file only</p>
<br><br><br><br><br><br><br><br><br>
<br />
</div>    
  </form>

</center>
<div><a href="logout.php" STYLE="position:absolute; TOP:131px; RIGHT:38px;" class="butt">logout</a></div>
<?php
include("csv.php");
$csv= new csv();
if (isset($_POST['sub'])) {
   $csv->import($_FILES['file']['tmp_name']);
}
?>
<div class="footer" align="right">
<h3>Powered By:
    COMPUTER SCIENCE DEPT,ANITS </h3>
</div>

</body>
</html>
