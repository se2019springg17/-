

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
 <article class="you">
			         <h4><a>您的当前位置：个人中心>>修改密码</a></h4>
					 <aside class="ys1">
      <h3 style=" text-align:center;">修改密码</h3>
  
      <?php 
if ($_GET['action']=='changepwd'){
	if (!isset($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录!');history.back();</script>";
			exit;
	}

	$_clean = array();
	$_clean['password'] = _check_password($_POST['password'],$_POST['repassword'],6);
 	$query = mysql_query("select yhm from users where yhm = '{$_clean['username']}'");
	if($_POST['password'] != $_POST['repassword']){
	echo "<script type='text/javascript'>alert('前后密码不一致');history.back();</script>";
	};
	mysql_query("update users set mm='{$_POST['password']}' where yhm='{$_COOKIE['yhm']}'") or die(mysql_error());	
	echo "<script type='text/javascript'>alert('修改成功');window.location.href='user.php';</script>";

};

?>
 

 

<style>
td{ text-align:left;}

</style>
   <form action="?action=changepwd" method="post" name="reg" id="reg" >
      <table width="482" border="0" align="left">
      
		
        <tr>
          <td height="28">新密码: </td>
          <td><input type="password" name="password" class="text" />   不少于6位数字</td>
        </tr>
        <tr>
          <td height="27">确认密码:</td>
          <td><input type="password" name="repassword" class="text" />   不少于6位数字</td>
        </tr>
		
        <tr> 
          <td height="38" colspan="2" align="center"><input type="submit" class="submit" value="保存" /></td>
        </tr>
      </table>
    </form>
    </aside>

</article>
 
     