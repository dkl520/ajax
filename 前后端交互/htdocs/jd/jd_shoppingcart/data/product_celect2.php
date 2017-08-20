<?php 
header('Content-Type:application/json');
$output=['recordCount'=>0, 'pageSize'=>0,'pageCount'=>0,'pageNum'=>0,'data'=>[]];
@$pageNum=$_REQUEST['pageNum']  or die('ssss');
if ($pageNum==null) {
	  $pageNum=1;
}else{

	$pageNum=intval($pageNum);
}
require('init.php');
$sql="select  count(*) from  jd_product";
$result=mysqli_query($conn,$sql);
// $list=mysqli_fetch_all($result,1);
// $list=$list['count(*)'];
// $str=json_encode($list);
	
 $output['recordCount']= intval(mysqli_fetch_row($result)[0]);
$str=json_encode($output['recordCount']);
	// echo $str;
$output['pageSize']=8;
$output['pageCount']=ceil($output['recordCount']/$output['pageSize']);
$output['pageNum']=$pageNum;
$start=($output['pageNum']-1)*$output['pageSize'];
$count=$output['pageSize'];
$sql="select * from  jd_product limit  $start , $count";
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,1);
$output['data']=$list;
$str=json_encode($output);
	echo $str;
 ?>