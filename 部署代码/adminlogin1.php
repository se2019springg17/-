<?php 
ob_start();
include 'connect.php';

if ($_GET['action']=='login'){
 	$query = mysql_query("select * from admin where username='{$_POST['username']}' && password='{$_POST['password']}'");
	if ($rows=!mysql_fetch_array($query,MYSQL_ASSOC)){
 		echo "<script type='text/javascript'>alert('登录失败!');history.back();</script>";
 	}
  	else{
  	
  		echo "<script type='text/javascript'>alert('登录成功');window.location.href='admin/admin.php';</script>"; 
  	}
}
?>