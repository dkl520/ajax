<?php 
  $id=$_REQUEST['uid'] or die('uid required');
  $conn=mysqli_connect('localhost','root','','jd',3306);
  $sql='SET NAMES UTF8';
  MYSQLI_QUERY($conn,$sql);
  $sql="DELETE from  udisk where uid=$id ";
    $result=MYSQLI_QUERY($conn,$sql);
  if ($result===false) {
    	echo "<h1>留言内容删除失败</h1>";
    	echo "你个笨蛋";
    } else {	
    	echo "good job";
    	echo "删除留言行数：".mysqli_affected_rows($conn);
    }

    
 ?>	