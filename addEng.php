
<html>
<head>
<?php
$connection = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<?php
$code = $_POST["code"];
$name = $_POST["name"];
$price = $_POST["price"];
$image = $_POST["img"];
$sql = "INSERT INTO item VALUES ('".$code."','".$name."','".$price."','".$image."')";
$query = mysql_query($sql);

if($query)
{
	echo "<script language='javascript'> alert('Item was keep in database.')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewItemAdmin.php\"/>";
}
else
	die(mysql_error());
?>
</body>
</html>
