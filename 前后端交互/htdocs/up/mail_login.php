/**
 * @Author: bjwsl-001
 * @Date:   2016-12-02 10:42:46
 * @Last Modified by:   bjwsl-001
 * @Last Modified time: 2016-12-02 11:59:25
 */
<?php 
@$i=$_REQUEST['phone'] or die('phone required');
@$c=$_REQUEST['pwd'] or die('pwd required');
$conn=mysqli_connect('localhost','root','','jd',3306); 
   $sql='SET NAMES UTF8';
     mysqli_query($conn,$sql);
       $sql="SELECT * from  email  WHERE phone='$phone' AND pwd='$pwd' ";
         $result=mysqli_query($conn,$sql);
      if ($result===false) {
     	  echo "查询失败";
     	  echo '语法错误';
     	
     } else {
     	  $row=mysqli_fetch_assoc($result);
     	
     	  if ($row===null) { 
     	  	  echo "登录失败";
     	  	  echo "用户名 或密码错误";
     	  } else {
     	  	 echo "登录成功";
     	  	  $now=time()*1000;
     	  	  $mid=$row['mid'];
     	  	  $sql="UPDATE email set lastLoginTime='$now'  where mid= '$mid' ";
     	  	  $result=mysqli_query($conn,$sql);
     	  }
     	  
     }

 ?>