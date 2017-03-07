<?php
include("config.php");//引入签到时间和签到次数的变量
include("config1.php");//引入姓名的变量
$resule = mysql_query($sql,$q);
?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head><h2>签到人员记录表</h2></head>
<body>
<table width="678" align="center">
<tr>
<?php
while($row=mysql_fetch_array($resule)){
?>
姓名：<?php echo $name ?>  签到次数：<?php echo $number ?> 签到时间：<?php echo $time ?>
<?php
}
?>
</tr>
</body>
</html>