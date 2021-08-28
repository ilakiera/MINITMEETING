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
	if(isset($_POST["s"]))
	{
		$keyWord  = $_POST["search"];
		$sql = "SELECT * FROM customer WHERE name LIKE '".$keyWord."%'";
	}
	else
	{
		$sql = "SELECT * FROM customer";
	}
		$query = mysql_query($sql);
		$numr = mysql_num_rows($query);
?>
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>


<table style="border-bottom:dotted" >
<tr><td>
<a href="adminHome.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<center>

<form action="viewCusProfil.php" method="post">
<div align="right">
<table style="background:#FFF; border-radius:15px; border-style:solid">
<tr><td><input type="text" name="search" >
<sub><button type="submit"  name="s" style="width:35px; height:30px;"><img src="resource/Search-48.png" width="25" height="25">  </button></sub>
</td></tr></table><a href="viewCusProfil.php"><input type="button" value="REFRESH" style="background:#F99"></a></div></div></form>

<table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr>
<td colspan="3"><font size="10" face="Ar Darling">CUSTOMER REGISTERED</font></td>
</tr>
<tr bgcolor="#CCCCCC">
<td>NO.</td>
<td>NAME</td>
<td bgcolor="#f99"></td>
</tr>
<?php
if($numr > 0)
{
$x=1;
while($row= mysql_fetch_array($query))
{
?>
<tr bgcolor="#FCC">
<td><?php echo $x;?></td>
<td><?php echo $row["name"];?></td>
<td bgcolor="#f99"><a href="viewDetail.php?id=<?php echo $row["userId"];?>"><input type="button" style="background:#F99" value="VIEW"></a></td>
</tr>
<?php
$x++;
}
}
else
{
?>
<tr><td colspan="2" bgcolor="#FCC" align="center">NO CUSTOMER REGISTER</td></tr>
<?php
}
?>
</table>
<a href="adminHome.php"><input type="button" value="BACK" style="background:#F99; width:100; height:30"></a></center>
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
