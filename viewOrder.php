<?php
session_start();
?>
<html>
<head>
<title>ZAINILA HANDICRAFT</title>
<?php
$connection = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<?php
if(isset($_SESSION['id']))
{
	$sql = "SELECT * FROM orderitem WHERE userId = '".$_SESSION["id"]."'";
	$query = mysql_query($sql);
	$numr = mysql_num_rows($query);
	
?>
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>
<br>
<table style="border-bottom:dotted" >
<tr><td>
<a href="menu.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<center>
<br>
<table style="border-radius:20px; background:#FF9999; padding:5px; border-style:dashed"   >
<tr>
<td colspan="2"><font size="10" face="Ar Darling">ORDER</font> <img src="resource/InLove-48.png" width="48" height="48"></td>
</tr>
<tr bgcolor="#FCC">
<td colspan="4" align="center"><marquee direction="left">Hye <?php echo $_SESSION['id'];?>, Thank You for make an ordering.</marquee></td>
</tr>
<?php
if($numr > 0)
{
	$x=1;
	$total = 0;
	while($data= mysql_fetch_array($query))
	{
		$sql1 = "SELECT * FROM statusorder WHERE status = '".$data["status"]."'";
		$query1 = mysql_query($sql1);
		$data1 = mysql_fetch_array($query1);
?>
<tr><td colspan="3" bgcolor="#CCCCCC" align="center">ITEM <?php echo $x; ?></td>
<td bgcolor="#CCCCCC" align="center">STATUS</td></tr>
<tr>
<td>Code Item</td>
<td>: <?php echo $data["codeItem"]; ?></td>
<td rowspan="3" bgcolor="#999999">
<a href="editOrder.php?codeItem=<?php echo $data["codeItem"];?>"><img src="resource/edit-file-icon.png" width="38" height="38"></a>
<a href="deleteOrder.php?codeItem=<?php echo $data["codeItem"];?>"><img src="resource/delete-file-icon.png" width="38" height="38"></a>
</td>
<td rowspan="3" bgcolor="#999999"><?php echo $data1["statusDetail"];?></td>
</tr>
<tr>
<td>Name Item</td>
<td>: <?php echo $data["nameItem"]; ?></td>
</tr>
<tr>
<td>Quantity</td>
<td>: <?php echo $data["quantity"]; ?></td>
</tr>
<?php
 $x++;
 $total = $total + $data["totalPrice"]; 
	}
?>
<tr bgcolor="#FCC">
<td>Total Price</td>
<td colspan="3">: RM <?php echo $total; ?></td>
</tr>
<?php
}
else
{
?>
<tr bgcolor="#CCCCCC" align="center"><td colspan="4" >NO ORDER </td></tr>
<?php
}
?>
</table>
<center>
<a href="menu.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a></center></form></center>
<?php
}
else
{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";	
}
?>

</font>

</body>
</html>
