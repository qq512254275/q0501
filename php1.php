<?php
/*header("content-type:text/html;charset=utf-8")*/
$sum=0;
for($i=1;$i<=100;$i++){
	if($i%5!==0){
	$sum+=$i;
	}
	
}
  echo $sum;


/*$sum=0;
for($i=1;$i<=100;$i++) {
  $sum+=$i;
}
echo $sum;*/
?>