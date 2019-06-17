

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>

<?php 
if (!isset($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录!');history.back();</script>";
			exit;
		}
?>

 <article class="you">
			         <h4><a>您的当前位置：个人中心</a></h4>
					 <aside class="ys1">
      <h3 style=" text-align:center;">个人中心</h3>
  
      <?php 
 if ($_GET['action']=='save'){
	 if (!isset($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录!');history.back();</script>";
			exit;
		}

	$_clean = array();
	$_clean['username'] = _check_username($_POST['username'],2,20);

 	$query = mysql_query("select yhm from users where yhm = '{$_clean['username']}'");
	if(mysql_fetch_array($query,MYSQL_ASSOC)){
		if($_clean['username']!=$_COOKIE['yhm']){
			echo "<script type='text/javascript'>alert('不好意思！您修改的用户名已经被注册');history.back();</script>";
		}
	};
	mysql_query("update users set yhm='{$_clean['username']}',email='{$_POST['email']}',tel='{$_POST['tel']}',info='{$_POST['info']}' where yhm='{$_COOKIE[yhm]}'") or die(mysql_error());	
	setcookie('yhm',$_POST['username']);
	echo "<script type='text/javascript'>alert('保存成功');window.location.href='user.php';</script>";

};

?>
 <?php 
 if(isset($_COOKIE['yhm']))
 {
	 $query2 = mysql_query("select * from users where yhm = '{$_COOKIE['yhm']}'");
	 $row = mysql_fetch_array($query2,MYSQL_ASSOC);
	 $yonghuming=$row['yhm'];
	 $youxiang=$row['email'];
	 $dianhua=$row['tel'];
	 $jianjie=$row['info'];
 }
										
 ?>
 

 

<style>
td{ text-align:left;}

</style>
   <form action="?action=save" method="post" name="reg" id="reg" >
      <table width="482" border="0" align="left">
      
		<tr>
          <td width="86" height="29">用户名: </td>
          <td width="386"><input name="username" type="text" class="text" value= <?php 
		  if(isset($_COOKIE['yhm']))
		  {
			  echo $yonghuming;
			}
			else
			{
				echo "";
				}
		  ?> />  </td>
        </tr> 
		
	
        <tr>
          <td height="29">邮箱 ：</td>
          <td> <input name="email" type="text" class="text" id="email" value=<?php 
		  if(isset($_COOKIE['yhm']))
		  {
			  echo $youxiang;
			}
			else
			{
				echo "";
				}
		  ?> />   </td>
        </tr>
		
		 <tr>
          <td height="29">电话 ：</td>
          <td> <input name="tel" type="text" class="text" value=<?php 
		  if(isset($_COOKIE['yhm']))
		  {
			  echo $dianhua;
			}
			else
			{
				echo "";
				}
		  ?> />    </td>
        </tr>
        
        <tr>
          <td height="29">简介 ：</td>
          <td><textarea name="info" id="info" cols="45" rows="5">
<?php 
		  if(isset($_COOKIE['yhm']))
		  {
			  echo $jianjie;
			}
			else
			{
				echo "";
				}
		  ?></textarea></td>
        </tr>
		
             <tr>
			 
          <td height="38" colspan="2" align="center"><input type="submit" class="submit" value="保存" /></td>
        </tr>
             <tr>
               <td height="38" colspan="2" align="center"><a href="changepwd.php">修改密码</a></td>
             </tr>
             <tr>
               <td height="38" colspan="2" align="center"><a href="user_add.php">内容申请</a></td>
             </tr>
             <tr>
               <td height="38" colspan="2" align="center"><a href="user_apply.php">我的申请</a></td>
             </tr>
      </table>
    </form>
    
   </aside>

</article>
 
 
     