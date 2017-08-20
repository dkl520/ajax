
	<?php 
	    $conn=  mysqli_connect('localhost','root','','dangdang');
	    $sql ='set names utf8';
	       mysqli_query($conn,$sql);
	    $sql="INSERT  into dd_category  values(50,'美学','10')";
	     $result= mysqli_query($conn,$sql);
	      if ($result) {
	      	echo "新的书籍分类插入成功";
	      } else {
	      	echo "书籍分类插入失败！请检查SQL：$sql";
	      }
	      
            
	 ?>
