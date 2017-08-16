<?php
header("content-type:text/html;charset=utf-8");
//判断post传参的数据有没有
  if(!empty($_POST)){
     $author = $_POST["author"];
     $title = $_POST["title"];
     $content = $_POST["content"];
     $time = date("Y/m/d H:i:s",time());

//向数据库中追加的post传参的内容
     $conn = mysql_connect("localhost","root","root") or die("您数据库连接失败");
     $db = mysql_select_db("test") or die("您数据库项目链接失败");
     mysql_query("set names utf8");
     $sql = "INSERT INTO `news` (`author`,`title`,`content`,`time`) VALUES ('$author','$title','$content','$time')";
     $resource = mysql_query($sql);
     $result = mysql_affected_rows();
     //print_r($result);die;
     if($result>0){
     	header("location:o.php");
     }else{
     	echo "<script>alert('新增失败')</script>";
     }

  }

?>