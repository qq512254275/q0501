<?php
header("content-type:text/html;charset=utf-8");
//连接数据库
$conn = mysql_connect("localhost","root","root") or die("您数据库连接失败");
//连接数据库列表
$db = mysql_select_db("test") or die("您数据库项目链接失败");
//设置链接编码
mysql_query("set names utf8");
//事件回滚开始
mysql_query("BEGIN");

//改变张三的money
$sql1 = "UPDATE `bank` SET `money`=`money`-500 WHERE `card`=6217002800005123586";
$resource1 = mysql_query($sql1);
$result1 = mysql_affected_rows();

//改变李四的money
$sql2 = "UPDATE `bank` SET `money`=`money`+500 WHERE `card`=6228480059421234567";
$resource2 = mysql_query($sql2);
$result2 = mysql_affected_rows();
//print_r($result1);die;

//判断是否更改正确
if($result1>0 && $result2>0){
	mysql_query("COMMIT");
	echo "提交成功";
}else{
    mysql_query("ROLLBACK");
    echo "提交失败";
}

mysql_query("END");

?>