<?php
header("content-type:text/html;charset=utf-8");
session_start();

/**
 * 为登陆的ajax做处理
 */

//获取用户名、密码
$username = $_POST["username"];
$password = $_POST["password"];

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','','bysj');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$sql = "select * from student where username= '$username' and password = '$password'";
//执行sql语句，完全面向对象的
$rs = $mysqli->query($sql);

//判断是否查询到记录
if($row = $rs->fetch_array()){
	//能有效防止sql注入，通过pdo预处理，可自动处理sql注入
	if($row["username"] == $username){
		$_SESSION["userMsg"] = $row;
		echo 1;//登陆成功
	}
	else{
		echo 0;//用户名或密码错误
	}
}
else{
	echo 0;//用户名或密码错误
}