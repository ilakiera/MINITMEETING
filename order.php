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
	$codeItem = $_GET["codeItem"];
	$sql = "SELECT * FROM item WHERE codeItem = '".$codeItem."'";
	$query = mysql_query($sql);
	$data = mysql_fetch_array($query);
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
<form action="orderEng.php" method="post">
<table style="border-radius:20px; background:#FF9999; padding:5px; border-style:dashed"   >
<tr>
<td colspan="2"><font size="10" face="Ar Darling">ORDER</font> <img src="resource/InLove-48.png" width="48" height="48"></td>
</tr>
<tr>
<td>ID </td>
<td>: <?php echo $_SESSION['id'];?><input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>" readonly></td>
</tr>
<tr>
<td>Code Item</td>
<td>: <?php echo $codeItem; ?><input type="hidden" name="codeItem" value="<?php echo $codeItem; ?>"></td>
</tr>
<tr>
<td>Name Item</td>
<td>: <?php echo $data["nameItem"]; ?><input type="hidden" name="nameItem" value="<?php echo $data["nameItem"]; ?>"></td>
</tr>
<tr>
<td>Quantity</td>
<td>: <input type="text" name="quantity" style="width:50;"></td>
</tr>
</table>
<center>
<input type="submit" value="SAVE ORDER" style="width:100; height:25; background:#F99">
<a href="viewItem.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a></center></form></center>
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
