<html>
<head>
<?php
$connection = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<body background="resource/bgg6.jpg">
<?php
$codeItem = $_POST["code"];

$sql = "DELETE FROM item WHERE codeItem = '".$codeItem."'";
$query = mysql_query($sql);

if($query)
{
	echo "<script language='javascript'>alert('Item has been deleted');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewItemAdmin.php\"/>";
}
else
	die(mysql_error());
?>
</body>
</html>