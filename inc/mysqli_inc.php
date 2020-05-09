<?php
//数据库连接
function connect($host=DB_HOST, $username=DB_USER, $passwd=DB_PASSWORD){
   $link=@mysqli_connect($host=DB_HOST, $username=DB_USER, $passwd=DB_PASSWORD);
  var_dump( mysqli_connect_errno());
}


//执行一条sql语句，放回结果集对象或者放回布尔值

//执行一条sql语句，只返回布尔值

//一次性执行多条sql语句

//获取记录数

//数据入库之前进行转义，确保数据能够顺利的入库

//关闭数据的连接


?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

