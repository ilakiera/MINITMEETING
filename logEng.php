<html>
<head>
<?php 
$connection = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head><link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<?php
session_start();
if(isset($_POST["login"]))
{
	$id = $_POST["id"];	
	$password = $_POST["password"];
	$sql0 = "SELECT * FROM admin";
	$query0 = mysql_query($sql0);
	$data = mysql_fetch_array($query0);
	if($id == $data["adId"] && $password == $data["adPass"])
	//if($id == "admin" && $password=="admin")
	 {
		 $sql00 = "SELECT * FROM admin WHERE adId = '".$id."' AND adPass = '".$password."'";
		 $query00 = mysql_query($sql00);
		 $row00 = mysql_num_rows($query00);
		if($row00 == 0)
			{ 
				echo "<script language='javascript'>alert('Invalid user id or password.Try again')</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";
			}
		else
		{
		
		$r0 = mysql_fetch_assoc($query00);
		$_SESSION['id'] = $r0["adId"];
		header("Location: adminHome.php"); 
		}
	 }
	 
	 else
	 {
		 $sql = "SELECT * FROM customer WHERE userId = '".$id."' AND password = '".$password."'";
		 $query = mysql_query($sql);
		 $row = mysql_num_rows($query);
		if($row == 0)
			{
				echo "<script language='javascript'>alert('Invalid user id or password.Try again')</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";
			}
		else
		{
		$r = mysql_fetch_assoc($query);
		$_SESSION['id'] = $r["userId"];
		header("Location: menu.php"); 
		}
	 }
	
}
?>
</body>
</html>