<html>
<head><title>company</title>
<style type="text/css">
.form-style-7{
	max-width:400px;
	margin:20px auto;
	 background: rgba(155,155,155,.3);
	border-radius:15px;
	padding:5px;
	font-family: Georgia, "Times New Roman", Times, serif;
        
}
.form-style-7 h1{
	display: block;
	text-align: center;
	padding: 0;
	margin: 0px 0px 20px 0px;
	color: #FC0716;
	font-size:x-large;
       font-family: 'Bungee Outline';font-size: 22px;
}
.form-style-7 ul{
       
	list-style:none;
	padding:0;
	margin:0;	
}
.form-style-7 li{
	display: block;
	padding: 9px;
	border:1px solid #DDDDDD;
	margin-bottom: 30px;
	border-radius: 3px;
}
.form-style-7 li:last-child{
	border:none;
	margin-bottom: 0px;
	text-align: center;
}
.form-style-7 li > label{
	display: block;
	float: left;
	margin-top: -19px;
	background: #B2BABB;
	height: 18px;
	padding: 2px 5px 2px 5px;
	color: white;
	font-size: 13px;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="number"],
.form-style-7 input[type="password"],
.form-style-7 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	/*display: block;*/
	outline: none;
	border: none;
	height: 25px;
	line-height: 25px;
	font-size: 16px;
  background: rgba(155,155,155,.3);
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 select:focus 
{
}
.form-style-7 li > span{
	background: #F3F3F3;
	display: block;
	padding: 3px;
	margin: 0 -9px -9px -9px;
	text-align: center;
	color: blue;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
	background: #2471FF;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #5994FF;
	border-radius: 3px;
	color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
	background: #6B9FFF;
	color:#fff;
}
.form-style-7 input[type="reset"],
.form-style-7 input[type="button"]{
	background: #2471FF;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #5994FF;
	border-radius: 3px;
	color: #D2E2FF;
}
.form-style-7 input[type="reset"]:hover,
.form-style-7 input[type="button"]:hover{
	background: #6B9FFF;
	color:#fff;
}

body{
background-image: url("campus.jpg");

 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  margin: 0;
 background-color:black;
}
.bg{

-webkit-filter: blur(20px);}
.button{
   font-family: 'Montserrat',sans-serif;
   font-size: 100%;  
   color:white;
    background:#5499C7;
   float: center;
  text-align: right;
  text-decoration: none;
  text-transform: uppercase;
  border:solid #5499C7;
  padding: 8px 15px;
  margin:auto auto;
   
    
    
}
.button:hover {
      color: #CBDFD6;
      border: solid #CBDFD6 2px;
 }


</style>
<script type="text/javascript">

function validateForm() {
  var x = document.forms["myForm"]["name"].value;
 var y = document.forms["myForm"]["backlog"].value;
var z = document.forms["myForm"]["cgpa"].value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }


  if (isNaN(z) || z < 1 || z > 10) {
    alert("enter valid cgpa");
     return false;
  } 
  
if (isNaN(y) || y < 0 || y > 10) {
    alert("enter backlog history numbers");
     return false;
  } 


}
</script>
</head>
<body>
<br><br>
<div class="bg"> </div>
<form class="form-style-7" name="myForm" action="insert.php" onsubmit= "return validateForm()" method="post">

<center>
<h1>Company Details</h1></center>
<br>
<ul>
<li>
    <label for="name"><b style="color:#282929;">CompanyName</b></label>
    <input type="text" placeholder="eg:Amazon" name="name" id="name" maxlength="100" required>
    <span><b>Enter company name here</b></span>
</li>
<li>
    <label for="email"><b style="color:#282929;">Package</b></label>
    <input type="text" placeholder="eg:4.5" name="package" id="t2" maxlength="10"/>
    <span><b>Enter annual package offer(LPA)</b></span>
</li>
<li>
    <label for="url"><b style="color:#282929;">CGPA</b></label>
    <input type="number" placeholder="eg:8.9" name="cgpa" id="cgpa" maxlength="10" required/>
    <span><b>Enter allowed CGPA</b></span>
</li>
<li>
    <label for="bio"><b style="color:#282929;">Backlogs</b></label>
    <input type="number" placeholder="eg:0 or 2" name="backlog" id="backlog" maxlength="5" required/>
    <span><b>Is company allows backlogs,otherwise 0</b></span>
</li>
<li>
    <label for="bio"><b style="color:#282929;">YEAR GAP</b></label>
    <input type="number" placeholder="eg:0 or 2" name="yeargap" id="t5" maxlength="100">
    <span><b>Is allowed Year gap</b></span>
</li>
<li>
    <input type="submit" value="submit" >
     <input type="reset" value="Reset">
</li>
</ul>
</form>
<div><a class="button" href="logout.php" STYLE="position:absolute; TOP:55px; RIGHT:80px;">LOGOUT</a></div>
<div><a class="button" href="dark.php" STYLE="position:absolute; TOP:55px; RIGHT:180px;">HOME</a></div>

</body>
</html>