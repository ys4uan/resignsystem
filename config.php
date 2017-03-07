<?php
$q = mysql_connect("localhost","user","password");

if(!$q)
{
	die('Could not connect:'.mysql_error());
}
mysql_query("set names utf8");
mysql_select_db("qiandao",$q);

?>