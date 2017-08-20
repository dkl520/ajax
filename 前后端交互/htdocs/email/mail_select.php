<?php 
  $conn=mysqli_connect('localhost','root','','jd',3306); 
   $sql='SET NAMES UTF8';
     mysqli_query($conn,$sql);
       $sql="SELECT * from  email ";
     $result=mysqli_query($conn,$sql);
      if ($result===false) {
     	  echo "查询失败";
     	  echo "你个笨蛋";
     	
     } else {
     	
     	  $list=mysqli_fetch_all($result,MYSQLI_ASSOC);
     }

 ?>
 <table width="100%" border="1">
 	  <thead>
 	  	<tr>
 	  		<th>编号</th>
 	  		<th>手机号</th>
 	  		<th>密码</th>
 	  	</tr>
 	  </thead>
 	  <tbody>
 	  	   <?php 
 	  	       foreach ($list as $c) {
 	  	       	    echo "<tr>";
 	  	       	    echo "<td>$c[mid]</td>";
 	  	       	    echo "<td>$c[phone]</td>";
 	  	       	    echo "<td>$c[pwd]</td>";
 	  	       	    echo "<td>$c[lastLoginTime]</td>";
 	  	       	    echo "</tr>";
 	  	       }
 	  	    ?> 
 	  </tbody>
 </table>