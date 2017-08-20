<?php 


   @$dept=$_REQUEST['deptID'];
   require('init.php');
   $sql="DELETE from emp where deptID='$dept'  ";
      $result=mysqli_query($conn,$sql);
      if ($result===false) {
    	echo "删除失败";
    	echo " 你个笨蛋 "
    } else {
    	 echo "删除留言行数".
    	   mysqli_affected_rows($conn);

    }
    
 ?>