<?php
session_start();
?>
<html>
<head>
<title>ZAINILA HANDICRAFT</title>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<?php
if(isset($_SESSION["id"]))
{
  $sqlOrder = "SELECT * FROM orderitem WHERE userId ='".$_SESSION["id"]."'";
  $query = mysql_query($sqlOrder);
  $data = mysql_fetch_array($query);
?>
<font face="Ar Cena" color="#000000">
<center> <img src="resource/header.png">
<br><br></center>


<br>

<table style="border-bottom:dotted" >
<tr><td>
<a href="menu.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<br>
<center><table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr>
<td width="330" align="center">
<a href="viewProfile.php"><input type="button" value="VIEW PROFILE" style="background-color:#FCC; width:250px; height:50"></a><br><br>
<a href="viewItem.php"><input type="button" value="VIEW ITEM & MAKE AN ORDERING" style="background-color:#FCC; width:250px; height:50"></a><br><br>
<a href="viewOrder.php"><input type="button" value="VIEW ITEM ORDER" style="background-color:#FCC; width:250px; height:50"></a>
</td></tr>
</table></center>
<table style="background:#FFF; border-radius:15px; border-style:solid">
<tr>
<td valign="top" align="left">Hye <?php echo $_SESSION["id"] ?>,<br>
Welcome to Our Website</td>
<td><img src="resource/girl-swear-icon.png" width="128" height="128"></td>
</tr></table>
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
