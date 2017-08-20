<?php 
  // @$id=$_REQUEST['eid'] or die('');
  // @$name=$_REQUEST['ename'];
  // @$pic=$_REQUEST['pic'];
  // @$salary=$_REQUEST['salary'];
  header('Content-Type:application/json;charset=utf8');
  @$dept=$_REQUEST['deptID']  or die('dept 未查到');
  require('init.php')
  $sql="SELECT * from emp where deptID='$dept' ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);

if ($row===null) {
	echo "您提交的部门编号不存在";
} else if() {
	
}
 ?>