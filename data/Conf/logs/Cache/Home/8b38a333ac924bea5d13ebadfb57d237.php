<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo C('keyword');?>"/>
    <meta name="description" content="<?php echo C('content');?>"/>
    <link rel="shortcut icon" href="favicon.ico">

<style>

.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(<?php echo RES;?>/css/img/h2003070126.jpg) center no-repeat #B4B4B4;}
</style>
    <title>功能介绍－<?php echo C('site_title');?></title></head>
    ﻿<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/crmqq.php"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/contains.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/localStorage.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/taskMgr.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/views.js"></script>
 <link href="<?php echo RES;?>/css/base.css" type="text/css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.cityselect.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/HeaderMenu.js"></script>
    <link href="<?php echo RES;?>/css/HaedMenu.css" type="text/css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/notification.css" rel="stylesheet" type="text/css">
    <script src="<?php echo RES;?>/js/notification.js" type="text/javascript"></script>
    <script src="<?php echo RES;?>/js/jquery.cookie.js" type="text/javascript"></script>
    

	<script type="text/javascript" src="<?php echo RES;?>/js/jfade.js"></script>
     <script type="text/javascript" src="<?php echo RES;?>/js/images.js"></script> 
 

<script src="<?php echo RES;?>/js/html5.js"></script>







<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js"></script>







<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js"></script>







<body>



 <div class="w-top">
            <div class="w-head">
                
                <div class="w-wrap">
                    <a class="w-left" href="#"><img src="<?php echo C('logo');?>"   ></a>
                    <div class="w-head-line w-left">
                    </div>
                    <div class="w-left w-margin10">
                        <div class="w-city-select">
                           
                        </div>
                            <div class="w-head-login">
                                <a href="<?php echo U('Index/login');?>" class="">登录</a>&nbsp;｜&nbsp;<a href="<?php echo U('Index/reg');?>" class="">注册</a></div>
                    </div>
                    <ul class="w-menu Menu">
                          <li><a href="/" class="hover">首页</a></li>







                    <li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>







                    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>







                    <li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>







                    <li><a href="<?php echo U('Home/Index/guide');?>">案例展示</a></li>

  					





               	<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">申请试用</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	

                    </ul>
                </div>
            </div>
        </div>

<!--

    <div class="nav clearfix">







        <div class="nav-content">   







		







		<img src="<?php echo C('logo');?>"   >







            <div class="right line-li">







                <ul>







                    <li><a href="/" class="hover">首页</a></li>







                    <li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>







                    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>







                    <li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>







                    <li><a href="<?php echo U('Home/Index/guide');?>">案例展示</a></li>

  					





               	<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">申请试用</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	

                </ul>







            </div>







      </div>







    </div>-->
<div class="Public-content clearfix">
  <div class="banner hbanner"></div>
    <div class="Public">

          <div>
                        <img style="float:left;margin:15px;" alt="<?php echo U('site_name');?>" src="<?php echo C('erwei');?>">
                        <p>
 <SPAN style="TEXT-ALIGN: justify; LINE-HEIGHT: 25px"> <?php echo C('about');?></p>
      </div>
    
    </div>
</div>


<!--QQ咨询-->

<div class="footer">
	<div class="footer-content clearfix">
		<div class="foot-menu">
			<p>
				<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>首页</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">渠道代理</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">接口定制</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">微信托管</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于<?php echo C('site_name');?></a>&nbsp;|&nbsp;
				
			</p>
			<p>客服QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?></p>
		</div>
		<div class="copyright">
			Copyright © 2013-2014 <?php echo C('site_url');?>. All Rights Reserved <?php echo C('site_name');?>版权所有 <?php echo C('ipc');?>
		</div>
	</div>
</div>
</body>
</html>
<div style="display:none">
<?php echo C('counts');?>
</div>
</body></html>