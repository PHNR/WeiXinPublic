<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>

<style>
.content {
width:920px; background:none; margin-left:30px; margin-top:20px; border:none; margin-bottom:30px;
}
</style>
</head>

<body>
 



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />



<div class="content"  >



<div class="cLineB">



<h4 class="left">预约管理 (<?php echo ($page); ?> ) </h4>



<div class="searchbar right">



<form method="post" action="">



<input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索" name="searchkey" value="<?php echo ($key); ?>">



<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">



</form>



</div>



<div class="clr"></div>



</div>







<div class="cLine">



<div class="pageNavigator left"> <a href="<?php echo U($type.'/add',array('token'=>$token));?>" title="添加" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">添加</a></div>



<div class="clr"></div>



</div>



<div class="msgWrap">



<form method="post" action="" id="info">



<input name="delall" type="hidden" value="">



<input name="wxid" type="hidden" value="">



<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">



<thead>



<tr>



<th width="140">预约名称</th>



<th width="160">关键词</th>



<th width="140">预约电话</th>



<th width="130">开始时间</th>



<th width="130">结束时间</th>



<th width="250" class="norightborder">操作</th>



</tr>



</thead>



<tbody>



<tr></tr>



<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>



<td><?php echo ($item["title"]); ?></td>



<td><?php echo ($item["keyword"]); ?></td>



<td><?php echo ($item["phone"]); ?></td>



<td><?php echo ($item["statdate"]); ?></td>



<td><?php echo ($item["enddate"]); ?></td> 







<td class="norightborder"><a href="<?php echo U($type.'/infos',array('pid'=>$item['id'],'token'=>$token));?>">订单管理</a>&nbsp;&nbsp;<a href="<?php echo U($type.'/setcin',array('pid'=>$item['id'],'token'=>$token));?>">类型设置</a>&nbsp;&nbsp;<a href="<?php echo U($type.'/setinfo',array('pid'=>$item['id'],'token'=>$token));?>">表单设置</a>&nbsp;&nbsp;<a href="<?php echo U($type.'/set',array('id'=>$item['id'],'token'=>$token));?>">修改</a>&nbsp;&nbsp;<a href="<?php echo U($type.'/del',array('aid'=>$item['pid'],'id'=>$item['id'],'token'=>$token));?>">删除</a></td>



</tr><?php endforeach; endif; else: echo "" ;endif; ?>



</tbody>



</table>



</form>







</div>



<div class="cLine">



<div class="pageNavigator right">



<div class="pages"><?php echo ($page); ?></div>



</div>



<div class="clr"></div>



</div>



</div>



<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>