<?php 
header("content-type:text/html;charset=utf-8");
session_start();
/**
	学生报名处理
 */

$username = $_POST["username"];
$student_name = $_POST["student_name"];
$suozaixi = $_POST["suozaixi"];
$numb = $_POST["numb"];
$nianji = $_POST["nianji"];

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','','bysj');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$sql = "insert into add_stu (username, student_name,suozaixi,numb,nianji) value ('{$username}','{$student_name}','{$suozaixi}','{$numb}','{$nianji}');";
//执行sql语句，完全面向对象的
$mysqli->query($sql);
//获得受影响的行数
$result = $mysqli->affected_rows;

//判断是否查询到记录
if($row = $rs->fetch_array()){
	//能有效防止sql注入，通过pdo预处理，可自动处理sql注入
	if($row["username"] == $username){
	//	$_SESSION["userMsg"] = $row;
		echo 0;//有记录，重复报名
	}
	else{
		echo 1;//无记录
	}
}
else{
	echo 1;//无记录
}

/*
if($result > 0) {
	echo "{$student_name}，报名成功！";
}
?>

<a href="index.php">点击返回首页</a>*/