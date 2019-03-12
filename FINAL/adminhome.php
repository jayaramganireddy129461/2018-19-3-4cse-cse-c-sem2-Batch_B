
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 0"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Layout</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style type="text/css">
body {
  font-family:kameron;
  margin: 0;
background-image:url("blur.jpg");
min-width:100%;
background-size:100% 100vh;
background-repeat:no-repeat;  

}



/* Header/Logo Title */
.header {
  padding:15px;
 
  background-size:100%;
background-color:black;
  background-image: url("blur.jpg");

 color: white;
}
h1{
font-size:40px;
}


/* Page Content */
.content {padding:20px;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#0A93CA;
   background:rgba(0,0,0,.3);
}

li {
  float: right;
}

li a {
  display: block;
  color: white;

  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
   background-color:green;
}

.active {
  background-color:green;
}
* {
  box-sizing: border-box;
}




/* Add styles to the form container */
.container {
 
position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 400px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background:rgba(130,150,100,.3);
            border-radius: 25px;




}
.container1 {
  position: absolute;
 top: 50%;
           left: 80%;
            transform: translate(-50%,-50%);
            width: 350px;
            height: 400px;
            margin-top:50px;
            padding: 80px 40px;
            box-sizing: border-box;
            background:rgba(50,150,50,.3);
            border-radius: 25px;
        } 
.button {
  background-color:#00BCD4;
  border-radius:10px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  font-weight:bold;
  margin: 4px 2px;

  cursor: pointer;
}



 

.btn:hover {
  opacity: 1;
}
.bu
{
  border-radius:18px;
  font-size:28px;
}



 .footer {
position:fixed;
left:0;

bottom:0;

  border-style: none;
  background-color:;

  text-align:right;
  padding: 15px;
width:100%;

}



</style>
</head>

 <div class="header">
<div class="h1"></div>
<h1 align="center">
ADMIN
</h1>

</div>
<ul>


     
  <li><a href="logout.php">Logout</a></li>
<li><a href="company.php">Add company</a></li>
            

  <li><a class="#active" href="homeimp.php">Home</a></li>
</ul>

<div id="2"></div>

<body>

<center>
 <form action="ex1.php" class="container1" method="POST">
<h1>Export</h1><br />
      DEPERTMENT:
 <select name="dept" id="dept">
            <option value="0">SELECT</option>
	    <option  value="CSE">CSE</option>
            <option  value="CHEMICAL">CHEMICAL</option>
            <option  value="CIVIL">CIVIL</option>
	    <option  value="ECE">ECE</option>
            <option   value="EEE">EEE</option>
	  <option  value="IT">IT</option>
           <option  value="MECHANICAL">MECHANICAL</option>

</select><br><br>
 YEAR:
<select>
            <option  value="0">SELECT</option>
	    <option name="year" value="1">4</option>
</select><br><br>
SECTION:
 <select name="Section" id="Section">
            <option value="0">SELECT</option>
	    <option name="dept" value="A">A</option>
            <option name="dept" value="B">B</option>
            <option name="dept" value="C">C</option>
            <option name="dept" value="D">D</option>
</select><br><br>
<input type="submit" name="submit" value="view">
</center>


    
  </form>
</div>
<div id="1"></div>
<center>
<form action="" class="container" method="POST">    
<h1>Import</h1>
<input type="file" class="button" name="file"  style="margin:auto;display:block;"/ > <br><br> 

<input type="submit" class="button" name="sub" value="import" style="margin:auto;display:block;"/><br>
<p>Note:choose csv file only</p>
<br><br><br><br><br><br><br><br><br>
<br />
</div>    
  </form>

</center>
<br><br><br><br><br><br><br><br><br>
<br />
<div class="footer" align="right">
<h3>Powered By:
    COMPUTER SCIENCE DEPT,ANITS </h3>
</div>
<?php
include("csv.php");
$csv= new csv();
if (isset($_POST['sub'])) {
   $csv->import($_FILES['file']['tmp_name']);
}
?>
</body>
</html>