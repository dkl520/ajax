<?php 
header('Content-Type:application/json');
  require('init.php');
$sql="SELECT * from qh_class";
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,MYSQLI_ASSOC);
$str=json_encode($list);
echo $str;
