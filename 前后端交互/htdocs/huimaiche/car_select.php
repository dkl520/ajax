<?php
header('Content-Type:application/json');
$t=$_REQUEST['type'];
require('init.php');
$sql="select * from car where type='$t'";
$result = mysqli_query($conn,$sql);
$list = mysqli_fetch_all($result, MYSQLI_ASSOC);

if($list===null){
	echo 'err';
}else{
	$str=json_encode($list);
	echo $str;
}