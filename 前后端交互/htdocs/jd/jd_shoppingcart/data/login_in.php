<?php 
  header('Content-Type:application/json;charset=utf8');
  $uname=$_REQUEST['uname'];

  $w=$_REQUEST['upwd'];
  require('init.php');
  $sql="SELECT * from  jd_user where uname ='$uname' and upwd='$w'";
  $result=mysqli_query($conn,$sql);
 $list=mysqli_fetch_assoc($result);
 if ($list===null) {
 	$output=['code'=>2,'msg'=>'用户名或密码错误'];
 } else {
 	  $output=
 	     ['code'=>1,'uname'=>$list['uname'],'uid'=>$list['uid']];
 	     echo json_encode($output);
 
 }
 

 ?>