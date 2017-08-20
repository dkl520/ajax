
<?php 
header('Content-Type:application/json');
   $cid=$_REQUEST['sid'] or die('{"msg": "required"}');
  require('init.php');
$sql="SELECT * from qh_student where classId='$cid' ";
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,MYSQLI_ASSOC);
$str=json_encode($list);
echo $str;

