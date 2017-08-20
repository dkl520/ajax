<?php 
    @$id=$_REQUEST['mid'] or die('mid required');
    $conn=mysqli_connect('localhost','root','','tarena',3306);
    $sql='set names utf8';
    mysqli_query($conn,$sql);
    $sql="DELETE FROM msg WHERE mid=$id  ";
    $result=mysqli_query($conn,$sql);
    if ($result===false) {
    	echo "<h1>留言内容删除失败</h1>";
    	echo "你个笨蛋";
    } else {	
    	echo "good job";
    	echo "删除留言行数：".mysqli_affected_rows($conn);
    }
    mysqli_close($conn);
    echo "<hr>";
    echo "<a href='select_php.php'>返回留言内容列表</a>";
 ?>