

<?php 
include 'head.php';
include 'connect.php';
include 'left.php';
?>
  <article class="you">
			         <h4><a>您的当前位置：首页 >>最新图书 </a></h4>
					 <aside class="cpjs">

  
 
  <?php
  
  $query1 = mysql_query("select * from product where lanmu like '最新图书' ");
  
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
     