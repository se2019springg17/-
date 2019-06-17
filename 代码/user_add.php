<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>

<div class="ny-right">
<div class="ny-zjhz">
  <h3>内容申请</h3>
  <div class="grjl">
  <div id="twjs">



<?php 
if ($_GET['action']=='add'){
	if (!isset($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录!');history.back();</script>";
			exit;
		}
	if (empty($_POST['title']) || empty($_POST['content'])){
			echo "<script type='text/javascript'>alert('请填写完整信息');history.back();</script>";
			exit;
		}
		
	  move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);

	$query = mysql_query("insert into apply (title,writer,pic,lanmu,content,user) values 	('{$_POST['title']}','{$_POST['writer']}','{$_FILES['file']['name']}','{$_POST['lanmu']}','{$_POST['content']}','{$_COOKIE['yhm']}')") 
	or die(mysql_error());
		echo "<script type='text/javascript'>alert('申请成功');window.location.href='user.php';</script>";
}





 ?>
  <form action="?action=add" method="post" enctype="multipart/form-data" >
            <table  >
                <tr>
                    <td height="28">标题：</td>
                    <td><input type="text" name="title" /></td>
                </tr>
                <tr>
                    <td height="25">作者：</td>
                    <td>  <input type="text" name="writer" />    </td>
                </tr>
				<tr>
                    <td height="25">图片：</td>
                    <td><input type="file" name="file" id="file" /> </td>
                </tr>	
                <tr>
                    <td height="25">栏目：</td>
                    <td><select name="lanmu">
                         <option value="图书资讯"> 图书资讯</option>
                         <option value="最新图书"> 最新图书</option>
                      
                        </select>
                    </td>
               </tr>	

			   <tr>
				 <td height="25">项目简介：</td>
				<td>
                    <textarea name="content" style="width:400px;height:200px;"></textarea>
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
