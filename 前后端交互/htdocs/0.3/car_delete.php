<?php 	
$cid=$_REQUEST['cid'];


$conn=mysqli_connect('localhost','root','','huimaiche');
$sql='set names utf8';
mysqli_query($conn, $sql);
$sql="DELETE   from   car   where  cid='$cid' ";
 $result=mysqli_query($conn,$sql);

if ($result) {
  	echo "good job";
  } else {		
  	echo "you are failed~~~~";
  };


?>