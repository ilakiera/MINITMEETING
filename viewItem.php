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
	if(isset($_POST["s"]))
	{
		$keyWord  = $_POST["search"];
		$sql = "SELECT * FROM item WHERE codeItem LIKE '".$keyWord."%' OR  nameItem LIKE '%".$keyWord."%'";
	}
	else
	{
		$sql = "SELECT * FROM item";
	}
		$query = mysql_query($sql);
		$numr = mysql_num_rows($query);
?>
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br><br></center>


<table style="border-bottom:dotted" >
<tr><td>
<a href="menu.php"><img src="resource/Home-48.png" width="38" height="38"></a>
<a href="logoutEng.php"><img src="resource/Logout.png" width="38" height="35"></a></td></tr></table>
<center>

<form action="viewItem.php" method="post">
<div align="right">
<table style="background:#FFF; border-radius:15px; border-style:solid">
<tr><td><input type="text" name="search" >
<sub><button type="submit"  name="s" style="width:35px; height:30px;"><img src="resource/Search-48.png" width="25" height="25">  </button></sub>
</td></tr></table><a href="viewItem.php"><input type="button" value="REFRESH" style="background:#F99"></a></div></div></form>


<table  style="border-radius:10px; border-style:dotted; background:#FF9999;">
<tr><td colspan="4"><font size="10" face="Ar Darling">ITEM AVAILABLE</font> <img src="resource/InLove-48.png" width="48" height="48"></td></tr>
<tr bgcolor="#CCCCCC">
<td><b>NO.</b></td>
<td><b>CODE ITEM</b></td>
<td><b>NAME ITEM</b></td>
<td><b>PRICE</b></td>
<td><b>IMAGE</b></td>
<td><b>ORDER</b></td>
</tr>
<?php
if($numr > 0)
{
	$x=1;
 while($row = mysql_fetch_array($query))
 { 
?>
<tr bgcolor="#FCC">
<td><?php echo $x;?></td>
<td><?php echo $row["codeItem"];?></td>
<td><?php echo $row["nameItem"];?></td>
<td>RM <?php echo $row["price"];?></td>
<td><img src="resource/<?php echo $row["image"];?>" width="100" height="70"></td>
<td><a href="order.php?codeItem=<?php echo $row["codeItem"];?>"><input type="button" value="ORDER" style="background:#f99;"></a></td>
</tr>
<?php 
$x++;
} 
}
else
{?>
<tr><td bgcolor="#FCC" align="center" colspan="6">No Item Available</td></tr>
<?php
}
?>
</table>
</tr>
</table>
<a href="menu.php"><input type="button" value="BACK" name="edit" style="width:70; height:25; background:#F99"></a>
</center>
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
