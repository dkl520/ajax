<?php 
 @$i=$_REQUEST['phone'] or die('phone required');
 @$c=$_REQUEST['pwd'] or die('pwd required');
 $conn=mysqli_connect('localhost ','root','','sohu',3306);
 $sql='set names utf8';
   mysqli_query($conn,$sql);
   $sql="SELECT * from email  where phone='$i'";
  $result= mysqli_query($conn,$sql);
  if ($result===false) {
  	   echo "语法错误";

  } else {
  	   $row=mysqli_fetch_row($result);
  	     if ($row===null) {
  	     	
  	     	$now=time()*1000;
  	   $sql="INSERT INTO  email values (null,'$i','$c','$now')";
  	    $result=  mysqli_query($conn,$sql);
  	    if ($result===false) {
  	    	echo "注册失败";
  	    	echo  "请检查语法";
  	    } else {
  	    	
  	    }
  	    
  	     	
  	     } else {
  	     	
  	   echo "手机号注册成功";
  	     }
  	     
  }
  

 ?>