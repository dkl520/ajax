<?php 
header('Content-Type:application/json');
require('init.php');
@$typeId=$_REQUEST['typeId'];
$sql="SELECT * from qh_producer where typeId='$typeId' ";
 $result=mysqli_query($conn,$sql);
 $list=mysqli_fetch_all($result,1);
 
 echo json_encode($list);
 ?>