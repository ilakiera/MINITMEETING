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
if(isset($_SESSION["id"]))
{
$codeItem = $_GET["codeItem"];
$sql = "SELECT * FROM item WHERE codeItem = '".$codeItem."'";
$query = mysql_query($sql);
$data = mysql_fetch_array($query)
?>
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>


<table style="border-bottom:dotted" >
<tr><td>
<a href="adminHome.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>

<center>
<form action="deleteEng.php" method="post">
<table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr>
<td width="330" align="center">
<table border="0">
<tr>
<td colspan="2" align="center"><font size="10" face="Ar Darling">DELETE ITEM</font></td></tr>
<tr bgcolor="#FCC">
<td>CODE ITEM :</td>
<td><?php echo $codeItem;?><input type="hidden" name="code" value="<?php echo $codeItem;?>" readonly></td>
</tr>
<tr bgcolor="#FCC">
<td>NAME ITEM :</td>
<td><?php echo $data["nameItem"];?><input type="hidden" name="name" value="<?php echo $data["nameItem"];?>"></td>
</tr>
<tr bgcolor="#FCC">
<td>PRICE : RM</td>
<td><?php echo $data["price"];?><input type="hidden" name="price" value="<?php echo $data["price"];?>"></td>
</tr>
</table></td></tr></table>
<br>
<input type="submit" value="DELETE" name="edit" style="width:70; height:25; background:#F99">
<a href="viewItemAdmin.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a></form></center>
</font>
<?php
}
else
{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";
}
?>
</body>
</html>
