<?php 	
$i=$_REQUEST['cname'];
$c=$_REQUEST['pic'];
$t=$_REQUEST['price'];
$p=$_REQUEST['isOsale'];
$q=$_REQUEST['birthday'];

$conn=mysqli_connect('localhost','root','','huimaiche');
$sql='set names utf8';
mysqli_query($conn, $sql);
$sql="INSERT INTO car   values (null ,'$i','$c','$t','$p','$q')";
$result =mysqli_query($conn,$sql);
if ($result) {
		echo('GOOD JOB');
} else {
    echo('YOU ARE FAILED');
} 
 ?>
