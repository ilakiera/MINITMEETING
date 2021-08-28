<?php
session_start();
?>
<html>
<head>
<title>ZAINILA HANDICRAFT</title>
</head>
<link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>

<?php
if(isset($_SESSION["id"]))
{
?>
<table style="border-bottom:dotted" >
<tr><td>
<a href="adminHome.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>

<center><table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr>
<td align="center"><font size="10" face="Ar Darling">Hello admin, <?php echo $_SESSION["id"]?></font> <img src="resource/InLove-48.png" width="48" height="48"></td>
</tr>
<tr>
<td width="330" align="center">

<a href="addItem.php"><input type="button" value="ADD ITEM" style="background-color:#FCC; width:200px; height:50"></a><br><br>
<a href="viewCusProfil.php"><input type="button" value="VIEW CUSTOMER PROFILE" style="background-color:#FCC; width:200px; height:50"></a><br><br>
<a href="viewCusOrder.php"><input type="button" value="VIEW CUSTOMER ORDER" style="background-color:#FCC; width:200px; height:50"></a><br><br>
<a href="viewItemAdmin.php"><input type="button" value="VIEW ITEM" style="background-color:#FCC; width:200px; height:50"></a>
</td></tr>
</table></center>
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
