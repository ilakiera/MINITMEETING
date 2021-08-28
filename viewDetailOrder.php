<?php
session_start();
?>
<html>
<head>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head><link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>

<?php
if(isset($_SESSION["id"]))
{
	$orderId = $_GET["orderId"];
	$sql = "SELECT * FROM orderitem WHERE orderId = '".$orderId."'";
	$query = mysql_query($sql);
	$data = mysql_fetch_array($query);
	
	$sql1 = "SELECT * FROM customer WHERE userId = '".$data["userId"]."'";
	$query1 = mysql_query($sql1);
	$data1 = mysql_fetch_array($query1);
	
?>
<table style="border-bottom:dotted" >
<tr><td>
<a href="adminHome.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<center>
<form action="setStatus.php" method="post">	
<table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr bgcolor="#CCCCCC"><td colspan="2">CUSTOMER DETAIL</td></tr>
<tr>
<td>NAME</td>
<td>: <?php echo $data1["name"]?></td>
</tr>
<tr>
<td>ADDRESS</td>
<td>: <?php echo $data1["address"]?></td>
</tr>
<tr>
<td>EMAIL</td>
<td>: <?php echo $data1["email"]?></td>
</tr>
<tr>
<td>PHONE NUMBER </td>
<td>: <?php echo $data1["noPhone"]?></td>
</tr>
<tr bgcolor="#CCCCCC"><td colspan="2">ORDER DETAIL</td></tr>
<tr>
<td>NAME ITEM </td>
<td>: <?php echo $data["nameItem"];?></td>
</tr>
<tr>
<td>Quantity </td>
<td>: <?php echo $data["quantity"];?></td>
</tr>
<tr>
<td>Status</td>
<td>: 
<?php 
$sql2 = "SELECT * FROM statusorder WHERE status = '".$data["status"]."'";
$query2 = mysql_query($sql2);
$data2 = mysql_fetch_array($query2);
?>
<select name="status">
<option><?php echo $data2["statusDetail"]?></option>
<option value="1">Waiting approve....</option>
<option value="2">Your Order Receive</option>
<option value="3">Your Order In The Making</option>
<option value="4">Your order done.You can take your order at my home.Thank You :)</option>
</select>
<input type="hidden" name="codeItem" value="<?php echo $data["codeItem"];?>">
<input type="hidden" name="id" value="<?php echo $data["userId"];?>">
</td>
</tr>
</table>
<input type="submit" value="SET STATUS" style="background:#F99">
<a href="viewCusOrder.php"><input type="button" value="BACK" style="background:#F99"></a>
</form></center>
<?php
}else
{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";
}
?>
</font>
</body>
</html>
