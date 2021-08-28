<html>
<head>
<?php
$connect = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<body background="resource/bgg6.jpg">
<script language="javascript">
	var ans = confirm("Are you sure want to log out? ");
	if(ans == true)
	{
		location = "logoutEng1.php";
	}
	else
	{
		window.history.back();	
	}
	</script>

</body>
</html>