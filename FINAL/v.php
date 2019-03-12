<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family:kameron;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 35px;
  text-align: center;
  background-size:100%;
  background-image: url("6.jpeg");
  color: white;
}



/* Page Content */
.content {padding:20px;}
body  {
  background-size:100%;
  background-image: url("1.jpeg");
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: CYAN;
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
  background-color: #777;
}

.active {
  background-color:black;
}


</style>
</head>
<body>

<div class="header">
  <h1>ADMIN</h1>
</div>
<IMG STYLE="position:absolute; TOP:0px; LEFT:0px; WIDTH:165px; HEIGHT:150px" SRC="ani.png">

<ul>
  <li><a href="logout.php">Logout</a></li>
  <li><a class="#active" href="company.php">Addcompany</a></li>
  <li><a class="#active" href="import.php">Import</a></li>
  <li><a class="#active" href="index.php">Export</a></li>
</ul>

<body>
<br><br><br><br><br><br><br><br>
<form action="" method="post">
   <!-- here start the dropdown list -->
  
 <center>
      DEPERTMENT:
 <select >
            <option value="0">SELECT</option>
	    <option name="dept" value="1">CSE</option>
            <option name="dept" value="2">CHEMICAL</option>
            <option name="dept" value="2">CIVIL</option>
	    <option name="dept" value="2">ECE</option>
            <option name="dept"  value="3">EEE</option>
	  <option name="dept" value="4">IT</option>
           <option name="dept" value="5">MECHANICAL</option>

</select><br><br>
 YEAR:
<select>
            <option  value="0">SELECT</option>
	    <option name="year" value="1">4</option>
</select><br><br>

</center>
</form>

</body>
</html>
