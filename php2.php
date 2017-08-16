<?php

/*
作业
设有变量$s1 = 'str1';$s2 = 'str2'
定义一个变量a，如果a等于0，输出10/3的余数;若a大于0，输出变量$s1和$s2的拼接字符串;若少于0，把$s2转为大写
*/
$s1 = "str1";
$s2 = "str2";
$a = -1;
if($a==0){
	$b=10%3;
	echo $b;
}else if($a>0){
	$c=$s1.$s2;
	print_r($c);
}else{
	$s2=strtoupper($s2);
	echo $s2;
}

?>