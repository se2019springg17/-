<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
<div class="ny-right">
<div class="ny-zjhz">
  <h3>我的申请</h3>
  <div class="grjl">
  <div id="twjs">

<table border=1px cellpadding="0" cellspacing="0" style="margin:0 auto; width:670px;" >
<?php
if (!isset($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录!');history.back();</script>";
			exit;
}
$query1 = mysql_query("select * from apply where user='{$_COOKIE['yhm']}'");
		
	 echo '<tr><td>标题</td>  <td>作者</td><td>图片</td> <td>简介</td> <td>审核状态</td> </tr>';
	while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
	if($row['state']==1){
		$state="通过";
	}
	else
		$state="未审核";
	echo '
						
	<tr>
		<td>'.$row['title'].'</td> 
		<td>'.$row['writer'].'</td>  
		<td><img src=upload/'.$row['pic'].' width=100px></td> 
		<td>'.$row['content'].' </td>
		<td>'.$state.'</td>
		
		
						  
	</tr>';
	}	
?>

</table> 
<br/>
</div>
   </div> 
</div>
</div>
<div class="clear"></div>
</div>