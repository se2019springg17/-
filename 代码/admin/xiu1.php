<?php 
include 'top1.php';
include '../connect.php';
include 'left.php';
?>
<div class="ny-right">
<div class="ny-zjhz">
  <h3>修改信息</h3>
  <div class="grjl">
  <div id="twjs">

<?php 

if ($_GET['action']=='edit'){
 	$query= mysql_query("update product set title = '{$_POST['title']}',writer = '{$_POST['writer']}',lanmu= '{$_POST['lanmu']}',content= '{$_POST['content']}' where id = ".$_GET['id']) or die(mysql_error());
	echo "<script type='text/javascript'>alert('修改成功');
		</script>";

}

$_query = mysql_query("select * from product where id = ".$_GET['id']);
$_rows = mysql_fetch_array($_query,MYSQL_ASSOC);

?>
  
  <form action="?action=edit&id=<?php echo $_GET['id'];?>" method="post"  >
 
        <table>
            <tr>
                <td height="28">标题：</td>
                <td><input type="text" name="title" value="<?php echo $_rows['title'];?>" /></td>
            </tr>
     		<tr>
                <td height="25">发布人：</td>
                <td> <input type="text" name="writer" value="<?php echo $_rows['writer'];?>" /></td>
            </tr>
    
            <tr>
             <td height="25">内容：</td>
            <td>
<textarea name="content" style="width:400px;height:200px;"> <?php echo $_rows['content'];?></textarea>
  </td>
			<tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="提交" />
                    </td>
                </tr>
            </table>
        </form>
  

	</div>
	</div>
 
</div>
</div>

<div class="clear"></div>
</div>

<?php 
include 'foot.php';
?>
