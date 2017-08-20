<?php
header('Content-Type:application/json');
@$did=$_REQUEST['did'];
require('init.php');
$sql="DELETE   FROM  jd_cart_detail  where did=$did";
$result=mysqli_query($conn,$sql);
if($result===true){
	$output=[
		"code"=>1
		
	];
	echo json_encode($output);
}else{
	echo 'err';
}