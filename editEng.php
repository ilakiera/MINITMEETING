<html>
<head>
<?php 
$connection = mysql_connect("localhost","root","");
$select = mysql_select_db("zh");
?>
</head>
<body>
<?php
$codeItem = $_POST["code"];
$nameItem = $_POST["name"];
$price = $_POST["price"];

$sql = "UPDATE item SET nameItem = '".$nameItem."' , price = '".$price."' WHERE codeItem = '".$codeItem."'";
$query = mysql_query($sql);

if($query)
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewItemAdmin.php\"/>";
else
	die(mysql_error());
?>
</body>
</html>