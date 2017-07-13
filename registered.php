<html>
<body>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$pass=$_POST['pass'];
$dod=$_POST['dod'];
$dor=$_POST['dor'];
$des=$_POST['des'];
$ti=$_POST['ti'];
$e=mysqli_connect("localhost","root","" , "tour");
$query="INSERT INTO datalist(name,email,contact,pass,dod,dor,des,ti)".
			"VALUES('$name','$email','$contact','$pass','$dod','$dor','$des','$ti')";
mysqli_query($e , $query) or die("cant insert");
mysqli_close($e);
?>
</body>
</html>
