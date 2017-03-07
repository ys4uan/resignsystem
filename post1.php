<?php
header("content-type:text/html;charset=utf-8");
include("config1.php");

$name=$_post['name'];
$number=$_post['stud_numb'];
$password=$_post['password'];


$sql = "insert into content(name,stud_numb,password) values('$name','$stud_numb','$password')";
