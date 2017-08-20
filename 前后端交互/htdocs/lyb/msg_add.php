	<?php 
	   @$u=$_REQUEST['uname'] or die('uname required');
	   @$p=$_REQUEST['phone'] or die('phone required');
	   @$q=$_REQUEST['pubTime'] or die('pubTime required ');
	   @$c=$_REQUEST['content'] or die('content  required');
	   $conn=mysqli_connect('localhost','root','','tarena',3306);
	   $sql='set names utf8';
	   mysqli_query($conn,$sql);
	   $sql="INSERT INTO  msg  values
	     (null, '$u','$p','$q','$c')";
	     $result= mysqli_query($conn,$sql);
	     if ($result) {
	        echo "good job";
	     } else {
	     	echo "you are failed";
	     }
	     
	     mysqli_close($conn);
	   

	 ?>		

