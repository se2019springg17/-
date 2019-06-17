<?php 
include 'top1.php';
include '../connect.php';
?>
<div class="ny-right">
<div class="ny-zjhz">
  <h3>内容管理</h3>
  <div class="grjl">
  <div id="twjs">
<?php 
if ($_GET['action']=="del"){
	$query = mysql_query("delete from product where id= ".$_GET['id']);
	echo "<script type='text/javascript'>alert('删除成功');
	window.location.href='admin_product.php';</script>";
}
?>

<table border=1px cellpadding="0" cellspacing="0" style="margin:0 auto; width:670px;" >
<?php
$query1 = mysql_query("select * from product");
		
	 echo '<tr><td>标题</td><td>作者</td><td>图片</td><td>简介</td><td>栏目</td><td>修改</td><td>删除</td></tr>';
	while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
	echo '				
	<tr>
		<td>'.$row['title'].'</td> 
		<td>'.$row['writer'].'</td>  
		<td><img src=../upload/'.$row['pic'].' width=100px></td> 
		<td>'.$row['content'].' </td>
		<td>'.$row['lanmu'].' </td>
		&nbsp;&nbsp;&nbsp;&nbsp; 
		<td><a href=xiu1.php?id='.$row['id'].'>修改</a></td>
		<td><a href="?action=del&id='.$row['id'].'">删除</a></td>
						  
	</tr>';
	}
				
?>

</table> 
<br/>
	</div>
	</div> 
</div>
</div>
<div class="clear"></div>
</div>
<?php 
include 'foot.php';
?>
