<?php 
header('Content-Type:text/plain');

@$uname=$_REQUEST['uname'];
@$upwd=$_REQUEST['upwd'];
require('init.php');

$sql="SELECT * FROM qh_user  where uname='$uname' ";



 $result=mysqli_query($conn,$sql);
 $list=mysqli_fetch_row($result);
 if ($list===null) {
       $sql=" INSERT INTO  qh_user VALUES(null,'$uname','$upwd') ";
       mysqli_query($conn,$sql);
 	   echo "succ";
 } else if ($list) {
 	   echo "用户名已经存在";
 	
 }else{
 	echo "语法错误";
 }
 
 
 ?>