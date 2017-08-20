<?php 
   $conn=mysqli_connect('localhost','root','','jd',3306); 
   $sql='SET NAMES UTF8';
     mysqli_query($conn,$sql);
     $sql="SELECT * from udisk ";
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
  		<th>图片</th>
  		<th>名字</th>
  		<th>价格</th>
  		<th>出厂日期</th>

  	</tr>
   
  </thead>
  <tbody>
  	<?php 
  	  foreach ($list as $c) {
  	  	# code...
        echo     "<tr>";
        echo "<td>$c[uid]</td>";
        echo "<td>$c[pic]</td>";
        echo "<td>$c[uname]</td>";
        echo "<td>$c[price]</td>";
        echo "<td>$c[addedTime]</td>";
        echo "<td>";
        echo "<a href='$c[uid]'> 删除</a>";
        echo "<a href='$c[uid]'>修改</a>";
        echo "</td>";
        echo   "</tr>"  ;
  	  }
     ?>

  </tbody>
	
</table>
    <script src='jquery-1.11.3.js'></script>
	<script>
		$('table').on('click','a:contains("删除")',function(e){
			e.preventDefault();
			var udiskId=$(this).attr('href');
			console.log(udiskId);
			location.href='udisk_deletye.php? uid='+udiskId;

		});
	</script>	


