<?php
include("config.php");
include("config1.php");
include("post.php");
include("post1.php");
$sql = "select*from attendence";
$resule = mysql_query($sql,$q);
?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<body>
<table coler=#FFE1FF  align="center">
<tr>
	<td width="586"><a href="index.php"><?php echo $name ?></a>|<a href="login.php">退出</a></td>
</tr>

<tr>
 <form name="form1" method="post" action="post.php">
  <button>
	<div style="width: 50px;height:50px;background-color: #FFF68F;border-radius:25px;">
	<span style="height: 50px;line-height: 50px;display: block;color: #912CEE;text-align: center">登录</span>
	</div>

  </button>
</form>
</tr>

<tr>

<hr>
<?php
$time = data("Y年m月d日 G:i:s");
int m=1;
while ($number==m) {
	 echo $name "同学于" $time "签到"；
	 
	 ++m;
}
?>
<hr>

</tr>

</table>

</body>
</html>>