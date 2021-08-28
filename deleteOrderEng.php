<html>
<head>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<body background="resource/bgg6.jpg">
<?php
$codeItem = $_POST["codeItem"];

$sql = "DELETE FROM orderitem WHERE codeItem = '".$codeItem."'";
$query = mysql_query($sql);

if($query)
{
	echo "<script language='javascript'>alert('Order was deleted. :)')</script>";	
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewOrder.php\"/>";
}
else
{
	die(mysql_error());	
}
?>
</body>
</html>