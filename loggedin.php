<?php
$e=mysql_connect("localhost","root","");
mysql_select_db("tour",$e);
$mail=$_POST['email'];
$pass=$_POST['pass'];
$se=mysql_query("select * from custo where email='$mail' and pass='$pass'") or die("selection prob");
if(mysql_fetch_array($se)){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://cdn.rawgit.com/midhruvjaink/earth/v-0/css/earth.css" rel="stylesheet" />
<style type="text/css">
.head{
	height: 200px;
	}
ul{
	display:inline;
	vertical-align: middle;
	}
li{
	display:inline-block;
	text-decoration:none;
	}
a{
	text-decoration: none;
	}
a:link {
	color: inherit;
	}

/* visited link */
a:visited {
		color: inherit;
	}

/* mouse over link */
a:hover {
	}

/* selected link */
a:active {
	}


.style1 {color: #3300FF}

.main{
	margin: 0 auto;
	justify-content: center;
	margin-top: -100px;
	}
	
.banner{
	margin-left: 30%;
	margin: 0 auto;
	border-color: white;
	border-radius: 5px;
	}
	
.header{
	border-bottom: 1px solid brown;
	}
	
footer{
	height: 100px;
	}
#headtabs{
	position:absolute;
	left:580px;
	width:50%;
	}

#logo{
	position:absolute;
	left:100px;
	top:20px;
	}
	
#maingif{
	position:relative;
	width:1335px;
	top: 20px;
	}
	
#detail_tab{
	
	position:relative;
	width:80px;
	}
	
#footer{
	position:relative;
	width:1345px;
	top: 100px;
	}
	
#maincontent{
	
	position:relative;
	width:1130px;
	top:25px;
	left:100px;
	}
	
#footlink{
	
	width:50px;
	position:relative;
	left:1200px;
	top:50px;
	}
	
#footdata{
	
	position:absolute;
	left:50px;
	top:10px
	}
</style>

</head>

<body>
<div class="container margin-top-40 margin-left-50" >
<header >
<div class="row head" >
	<div class="md-4" id="logo" id="top">
	<img src="logo.jpg" width="300px" height="130px" />
	</div>

	<div class="md-7" id="headtabs">
	<ul class="menu">
	<li class="padding-right-20 white-text brown-bg uppercase-text padding-10 hoverable shadow-1 center-text"><a href="change.html">Home</a></li>
	<li class="padding-right-20 white-text brown-bg uppercase-text padding-10 hoverable shadow-1 center-text"><a href="Packages.html">Tour Packages</a></li>
	<li class="padding-right-20 white-text brown-bg uppercase-text padding-10 hoverable shadow-1 center-text"><a href="offers.html">Offers</a></li>
	<li class="padding-right-20 white-text brown-bg uppercase-text padding-10 hoverable shadow-1 center-text"><a href="#foot">Contact Us</a></li>

	</ul>
	</div>
</div>
	</header>
    </div>
    </body>
    </html>
    <?php
    	echo "You have loggedin successfully";
	}
else{
	header("location:login.htm");
	}	
?>