<?php 
include 'top1.php';
include '../connect.php';
?>
<div class="ny-right">
<div class="ny-zjhz">
  <h3>申请管理</h3>
  <div class="grjl">
  <div id="twjs">
<br/>
<?php 
if ($_GET['action']=="pass"){
	$query = mysql_query("update apply set state=1 where id= ".$_GET['id']);
	$query3 = mysql_query("select * from apply where id= ".$_GET['id']);
	$row1=mysql_fetch_array($query3,MYSQL_ASSOC);
	$query2 = mysql_query("insert into product (title,writer,pic,lanmu,content) values 
	('{$row1['title']}','{$row1['writer']}','{$row1['pic']}','{$row1['lanmu']}','{$row1['content']}')") or die(mysql_error());
	echo 
	"<script type='text/javascript'>alert('操作成功');window.location.href='admin_apply.php';</script>";
}
?>

<table border=1px cellpadding="0" cellspacing="0" style="margin:0 auto; width:670px;" >

<?php
$query1 = mysql_query("select * from apply where state=0");
		
	echo '<tr><td>标题</td><td>作者</td><td>图片</td><td>简介</td><td>栏目</td><td>审核</td> </tr>';
	while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
	echo '
						
	<tr>
		<td>'.$row['title'].'</td> 
		<td>'.$row['writer'].'</td>  
		<td><img src=../upload/'.$row['pic'].' width=100px></td> 
		<td>'.$row['content'].' </td>
		<td>'.$row['lanmu'].' </td>
		&nbsp;&nbsp;&nbsp;&nbsp; 
		<td><a href="?action=pass&id='.$row['id'].'">通过</a></td>
						  
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
