<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>书社</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<section>
	     <header>
		       <section class="focus">
       <img src="images/banner.png">
	  </section>
		 </header>
         
			 <menu>
					<ul>
							<li><a href="index.php">网站首页</a></li>
							<li><a href="about.php">网站简介</a></li>
							<li><a href="news.php">图书资讯</a></li>
							<li><a href="view.php">最新图书</a></li>
                            <li><a href="user.php">个人中心</a></li>
			
								<?php
										if(isset($_COOKIE['yhm']))
										{
										echo ' <li class=last><a href="login_out.php">'. $_COOKIE['yhm'].' 退出</a>';
										
											}
										else{

										echo "

										<li class=last><a href=user_login.php>用户登录</a></li>" ;
										}
								?>
							 
				
						</ul>
		 </menu>
