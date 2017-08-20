<?php 
header('Content-Type:application/xml');
require('init.php');
$sql='SELECT * FROM book';
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,MYSQLI_ASSOC);
$str='<?xml version="1.0"  encoding="utf-8"  ?>';
$str.="<bookList>";
 foreach ($list as $c) {
       $str.="  <book bid='$c[bid]'>"; 
       $str.="<bname>$c[bname]</bname>" ; 
       $str.="	<price>$c[price]</price>";
       $str.="<pic>$c[pic]</pic>";
       $str.="</book>";
}
$str.=' </bookList>';
echo $str;



 ?>