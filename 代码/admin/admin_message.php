<?php 
include 'top1.php';
include '../connect.php';
?>

<div class="ny-right">

  <h3>后台管理系统</h3>

     <div id="twjs">

	 <br/>
 
<?php 
if ($_GET['action']=="del1"){
	$query = mysql_query("delete from message where id= ".$_GET['id']);
	echo "<script type='text/javascript'>alert('删除成功');window.location.href='admin_message.php';</script>";
	}
?>

<table border=1px cellpadding="0" cellspacing="0" width="670" style="margin:0 auto;">

<?php
 
	$query = mysql_query("select * from message");
			
	echo '<tr><td>标题</td> <td >内容</td> <td>留言用户</td>    <td>时间</td> <td>删除</td></tr>';
	while($row = mysql_fetch_array($query,MYSQL_ASSOC)){
	echo '
	<tr>
		<td> '.$row['title'].'</td>
		<td>'.$row['content'].'</td>
		<td>'.$row['uname'].' &nbsp;&nbsp;&nbsp;&nbsp; </td>
		<td>'.$row['shijian'].'</td>
		<td><a href="?action=del1&id='.$row['id'].'">删除</a>
		</td> 
	</tr>';
	}
?>
 
</table>
 
<style  type="text/css">
	table td { padding-left:5px; }
	table td p { width:400px;word-break:break-all ;}
</style>
   

</div>
</div>

<div class="clear"></div>
</div>


<?php 
include 'foot.php';

?>
