<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html style="overflow: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>微信公众平台管理系统</title>
</head>
 
<body style="overflow: hidden;">
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo RES;?>/js/jquery.mousewheel.js"></script> -->
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main2.js"></script>

<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/js/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/global.css" rel="stylesheet" type="text/css" />

<script language="javascript">$(document).ready(main_obj.page_init); window.onresize=main_obj.page_init;</script>

<DIV id=header>
<DIV class=logo><a href="/" class="f_l" style="font-size: 50px;"><img src="<?php echo RES;?>/images/main/logo.png" /></a>
</DIV>
<UL>
  <LI class=ico-0><A href="<?php echo U('Index/info',array('token'=>$token));?>" target=iframe>我的帐号</A></LI>
  <LI class=ico-6><A 
  href="<?php echo U('Index/useredit');?>" 
  target=iframe>修改密码</A></LI>
  <!--<LI class=ico-1><A 
  href="http://www.ptpigcms.com/member/?m=html&amp;a=anstructions" 
  target=iframe>使用说明</A></LI>
  <LI class=ico-2><A 
  href="#rar">使用手册下载</A></LI>
  <LI class=ico-3><A href="http://www.ptpigcms.com/member/?m=html&amp;a=vedio" 
  target=iframe>视频教程</A></LI>
  <LI class=ico-4><A href="#" 
  target=iframe>推广技巧</A></LI>-->
  <LI class=ico-5><A 
   href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_self')">退出登录</A></LI></UL></DIV>
<DIV id=main>
<DIV class=menu>
<DL>
  <DT group="wechat0" style="display: block;"><IMG src="<?php echo RES;?>/images/main/m-ico-0.png">管理平台</DT>
  <DD>
  <DIV>+ <A href="<?php echo U('Index/useredit',array('token'=>$token));?>" 
  target=iframe>修改密码</A></DIV>
  <DIV>+ <A href="<?php echo U('Index/info',array('token'=>$token));?>" 
  target=iframe>我的帐号</A></DIV>
  <DIV>+ <A href="<?php echo U('Index/add',array('token'=>$token));?>" 
  target=iframe>添加公众号</A></DIV>
  <DIV>+ <A href="<?php echo U('Alipay/index',array('token'=>$token));?>" 
  target=iframe>会员充值</A></DIV>
</DL>
</DIV>
<DIV class=iframe><IFRAME src="<?php echo U('User/Index/info');?>" frameBorder=0 
name=iframe scrolling=auto></IFRAME></DIV>
<DIV class=clear></DIV></DIV>
<DIV id=footer>
<DIV class=oem></DIV></DIV>
</BODY></HTML>