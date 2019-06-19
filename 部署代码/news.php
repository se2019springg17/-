

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
  <article class="you">
			         <h4><a>您的当前位置：首页 >>图书资讯 </a></h4>
					 <aside class="newslist">

  
		
      <ul>
  <?php
$query1 = mysql_query("select * from product where lanmu like '图书资讯'  limit 0,12 ");
while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
echo '<li><a href=more.php?id='.$row['id'].' class="title">'.$row['title'].'</a></li>';
}?>
</ul>
       
  
        </aside>

</article>
  <?php 
include 'foot.php';

?>
     