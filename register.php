<?php
include("config1.php");
$sql = "select*from registry";
$resule = mysql_query($sql,$q);
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<table width="400px" height="208" border="0" cellpadding="0" cellspacing="0">
<form id="login" name="login" method="post" action="post1.php">	
<h3>请使用学号注册！</h3>
<tr>
<td height="25" align="right">姓名：</td>
<td><input type="text" name="name" id="name" size="15"></td>
<tr>
<td height="25" align="right">学号：</td>
<td><input name="stud_numb" type="text" size="15"/></td>
</tr>
<tr>
<td height="25" align="right">密码：</td>
<td><input type="text" name="password" id="password" size="15"/></td>
</tr>
<p>
<input type="submit" name="button" id="button" value="提交">
</p>
</form>
</table>
</body>
</html>
