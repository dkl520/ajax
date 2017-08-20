<?php 
header('Content-Type:application/x-www-form-urlencoded');
@$s=$_REQUEST['stuName'] or die('stuName required');
@$c=$_REQUEST['chinese'] or die('chinese required');
@$m=$_REQUEST['math']  or die('math required');
require('init.php');
 $sql="INSERT INTO  score values (null,'$s','$c','$m')";
  var_dump('$sql');
 $result=mysqli_query($conn,$sql);

 if ($result===false) {
 	 echo "err";
 } else {
 	echo "succ";
 }
 
 ?>	