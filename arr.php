<?php
header("content-type:text/html;charset=utf-8");
$arr=[ "G10"=>"htc","N85"=>"诺基亚","盖世3"=>"三星","iphone5"=>"苹果","anycall"=>"三星"];
  // print_r($phone);
$arrphone = array_keys($arr,"三星");
print_r($arrphone);
    
/*     echo "<table><tr><td>机型</td><td>牌子</td></tr>";
     foreach($arr as $k=>$v){
     	echo "<tr><td>".$k."</td><td>".$v."</td></tr>";
/*    	if($v==三星){

 
     		echo $k."=>".$v ;
     	}*/
    /* }
     echo "</table>";*/

/*
思考：请用数组保存如下数据，并最终按以下形式输出到页面中
家电
-洗衣机
--全自动
--半自动
-电视
--3D
--高清
服装
-女装
--裙
--上衣
-男装
--裤
---短裤
---长裤
----九分裤
----七分裤
*/

$arr1 = [
         "家电"=>[
           "洗衣机"=>["全自动","半自动"],
           "电视" => ["3D","高清"]

           ],
         "服装"=>[
             "女装"=>["裙子","上衣"],
             "男装"=>["裤"=>["短裤","长裤"=>["九分裤","七分裤"]]]]
        ];
        foreach($arr1 as $k=>$v){
        	if(is_array($v)){
        		echo $k."<br/>";
        		foreach($v as $k1=>$v1){
        			if(is_array($v1)){
        				echo "-".$k1."<br/>";
        				foreach($v1 as $k2=>$v2){
        					if(is_array($v2)){
        						echo "--".$k2."<br/>";
        						foreach($v2 as $k3=>$v3){
        							if(is_array($v3)){
        								echo "---".$k3."<br/>";
        								foreach($v3 as $k4=>$v4){
        									if(is_array($v4)){
        										echo "----".$k4."<br/>";
        									}else{
        										echo "----".$v4."<br/>";
        									}
        								}
        							}else {
        								echo "---".$v3."<br/>";
        							} 
        						}
        					}else{
        						echo "--".$v2."<br/>";
        					}
        				}
        			}else{
        				echo "-".$v1."<br/>";
        			}
        		}
        	}else{
        		echo $v."<br/>";
        	}
        }


?>