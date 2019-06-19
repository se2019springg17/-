

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
 <article class="you">
			         <h4><a>您的当前位置：首页 >> 用户注册</a></h4>
					 <aside class="ys1">
      <h3 style=" text-align:center;">用户注册</h3>
  
 <?php 
 if ($_GET['action']=='reged'){

	$_clean = array();
	$_clean['username'] = _check_username($_POST['username'],2,20);
	$_clean['password'] = _check_password($_POST['password'],$_POST['repassword'],6);
 	$query = mysql_query("select yhm from users where yhm = '{$_clean['username']}'");
	if(mysql_fetch_array($query,MYSQL_ASSOC)){
	echo "<script type='text/javascript'>alert('不好意思！您输入的用户名已经被注册');history.back();</script>";
	};
	mysql_query("insert into users (yhm,mm,tel,email) values ('{$_clean['username']}','{$_clean['password']}'
	,'{$_POST['tel']}','{$_POST['email']}')") or die(mysql_error());	
	echo "<script type='text/javascript'>alert('注册成功');window.location.href='user_login.php';</script>";

	};

 
 
 ?>
 

 

<style>
td{ text-align:left;}

</style>
   <form action="?action=reged" method="post" name="reg" id="reg" >
      <table width="482" border="0" align="left">
      
		<tr>
          <td width="86" height="29">用户名: </td>
          <td width="386"><input type="text" name="username" class="text" />  不允许用特殊字符*#！(* 必填项)</td>
        </tr> 
		
		
        <tr>
          <td height="28">密码: </td>
          <td><input type="password" name="password" class="text" />   不少于6位数字</td>
        </tr>
        <tr>
          <td height="27">确认密码:</td>
          <td><input type="password" name="repassword" class="text" />   不少于6位数字</td>
        </tr>
        <tr>
          <td height="29">邮箱 ：</td>
          <td> <input type="text" name="email" class="text" id="email" />   xxx@xxx</td>
        </tr>
		
		<tr>
          <td height="29">电话 ：</td>
          <td> <input type="text" name="tel" class="text" />   请输入11位有效数字 </td>
        </tr>
		
        <tr>
			 
          <td height="38" colspan="2" align="center"><input type="submit" class="submit" value="提交" /></td>
        </tr>
      </table>
    </form>
    </aside>

</article>
  <?php 
include 'foot.php';

?>
     