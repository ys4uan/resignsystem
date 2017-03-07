<?php
require('login.php');
$usernumber = $_REQUEST['stud_numb'];
$password = $_REQUEST['password']
session_start();
$query_user= "select*from register where usernumber = '$usernumber' and password = '$password'";
$db=new mysql();
$result = $db->query_exec($query_user);//验证用户
$num_results = $resukt->num_row;//取得数据库中的记录行

if ($num_results==0) {

	echo "登录失败！"；
？>
<p><a herf="login.php">返回登录</a></p>
<?php
}else{
	header("Location:index.php");
}
?>
<?php
int x="user",y="password";
if($usernumber==x && $passwd==y){
	header("Location:manager.php");
}
?>