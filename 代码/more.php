

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
 <article class="you">
			         <h4><a>您的当前位置：首页>> 内容详情</a></h4>
					 <aside class="ys1">
     
<?php 
$pid=$_GET['id']; 
$_query = mysql_query("select * from product where id = ".$_GET['id']);
$_rows = mysql_fetch_array($_query,MYSQL_ASSOC);
?>

<h4 style="text-align:center"><?php echo $_rows['title'];?> </h4>
<p style="text-align:center;"><img src="upload/<?php echo $_rows['pic'];?>"> </p>
<p style=" padding:10px 0 0 10px;"> <?php echo $_rows['content'];?></p>
					</aside>

<?php
 if ($_GET['action']=='add1'){
	if (empty($_POST['uname'])){
			echo "<script type='text/javascript'>alert('您未登录，不能回帖');history.back();</script>";
			exit;
		}
	$query = mysql_query("insert into replay (pid,uname,nr) values 
	
	('{$_POST['tid']}','{$_POST['uname']}','{$_POST['content']}')") or die(mysql_error());
		echo "<script type='text/javascript'>alert('评论成功');window.location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
?>

<?php
 if ($_GET['action']=='like'){
	if (!isset($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录，不能点赞');history.back();</script>";
			exit;
		}
	if ($_COOKIE['bookid']==$_GET['id']){
			echo "<script type='text/javascript'>alert('请不要重复点赞');history.back();</script>";
			exit;
	}
	$query = mysql_query("update replay set hot=hot+1 where id='{$_GET['id']}'") or die(mysql_error());
	setcookie('bookid',$_GET['id']);
		echo "<script type='text/javascript'>alert('点赞成功');window.location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
?>

<br>

	    <div class="hfnr">
         <h5>评价内容</h5>
         <br>
        <table border=1px cellpadding="0" cellspacing="0" width="600" style="margin:0 auto;">
        
<?php		
	$query = mysql_query("select * from replay where pid='{$_GET['id']}' order by top DESC");
			
	echo '<tr ><td>用户</td> <td width=400>评价内容</td>  <td></td></tr>';
	while($row = mysql_fetch_array($query,MYSQL_ASSOC)){
	echo '
		<tr>
			<td > '.$row['uname'].'</td> 
			<td width=75>'.$row['nr'].'</td> 
			<td>'.$row['hot'].' <a href="?action=like&id='.$row['id'].'">赞</a> </td> 
		</tr>';
	}
				
?>

</table>
        
        </div> 
        
        
          
   <div class="hfnr">
     <h5>评论</h5>
         <br>
   <form action="?action=add1" method="post"  enctype="multipart/form-data" >
            <table>
              <tr>
                  <input type="hidden" name="tid" value="<?php echo $_rows['id'];?>">
                    <td height="28">会员</td>
                    <td><input type="hidden" name="uname" size="30" value="<?php echo $_COOKIE['yhm']?>" /><?php echo $_COOKIE['yhm']?></td>
                </tr>
                <tr>
                    <td height="28"> 回复内容：</td>                
                    <td>    <textarea name="content" cols="25" rows="5" type="text"></textarea></td>
          
                </tr>
												                         
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="评价" />
                    </td>
                </tr>
            </table>
        </form>
</div>


</article>
  <?php 
include 'foot.php';

?>
