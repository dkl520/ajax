<?php 
header('Content-Type:application/json');
require('init.php');
$sql="select * from  jd_product";
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,1);

if($list===null){
	echo 'err';
}else{
	$str=json_encode($list);
	echo $str;
}



 ?>