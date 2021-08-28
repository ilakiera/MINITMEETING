
<html>
<head>
<title>REGISTER</title>
</head>
<link href='resource/Crown-48.png' rel='shortcut icon' type='image/x-icon'/> 
<link href='resource/Crown-48.png' rel='icon' type='image/x-icon'/>

<body background="resource/bgg6.jpg">
<font face="Ar Cena" color="#000000">
<center><img src="resource/header.png">
<br>
</center>
<script language="javascript">
function msg()
{
	var n = document.f.txtName.value
	var e = document.f.txtEmail.value
	var a = document.f.txtAddress.value
	var p = document.f.txtNo.value
	var i = document.f.txtId.value
	var ps = document.f.password.value
	
	if (n =="" )
	{
		alert("fill in the blank")
		return false
	}
	else if (e =="" )
	{
		alert("fill in the blank")
		return false
	}
	else if (a =="" )
	{
		alert("fill in the blank")
		return false
	}
	else if (p =="" )
	{
		alert("fill in the blank")
		return false
	}
	else if (i =="" )
	{
		alert("fill in the blank")
		return false
	}
	else if (ps =="" )
	{
		alert("fill in the blank")
		return false
	}
	else
	{
		return true	
	}
		
}
</script>

<center><table border="0"   >
<tr>
<td align="center"><img src="resource/floral-frame1.png" width="380" height="100"></td>
</tr>
<tr>
<td width="330" align="center">
<form name="f" action="regEng.php" method="post" onSubmit="return msg()">
<table bgcolor="#FF9999" style="border-radius:20px; border-style:dashed" width="350">
<tr><td colspan="2" align="center"><font size="10" face="Ar Darling">REGISTER</font>
</td></tr>
<tr><td>NAME </td><td>: <input type="text" name="txtName" ></td></tr>
<tr><td>EMAIL</td><td> : <input type="text" name="txtEmail" ></td></tr>
<tr> <td>ADDRESS </td><td>: <input type="text" name="txtAddress"></td></tr>
<tr><td>NO PHONE </td><td>: <input type="text" name="txtNo"></td></tr>
<tr><td>USER ID </td><td>: <input type="text" name="txtId"></td></tr>
<tr><td>PASSWORD</td><td> : <input type="password" name="password"></td></tr>
<tr><td colspan="2" align="center">
<br><input type="submit" value="Register" name="submit">
<input type="reset" value="Clear">
<a href="home.php"><input type="button" value="Back" ></a></td></tr></table>
</form></td></tr>
</table></center>
</font>

</body>
</html>
