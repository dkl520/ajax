<?php 
    header('Content-Type:application/application/x-www-form-urlencoded');
    @$p=$_REQUEST['phone'] or die ('phone required');
    @$q=$_REQUEST['pwd'] or die('pwd required');
    require('init.php');
    $sql="SELECT * FROM email where phone='$p'   AND  pwd='$q'  ";
    $result=mysqli_query($conn,$sql);
   	// var_dump($result);
    $row=mysqli_fetch_row($result);
    // var_dump($row);
     if ($row===null) {
       	  echo "err";

       } else {
       echo "succ";
       }
    

 ?>