<?php 
    $conn= mysqli_connect('localhost','root','','tarena',3306);
   $sql='set names utf8';
   mysqli_query($conn,$sql);
   $sql='SELECT * from msg';
   $result= mysqli_query($conn,$sql);
   if ($result===false) {
   	echo "<h1>查询失败 </h1>";
   	echo " you are loser";
    die();
   } else {
   	 $list=mysqli_fetch_all($result , MYSQLI_ASSOC);

   }
 ?>
 
 
  <table width="100%" border="1">
  	<thead>
  		<tr>
  			<th>编号</th>
  			<th>姓名</th>
  			<th>手机号</th>
  			<th>时间</th>
  			<th>内容</th>
  		</tr>

  	</thead>
  	<tbody>
  		<?php 
  		  foreach ($list as $c) {
  		   echo "<tr>";
  		   echo "<td>$c[mid]</td>";
  		   echo "<td>$c[uname]</td>";
  		   echo "<td>$c[phone]</td>";
  		   echo "<td>$c[pubTime]</td>";
  		   echo "<td>$c[content]</td>";
  		   echo "  <td>";
	       echo "	<a href='$c[mid]'>删除</a>";
	       echo "	<a href='$c[mid]'>修改</a>";
	       echo "  </td>";
	       echo "</tr>";
  		  }
  		 ?>
  	</tbody>

  </table>
<script src="jquery-1.11.3.js"></script>
<script>

	Date.prototype.toCNString=function () {
		  return this.getFullYear()+'-'+(this.getMonth()+1)+'-'+this.getDate();
	}
	$('tbody tr td:nth-child(4)').each(function(i,td) {
		var h=td.innerHTML;
		h=parseInt(h);
		h=new Date(h);
		 td.innerHTML=  h.toCNString();
	});
	$('table').on('click','a:contains("删除")',function (e) {
		e.preventDefault();
		var msgId=$(this).attr('href');
    console.log(msgId);
		location.href='msg_delete.php?mid='+msgId;
	});
	
</script>
