<?php
session_start()
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
<center> <img src="resource/header.png">
<br><br></center>



<br>
<table style="border-bottom:dotted" >
<tr><td>
<a href="menu.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<form action="editProEng.php" method="post">
<center><table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr><td colspan="2"><font size="10" face="Ar Darling">EDIT YOUR PROFILE</font> <img src="resource/InLove-48.png" width="48" height="48"></tr>
<tr>
<td>
NAME </td><td>:<input type="text" name="name" value="<?php echo $data["name"];?>" style="width:400"></td></tr>
<tr>
<td>
ADDRESS </td><td>:<input type="text" name="add" value="<?php echo $data["address"];?>" style="width:400"></td></tr>
<tr>
<td>
NO PHONE </td><td>:<input type="text" name="nop" value="<?php echo $data["noPhone"];?>"></td></tr>
<tr>
<td>
EMAIL </td><td>:<input type="text" name="email" value="<?php echo $data["email"];?>" style="width:200"></td></tr>
<tr>
<td>
USER ID </td><td>:<input type="text" name="id" value="<?php echo $_SESSION["id"];?>" readonly></td></tr>
<tr>
<td>
PASSWORD </td><td>:<input type="text" name="pass" value="<?php echo $data["password"];?>" style="width:100"></td></tr>
</table></center>
<center><input type="submit" value="SAVE" name="edit" style="width:70; height:25; background:#F99">
<a href="viewProfile.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a></center></form>
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
