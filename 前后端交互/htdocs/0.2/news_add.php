<?php 
  
  $i=$_REQUEST['title'];
  $c=$_REQUEST['content'];
  $t=$_REQUEST['count'];
  $p=$_REQUEST['pubTime'];
  $conn=mysqli_connect('localhost','root','','ifeng' );
   $sql ='set names utf8';
  mysqli_query($conn,$sql);
  $sql="INSERT into  news values (null,'$1','$c','$t','$p')";
  $result=mysqli_query($conn,$sql);
  if ($result) {
  	echo 'good job';
  } else {		
  	echo "you are failed~~~~";
  };
  



 ?>