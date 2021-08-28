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
$quantity = $_POST["quantity"];

$sql1 = "SELECT * FROM item WHERE codeItem = '".$codeItem."'";
$query1 = mysql_query($sql1);
$data = mysql_fetch_array($query1);

$totalPrice =  $data["price"] * $quantity;
$sql = "UPDATE orderitem SET quantity = ".$quantity." , totalPrice = ".$totalPrice.", status= 1 WHERE codeItem = '".$codeItem."'";
$query = mysql_query($sql);

if($query)
{
	echo "<script language='javascript'>alert('Order was updated. :)')</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewOrder.php\"/>";
}
else
{
	die(mysql_error());	
}
?>
</body>
</html>