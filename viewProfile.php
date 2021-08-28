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
$sql = "SELECT * FROM customer WHERE userId = '".$_SESSION["id"]."'";
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
<table style="border-radius:20px; background:#FF9999; padding:5px; border-style:dashed"   >
<tr><td colspan="3"><font size="10" face="Ar Darling">YOUR PROFILE</font> <img src="resource/InLove-48.png" width="48" height="48"></td></tr>
<tr bgcolor="#FCC">
<td>
NAME </td><td bgcolor="#FF9999">:</td>
<td><?php echo $data["name"];?><input type="hidden" name="name" value="<?php echo $data["name"];?>"></td></tr>
<tr bgcolor="#FCC">
<td>
ADDRESS </td><td bgcolor="#FF9999">:</td>
<td><?php echo $data["address"];?><input type="hidden" name="add" value="<?php echo $data["address"];?>"></td></tr>
<tr bgcolor="#FCC">
<td>
NO PHONE </td><td bgcolor="#FF9999">:</td>
<td><?php echo $data["noPhone"];?><input type="hidden" name="nop" value="<?php echo $data["noPhone"];?>"></td></tr>
<tr bgcolor="#FCC">
<td>
EMAIL </td><td bgcolor="#FF9999">:</td>
<td><?php echo $data["email"];?><input type="hidden" name="email" value="<?php echo $data["email"];?>"></td></tr>
<tr bgcolor="#FCC">
<td>
USER ID </td><td bgcolor="#FF9999">:</td>
<td><?php echo $_SESSION["id"];?><input type="hidden" name="id" value="<?php echo $_SESSION["id"];?>"></td></tr>
</table></center>
<center><a href="editProfile.php"><input type="button" value="EDIT" name="edit" style="width:70; height:25; background:#F99"></a>
<a href="menu.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a></center>
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
