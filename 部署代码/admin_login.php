

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
 <article class="you">
			         <h4><a>您的当前位置：首页 >> 管理登录</a></h4>
					 <aside class="ys1">
      <h3 style=" text-align:center;">管理登录</h3>
 
  
      <form id="form2" name="form1" method="post" action="adminlogin1.php?action=login">
        <table width="300" border="0">
        
          <tr>
            <td height="29">用户名 </td>
            <td><input name="username" type="text" /></td>
          </tr>
          <tr>
            <td height="30">密&nbsp;码</td>
            <td><input name="password" type="password" /></td>
          </tr>
          <tr>
            <td height="35">&nbsp;</td>
            <td><input type="submit" value="登录"/>
            <input type="reset" value="重置"/></td>
          </tr>
        </table>
      </form>
    </aside>

</article>
  <?php 
include 'foot.php';

?>
     