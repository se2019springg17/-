<article class="zhongbu">
<aside class="zuo">
			         
<aside class="zjgx">
<h3><a>图书资讯</a></h3>
							
<p>&nbsp;</p>
				
		
<ul>
<?php
$query1 = mysql_query("select * from product where lanmu like '图书资讯'  limit 0,12 ");
while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
echo '<li><a href=more.php?id='.$row['id'].' class="title">'.$row['title'].'</a></li>';
}
?>
		
			</ul>
            <table>
                <tr>
       			<form id="form1" name="form1" method="post" action="search.php">            
                    <td><input name="search" type="text" /></td>
                    <td><input type="submit" value="书籍搜索"/></td>
                </form>
                </tr>
            </table>
						</aside>
			   </aside>