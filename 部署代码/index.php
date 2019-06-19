
<?php 
include 'head.php';
include 'connect.php';
?>
  <aside class="jcsp">
		 <h3>图书资讯</h3>

	
	<ul>
		
<ul>
  <?php
$query1 = mysql_query("select * from product where lanmu like '图书资讯'  limit 0,12 ");
while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
echo '<li><a href=more.php?id='.$row['id'].' class="title">'.$row['title'].'</a></li>';
}?>
</ul>
       
					
	</ul>

		</aside>	
	    
		 <article class="gsjs1">
		  <h3>关于我们</h3>
         <dl>
		  <dt> <a href="#"><img src="images/about.png"></a></dt>
		  <dd> 
      大学生在校园中有着太多诱惑，网游、电影、手游…这些诱惑充斥着我们的大学生活。高中期间你也许还会捧着一本书慢慢的看，但是在现在的大学生活，阅读渐渐消失在人们的视野中。大部分人没有时间，而有时间的人又不知道读什么书好。再或者当你读完一本好书后，急切的想要分享，但周围的人却没有兴趣，冷淡的对待。志同道合的朋友才长久，爱玩游戏的朋友好找，爱看书的朋友可不好找。
          
          
          </a></dd>
		  </dl>
</article>
	<aside class="jctj">
	<h3></h3>

    <section id="demo" >
<article id="indemo">
<article id="demo1">


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
      
      
	

</article>
<article id="demo2"></article>
</article>
</section>

<script>
<!--
var speed=20;
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
-->
</script>
</aside>	
		<?php 
include 'foot.php';

?>
     