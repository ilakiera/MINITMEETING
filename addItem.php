<?php
session_start();
?>
<html>
<head>
<title>ADD ITEM</title>
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

<center>

<form action="addEng.php" method="post">
<table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr><td colspan="2" align="center"><font size="10" face="Ar Darling">ADD ITEM</font> <img src="resource/InLove-48.png" width="48" height="48"></td></tr>
<tr>
<td width="330" align="center">
<table border="0">
<tr>
<td>CODE ITEM :</td>
<td><input type="text" name="code"></td>
</tr>
<tr>
<td>NAME ITEM :</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>PRICE : RM</td>
<td><input type="text" name="price"></td>
</tr>
<tr>
<td>IMAGE :</td>
<td><input type="file" name="img"></td>
</tr>
</table>
</td></tr>
</table><br>
<input type="submit" value="ADD" name="edit" style="width:70; height:25; background:#F99">
<input type="reset" value="RESET" name="edit" style="width:70; height:25; background:#F99">
<a href="adminHome.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a></form></center>
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
