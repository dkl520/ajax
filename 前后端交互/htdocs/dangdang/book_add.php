<?php 
header('Content-Type','application/x-www-form-urlencoded');
@$b=$_REQUEST['bname'] or die('bname requied');
 @$p=$_REQUEST['price'] or die('price requied');
@$q=$_REQUEST['pic'] or die('pic requied');

require('init.php');
  $sql="INSERT INTO  book  values(null,'$b','$p','$q')";
  $result=mysqli_query($conn,$sql);
  if ($result===false) {
  	echo "sql语法错误";
  } else {
  	 
  	 if (!$result) {
  	 	echo "err";
  	 } else {
  	 	echo "succ";
  	 }
  	 

  
 ?>