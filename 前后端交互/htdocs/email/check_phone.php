<?php 
  @$p=$_REQUEST['phone'] or die ('phone required');
      require('init.php');
   $sql="SELECT * FROM email where phone='$p' ";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_row($result);
       if ($row===null) {
       	  echo "bucunzai";
       } else {
       echo "cunzai";
       }
       
       
 ?>