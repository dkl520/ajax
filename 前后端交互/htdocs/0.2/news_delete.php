<?php 
    $nid=$_REQUEST['nid'];
    $conn=mysqli_connect('localhost','root','','ifeng' );
    $sql='set names utf8';
mysqli_query($conn,$sql);
    $sql="delete FROM   news  where nid='$nid' ";
    $result=mysqli_query($conn,$sql);
  if ($result) {
  	echo "good job";
  } else {		
  	echo "you are failed~~~~";
  };
 ?>