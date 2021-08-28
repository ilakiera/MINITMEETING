<html>
<head>
<title>ORDER</title>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>

<body background="resource/bgg6.jpg">
<?php
$id = $_POST["id"];
$codeItem = $_POST["codeItem"];
$nameItem = $_POST["nameItem"];
$quantity = $_POST["quantity"];

$sqlItem = "SELECT * FROM item WHERE codeItem = '".$codeItem."'";
$queryItem = mysql_query($sqlItem);
$data = mysql_fetch_array($queryItem);

$totalPrice = $quantity * $data["price"];
$sql = "SELECT * FROM orderItem WHERE codeItem = '".$codeItem."' AND userId = '".$id."'";
$que = mysql_query($sql);
$num = mysql_num_rows($que);
$data1 = mysql_fetch_array($que);
$newQuantity = $data1["quantity"] + $quantity;

if($num > 0)
{
	$sqlS = "UPDATE orderItem SET quantity =".$newQuantity.", totalPrice = ".$totalPrice.", status = 1 WHERE codeItem LIKE '%".$codeItem."'";
	$queryS = mysql_query($sqlS);
	$data = mysql_fetch_array($queryItem);
	
	if($queryS)
{
	echo "<script language='javascript'>alert('Your Order has been submit.')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewOrder.php\"/>";
}
else
{
	die(mysql_error());	
}
	
}
else
{
$sqlOrder = "INSERT INTO orderitem(userId,codeItem,nameItem,quantity,totalPrice,status) VALUES ('".$id."','".$codeItem."','".$nameItem."','".$quantity."','".$totalPrice."',1)";
$queryOrder = mysql_query($sqlOrder);

if($queryOrder)
{
	echo "<script language='javascript'>alert('Your Order has been submit.')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewOrder.php\"/>";
}
else
{
	die(mysql_error());	
}
}
?>

</body>
</html>