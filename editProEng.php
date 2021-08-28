<html>
<head>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<body background="resource/bgg6.jpg">
<?php
$name = $_POST["name"]; 
$add = $_POST["add"];
$nop = $_POST["nop"];
$email = $_POST["email"];
$id = $_POST["id"];
$pass = $_POST["pass"];

$sql = "UPDATE customer SET name='".$name."',noPhone = '".$nop."',address='".$add."',password='".$pass."',email='".$email."' WHERE userId='".$id."'";
$query = mysql_query($sql);
if($query)
{
	
	echo "<script language='javascript'> alert('Data has been update.')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewProfile.php?id=".$id."\"/>";
}
else
	die(mysql_error());
?>
</body>
</html>