<?php
session_start();
?>
<html>
<head>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh")
?>
</head>
<body background="resource/bgg6.jpg">
<?php
$status = $_POST["status"];
$codeItem = $_POST["codeItem"];
$id = $_POST["id"];

$sql = "UPDATE orderitem SET status = '".$status."' WHERE codeItem = '".$codeItem."' AND userId = '".$id."'";
$query = mysql_query($sql);
$sql1 = "SELECT * FROM orderitem WHERE codeItem = '".$codeItem."' AND userId = '".$id."'";
$query1 = mysql_query($sql1);
$data = mysql_fetch_array($query1);

if($query)
{
	echo "<script language='javascript'>alert('Status was send to the customer')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewDetailOrder.php?orderId=".$data["orderId"]."\"/>";
}
else
{
	die(mysql_error());	
}
?>
</body>
</html>