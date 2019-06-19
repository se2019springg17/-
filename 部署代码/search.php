

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
  <article class="you">
			         <h4><a>您的当前位置：首页 >>搜索</a></h4>
					 <aside class="cpjs">

  
 
  <?php
  
  $query1 = mysql_query("select * from product where title like '%{$_POST['search']}%' ");
  
       while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
  
        echo '
         <dl>
          <dt> <img src=upload/'.$row['pic'].' ></dt>
           <dd> <a href=more.php?id='.$row['id'].' class="title">'.$row['title'].' </a></dd>
         
         </dl>
        ';
    }
    
  ?>
      
  
        </aside>

</article>
  <?php 
include 'foot.php';

?>
     