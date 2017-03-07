<?php
header("content-type:text/html;charset=utf-8");
include("config.php");


$number=$_post['sig_numb'];
$time=$_post['sig_time'];
$number = $number+1;

$sql = "insert into content(sig_time,sig_numb) values($sig_time','$sig_numb')";
?>
