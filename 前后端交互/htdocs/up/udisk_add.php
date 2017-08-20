		<?php 
		  @$p=$_REQUEST['pic']  or die('pic required');
		  @$u=$_REQUEST['uname'] or die('uname required');
		  @$q=$_REQUEST['price'] or die('price required');
		  @$t=time()*1000;
		  $CONN=mysqli_connect('localhost','root','','jd',3306);
		  $sql='SET names utf8';
		    mysqli_query($CONN,$sql);
		    $sql="INSERT INTO  udisk  values (null,'$p','$u','$q','$t')";
		    $result=mysqli_query($CONN,$sql);
		    if ($result===false) {
		    	echo "<h1>添加失败</h1>";
		    } else {
		    	echo"添加成功";
		    }
		    mysqli_close($CONN);
		 ?>
