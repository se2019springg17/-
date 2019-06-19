<?php 
ob_start();
include 'connect.php';

if ($_GET['action']=='login'){
 	$query = mysql_query("select * from users where yhm='{$_POST['uname']}' && mm='{$_POST['password']}'");
	if ($rows=!mysql_fetch_array($query,MYSQL_ASSOC)){
 		echo "<script type='text/javascript'>alert('登录失败!');history.back();</script>";
 	}
  	else{
  		setcookie('yhm',$_POST['uname']);
  		echo "<script type='text/javascript'>alert('登录成功');window.location.href='index.php';</script>"; 
  	}
}
?>