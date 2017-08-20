<?php
header('Content-Type:application/json');
@$did=$_REQUEST['did'];
@$count=$_REQUEST['count']  or die ('ddddd');
require('init.php');
$sql="UPDATE jd_cart_detail SET count=$count where did=$did";
$result=mysqli_query($conn,$sql);
if($result===true){
	$output=[
		"code"=>1,"count"=>$count
		
	];
	echo json_encode($output);
}else{
	echo 'err';
}