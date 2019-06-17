

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
 <article class="you">
			         <h4><a>您的当前位置：首页 >> 用户登录</a></h4>
					 <aside class="ys1">
      <h3 style=" text-align:center;">用户登录</h3>
 
  
      <form id="form1" name="form1" method="post" action="userlogin.php?action=login">
    <table width="350" border="0">
       <tr>
        <td width="26%" height="34">&nbsp;</td>

     
      </tr><br>
      <tr>
        <td height="35" align="center">用户名</td>
        <td><input name="uname" type="text" /></td>
      </tr>

      <tr>
        <td height="34" align="center">密&nbsp;码</td>
        <td><input name="password" type="password" id="password" /></td>
      </tr>
      <tr>
        <td height="37">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="登录"/> &nbsp;&nbsp;
            <a href="reg.php">注册</a>
      </tr>
    </table>
    </form>
    </aside>

</article>
  <?php 
include 'foot.php';

?>
     