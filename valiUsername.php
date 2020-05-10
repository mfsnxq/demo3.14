<?php 
header("content-type:text/html;charset=utf-8");
/**
   为用户注册时，验证用户名是否可用
 */

$username = $_POST["username"];

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','','bysj');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$sql = "select count(*) from add where username= '{$username}'";
//执行sql语句，完全面向对象的
$result = $mysqli->query($sql);

$row = $result->fetch_array();

echo $row[0];