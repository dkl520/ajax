/**
 * @Author: bjwsl-001
 * @Date:   2016-12-02 10:14:10
 * @Last Modified by:   bjwsl-001
 * @Last Modified time: 2016-12-02 10:19:18
 */
<?php 
@$id=$_REQUEST['mid'] or die('mid required');
 $conn=mysqli_connect('localhost','root','','tarena',3306);
    $sql='set names utf8';
    mysqli_query($conn,$sql);
    $sql="DELETE FROM msg WHERE mid=$id  ";
    $result=mysqli_query($conn,$sql);
    if ($result===false) {
    	echo "删除失败";
    	echo " 你个笨蛋 "
    } else {
    	 echo "删除留言行数".
    	   mysqli_affected_rows($conn);

    }
    
 ?>