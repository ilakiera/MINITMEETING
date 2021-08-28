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
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>

<?php
if(isset($_SESSION["id"]))
{
	if(isset($_POST["s"]))
	{
		$keyWord  = $_POST["search"];
		$sql = "SELECT * FROM orderitem WHERE userId LIKE '".$keyWord."%'";
	}
	else
	{
	$sql = "SELECT * FROM orderitem";
	}
	$query = mysql_query($sql);
	$numr = mysql_num_rows($query);
?>
<table style="border-bottom:dotted" >
<tr><td>
<a href="adminHome.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<center>
	
<form action="viewCusOrder.php" method="post">
<div align="right">
<table style="background:#FFF; border-radius:15px; border-style:solid">
<tr><td><input type="text" name="search" >
<sub><button type="submit"  name="s" style="width:35px; height:30px;"><img src="resource/Search-48.png" width="25" height="25">  </button></sub>
</td></tr></table><a href="viewCusOrder.php"><input type="button" value="REFRESH" style="background:#F99"></a></div></div></form>

<table style="border-radius:20px; background:#FF9999; padding:10px; border-style:dashed"   >
<tr><td colspan="2"><font size="10" face="Ar Darling">LIST CUSTOMER ORDER</font> <img src="resource/InLove-48.png" width="48" height="48"></td></tr>
<tr bgcolor="#CCCCCC">
<td>No</td>
<td colspan="2">Name</td>
</tr>
<?php
if($numr > 0)
{
	$x=1;
	while($data = mysql_fetch_array($query))
	{
		$sql1 = "SELECT * FROM customer WHERE userId = '".$data["userId"]."'";
		$query1 = mysql_query($sql1);
		$data1 = mysql_fetch_array($query1);
?>
<tr bgcolor="#FCC">
<td><?php echo $x; ?></td>
<td><?php echo $data1["name"];?></td>
<td><a href="viewDetailOrder.php?orderId=<?php echo $data["orderId"]?>"><input type="button" value="VIEW" style="background:#CCC"></a></td>
</tr>
<?php
	$x++;
	}
}
else
{
	?>
<tr><td colspan="2" align="center" bgcolor="#fCC">No Customer Make An Order</td></tr>
<?php
}
?>
</table>
<a href="adminHome.php"><input type="button" value="BACK" style="background:#F99"></a></center>

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
