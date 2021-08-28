<html>
<head></head>
<link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<?php
$connection = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</body>
<?php

$name = $_POST["txtName"];
$email = $_POST["txtEmail"];
$address = $_POST["txtAddress"];
$noPhone = $_POST["txtNo"];
$id = $_POST["txtId"];
$password = $_POST["password"];

$sql = "INSERT INTO customer VALUES ('".$id."','".$name."','".$noPhone."','".$address."','".$password."','".$email."')";
$query = mysql_query($sql);

if($query)
{
	echo "<script language='javascript'> alert('Register success')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";
}
else
	die(mysql_error());

?>
</html>