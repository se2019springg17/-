<?php 
include 'top1.php';
include '../connect.php';
?>

<div class="ny-right">
	<h3>后台管理系统</h3>
	<div id="twjs">

	<style type="text/css">
    td img { width:70px; height:70px;}
    </style>

    <table border=1px cellpadding="0" cellspacing="0" style="margin:0 auto; width:680px;">

<?php
	if ($_GET['action']=="del"){
		$query = mysql_query("delete from users where id= ".$_GET['id']);
		echo 
		"<script type='text/javascript'>
		alert('删除成功');
		window.location.href='admin.php';
		</script>";}
	
	$query = mysql_query("select * from users ");
	
	echo '<tr><td>用户名</td><td>密码</td>
	 <td>电话</td><td>邮箱</td><td>管理</td></tr>'; 
	
	while($row = mysql_fetch_array($query,MYSQL_ASSOC)){
		echo '<tr><td>'.$row['yhm'].'</td><td>'.$row['mm'].'&nbsp;&nbsp;&nbsp;
	 	</td><td>'.$row['tel'].'</td><td>'.$row['email'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;<td><a href="?action=del&id='.$row['id'].'">删除</a></td></tr>';
	}
	echo $_COOKIE['yhm'];
?>

	</table>

	</div>
</div>

<div class="clear"></div>

<?php 
include 'foot.php';
?>
